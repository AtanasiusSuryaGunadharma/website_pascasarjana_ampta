<?php
require BASE_PATH . '/resources/views/layouts/header.php';
require BASE_PATH . '/resources/views/layouts/navbar.php';
?>

<main>
    <section class="hero">
        <div class="container">
            <span class="eyebrow">Website sedang dikembangkan</span>
            <h1><?= htmlspecialchars($siteName) ?></h1>
            <p><?= htmlspecialchars($tagline) ?></p>
        </div>
    </section>

    <section class="container status-section">
        <div class="status-card">
            <div>
                <p class="status-label">Status aplikasi</p>
                <h2>Halaman index berhasil dijalankan</h2>
                <p>PHP, Composer, autoload PSR-4, router, controller, dan view sudah aktif.</p>
            </div>
            <span class="status-badge success">Aktif</span>
        </div>

        <div class="status-card">
            <div>
                <p class="status-label">Status database</p>
                <h2><?= $databaseConnected ? 'Database berhasil terhubung' : 'Database belum terhubung' ?></h2>
                <p>
                    <?= $databaseConnected
                        ? 'Data nama website dan tagline berhasil dibaca dari tabel site_settings.'
                        : 'Impor starter_schema.sql lalu periksa konfigurasi pada file .env.' ?>
                </p>

                <?php if (!$databaseConnected && $databaseError !== null): ?>
                    <pre class="error-box"><?= htmlspecialchars($databaseError) ?></pre>
                <?php endif; ?>
            </div>
            <span class="status-badge <?= $databaseConnected ? 'success' : 'warning' ?>">
                <?= $databaseConnected ? 'Terhubung' : 'Perlu disiapkan' ?>
            </span>
        </div>
    </section>
</main>

<?php require BASE_PATH . '/resources/views/layouts/footer.php'; ?>
