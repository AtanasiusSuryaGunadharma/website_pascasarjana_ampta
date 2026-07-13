<?php
/** @var string $pageTitle */
$appConfig = require BASE_PATH . '/config/app.php';
$siteName = $appConfig['name'];
require BASE_PATH . '/resources/views/layouts/header.php';
require BASE_PATH . '/resources/views/layouts/navbar.php';
?>
<main class="container status-section">
    <div class="status-card">
        <div>
            <p class="status-label">404</p>
            <h1>Halaman tidak ditemukan</h1>
            <p>Alamat yang dibuka belum tersedia.</p>
        </div>
    </div>
</main>
<?php require BASE_PATH . '/resources/views/layouts/footer.php'; ?>
