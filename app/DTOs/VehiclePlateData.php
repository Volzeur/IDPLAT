<?php

namespace App\DTOs;

class VehiclePlateData
{
    public function __construct(
        public readonly string $plateNumber,
        public readonly string $ownerName,
        public readonly string $brand,
        public readonly string $model,
        public readonly string $type,
        public readonly int $year,
        public readonly string $color,
        public readonly string $engineCapacity,
        public readonly string $chassisNumber,
        public readonly string $engineNumber,
        public readonly string $taxExpiryDate,
        public readonly string $stnkExpiryDate,
        public readonly string $region,
        public readonly string $policeOffice,
        public readonly bool $isActive,
        public readonly array $rawResponse,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            plateNumber: $data['nopol'] ?? '',
            ownerName: $data['nama_pemilik'] ?? '',
            brand: $data['merk'] ?? '',
            model: $data['model'] ?? '',
            type: $data['jenis'] ?? '',
            year: (int) ($data['tahun_pembuatan'] ?? 0),
            color: $data['warna'] ?? '',
            engineCapacity: $data['cc'] ?? '',
            chassisNumber: $data['no_rangka'] ?? '',
            engineNumber: $data['no_mesin'] ?? '',
            taxExpiryDate: $data['tgl_pajak_terakhir'] ?? '',
            stnkExpiryDate: $data['tgl_stnk_terakhir'] ?? '',
            region: $data['wilayah'] ?? '',
            policeOffice: $data['samsat'] ?? '',
            isActive: (bool) ($data['status_kepemilikan'] ?? false),
            rawResponse: $data,
        );
    }
}