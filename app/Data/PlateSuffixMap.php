<?php

namespace App\Data;

/**
 * Detailed city mapping based on the FIRST LETTER of the plate suffix.
 *
 * Format: 'PREFIX' => [ 'SUFFIX_FIRST_LETTER' => 'City/Area Name' ]
 *
 * ⚠️ IMPORTANT: This data is compiled from publicly documented Samsat conventions.
 *    It is a BEST-EFFORT reference and may be incomplete or outdated for some regions.
 *    Verify against official Samsat sources for legal/official use.
 *    Easily editable — just add/update entries below.
 */
class PlateSuffixMap
{
    public static function get(): array
    {
        return [
            // ===== B — DKI Jakarta, Bekasi, Depok, Tangerang =====
            'B' => [
                'B' => 'Jakarta Barat', 'P' => 'Jakarta Pusat', 'S' => 'Jakarta Selatan', 'T' => 'Jakarta Timur', 'U' => 'Jakarta Utara',
                'E' => 'Kota Depok', 'Z' => 'Kota Tangerang Selatan',
                'F' => 'Kabupaten Bekasi', 'K' => 'Kota Bekasi',
                'C' => 'Kota Tangerang', 'V' => 'Kota Tangerang', 'G' => 'Kabupaten Tangerang', 'N' => 'Kabupaten Tangerang', 'W' => 'Kota Tangerang Selatan',
            ],

            // ===== A — Banten =====
            'A' => [
                'A' => 'Kota Serang', 'B' => 'Kota Serang', 'C' => 'Kota Serang', 'D' => 'Kota Serang',
                'E' => 'Kabupaten Serang', 'F' => 'Kabupaten Serang', 'G' => 'Kabupaten Serang', 'H' => 'Kabupaten Serang', 'I' => 'Kabupaten Serang',
                'J' => 'Kabupaten Pandeglang', 'K' => 'Kabupaten Pandeglang', 'L' => 'Kabupaten Pandeglang', 'M' => 'Kabupaten Pandeglang', 'N' => 'Kabupaten Pandeglang',
                'O' => 'Kota Cilegon', 'U' => 'Kota Cilegon',
                'P' => 'Kabupaten Lebak', 'R' => 'Kabupaten Lebak', 'S' => 'Kabupaten Lebak', 'T' => 'Kabupaten Lebak',
                'V' => 'Kabupaten Tangerang', 'W' => 'Kabupaten Tangerang', 'X' => 'Kabupaten Tangerang', 'Y' => 'Kabupaten Tangerang', 'Z' => 'Kabupaten Tangerang',
            ],

            // ===== BL — Aceh =====
            'BL' => [
                'A' => 'Kota Banda Aceh', 'J' => 'Kota Banda Aceh', 'L' => 'Kota Banda Aceh',
                'B' => 'Kabupaten Aceh Besar',
                'P' => 'Kabupaten Pidie',
                'O' => 'Kabupaten Pidie Jaya',
                'K' => 'Kabupaten Aceh Utara', 'Q' => 'Kabupaten Aceh Utara',
                'N' => 'Kota Lhokseumawe',
                'D' => 'Kabupaten Aceh Timur',
                'F' => 'Kota Langsa',
                'U' => 'Kabupaten Aceh Tamiang',
                'X' => 'Kabupaten Aceh Tenggara',
                'G' => 'Kabupaten Aceh Tengah',
                'Y' => 'Kabupaten Bener Meriah',
                'E' => 'Kabupaten Aceh Barat',
                'V' => 'Kabupaten Nagan Raya',
                'C' => 'Kabupaten Aceh Barat Daya',
                'T' => 'Kabupaten Aceh Selatan',
                'I' => 'Kota Subulussalam',
                'R' => 'Kabupaten Aceh Singkil',
                'S' => 'Kabupaten Simeulue',
                'M' => 'Kota Sabang',
                'H' => 'Kabupaten Gayo Lues',
                'W' => 'Kabupaten Aceh Jaya',
                'Z' => 'Kabupaten Bireuen',
            ],

            // ===== D — Bandung Raya =====
            'D' => [
                'A' => 'Kota Bandung', 'B' => 'Kota Bandung', 'C' => 'Kota Bandung', 'D' => 'Kota Bandung', 'E' => 'Kota Bandung', 'F' => 'Kota Bandung', 'G' => 'Kota Bandung', 'H' => 'Kota Bandung', 'I' => 'Kota Bandung', 'J' => 'Kota Bandung', 'K' => 'Kota Bandung', 'L' => 'Kota Bandung', 'M' => 'Kota Bandung', 'N' => 'Kota Bandung', 'O' => 'Kota Bandung', 'P' => 'Kota Bandung', 'R' => 'Kota Bandung',
                'S' => 'Kota Cimahi', 'T' => 'Kota Cimahi',
                'U' => 'Kabupaten Bandung Barat', 'X' => 'Kabupaten Bandung Barat', 'Z' => 'Kabupaten Bandung Barat',
                'V' => 'Kabupaten Bandung', 'W' => 'Kabupaten Bandung', 'Y' => 'Kabupaten Bandung',
            ],

            // ===== E — Cirebon, Indramayu, Majalengka, Kuningan =====
            'E' => [
                'A' => 'Kota Cirebon', 'B' => 'Kota Cirebon', 'C' => 'Kota Cirebon', 'D' => 'Kota Cirebon', 'E' => 'Kota Cirebon', 'F' => 'Kota Cirebon', 'G' => 'Kota Cirebon',
                'H' => 'Kabupaten Cirebon', 'I' => 'Kabupaten Cirebon', 'J' => 'Kabupaten Cirebon', 'K' => 'Kabupaten Cirebon', 'L' => 'Kabupaten Cirebon', 'M' => 'Kabupaten Cirebon', 'N' => 'Kabupaten Cirebon',
                'P' => 'Kabupaten Indramayu', 'Q' => 'Kabupaten Indramayu', 'R' => 'Kabupaten Indramayu', 'S' => 'Kabupaten Indramayu', 'T' => 'Kabupaten Indramayu',
                'U' => 'Kabupaten Majalengka', 'V' => 'Kabupaten Majalengka', 'W' => 'Kabupaten Majalengka', 'X' => 'Kabupaten Majalengka',
                'Y' => 'Kabupaten Kuningan', 'Z' => 'Kabupaten Kuningan',
            ],

            // ===== F — Bogor, Sukabumi, Cianjur =====
            'F' => [
                'A' => 'Kota Bogor', 'B' => 'Kota Bogor', 'C' => 'Kota Bogor', 'D' => 'Kota Bogor', 'E' => 'Kota Bogor',
                'F' => 'Kabupaten Bogor', 'G' => 'Kabupaten Bogor', 'H' => 'Kabupaten Bogor', 'I' => 'Kabupaten Bogor', 'J' => 'Kabupaten Bogor', 'K' => 'Kabupaten Bogor', 'L' => 'Kabupaten Bogor', 'M' => 'Kabupaten Bogor', 'N' => 'Kabupaten Bogor', 'O' => 'Kabupaten Bogor', 'P' => 'Kabupaten Bogor', 'R' => 'Kabupaten Bogor',
                'S' => 'Kota Sukabumi', 'T' => 'Kota Sukabumi',
                'Q' => 'Kabupaten Sukabumi', 'U' => 'Kabupaten Sukabumi', 'V' => 'Kabupaten Sukabumi',
                'W' => 'Kabupaten Cianjur', 'X' => 'Kabupaten Cianjur', 'Y' => 'Kabupaten Cianjur', 'Z' => 'Kabupaten Cianjur',
            ],

            // ===== T — Karawang, Purwakarta, Subang =====
            'T' => [
                'A' => 'Kabupaten Purwakarta', 'B' => 'Kabupaten Purwakarta', 'C' => 'Kabupaten Purwakarta',
                'D' => 'Kabupaten Karawang', 'E' => 'Kabupaten Karawang', 'F' => 'Kabupaten Karawang', 'G' => 'Kabupaten Karawang', 'H' => 'Kabupaten Karawang', 'I' => 'Kabupaten Karawang', 'J' => 'Kabupaten Karawang', 'K' => 'Kabupaten Karawang', 'L' => 'Kabupaten Karawang', 'M' => 'Kabupaten Karawang', 'N' => 'Kabupaten Karawang', 'O' => 'Kabupaten Karawang', 'P' => 'Kabupaten Karawang', 'Q' => 'Kabupaten Karawang', 'R' => 'Kabupaten Karawang', 'S' => 'Kabupaten Karawang',
                'T' => 'Kabupaten Subang', 'U' => 'Kabupaten Subang', 'V' => 'Kabupaten Subang', 'W' => 'Kabupaten Subang', 'X' => 'Kabupaten Subang', 'Y' => 'Kabupaten Subang', 'Z' => 'Kabupaten Subang',
            ],

            // ===== Z — Garut, Tasikmalaya, Sumedang, Ciamis, Pangandaran, Banjar =====
            'Z' => [
                'A' => 'Kabupaten Sumedang', 'B' => 'Kabupaten Sumedang', 'C' => 'Kabupaten Sumedang',
                'D' => 'Kabupaten Garut', 'E' => 'Kabupaten Garut', 'F' => 'Kabupaten Garut', 'G' => 'Kabupaten Garut',
                'H' => 'Kota Tasikmalaya', 'I' => 'Kota Tasikmalaya', 'J' => 'Kota Tasikmalaya',
                'K' => 'Kabupaten Tasikmalaya', 'L' => 'Kabupaten Tasikmalaya', 'M' => 'Kabupaten Tasikmalaya', 'N' => 'Kabupaten Tasikmalaya', 'O' => 'Kabupaten Tasikmalaya', 'P' => 'Kabupaten Tasikmalaya', 'Q' => 'Kabupaten Tasikmalaya', 'R' => 'Kabupaten Tasikmalaya', 'S' => 'Kabupaten Tasikmalaya',
                'T' => 'Kabupaten Ciamis', 'U' => 'Kabupaten Ciamis', 'V' => 'Kabupaten Ciamis',
                'W' => 'Kabupaten Pangandaran',
                'X' => 'Kota Banjar', 'Y' => 'Kota Banjar', 'Z' => 'Kota Banjar',
            ],

            // ===== AA — Magelang Raya =====
            'AA' => [
                'A' => 'Kota Magelang', 'B' => 'Kota Magelang', 'C' => 'Kota Magelang', 'H' => 'Kota Magelang',
                'D' => 'Kabupaten Magelang', 'E' => 'Kabupaten Magelang', 'F' => 'Kabupaten Magelang', 'G' => 'Kabupaten Magelang', 'I' => 'Kabupaten Magelang', 'J' => 'Kabupaten Magelang', 'K' => 'Kabupaten Magelang',
                'L' => 'Kabupaten Purworejo', 'M' => 'Kabupaten Purworejo', 'N' => 'Kabupaten Purworejo', 'O' => 'Kabupaten Purworejo',
                'P' => 'Kabupaten Kebumen', 'Q' => 'Kabupaten Kebumen', 'R' => 'Kabupaten Kebumen', 'S' => 'Kabupaten Kebumen', 'T' => 'Kabupaten Kebumen', 'U' => 'Kabupaten Kebumen',
                'V' => 'Kabupaten Temanggung', 'W' => 'Kabupaten Temanggung',
                'X' => 'Kabupaten Wonosobo', 'Y' => 'Kabupaten Wonosobo', 'Z' => 'Kabupaten Wonosobo',
            ],

            // ===== AD — Solo Raya =====
            'AD' => [
                'A' => 'Kota Surakarta', 'H' => 'Kota Surakarta', 'S' => 'Kota Surakarta', 'U' => 'Kota Surakarta',
                'B' => 'Kabupaten Sukoharjo', 'E' => 'Kabupaten Sukoharjo', 'O' => 'Kabupaten Sukoharjo', 'T' => 'Kabupaten Sukoharjo',
                'C' => 'Kabupaten Klaten', 'F' => 'Kabupaten Klaten', 'J' => 'Kabupaten Klaten', 'Q' => 'Kabupaten Klaten', 'V' => 'Kabupaten Klaten',
                'D' => 'Kabupaten Boyolali', 'M' => 'Kabupaten Boyolali', 'W' => 'Kabupaten Boyolali',
                'G' => 'Kabupaten Sragen', 'N' => 'Kabupaten Sragen', 'Y' => 'Kabupaten Sragen',
                'K' => 'Kabupaten Karanganyar', 'P' => 'Kabupaten Karanganyar', 'Z' => 'Kabupaten Karanganyar',
                'I' => 'Kabupaten Wonogiri', 'L' => 'Kabupaten Wonogiri', 'R' => 'Kabupaten Wonogiri',
            ],

            // ===== H — Semarang Raya =====
            'H' => [
                'A' => 'Kota Semarang', 'F' => 'Kota Semarang', 'G' => 'Kota Semarang', 'H' => 'Kota Semarang', 'J' => 'Kota Semarang', 'P' => 'Kota Semarang', 'R' => 'Kota Semarang', 'S' => 'Kota Semarang', 'W' => 'Kota Semarang', 'X' => 'Kota Semarang', 'Z' => 'Kota Semarang',
                'B' => 'Kabupaten Semarang', 'I' => 'Kabupaten Semarang', 'L' => 'Kabupaten Semarang', 'V' => 'Kabupaten Semarang',
                'C' => 'Kota Salatiga', 'K' => 'Kota Salatiga', 'O' => 'Kota Salatiga',
                'D' => 'Kabupaten Kendal', 'M' => 'Kabupaten Kendal', 'U' => 'Kabupaten Kendal',
                'E' => 'Kabupaten Demak', 'N' => 'Kabupaten Demak', 'Q' => 'Kabupaten Demak',
            ],

            // ===== K — Pati Raya =====
            'K' => [
                'A' => 'Kabupaten Pati', 'G' => 'Kabupaten Pati', 'H' => 'Kabupaten Pati', 'S' => 'Kabupaten Pati', 'U' => 'Kabupaten Pati',
                'B' => 'Kabupaten Kudus', 'K' => 'Kabupaten Kudus', 'R' => 'Kabupaten Kudus', 'T' => 'Kabupaten Kudus',
                'C' => 'Kabupaten Jepara', 'L' => 'Kabupaten Jepara', 'Q' => 'Kabupaten Jepara', 'V' => 'Kabupaten Jepara',
                'D' => 'Kabupaten Rembang', 'M' => 'Kabupaten Rembang', 'W' => 'Kabupaten Rembang',
                'E' => 'Kabupaten Blora', 'N' => 'Kabupaten Blora', 'X' => 'Kabupaten Blora', 'Y' => 'Kabupaten Blora',
                'F' => 'Kabupaten Grobogan', 'P' => 'Kabupaten Grobogan', 'Z' => 'Kabupaten Grobogan',
            ],

            // ===== R — Banyumas Raya =====
            'R' => [
                'A' => 'Kabupaten Banyumas', 'E' => 'Kabupaten Banyumas', 'G' => 'Kabupaten Banyumas', 'H' => 'Kabupaten Banyumas', 'J' => 'Kabupaten Banyumas', 'S' => 'Kabupaten Banyumas', 'X' => 'Kabupaten Banyumas',
                'B' => 'Kabupaten Cilacap', 'D' => 'Kabupaten Cilacap', 'F' => 'Kabupaten Cilacap', 'K' => 'Kabupaten Cilacap', 'P' => 'Kabupaten Cilacap', 'R' => 'Kabupaten Cilacap', 'T' => 'Kabupaten Cilacap',
                'C' => 'Kabupaten Purbalingga', 'L' => 'Kabupaten Purbalingga', 'Q' => 'Kabupaten Purbalingga', 'V' => 'Kabupaten Purbalingga', 'Z' => 'Kabupaten Purbalingga',
                'M' => 'Kabupaten Banjarnegara', 'N' => 'Kabupaten Banjarnegara', 'O' => 'Kabupaten Banjarnegara', 'W' => 'Kabupaten Banjarnegara', 'Y' => 'Kabupaten Banjarnegara',
            ],

            // ===== G — Pekalongan Raya =====
            'G' => [
                'A' => 'Kota Pekalongan', 'C' => 'Kota Pekalongan', 'H' => 'Kota Pekalongan', 'S' => 'Kota Pekalongan',
                'B' => 'Kabupaten Pekalongan', 'D' => 'Kabupaten Pekalongan', 'K' => 'Kabupaten Pekalongan', 'T' => 'Kabupaten Pekalongan',
                'E' => 'Kabupaten Batang', 'L' => 'Kabupaten Batang', 'V' => 'Kabupaten Batang', 'X' => 'Kabupaten Batang',
                'F' => 'Kabupaten Pemalang', 'M' => 'Kabupaten Pemalang', 'N' => 'Kabupaten Pemalang', 'W' => 'Kabupaten Pemalang',
                'J' => 'Kota Tegal', 'Q' => 'Kota Tegal',
                'O' => 'Kabupaten Tegal', 'P' => 'Kabupaten Tegal', 'Z' => 'Kabupaten Tegal',
                'G' => 'Kabupaten Brebes', 'R' => 'Kabupaten Brebes', 'U' => 'Kabupaten Brebes', 'Y' => 'Kabupaten Brebes',
            ],

            // ===== AB — Yogyakarta =====
            'AB' => [
                'A' => 'Kota Yogyakarta', 'F' => 'Kota Yogyakarta', 'H' => 'Kota Yogyakarta', 'I' => 'Kota Yogyakarta', 'S' => 'Kota Yogyakarta',
                'B' => 'Kabupaten Sleman', 'E' => 'Kabupaten Sleman', 'N' => 'Kabupaten Sleman', 'Q' => 'Kabupaten Sleman', 'Y' => 'Kabupaten Sleman', 'Z' => 'Kabupaten Sleman',
                'C' => 'Kabupaten Bantul', 'J' => 'Kabupaten Bantul', 'K' => 'Kabupaten Bantul', 'L' => 'Kabupaten Bantul', 'U' => 'Kabupaten Bantul',
                'D' => 'Kabupaten Kulon Progo', 'P' => 'Kabupaten Kulon Progo', 'V' => 'Kabupaten Kulon Progo',
                'M' => 'Kabupaten Gunungkidul', 'W' => 'Kabupaten Gunungkidul',
            ],

            // ===== L — Surabaya =====
            'L' => [
                'A' => 'Kota Surabaya', 'B' => 'Kota Surabaya', 'C' => 'Kota Surabaya', 'D' => 'Kota Surabaya', 'E' => 'Kota Surabaya', 'F' => 'Kota Surabaya', 'G' => 'Kota Surabaya', 'H' => 'Kota Surabaya', 'I' => 'Kota Surabaya', 'J' => 'Kota Surabaya', 'K' => 'Kota Surabaya', 'L' => 'Kota Surabaya', 'M' => 'Kota Surabaya', 'N' => 'Kota Surabaya', 'O' => 'Kota Surabaya', 'P' => 'Kota Surabaya', 'Q' => 'Kota Surabaya', 'R' => 'Kota Surabaya', 'S' => 'Kota Surabaya', 'T' => 'Kota Surabaya', 'U' => 'Kota Surabaya', 'V' => 'Kota Surabaya', 'W' => 'Kota Surabaya', 'X' => 'Kota Surabaya', 'Y' => 'Kota Surabaya', 'Z' => 'Kota Surabaya',
            ],

            // ===== M — Madura =====
            'M' => [
                'A' => 'Kabupaten Bangkalan', 'B' => 'Kabupaten Bangkalan', 'C' => 'Kabupaten Bangkalan', 'D' => 'Kabupaten Bangkalan', 'E' => 'Kabupaten Bangkalan', 'F' => 'Kabupaten Bangkalan', 'G' => 'Kabupaten Bangkalan',
                'H' => 'Kabupaten Sampang', 'I' => 'Kabupaten Sampang', 'J' => 'Kabupaten Sampang', 'K' => 'Kabupaten Sampang', 'L' => 'Kabupaten Sampang', 'M' => 'Kabupaten Sampang', 'N' => 'Kabupaten Sampang',
                'O' => 'Kabupaten Pamekasan', 'P' => 'Kabupaten Pamekasan', 'Q' => 'Kabupaten Pamekasan', 'R' => 'Kabupaten Pamekasan', 'S' => 'Kabupaten Pamekasan', 'T' => 'Kabupaten Pamekasan', 'U' => 'Kabupaten Pamekasan',
                'V' => 'Kabupaten Sumenep', 'W' => 'Kabupaten Sumenep', 'X' => 'Kabupaten Sumenep', 'Y' => 'Kabupaten Sumenep', 'Z' => 'Kabupaten Sumenep',
            ],

            // ===== W — Sidoarjo & Gresik =====
            'W' => [
                'A' => 'Kabupaten Sidoarjo', 'B' => 'Kabupaten Sidoarjo', 'C' => 'Kabupaten Sidoarjo', 'D' => 'Kabupaten Sidoarjo', 'E' => 'Kabupaten Sidoarjo', 'F' => 'Kabupaten Sidoarjo', 'G' => 'Kabupaten Sidoarjo', 'H' => 'Kabupaten Sidoarjo', 'I' => 'Kabupaten Sidoarjo', 'J' => 'Kabupaten Sidoarjo', 'K' => 'Kabupaten Sidoarjo', 'L' => 'Kabupaten Sidoarjo', 'M' => 'Kabupaten Sidoarjo', 'N' => 'Kabupaten Sidoarjo',
                'O' => 'Kabupaten Gresik', 'P' => 'Kabupaten Gresik', 'Q' => 'Kabupaten Gresik', 'R' => 'Kabupaten Gresik', 'S' => 'Kabupaten Gresik', 'T' => 'Kabupaten Gresik', 'U' => 'Kabupaten Gresik', 'V' => 'Kabupaten Gresik', 'W' => 'Kabupaten Gresik', 'X' => 'Kabupaten Gresik', 'Y' => 'Kabupaten Gresik', 'Z' => 'Kabupaten Gresik',
            ],

            // ===== N — Malang Raya & Pasuruan/Probolinggo =====
            'N' => [
                'A' => 'Kota Malang', 'B' => 'Kota Malang', 'C' => 'Kota Malang', 'E' => 'Kota Malang',
                'D' => 'Kabupaten Malang', 'F' => 'Kabupaten Malang', 'G' => 'Kabupaten Malang', 'H' => 'Kabupaten Malang', 'I' => 'Kabupaten Malang', 'J' => 'Kabupaten Malang',
                'K' => 'Kota Probolinggo', 'L' => 'Kota Probolinggo', 'M' => 'Kota Probolinggo', 'N' => 'Kota Probolinggo',
                'P' => 'Kabupaten Probolinggo', 'Q' => 'Kabupaten Probolinggo', 'R' => 'Kabupaten Probolinggo',
                'S' => 'Kota Pasuruan', 'T' => 'Kabupaten Pasuruan', 'U' => 'Kabupaten Pasuruan', 'V' => 'Kabupaten Pasuruan', 'W' => 'Kabupaten Pasuruan',
                'X' => 'Kota Batu', 'Y' => 'Kota Batu', 'Z' => 'Kota Batu',
            ],

            // ===== P — Besuki (Jember, Banyuwangi, Bondowoso, Situbondo) =====
            'P' => [
                'A' => 'Kabupaten Jember', 'B' => 'Kabupaten Jember', 'C' => 'Kabupaten Jember', 'D' => 'Kabupaten Jember', 'E' => 'Kabupaten Jember', 'F' => 'Kabupaten Jember', 'G' => 'Kabupaten Jember', 'H' => 'Kabupaten Jember', 'I' => 'Kabupaten Jember', 'J' => 'Kabupaten Jember', 'K' => 'Kabupaten Jember',
                'L' => 'Kabupaten Bondowoso', 'M' => 'Kabupaten Bondowoso', 'N' => 'Kabupaten Bondowoso',
                'O' => 'Kabupaten Banyuwangi', 'P' => 'Kabupaten Banyuwangi', 'Q' => 'Kabupaten Banyuwangi', 'R' => 'Kabupaten Banyuwangi', 'S' => 'Kabupaten Banyuwangi', 'T' => 'Kabupaten Banyuwangi', 'U' => 'Kabupaten Banyuwangi',
                'V' => 'Kabupaten Situbondo', 'W' => 'Kabupaten Situbondo', 'X' => 'Kabupaten Situbondo', 'Y' => 'Kabupaten Situbondo', 'Z' => 'Kabupaten Situbondo',
            ],

            // ===== S — Bojonegoro, Tuban, Lamongan, Mojokerto, Jombang =====
            'S' => [
                'A' => 'Kota Mojokerto', 'B' => 'Kota Mojokerto', 'C' => 'Kota Mojokerto', 'S' => 'Kota Mojokerto',
                'D' => 'Kabupaten Mojokerto', 'E' => 'Kabupaten Mojokerto', 'F' => 'Kabupaten Mojokerto', 'G' => 'Kabupaten Mojokerto', 'H' => 'Kabupaten Mojokerto', 'I' => 'Kabupaten Mojokerto', 'J' => 'Kabupaten Mojokerto',
                'K' => 'Kabupaten Jombang', 'L' => 'Kabupaten Jombang', 'M' => 'Kabupaten Jombang', 'N' => 'Kabupaten Jombang',
                'O' => 'Kabupaten Lamongan', 'P' => 'Kabupaten Lamongan', 'Q' => 'Kabupaten Lamongan', 'R' => 'Kabupaten Lamongan',
                'T' => 'Kabupaten Bojonegoro', 'U' => 'Kabupaten Bojonegoro', 'V' => 'Kabupaten Bojonegoro',
                'W' => 'Kabupaten Tuban', 'X' => 'Kabupaten Tuban', 'Y' => 'Kabupaten Tuban', 'Z' => 'Kabupaten Tuban',
            ],

            // ===== AE — Madiun, Magetan, Ngawi, Ponorogo, Pacitan =====
            'AE' => [
                'A' => 'Kota Madiun', 'B' => 'Kota Madiun', 'C' => 'Kota Madiun',
                'D' => 'Kabupaten Madiun', 'E' => 'Kabupaten Madiun', 'F' => 'Kabupaten Madiun', 'G' => 'Kabupaten Madiun', 'H' => 'Kabupaten Madiun', 'I' => 'Kabupaten Madiun', 'J' => 'Kabupaten Madiun',
                'K' => 'Kabupaten Ngawi', 'L' => 'Kabupaten Ngawi',
                'M' => 'Kabupaten Magetan', 'N' => 'Kabupaten Magetan',
                'S' => 'Kabupaten Ponorogo', 'T' => 'Kabupaten Ponorogo', 'U' => 'Kabupaten Ponorogo',
                'V' => 'Kabupaten Pacitan', 'W' => 'Kabupaten Pacitan', 'X' => 'Kabupaten Pacitan', 'Y' => 'Kabupaten Pacitan', 'Z' => 'Kabupaten Pacitan',
            ],

            // ===== AG — Kediri, Blitar, Tulungagung, Trenggalek, Nganjuk =====
            'AG' => [
                'A' => 'Kota Kediri', 'B' => 'Kota Kediri', 'C' => 'Kota Kediri',
                'D' => 'Kabupaten Kediri', 'E' => 'Kabupaten Kediri', 'F' => 'Kabupaten Kediri', 'G' => 'Kabupaten Kediri', 'H' => 'Kabupaten Kediri', 'I' => 'Kabupaten Kediri', 'J' => 'Kabupaten Kediri',
                'K' => 'Kota Blitar', 'L' => 'Kota Blitar', 'M' => 'Kota Blitar', 'N' => 'Kota Blitar',
                'P' => 'Kabupaten Blitar', 'Q' => 'Kabupaten Blitar', 'R' => 'Kabupaten Blitar',
                'S' => 'Kabupaten Tulungagung', 'T' => 'Kabupaten Tulungagung',
                'U' => 'Kabupaten Nganjuk', 'V' => 'Kabupaten Nganjuk',
                'W' => 'Kabupaten Trenggalek', 'X' => 'Kabupaten Trenggalek', 'Y' => 'Kabupaten Trenggalek', 'Z' => 'Kabupaten Trenggalek',
            ],

            // ===== BA — Sumatera Barat =====
            'BA' => [
                'A' => 'Kota Padang', 'B' => 'Kota Padang', 'O' => 'Kota Padang', 'P' => 'Kota Padang', 'Q' => 'Kota Padang', 'R' => 'Kota Padang',
                'K' => 'Kabupaten Pasaman',
                'L' => 'Kabupaten Pasaman Barat',
                'M' => 'Kabupaten Padang Pariaman', 'W' => 'Kota Pariaman',
                'N' => 'Kabupaten Agam', 'G' => 'Kabupaten Agam',
                'H' => 'Kota Bukittinggi', 'E' => 'Kota Padang Panjang',
                'F' => 'Kabupaten Tanah Datar',
                'X' => 'Kota Solok', 'T' => 'Kabupaten Solok', 'J' => 'Kabupaten Solok Selatan',
                'Z' => 'Kota Sawahlunto', 'S' => 'Kabupaten Sijunjung', 'V' => 'Kabupaten Dharmasraya',
                'C' => 'Kota Payakumbuh',
                'U' => 'Kabupaten Lima Puluh Kota',
                'I' => 'Kabupaten Pesisir Selatan', 'D' => 'Kabupaten Kepulauan Mentawai',
            ],

            // ===== BB — Sumatera Utara (Pesisir Barat / Tapanuli) =====
            'BB' => [
                'A' => 'Kota Sibolga', 'M' => 'Kota Sibolga',
                'B' => 'Kabupaten Tapanuli Tengah',
                'C' => 'Kabupaten Tapanuli Utara',
                'D' => 'Kabupaten Dairi',
                'E' => 'Kabupaten Karo',
                'F' => 'Kota Padangsidimpuan',
                'G' => 'Kabupaten Tapanuli Selatan',
                'H' => 'Kabupaten Mandailing Natal',
                'J' => 'Kabupaten Nias',
                'K' => 'Kabupaten Nias Selatan',
                'L' => 'Kabupaten Nias Utara',
                'N' => 'Kabupaten Nias Barat',
                'O' => 'Kota Gunungsitoli',
                'P' => 'Kabupaten Pakpak Bharat',
                'Q' => 'Kabupaten Humbang Hasundutan',
                'R' => 'Kabupaten Samosir',
                'S' => 'Kabupaten Toba',
                'T' => 'Kabupaten Padang Lawas Utara',
                'U' => 'Kabupaten Padang Lawas',
            ],

            // ===== BK — Sumatera Utara (Pesisir Timur) =====
            'BK' => [
                'A' => 'Kota Medan', 'B' => 'Kota Medan', 'C' => 'Kota Medan', 'D' => 'Kota Medan', 'E' => 'Kota Medan', 'F' => 'Kota Medan', 'G' => 'Kota Medan', 'H' => 'Kota Medan', 'I' => 'Kota Medan', 'K' => 'Kota Medan', 'L' => 'Kota Medan',
                'M' => 'Kabupaten Deli Serdang', 'N' => 'Kabupaten Deli Serdang',
                'P' => 'Kota Tebing Tinggi', 'Q' => 'Kota Binjai',
                'R' => 'Kabupaten Langkat', 'S' => 'Kabupaten Karo',
                'T' => 'Kota Pematangsiantar', 'U' => 'Kabupaten Simalungun',
                'V' => 'Kabupaten Asahan', 'W' => 'Kota Tanjung Balai', 'O' => 'Kabupaten Batu Bara',
                'Y' => 'Kabupaten Labuhanbatu', 'Z' => 'Kabupaten Labuhanbatu Utara', 'J' => 'Kabupaten Labuhanbatu Selatan',
            ],

            // ===== BG — Sumatera Selatan =====
            'BG' => [
                'A' => 'Kota Palembang', 'I' => 'Kota Palembang', 'J' => 'Kota Palembang', 'M' => 'Kota Palembang', 'N' => 'Kota Palembang', 'P' => 'Kota Palembang', 'Q' => 'Kota Palembang', 'R' => 'Kota Palembang', 'U' => 'Kota Palembang', 'V' => 'Kota Palembang', 'X' => 'Kota Palembang', 'Z' => 'Kota Palembang',
                'S' => 'Kabupaten Musi Banyuasin',
                'C' => 'Kota Prabumulih',
                'D' => 'Kabupaten Muara Enim',
                'E' => 'Kabupaten Lahat',
                'F' => 'Kabupaten Ogan Komering Ulu',
                'G' => 'Kabupaten Musi Rawas',
                'H' => 'Kota Lubuklinggau',
                'K' => 'Kabupaten Ogan Komering Ilir',
                'L' => 'Kabupaten Banyuasin',
                'O' => 'Kabupaten Ogan Ilir',
                'Y' => 'Kabupaten OKU Timur',
                'W' => 'Kabupaten OKU Selatan',
                'B' => 'Kota Pagar Alam',
                'T' => 'Kabupaten Empat Lawang',
            ],

            // ===== BH — Jambi =====
            'BH' => [
                'A' => 'Kota Jambi', 'L' => 'Kota Jambi', 'M' => 'Kota Jambi', 'N' => 'Kota Jambi', 'Y' => 'Kota Jambi', 'Z' => 'Kota Jambi',
                'B' => 'Kabupaten Batanghari', 'V' => 'Kabupaten Batanghari',
                'G' => 'Kabupaten Muaro Jambi', 'H' => 'Kabupaten Muaro Jambi',
                'E' => 'Kabupaten Tanjab Barat',
                'T' => 'Kabupaten Tanjab Timur',
                'K' => 'Kabupaten Bungo', 'U' => 'Kabupaten Bungo',
                'C' => 'Kabupaten Tebo', 'W' => 'Kabupaten Tebo',
                'Q' => 'Kabupaten Sarolangun', 'S' => 'Kabupaten Sarolangun',
                'F' => 'Kabupaten Merangin', 'P' => 'Kabupaten Merangin',
                'D' => 'Kabupaten Kerinci',
                'R' => 'Kota Sungai Penuh',
            ],

            // ===== BD — Bengkulu =====
            'BD' => [
                'A' => 'Kota Bengkulu', 'C' => 'Kota Bengkulu', 'E' => 'Kota Bengkulu', 'L' => 'Kota Bengkulu',
                'D' => 'Kabupaten Bengkulu Utara', 'S' => 'Kabupaten Bengkulu Utara',
                'B' => 'Kabupaten Bengkulu Selatan', 'M' => 'Kabupaten Bengkulu Selatan',
                'K' => 'Kabupaten Rejang Lebong',
                'H' => 'Kabupaten Lebong',
                'G' => 'Kabupaten Kepahiang',
                'N' => 'Kabupaten Mukomuko',
                'P' => 'Kabupaten Seluma',
                'W' => 'Kabupaten Kaur',
                'Y' => 'Kabupaten Bengkulu Tengah',
            ],

            // ===== BE — Lampung =====
            'BE' => [
                'A' => 'Kota Bandar Lampung', 'B' => 'Kota Bandar Lampung', 'C' => 'Kota Bandar Lampung', 'Y' => 'Kota Bandar Lampung',
                'D' => 'Kabupaten Lampung Selatan', 'E' => 'Kabupaten Lampung Selatan', 'O' => 'Kabupaten Lampung Selatan',
                'F' => 'Kota Metro',
                'G' => 'Kabupaten Lampung Tengah', 'H' => 'Kabupaten Lampung Tengah', 'I' => 'Kabupaten Lampung Tengah',
                'J' => 'Kabupaten Lampung Utara', 'K' => 'Kabupaten Lampung Utara',
                'W' => 'Kabupaten Way Kanan',
                'S' => 'Kabupaten Tulang Bawang', 'T' => 'Kabupaten Tulang Bawang',
                'M' => 'Kabupaten Lampung Barat',
                'V' => 'Kabupaten Tanggamus', 'Z' => 'Kabupaten Tanggamus',
                'N' => 'Kabupaten Lampung Timur', 'P' => 'Kabupaten Lampung Timur',
                'R' => 'Kabupaten Pesawaran',
                'U' => 'Kabupaten Pringsewu',
                'L' => 'Kabupaten Mesuji',
                'Q' => 'Kabupaten Tulang Bawang Barat',
                'X' => 'Kabupaten Pesisir Barat',
            ],

            // ===== BN — Bangka Belitung =====
            'BN' => [
                'A' => 'Kota Pangkalpinang',
                'B' => 'Kabupaten Bangka',
                'C' => 'Kabupaten Bangka Tengah',
                'E' => 'Kabupaten Bangka Selatan',
                'D' => 'Kabupaten Bangka Barat',
                'F' => 'Kabupaten Belitung',
                'G' => 'Kabupaten Belitung Timur',
            ],

            // ===== BP — Kepulauan Riau =====
            'BP' => [
                'C' => 'Kota Batam', 'D' => 'Kota Batam', 'E' => 'Kota Batam', 'F' => 'Kota Batam', 'G' => 'Kota Batam', 'H' => 'Kota Batam', 'I' => 'Kota Batam', 'J' => 'Kota Batam', 'M' => 'Kota Batam', 'P' => 'Kota Batam', 'Q' => 'Kota Batam', 'R' => 'Kota Batam', 'Z' => 'Kota Batam',
                'A' => 'Kota Tanjungpinang', 'T' => 'Kota Tanjungpinang',
                'B' => 'Kabupaten Bintan',
                'K' => 'Kabupaten Karimun',
                'O' => 'Kabupaten Lingga',
                'N' => 'Kabupaten Natuna',
                'S' => 'Kabupaten Kepulauan Anambas',
            ],

            // ===== BM — Riau =====
            'BM' => [
                'A' => 'Kota Pekanbaru', 'J' => 'Kota Pekanbaru', 'L' => 'Kota Pekanbaru', 'N' => 'Kota Pekanbaru', 'Q' => 'Kota Pekanbaru',
                'R' => 'Kabupaten Kampar', 'F' => 'Kabupaten Kampar',
                'T' => 'Kabupaten Bengkalis', 'D' => 'Kabupaten Bengkalis',
                'O' => 'Kabupaten Indragiri Hilir',
                'U' => 'Kota Dumai',
                'P' => 'Kabupaten Pelalawan',
                'S' => 'Kabupaten Rokan Hulu',
                'V' => 'Kabupaten Rokan Hilir',
                'K' => 'Kabupaten Kuantan Singingi',
                'W' => 'Kabupaten Kepulauan Meranti',
            ],

            // ===== DA — Kalimantan Selatan =====
            'DA' => [
                'A' => 'Kota Banjarmasin', 'C' => 'Kota Banjarmasin', 'I' => 'Kota Banjarmasin', 'J' => 'Kota Banjarmasin', 'N' => 'Kota Banjarmasin', 'O' => 'Kota Banjarmasin', 'V' => 'Kota Banjarmasin', 'W' => 'Kota Banjarmasin', 'X' => 'Kota Banjarmasin',
                'B' => 'Kabupaten Banjar', 'Q' => 'Kabupaten Banjar',
                'D' => 'Kabupaten Hulu Sungai Selatan',
                'E' => 'Kabupaten Hulu Sungai Tengah',
                'F' => 'Kabupaten Hulu Sungai Utara',
                'G' => 'Kabupaten Tabalong', 'U' => 'Kabupaten Tabalong',
                'H' => 'Kabupaten Kotabaru',
                'K' => 'Kabupaten Barito Kuala',
                'L' => 'Kabupaten Tanah Laut',
                'M' => 'Kabupaten Tapin',
                'P' => 'Kota Banjarbaru', 'R' => 'Kota Banjarbaru',
                'S' => 'Kabupaten Balangan',
                'T' => 'Kabupaten Tanah Bumbu', 'Z' => 'Kabupaten Tanah Bumbu',
            ],

            // ===== KB — Kalimantan Barat =====
            'KB' => [
                'A' => 'Kota Pontianak', 'Q' => 'Kota Pontianak', 'S' => 'Kota Pontianak', 'W' => 'Kota Pontianak',
                'B' => 'Kabupaten Mempawah',
                'C' => 'Kota Singkawang',
                'D' => 'Kabupaten Sambas',
                'E' => 'Kabupaten Bengkayang',
                'F' => 'Kabupaten Landak',
                'G' => 'Kabupaten Sanggau',
                'H' => 'Kabupaten Sekadau',
                'I' => 'Kabupaten Sintang',
                'J' => 'Kabupaten Melawi',
                'K' => 'Kabupaten Kapuas Hulu',
                'L' => 'Kabupaten Ketapang',
                'M' => 'Kabupaten Kayong Utara',
                'N' => 'Kabupaten Kubu Raya',
            ],

            // ===== KH — Kalimantan Tengah =====
            'KH' => [
                'A' => 'Kota Palangka Raya', 'Y' => 'Kota Palangka Raya',
                'B' => 'Kabupaten Kapuas',
                'C' => 'Kabupaten Barito Selatan',
                'D' => 'Kabupaten Barito Utara',
                'E' => 'Kabupaten Kotawaringin Barat',
                'F' => 'Kabupaten Kotawaringin Timur',
                'G' => 'Kabupaten Katingan',
                'H' => 'Kabupaten Seruyan',
                'I' => 'Kabupaten Sukamara',
                'J' => 'Kabupaten Lamandau',
                'K' => 'Kabupaten Gunung Mas',
                'L' => 'Kabupaten Pulang Pisau',
                'M' => 'Kabupaten Murung Raya',
                'N' => 'Kabupaten Barito Timur',
            ],

            // ===== KT — Kalimantan Timur =====
            'KT' => [
                'B' => 'Kota Samarinda', 'I' => 'Kota Samarinda', 'M' => 'Kota Samarinda', 'N' => 'Kota Samarinda', 'W' => 'Kota Samarinda',
                'A' => 'Kota Balikpapan', 'K' => 'Kota Balikpapan', 'L' => 'Kota Balikpapan', 'Y' => 'Kota Balikpapan', 'Z' => 'Kota Balikpapan',
                'C' => 'Kabupaten Kutai Kartanegara', 'O' => 'Kabupaten Kutai Kartanegara', 'U' => 'Kabupaten Kutai Kartanegara',
                'D' => 'Kota Bontang', 'Q' => 'Kota Bontang',
                'E' => 'Kabupaten Paser',
                'G' => 'Kabupaten Berau',
                'H' => 'Kabupaten Kutai Barat',
                'J' => 'Kabupaten Kutai Timur', 'R' => 'Kabupaten Kutai Timur',
                'V' => 'Kabupaten Penajam Paser Utara',
                'P' => 'Kabupaten Mahakam Ulu',
            ],

            // ===== KU — Kalimantan Utara =====
            'KU' => [
                'A' => 'Kabupaten Bulungan',
                'B' => 'Kota Tarakan',
                'C' => 'Kabupaten Nunukan',
                'D' => 'Kabupaten Malinau',
                'E' => 'Kabupaten Tana Tidung',
            ],

            // ===== DB — Sulawesi Utara =====
            'DB' => [
                'A' => 'Kota Manado', 'L' => 'Kota Manado', 'M' => 'Kota Manado', 'N' => 'Kota Manado', 'R' => 'Kota Manado',
                'B' => 'Kabupaten Minahasa',
                'C' => 'Kota Bitung',
                'D' => 'Kabupaten Bolaang Mongondow',
                'E' => 'Kabupaten Kepulauan Sangihe',
                'F' => 'Kabupaten Kepulauan Talaud',
                'G' => 'Kabupaten Minahasa Selatan',
                'H' => 'Kabupaten Minahasa Utara',
                'K' => 'Kota Kotamobagu',
                'J' => 'Kabupaten Minahasa Tenggara',
                'I' => 'Kabupaten Bolmong Utara',
                'O' => 'Kabupaten Siau Tagulandang Biaro',
                'P' => 'Kabupaten Bolmong Timur',
                'Q' => 'Kabupaten Bolmong Selatan',
            ],

            // ===== DL — Sulawesi Utara (Kepulauan) =====
            'DL' => [
                'A' => 'Kabupaten Kepulauan Sangihe',
                'B' => 'Kabupaten Kepulauan Talaud',
                'C' => 'Kabupaten Siau Tagulandang Biaro',
            ],

            // ===== DM — Gorontalo =====
            'DM' => [
                'A' => 'Kota Gorontalo',
                'B' => 'Kabupaten Gorontalo',
                'C' => 'Kabupaten Boalemo',
                'D' => 'Kabupaten Pohuwato',
                'E' => 'Kabupaten Bone Bolango',
                'F' => 'Kabupaten Gorontalo Utara',
            ],

            // ===== DC — Sulawesi Barat =====
            'DC' => [
                'A' => 'Kabupaten Mamuju',
                'B' => 'Kabupaten Pasangkayu',
                'C' => 'Kabupaten Polewali Mandar',
                'D' => 'Kabupaten Majene',
                'E' => 'Kabupaten Mamasa',
                'F' => 'Kabupaten Mamuju Tengah',
            ],

            // ===== DD — Sulawesi Selatan (Sektor Selatan) =====
            'DD' => [
                'A' => 'Kota Makassar',
                'B' => 'Kabupaten Gowa',
                'C' => 'Kabupaten Takalar',
                'D' => 'Kabupaten Jeneponto',
                'E' => 'Kabupaten Bantaeng',
                'F' => 'Kabupaten Bulukumba',
                'G' => 'Kabupaten Selayar',
                'H' => 'Kabupaten Maros',
                'J' => 'Kabupaten Pangkajene dan Kepulauan',
                'K' => 'Kabupaten Barru',
                'L' => 'Kabupaten Bone',
                'M' => 'Kabupaten Soppeng',
                'N' => 'Kabupaten Wajo',
            ],

            // ===== DP — Sulawesi Selatan (Sektor Utara) =====
            'DP' => [
                'A' => 'Kota Parepare',
                'B' => 'Kabupaten Pinrang',
                'C' => 'Kabupaten Sidenreng Rappang',
                'D' => 'Kabupaten Enrekang',
                'E' => 'Kabupaten Luwu',
                'F' => 'Kabupaten Luwu Utara',
                'G' => 'Kabupaten Luwu Timur',
                'H' => 'Kota Palopo',
                'J' => 'Kabupaten Tana Toraja',
                'K' => 'Kabupaten Toraja Utara',
            ],

            // ===== DE — Maluku =====
            'DE' => [
                'A' => 'Kota Ambon',
                'B' => 'Kabupaten Maluku Tengah',
                'C' => 'Kabupaten Seram Bagian Barat',
                'D' => 'Kabupaten Seram Bagian Timur',
                'E' => 'Kabupaten Buru',
                'F' => 'Kabupaten Buru Selatan',
                'G' => 'Kabupaten Maluku Tenggara',
                'H' => 'Kota Tual',
                'I' => 'Kabupaten Kepulauan Aru',
                'J' => 'Kabupaten Kepulauan Tanimbar',
                'K' => 'Kabupaten Maluku Barat Daya',
            ],

            // ===== DG — Maluku Utara =====
            'DG' => [
                'A' => 'Kota Ternate',
                'B' => 'Kabupaten Halmahera Barat',
                'C' => 'Kabupaten Halmahera Tengah',
                'D' => 'Kabupaten Halmahera Selatan',
                'E' => 'Kabupaten Halmahera Utara',
                'F' => 'Kabupaten Halmahera Timur',
                'G' => 'Kabupaten Kepulauan Sula',
                'H' => 'Kota Tidore Kepulauan',
                'I' => 'Kabupaten Pulau Morotai',
                'J' => 'Kabupaten Pulau Taliabu',
            ],

            // ===== DH — Nusa Tenggara Timur (Timor & Rote/Sabu/Alor) =====
            'DH' => [
                'A' => 'Kota Kupang',
                'B' => 'Kabupaten Kupang',
                'C' => 'Kabupaten Timor Tengah Selatan',
                'D' => 'Kabupaten Timor Tengah Utara',
                'E' => 'Kabupaten Belu',
                'F' => 'Kabupaten Alor',
                'G' => 'Kabupaten Rote Ndao',
                'H' => 'Kabupaten Sabu Raijua',
                'J' => 'Kabupaten Malaka',
            ],

            // ===== EB — Nusa Tenggara Timur (Flores & Lembata) =====
            'EB' => [
                'A' => 'Kabupaten Ende',
                'B' => 'Kabupaten Sikka',
                'C' => 'Kabupaten Flores Timur',
                'D' => 'Kabupaten Ngada',
                'E' => 'Kabupaten Manggarai',
                'F' => 'Kabupaten Lembata',
                'G' => 'Kabupaten Manggarai Barat',
                'H' => 'Kabupaten Nagekeo',
                'I' => 'Kabupaten Manggarai Timur',
            ],

            // ===== ED — Nusa Tenggara Timur (Sumba) =====
            'ED' => [
                'A' => 'Kabupaten Sumba Timur',
                'B' => 'Kabupaten Sumba Barat',
                'C' => 'Kabupaten Sumba Barat Daya',
                'D' => 'Kabupaten Sumba Tengah',
            ],

            // ===== DK — Bali =====
            'DK' => [
                'A' => 'Kota Denpasar', 'B' => 'Kota Denpasar', 'C' => 'Kota Denpasar', 'D' => 'Kota Denpasar', 'E' => 'Kota Denpasar', 'I' => 'Kota Denpasar', 'X' => 'Kota Denpasar',
                'F' => 'Kabupaten Badung', 'J' => 'Kabupaten Badung', 'O' => 'Kabupaten Badung',
                'G' => 'Kabupaten Tabanan', 'H' => 'Kabupaten Tabanan',
                'K' => 'Kabupaten Gianyar', 'L' => 'Kabupaten Gianyar',
                'M' => 'Kabupaten Klungkung', 'N' => 'Kabupaten Klungkung',
                'P' => 'Kabupaten Bangli', 'R' => 'Kabupaten Bangli',
                'S' => 'Kabupaten Karangasem', 'T' => 'Kabupaten Karangasem',
                'U' => 'Kabupaten Buleleng', 'V' => 'Kabupaten Buleleng',
                'W' => 'Kabupaten Jembrana', 'Z' => 'Kabupaten Jembrana',
            ],

            // ===== DR — Lombok (NTB) =====
            'DR' => [
                'A' => 'Kota Mataram', 'B' => 'Kota Mataram', 'C' => 'Kota Mataram', 'D' => 'Kota Mataram',
                'E' => 'Kabupaten Lombok Barat', 'F' => 'Kabupaten Lombok Barat',
                'G' => 'Kabupaten Lombok Tengah', 'H' => 'Kabupaten Lombok Tengah',
                'I' => 'Kabupaten Lombok Timur', 'J' => 'Kabupaten Lombok Timur',
                'K' => 'Kabupaten Lombok Utara',
            ],

            // ===== EA — Sumbawa (NTB) =====
            'EA' => [
                'A' => 'Kabupaten Sumbawa', 'B' => 'Kabupaten Sumbawa',
                'C' => 'Kota Bima', 'X' => 'Kota Bima',
                'D' => 'Kabupaten Dompu',
                'E' => 'Kabupaten Bima', 'Y' => 'Kabupaten Bima',
                'F' => 'Kabupaten Sumbawa Barat',
            ],

            // ===== PA — Papua (Resmi Aktif) =====
            'PA' => [
                'A' => 'Kota Jayapura', 'R' => 'Kota Jayapura',
                'B' => 'Kabupaten Jayapura',
                'C' => 'Kabupaten Biak Numfor',
                'D' => 'Kabupaten Keerom',
                'E' => 'Kabupaten Sarmi',
                'F' => 'Kabupaten Supiori',
                'G' => 'Kabupaten Kepulauan Yapen',
                'H' => 'Kabupaten Waropen',
                'J' => 'Kabupaten Mimika',
                'K' => 'Kabupaten Nabire',
                'L' => 'Kabupaten Merauke',
                'M' => 'Kabupaten Jayawijaya',
            ],

            // ===== DS — Papua (Kode Lama / Masih Digunakan) =====
            'DS' => [
                'A' => 'Kota Jayapura',
                'B' => 'Kabupaten Jayapura',
                'C' => 'Kabupaten Biak Numfor',
                'D' => 'Kabupaten Keerom',
                'E' => 'Kabupaten Sarmi',
                'J' => 'Kabupaten Mimika',
                'K' => 'Kabupaten Nabire',
                'L' => 'Kabupaten Merauke',
                'M' => 'Kabupaten Jayawijaya',
            ],

            // ===== PB — Papua Barat =====
            'PB' => [
                'A' => 'Kabupaten Manokwari',
                'B' => 'Kota Sorong',
                'C' => 'Kabupaten Sorong',
                'D' => 'Kabupaten Fakfak',
                'E' => 'Kabupaten Kaimana',
                'F' => 'Kabupaten Teluk Bintuni',
                'G' => 'Kabupaten Teluk Wondama',
                'H' => 'Kabupaten Raja Ampat',
                'I' => 'Kabupaten Sorong Selatan',
            ],

            // ===== DT — Sulawesi Tenggara =====
            'DT' => [
                'A' => 'Kota Kendari',
                'B' => 'Kabupaten Konawe',
                'C' => 'Kabupaten Kolaka',
                'D' => 'Kabupaten Muna',
                'E' => 'Kabupaten Buton',
                'F' => 'Kota Baubau',
                'G' => 'Kabupaten Konawe Selatan',
                'H' => 'Kabupaten Bombana',
                'I' => 'Kabupaten Wakatobi',
                'J' => 'Kabupaten Kolaka Utara',
                'K' => 'Kabupaten Buton Utara',
                'L' => 'Kabupaten Konawe Utara',
                'M' => 'Kabupaten Kolaka Timur',
                'N' => 'Kabupaten Konawe Kepulauan',
                'O' => 'Kabupaten Muna Barat',
                'P' => 'Kabupaten Buton Tengah',
                'Q' => 'Kabupaten Buton Selatan',
            ],

            // ===== DN — Sulawesi Tengah =====
            'DN' => [
                'A' => 'Kota Palu',
                'B' => 'Kabupaten Donggala',
                'C' => 'Kabupaten Poso',
                'D' => 'Kabupaten Tolitoli',
                'E' => 'Kabupaten Banggai',
                'F' => 'Kabupaten Buol',
                'G' => 'Kabupaten Morowali',
                'H' => 'Kabupaten Parigi Moutong',
                'I' => 'Kabupaten Tojo Una-Una',
                'J' => 'Kabupaten Sigi',
                'K' => 'Kabupaten Banggai Kepulauan',
                'L' => 'Kabupaten Banggai Laut',
                'M' => 'Kabupaten Morowali Utara',
            ],
        ];
    }

    /**
     * Look up detailed city by prefix + suffix first letter.
     */
    public static function lookup(string $prefix, string $suffixFirstLetter): ?string
    {
        $prefix = strtoupper(trim($prefix));
        $letter = strtoupper(substr(trim($suffixFirstLetter), 0, 1));

        return self::get()[$prefix][$letter] ?? null;
    }
}