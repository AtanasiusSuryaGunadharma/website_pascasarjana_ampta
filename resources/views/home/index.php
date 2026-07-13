<?php
$heroSlides = [
    [
        'tag' => 'Lingkungan belajar representatif',
        'title' => 'Kampus nyaman untuk mendukung proses belajar yang fokus dan profesional.',
        'description' => 'Pascasarjana STP AMPTA Yogyakarta menghadirkan pengalaman belajar yang adaptif dengan suasana akademik yang mendukung.',
        'image' => 'gambar_kampus1.jpg',
        'button' => 'Lihat Profil Program',
        'href' => '#program-profile',
    ],
    [
        'tag' => 'Nuansa akademik dan industri',
        'title' => 'Program pascasarjana yang dirancang untuk menjawab kebutuhan dunia pariwisata dan perhotelan.',
        'description' => 'Halaman depan ini memadukan video background, identitas kampus, dan informasi program yang ringkas serta mudah dipahami.',
        'image' => 'gambar_kampus2.jpg',
        'button' => 'Kenali Program Studi',
        'href' => '#program-profile',
    ],
    [
        'tag' => 'Identitas Pascasarjana AMPTA',
        'title' => 'Bangun langkah akademik lanjutan bersama Pascasarjana STP AMPTA Yogyakarta.',
        'description' => 'Program magister terapan yang menghubungkan akademik, industri, dan pengembangan pariwisata berkelanjutan.',
        'image' => 'gambar_kampus1.jpg',
        'button' => 'Lihat Ringkasan Program',
        'href' => '#program-profile',
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
                    identitas visual kampus, dan informasi program magister yang ringkas.
                </p>

                <div class="hero-actions">
                    <a href="#program-profile" class="btn btn-primary">Lihat Profil Program</a>
                    <a href="#program-profile" class="btn btn-secondary">Tentang Program</a>
                </div>

                <div class="hero-points">
                    <div class="hero-point">
                        <strong>Satu program unggulan</strong>
                        <span>Perencanaan dan Pengembangan Pariwisata jenjang magister terapan.</span>
                    </div>
                    <div class="hero-point">
                        <strong>Pembelajaran aplikatif</strong>
                        <span>Terhubung dengan industri, hospitality, dan pengembangan destinasi.</span>
                    </div>
                    <div class="hero-point">
                        <strong>Berorientasi masa depan</strong>
                        <span>Mendorong inovasi dan pariwisata yang berkelanjutan.</span>
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
                                <a href="<?= htmlspecialchars($slide['href']) ?>" class="carousel-link">
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

    <section class="program-profile-section" id="program-profile">
        <div class="program-profile-orb program-profile-orb-one"></div>
        <div class="program-profile-orb program-profile-orb-two"></div>

        <div class="container program-profile-wrap">
            <div class="program-profile-copy">
                <p class="program-profile-kicker">Profil Program</p>
                <h2 class="program-profile-title">Perencanaan dan Pengembangan Pariwisata (S2)</h2>
                <p class="program-profile-subtitle">Program Magister Terapan Pariwisata</p>
                <p class="program-profile-text">
                    Program pascasarjana yang menyiapkan perencana, pengembang, dan pemimpin pariwisata melalui pembelajaran
                    terapan yang relevan dengan industri hospitality dan pembangunan destinasi berkelanjutan.
                </p>

                <div class="program-profile-tags" aria-label="Fokus program">
                    <span>Pariwisata Terapan</span>
                    <span>Hospitality</span>
                    <span>Destinasi Berkelanjutan</span>
                </div>

                <div class="program-profile-actions">
                    <button type="button" class="btn btn-primary program-profile-coming-soon" disabled>Profil Lengkap Segera Hadir</button>
                    <a href="#site-footer" class="program-profile-link">Hubungi Pascasarjana <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>

            <div class="program-profile-visual">
                <img
                    src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/gambar_kampus2.jpg"
                    alt="Kampus Pascasarjana STP AMPTA Yogyakarta"
                    class="program-profile-image"
                >
                <div class="program-profile-image-overlay"></div>
                <div class="program-profile-badge">Satu Program Magister</div>
                <div class="program-profile-caption">
                    <span>Fokus Pembelajaran</span>
                    <strong>Inovasi pariwisata dan hospitality berkelanjutan.</strong>
                </div>
            </div>

            <div class="program-profile-stats">
                <div class="program-stat-card">
                    <span class="program-stat-label">Program</span>
                    <strong>Magister Terapan</strong>
                </div>
                <div class="program-stat-card">
                    <span class="program-stat-label">Durasi Studi</span>
                    <strong>4 Semester</strong>
                </div>
                <div class="program-stat-card">
                    <span class="program-stat-label">Gelar</span>
                    <strong>M.Tr.Par.</strong>
                </div>
                <div class="program-stat-card">
                    <span class="program-stat-label">Akreditasi</span>
                    <strong>Baik</strong>
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
