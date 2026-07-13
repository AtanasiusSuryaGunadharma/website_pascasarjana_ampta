PERBAIKAN FILE PHP TERUNDUH DI VERCEL
=====================================

1. Salin vercel.json ke ROOT repository, sejajar dengan:
   composer.json, app, api, config, public, resources, routes.

2. Salin api/index.php ke folder api.

3. Di Vercel buka Settings > Build and Deployment:
   - Framework Preset: Other
   - Root Directory: kosong / ./ (JANGAN public)
   - Build Command: Override OFF
   - Output Directory: Override OFF (JANGAN public)
   - Install Command: Override OFF
   - Node.js Version: 22.x

4. Pastikan semua file sudah masuk GitHub:
   git add vercel.json api/index.php .vercelignore
   git commit -m "Fix Vercel PHP routing"
   git push origin main

5. Vercel > Deployments > pilih deployment terbaru > Redeploy.
   Nonaktifkan opsi memakai build cache lama bila tersedia.

6. Di detail deployment, pastikan ada Function bernama api/index.php.
   Jika tidak ada, Vercel masih memakai Root Directory yang salah atau
   vercel.json belum masuk commit yang dideploy.

Catatan penting:
Konfigurasi lama memakai {"handle":"filesystem"}. Pada project yang memiliki
public/index.php, aturan ini dapat membuat index.php ditemukan sebagai file
statis sebelum request diteruskan ke PHP Function. Akibatnya browser mengunduh
file tersebut. Versi ini menghapus aturan filesystem dan hanya memberi rute
statis khusus untuk /assets.
