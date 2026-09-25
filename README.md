# IDPLAT — Cek Plat Nomor Kendaraan

Web app untuk mengecek asal wilayah plat nomor kendaraan Indonesia.

---

## Cara Menjalankan

### 1. Download Project

Klik tombol "Code" (yang warna ijo) → Download ZIP → extract ke folder Laragon kalian (`C:\laragon\www\`).

lalu copas folder "Vendor" dari template laravel kalian kesini (`C:\laragon\www\IDPLAT`)

---

### 2. Buka Laragon → Start All

Buka **Laragon** → klik **"Start All"**.

Pastikan Apache dan MySQL sudah hijau 

---

### 3. Buka Terminal

Laragon → **Terminal**

---

### 4. Masuk ke Folder Project

    cd IDPLAT

---


### 6. Setup Environment

Buka file `.env`, isi API key kalian:

    API_INDONESIA_KEY=aip_live_xxxxxxxxxxxxxxxx
    API_INDONESIA_BASE_URL=https://use.apiindonesia.id

> Daftar di [apiindonesia.id](https://apiindonesia.id) untuk dapetin API key.

---

### 7. Jalankan

    php artisan serve

Buka browser → **http://127.0.0.1:8000/cek-plat**

---

## Selesai

buka:

    http://127.0.0.1:8000/idplat
