<?php
$heroSlides = [
    [
        'tag' => 'Lingkungan belajar representatif',
        'title' => 'Kampus nyaman untuk mendukung proses belajar yang fokus dan profesional.',
        'description' => 'Pascasarjana STP AMPTA Yogyakarta menghadirkan pengalaman belajar yang adaptif dengan suasana akademik yang mendukung.',
        'image' => 'gambar_kampus1.jpg',
        'button' => 'Lihat Detail Kampus',
    ],
    [
        'tag' => 'Nuansa akademik dan industri',
        'title' => 'Program pascasarjana yang dirancang untuk menjawab kebutuhan dunia pariwisata dan perhotelan.',
        'description' => 'Tampilan awal ini dirancang sebagai landing section modern dengan perpaduan video background dan kartu informasi visual.',
        'image' => 'gambar_kampus2.jpg',
        'button' => 'Eksplor Informasi',
    ],
    [
        'tag' => 'Identitas Pascasarjana AMPTA',
        'title' => 'Bangun langkah akademik lanjutan bersama Pascasarjana STP AMPTA Yogyakarta.',
        'description' => 'Visual utama memadukan identitas kampus, video profil, dan tampilan modern agar halaman depan lebih hidup.',
        'image' => 'gambar_kampus1.jpg',
        'button' => 'Lihat Program Studi',
    ],
];

require BASE_PATH . '/resources/views/layouts/header.php';
require BASE_PATH . '/resources/views/layouts/navbar.php';
?>

<main>
    <section class="hero-showcase" id="hero-section">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/bg_video_login.mp4" type="video/mp4">
            Browser Anda belum mendukung video HTML5.
        </video>

        <div class="hero-overlay"></div>

        <div class="container hero-grid">
            <div class="hero-content">
                <div class="hero-chips">
                    <span class="hero-chip">Website sedang dikembangkan</span>
                    <span class="hero-chip hero-chip-outline">PMB Pascasarjana</span>
                </div>

                <p class="hero-kicker">Pascasarjana STP AMPTA Yogyakarta</p>

                <h1 class="hero-title">
                    Wujudkan langkah akademik lanjutan dengan pengalaman belajar yang modern.
                </h1>

                <p class="hero-description">
                    <?= htmlspecialchars($tagline) ?>. Prototype halaman ini memadukan video background,
                    identitas visual kampus, dan kartu informasi interaktif untuk area hero.
                </p>

                <div class="hero-actions">
                    <a href="#status-aplikasi" class="btn btn-primary">Lihat Prototype</a>
                    <a href="#status-aplikasi" class="btn btn-secondary">Tentang Program</a>
                </div>

                <div class="hero-points">
                    <div class="hero-point">
                        <strong>Visual modern</strong>
                        <span>Video background dan layout konten dinamis.</span>
                    </div>
                    <div class="hero-point">
                        <strong>Identitas kampus</strong>
                        <span>Menggunakan aset resmi logo dan gambar kampus.</span>
                    </div>
                    <div class="hero-point">
                        <strong>Siap dikembangkan</strong>
                        <span>Nanti bisa diteruskan ke section about, program, dan berita.</span>
                    </div>
                </div>
            </div>

            <div class="hero-carousel" data-carousel>
                <div class="carousel-header">
                    <div>
                        <p class="carousel-label">Highlight</p>
                        <h2>Preview Hero Section</h2>
                    </div>
                    <img
                        src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png"
                        alt="Logo STP AMPTA"
                        class="carousel-logo"
                    >
                </div>

                <div class="carousel-track">
                    <?php foreach ($heroSlides as $index => $slide): ?>
                        <article class="carousel-slide <?= $index === 0 ? 'is-active' : '' ?>">
                            <div class="carousel-image-wrapper">
                                <img
                                    src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/<?= htmlspecialchars($slide['image']) ?>"
                                    alt="<?= htmlspecialchars($slide['title']) ?>"
                                    class="carousel-image"
                                >
                            </div>

                            <div class="carousel-content">
                                <span class="carousel-tag"><?= htmlspecialchars($slide['tag']) ?></span>
                                <h3><?= htmlspecialchars($slide['title']) ?></h3>
                                <p><?= htmlspecialchars($slide['description']) ?></p>
                                <a href="#status-aplikasi" class="carousel-link">
                                    <?= htmlspecialchars($slide['button']) ?>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="carousel-footer">
                    <div class="carousel-indicators">
                        <?php foreach ($heroSlides as $index => $slide): ?>
                            <button
                                type="button"
                                class="carousel-indicator <?= $index === 0 ? 'is-active' : '' ?>"
                                aria-label="Pindah ke slide <?= $index + 1 ?>"
                                data-slide="<?= $index ?>"
                            ></button>
                        <?php endforeach; ?>
                    </div>

                    <div class="carousel-controls">
                        <button type="button" class="carousel-control" data-prev aria-label="Slide sebelumnya">&larr;</button>
                        <button type="button" class="carousel-control" data-next aria-label="Slide berikutnya">&rarr;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container status-section" id="status-aplikasi">
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
