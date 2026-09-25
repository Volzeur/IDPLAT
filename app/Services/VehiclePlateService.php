<?php

namespace App\Services;

use App\Data\PlateSuffixMap;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RuntimeException;

class VehiclePlateService
{
    private const CACHE_KEY = 'api_indonesia_all_plate_codes';
    private const CACHE_TTL = 2592000; // 30 days in seconds

    private string $baseUrl;
    private string $apiKey;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.api_indonesia.base_url'), '/');
        $this->apiKey  = config('services.api_indonesia.key');
    }

    /**
     * Get all plate codes. Cached for 30 days.
     * This is the ONLY method that calls the API.
     */
    public function getAllPlateCodes(bool $forceRefresh = false): array
    {
        if ($forceRefresh) {
            Cache::forget(self::CACHE_KEY);
        }

        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            try {
                $response = Http::withHeaders([
                        'x-api-key' => $this->apiKey,
                        'Accept'    => 'application/json',
                    ])
                    ->timeout(15)
                    ->retry(3, 1000)
                    ->get("{$this->baseUrl}/api/v1/plates");

                if (!$response->successful()) {
                    Log::error('API Indonesia Plates List Failed', [
                        'status' => $response->status(),
                        'body'   => $response->json(),
                    ]);
                    throw new RuntimeException('Gagal memuat daftar kode plat dari API.');
                }

                $data = $response->json('data') ?? [];

                if (empty($data)) {
                    throw new RuntimeException('API mengembalikan data kosong.');
                }

                Log::info('API Indonesia Plates List Refreshed', [
                    'count' => count($data),
                ]);

                return $data;

            } catch (\Illuminate\Http\Client\RequestException $e) {
                Log::error('API Indonesia Request Exception', [
                    'error' => $e->getMessage(),
                ]);
                throw new RuntimeException('Layanan API tidak dapat dijangkau: ' . $e->getMessage());
            }
        });
    }

    /**
     * Parse any input into prefix + optional suffix first letter.
     * Accepts: "B", "b", "B 1234 KKB", "dk8821ab", "AB-123-CD", etc.
     */
    public function parseInput(string $input): array
    {
        $cleaned = preg_replace('/[^A-Z0-9]/', '', strtoupper($input));

        if ($cleaned === '') {
            throw new RuntimeException('Input tidak boleh kosong.');
        }

        if (!preg_match('/^([A-Z]{1,2})(\d*)([A-Z]*)$/', $cleaned, $m)) {
            throw new RuntimeException("Format tidak dikenali: '{$input}'");
        }

        $prefix        = $m[1];
        $suffixLetters = $m[3] ?? '';
        $suffixFirst   = $suffixLetters !== '' ? $suffixLetters[0] : null;
        $hasNumber     = $m[2] !== '';

        return [
            'prefix'        => $prefix,
            'suffix_first'  => $suffixFirst,
            'is_full_plate' => $hasNumber && $suffixFirst !== null,
            'original'      => $input,
        ];
    }

    /**
     * Main identification — ZERO API calls. Pure cache + local lookup.
     */
    public function identifyPlate(string $input): array
    {
        $parsed = $this->parseInput($input);
        $prefix = $parsed['prefix'];

        // Lookup from cached list only — no API call
        $allCodes = $this->getAllPlateCodes();
        $detail   = collect($allCodes)->firstWhere('plate_code', $prefix);

        if (!$detail) {
            throw new RuntimeException("Kode plat '{$prefix}' tidak ditemukan dalam database.");
        }

        // Detailed city from local suffix map (no API)
        $detailedCity = null;
        if ($parsed['is_full_plate'] && $parsed['suffix_first']) {
            $detailedCity = PlateSuffixMap::lookup($prefix, $parsed['suffix_first']);
        }

        return [
            'input'         => strtoupper(trim($input)),
            'plate_code'    => $detail['plate_code'],
            'region'        => $detail['region'],
            'province'      => $detail['province'],
            'cities'        => $detail['cities'] ?? '',
            'detailed_city' => $detailedCity,
            'is_full_plate' => $parsed['is_full_plate'],
        ];
    }

    /**
     * Check if cache is currently populated.
     */
    public function isCacheWarm(): bool
    {
        return Cache::has(self::CACHE_KEY);
    }

    /**
     * Get cache metadata for display.
     */
    public function getCacheInfo(): array
    {
        $isWarm = $this->isCacheWarm();

        return [
            'is_warm'    => $isWarm,
            'ttl_days'   => 30,
            'cache_key'  => self::CACHE_KEY,
        ];
    }
}