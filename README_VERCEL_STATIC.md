# Deployment Vercel — Static Preview

Konfigurasi ini sengaja menjadikan Vercel sebagai **preview tampilan statis**.
Aplikasi PHP tetap berjalan melalui XAMPP atau hosting PHP.

## Mengapa versi sebelumnya mengunduh file?

Folder `public` berisi `index.php`, tetapi pada deployment tersebut Vercel memperlakukannya sebagai file statis. Browser lalu menerima file PHP mentah dan menawarkan unduhan.

Versi ini menambahkan `public/index.html` dan mengecualikan seluruh file PHP dari upload Vercel, sehingga file PHP tidak mungkin disajikan sebagai unduhan.

## Pengaturan Vercel

- Framework Preset: `Other`
- Root Directory: kosong / repository root (`./`)
- Build Command: gunakan pengaturan dari `vercel.json`
- Output Directory: gunakan pengaturan dari `vercel.json` (`public`)
- Install Command: gunakan pengaturan dari `vercel.json`

Lakukan deployment baru dari commit yang berisi file ini. Jangan menggunakan deployment lama.

## File penting

- `public/index.html`: halaman yang ditampilkan Vercel
- `public/index.php`: tetap untuk XAMPP, tetapi dikecualikan dari upload Vercel
- `vercel.json`: memaksa output statis ke folder `public`
- `.vercelignore`: mencegah source PHP dan file sensitif ikut terunggah
