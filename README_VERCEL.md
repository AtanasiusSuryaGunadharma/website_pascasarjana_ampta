# Website Pascasarjana STP AMPTA

Website PHP native menggunakan Composer, PSR-4, Dotenv, PDO, router sederhana, controller, dan view.

## Menjalankan di XAMPP

1. Pastikan Apache dan MySQL aktif.
2. Jalankan `composer install`.
3. Salin `.env.example` menjadi `.env`.
4. Impor `database/starter_schema.sql`.
5. Buka `http://localhost/website_pascasarjana_ampta/public/`.

## Deploy preview PHP ke Vercel

Project menggunakan PHP Community Runtime melalui `api/index.php` dan `vercel.json`.

Pengaturan project Vercel:

- Framework Preset: `Other`
- Root Directory: root repository
- Build Command: kosong/default
- Output Directory: kosong; matikan Override
- Install Command: kosong/default
- Node.js Version: `22.x`

Environment variables minimal:

- `APP_NAME=Pascasarjana STP AMPTA`
- `APP_ENV=production`
- `APP_DEBUG=false`

`APP_URL` boleh dikosongkan karena aplikasi mendeteksi domain secara otomatis.
Database lokal XAMPP tidak dapat diakses dari Vercel. Untuk database online, isi `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USERNAME`, dan `DB_PASSWORD` menggunakan database cloud yang dapat diakses publik.
