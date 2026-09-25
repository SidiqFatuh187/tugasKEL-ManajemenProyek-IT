# Sistem Informasi Tambang

Aplikasi Sistem Informasi Tambang berbasis web yang dibangun menggunakan framework **Laravel**. Aplikasi ini dikembangkan untuk membantu proses pengelolaan data dan informasi terkait kegiatan pertambangan.

## Anggota Kelompok

| No | Nama                  |
|----|-----------------------|
| 1  | Sidiq Fatuh Rahman     |
| 2  | Aditya Fernando        |
| 3  | Khoirullah             |
| 4  | Roni Oktana            |

## Teknologi yang Digunakan

- Laravel (PHP Framework)
- MySQL / MariaDB
- Composer
- Node.js & NPM (untuk asset frontend)

## Persyaratan Sistem

Sebelum menjalankan project ini, pastikan sudah terinstall:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Git

## Cara Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project ini di komputer lokal (localhost):

### 1. Clone Repository

```bash
git clone https://github.com/username/nama-repo.git
```

Masuk ke folder project:

```bash
cd nama-repo
```

### 2. Install Dependency PHP (Composer)

```bash
composer install
```

### 3. Salin File Environment

```bash
cp .env.example .env
```

> Untuk pengguna Windows (jika perintah `cp` tidak dikenali), gunakan:
> ```bash
> copy .env.example .env
> ```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Konfigurasi Database

Buka file `.env`, lalu sesuaikan konfigurasi database sesuai dengan environment lokal masing-masing:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

Jangan lupa buat database baru terlebih dahulu (misalnya melalui phpMyAdmin atau terminal MySQL) sesuai dengan nama pada `DB_DATABASE`.

### 6. Jalankan Migration (dan Seeder jika ada)

```bash
php artisan migrate
```

Jika ada data awal (seeder):

```bash
php artisan migrate --seed
```

### 7. Install Dependency Frontend (NPM)

```bash
npm install
```

Compile asset (CSS/JS):

```bash
npm run dev
```

atau untuk production:

```bash
npm run build
```

### 8. Jalankan Server Laravel

```bash
php artisan serve
```

Setelah itu, buka browser dan akses:

```
http://127.0.0.1:8000
```

## Struktur Folder Penting

```
├── app/            # Logic aplikasi (Model, Controller, dll)
├── database/        # Migration & Seeder
├── public/          # Entry point aplikasi
├── resources/        # View (Blade), CSS, JS
├── routes/          # Routing aplikasi
└── .env.example      # Contoh konfigurasi environment
```

## Catatan Tambahan

- Jika terjadi error terkait permission folder `storage` atau `bootstrap/cache`, jalankan:
  ```bash
  chmod -R 775 storage bootstrap/cache
  ```
- Jika ada perubahan pada file `.env`, disarankan menjalankan:
  ```bash
  php artisan config:clear
  ```

## Lisensi

Project ini dibuat untuk keperluan tugas kelompok/akademik.