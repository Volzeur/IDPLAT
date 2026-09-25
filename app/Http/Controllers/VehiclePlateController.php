<?php

namespace App\Http\Controllers;

use App\Services\VehiclePlateService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VehiclePlateController extends Controller
{
    public function index(VehiclePlateService $service): View
    {
        $allCodes  = [];
        $loadError = null;

        try {
            $allCodes = $service->getAllPlateCodes();
        } catch (\Throwable $e) {
            $loadError = $e->getMessage();
        }

        return view('vehicle-plate.index', [
            'result'    => null,
            'error'     => null,
            'input'     => '',
            'allCodes'  => $allCodes,
            'loadError' => $loadError,
            'cacheInfo' => $service->getCacheInfo(),
        ]);
    }

    public function check(Request $request, VehiclePlateService $service): View
    {
        $validated = $request->validate([
            'plate_number' => ['required', 'string', 'max:15', 'regex:/^[A-Za-z]{1,2}[\s\-]?[0-9]*[\s\-]?[A-Za-z]*$/'],
        ], [
            'plate_number.regex' => 'Format tidak valid. Masukkan kode wilayah (contoh: B, DK) atau plat lengkap (contoh: B 1234 KKB).',
        ]);

        $allCodes  = [];
        $loadError = null;

        try {
            $allCodes = $service->getAllPlateCodes();
        } catch (\Throwable $e) {
            $loadError = $e->getMessage();
        }

        try {
            $result = $service->identifyPlate($validated['plate_number']);

            return view('vehicle-plate.index', [
                'result'    => $result,
                'error'     => null,
                'input'     => $validated['plate_number'],
                'allCodes'  => $allCodes,
                'loadError' => $loadError,
                'cacheInfo' => $service->getCacheInfo(),
            ]);
        } catch (\RuntimeException $e) {
            return view('vehicle-plate.index', [
                'result'    => null,
                'error'     => $e->getMessage(),
                'input'     => $validated['plate_number'],
                'allCodes'  => $allCodes,
                'loadError' => $loadError,
                'cacheInfo' => $service->getCacheInfo(),
            ]);
        }
    }

    /**
     * Force refresh the cached plate data from API.
     */
    public function refresh(VehiclePlateService $service): RedirectResponse
    {
        try {
            $service->getAllPlateCodes(forceRefresh: true);
            return redirect()->route('vehicle-plate.index')
                ->with('success', 'Data kode plat berhasil diperbarui dari API.');
        } catch (\Throwable $e) {
            return redirect()->route('vehicle-plate.index')
                ->with('refresh_error', 'Gagal memperbarui data: ' . $e->getMessage());
        }
    }
}