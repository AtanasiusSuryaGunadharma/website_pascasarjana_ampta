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

$competencyItems = [
    'Perencanaan destinasi dan pengembangan pariwisata terapan.',
    'Analisis hospitality, layanan, dan kebutuhan industri.',
    'Komunikasi profesional, kolaborasi, dan problem solving.',
    'Pengembangan inovasi dan kewirausahaan pariwisata.',
];

$careerItems = [
    'Destination planner & tourism development officer.',
    'Manajer hospitality, event, atau venue management.',
    'Konsultan perencanaan pariwisata dan ekonomi kreatif.',
    'Akademisi, peneliti, maupun entrepreneur pariwisata.',
];


$alumniTestimonials = [
    [
        'name' => 'Nadia Pramesti, M.Tr.Par.',
        'role' => 'Destination Development Associate',
        'meta' => 'Alumni Magister Terapan Pariwisata',
        'image' => '260428110348698.jpeg',
        'initials' => 'NP',
        'quote' => 'Perkuliahan memberi saya wawasan yang lebih strategis dalam merancang program pengembangan destinasi dan memahami kebutuhan industri secara lebih nyata.',
        'highlight' => 'Pembelajaran terapan, kolaborasi, dan perspektif industri.',
    ],
    [
        'name' => 'Raka Aditya, M.Tr.Par.',
        'role' => 'Hospitality Development Professional',
        'meta' => 'Alumni Pascasarjana STP AMPTA',
        'image' => null,
        'initials' => 'RA',
        'quote' => 'Diskusi akademik dan studi kasus membantu saya menghubungkan teori dengan persoalan nyata di bidang hospitality, sehingga lebih siap mengambil keputusan profesional.',
        'highlight' => 'Pengalaman belajar yang relevan dengan kebutuhan dunia kerja.',
    ],
];


$facilities = [
    [
        'name' => 'Ruang Kelas & Diskusi Pascasarjana',
        'description' => 'Ruang belajar yang nyaman untuk perkuliahan, diskusi akademik, presentasi, dan kolaborasi antarmahasiswa.',
        'image' => 'gambar_kampus2.jpg',
        'href' => '/fasilitas/ruang-kelas-dan-diskusi',
        'featured' => true,
    ],
    [
        'name' => 'Laboratorium Hospitality',
        'description' => 'Fasilitas praktik untuk mendukung pembelajaran terapan, simulasi layanan, dan pengembangan kompetensi hospitality.',
        'image' => 'gambar_kampus1.jpg',
        'href' => '/fasilitas/laboratorium-hospitality',
        'featured' => false,
    ],
    [
        'name' => 'Perpustakaan & Sumber Belajar',
        'description' => 'Akses referensi akademik, jurnal, bahan riset, dan sumber belajar digital untuk menunjang studi pascasarjana.',
        'image' => 'gambar_kampus2.jpg',
        'href' => '/fasilitas/perpustakaan-dan-sumber-belajar',
        'featured' => false,
    ],
];

$newsItems = [
    [
        'category' => 'Kegiatan Akademik',
        'date' => '18 Juli 2026',
        'iso_date' => '2026-07-18',
        'title' => 'Kuliah tamu pengembangan destinasi pariwisata berbasis kolaborasi.',
        'excerpt' => 'Kegiatan akademik yang menghadirkan praktisi industri untuk membahas strategi pengembangan destinasi yang adaptif dan berkelanjutan.',
        'image' => 'gambar_kampus1.jpg',
        'slug' => 'kuliah-tamu-pengembangan-destinasi',
    ],
    [
        'category' => 'Informasi PMB',
        'date' => '12 Juli 2026',
        'iso_date' => '2026-07-12',
        'title' => 'Pendaftaran mahasiswa baru Pascasarjana STP AMPTA telah dibuka.',
        'excerpt' => 'Temukan informasi awal mengenai program Magister Terapan Pariwisata, alur pendaftaran, dan persiapan dokumen calon mahasiswa.',
        'image' => 'gambar_kampus2.jpg',
        'slug' => 'pendaftaran-mahasiswa-baru-pascasarjana',
    ],
    [
        'category' => 'Alumni & Industri',
        'date' => '05 Juli 2026',
        'iso_date' => '2026-07-05',
        'title' => 'Alumni berbagi pengalaman karier di bidang hospitality dan pengembangan destinasi.',
        'excerpt' => 'Sesi berbagi pengalaman yang mempertemukan mahasiswa, alumni, dan mitra industri untuk memperluas wawasan profesional.',
        'image' => '260428110348698.jpeg',
        'slug' => 'alumni-berbagi-pengalaman-karier',
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


    <section class="facilities-section" id="fasilitas">
        <div class="facilities-decoration facilities-decoration-one"></div>
        <div class="facilities-decoration facilities-decoration-two"></div>

        <div class="container facilities-wrap">
            <div class="facilities-heading-row">
                <div class="facilities-heading-copy">
                    <p class="facilities-kicker">Fasilitas Pendukung</p>
                    <h2 class="facilities-title">Ruang belajar yang mendukung pengalaman akademik terapan.</h2>
                </div>

                <a href="<?= htmlspecialchars($appConfig['url']) ?>/fasilitas" class="facilities-view-all">
                    Lihat Semua Fasilitas <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="facilities-grid">
                <?php foreach ($facilities as $index => $facility): ?>
                    <article class="facility-card <?= $facility['featured'] ? 'facility-card-featured' : '' ?>">
                        <a href="<?= htmlspecialchars($appConfig['url'] . $facility['href']) ?>" class="facility-media">
                            <img
                                src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/<?= htmlspecialchars($facility['image']) ?>"
                                alt="<?= htmlspecialchars($facility['name']) ?>"
                                class="facility-image facility-image-<?= $index + 1 ?>"
                            >
                            <span class="facility-number">0<?= $index + 1 ?></span>
                            <span class="facility-media-overlay"></span>
                        </a>

                        <div class="facility-content">
                            <p class="facility-label">Fasilitas Akademik</p>
                            <h3 class="facility-title">
                                <a href="<?= htmlspecialchars($appConfig['url'] . $facility['href']) ?>">
                                    <?= htmlspecialchars($facility['name']) ?>
                                </a>
                            </h3>
                            <p class="facility-text"><?= htmlspecialchars($facility['description']) ?></p>
                            <a href="<?= htmlspecialchars($appConfig['url'] . $facility['href']) ?>" class="facility-link">
                                Lihat Detail <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="outcomes-section" id="publikasi-prospek">
        <div class="outcomes-glow outcomes-glow-one"></div>
        <div class="outcomes-glow outcomes-glow-two"></div>

        <div class="container outcomes-wrap">
            <div class="outcomes-heading">
                <div class="outcomes-heading-copy">
                    <p class="outcomes-kicker">Publikasi & Arah Lulusan</p>
                    <h2 class="outcomes-title">Riset terapan yang memperkuat kompetensi dan prospek karier.</h2>
                </div>
            </div>

            <div class="outcomes-grid">
                <article class="outcome-card outcome-card-publication">
                    <div class="outcome-card-topline">
                        <span class="outcome-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M6 3.5h9l3 3v14H6z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"></path>
                                <path d="M15 3.5v3h3M9 11h6M9 14.5h6M9 18h4" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span class="outcome-card-number">01</span>
                    </div>

                    <p class="outcome-card-kicker">Publikasi</p>
                    <h3 class="outcome-card-title">Highlight riset mahasiswa dan lulusan.</h3>
                    <p class="outcome-card-text">
                        Kajian berfokus pada pengembangan destinasi, hospitality, ekonomi kreatif, dan inovasi layanan pariwisata.
                    </p>

                    <div class="publication-preview">
                        <span class="publication-badge">Research Highlight</span>
                        <strong>Strategi Pengembangan Destinasi Wisata Berkelanjutan Berbasis Kolaborasi Stakeholder</strong>
                        <p>Jurnal Pariwisata Terapan • 2026 • Pratinjau konten publikasi.</p>
                        <div class="publication-lines" aria-hidden="true">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="outcome-actions outcome-actions-publication">
                        <a href="<?= htmlspecialchars($appConfig['url']) ?>/publikasi" class="outcome-read-more outcome-read-more-secondary">
                            Lihat Publikasi <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <article class="outcome-card outcome-card-competency">
                    <div class="outcome-card-topline">
                        <span class="outcome-card-icon outcome-card-icon-blue" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M5 19.5v-3.2M10 19.5v-6.7M15 19.5V9.2M20 19.5V5" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"></path>
                                <path d="m5 11.5 4.3-3.4 4 1.4L20 4.2" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <span class="outcome-card-number">02</span>
                    </div>

                    <div class="outcome-competency-head">
                        <p class="outcome-card-kicker">Kompetensi & Prospek Kerja</p>
                        <h3 class="outcome-card-title">Bekal akademik yang terhubung dengan arah karier profesional.</h3>
                        <p class="outcome-card-text">
                            Kompetensi inti dan peluang kerja dirangkum berdampingan agar calon mahasiswa dapat melihat hubungan antara proses belajar dan tujuan karier.
                        </p>
                    </div>

                    <div class="outcome-competency-grid">
                        <div class="outcome-competency-block">
                            <h4>Kompetensi Utama</h4>
                            <ul class="outcome-list">
                                <?php foreach ($competencyItems as $item): ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="outcome-competency-block outcome-competency-block-career">
                            <h4>Prospek Karier</h4>
                            <ul class="outcome-list outcome-list-career">
                                <?php foreach ($careerItems as $item): ?>
                                    <li><?= htmlspecialchars($item) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="news-section" id="informasi-kegiatan">
        <div class="news-section-accent news-section-accent-one"></div>
        <div class="news-section-accent news-section-accent-two"></div>

        <div class="container news-section-wrap">
            <div class="news-heading-row">
                <div class="news-heading-copy">
                    <p class="news-kicker">Informasi & Kegiatan</p>
                    <h2 class="news-title">Kabar terbaru dari Pascasarjana STP AMPTA.</h2>
                    <p class="news-description">
                        Ringkasan berita, agenda akademik, informasi PMB, dan kegiatan kolaboratif yang dapat dibaca lebih lengkap pada halaman dibawah.
                    </p>
                </div>

                <a href="<?= htmlspecialchars($appConfig['url']) ?>/berita" class="news-view-all">
                    Lihat Semua <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="news-grid">
                <?php foreach ($newsItems as $news): ?>
                    <article class="news-card">
                        <a href="<?= htmlspecialchars($appConfig['url']) ?>/berita/<?= htmlspecialchars($news['slug']) ?>" class="news-card-media">
                            <img
                                src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/<?= htmlspecialchars($news['image']) ?>"
                                alt="<?= htmlspecialchars($news['title']) ?>"
                                class="news-card-image"
                            >
                            <span class="news-category"><?= htmlspecialchars($news['category']) ?></span>
                        </a>

                        <div class="news-card-body">
                            <time class="news-date" datetime="<?= htmlspecialchars($news['iso_date']) ?>"><?= htmlspecialchars($news['date']) ?></time>
                            <h3 class="news-card-title">
                                <a href="<?= htmlspecialchars($appConfig['url']) ?>/berita/<?= htmlspecialchars($news['slug']) ?>">
                                    <?= htmlspecialchars($news['title']) ?>
                                </a>
                            </h3>
                            <p class="news-card-text"><?= htmlspecialchars($news['excerpt']) ?></p>

                            <a href="<?= htmlspecialchars($appConfig['url']) ?>/berita/<?= htmlspecialchars($news['slug']) ?>" class="news-read-more">
                                Read More <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="alumni-testimonials-section" id="alumni-testimonials" data-testimonial-carousel>
        <div class="alumni-testimonials-orb alumni-testimonials-orb-one" aria-hidden="true"></div>
        <div class="alumni-testimonials-orb alumni-testimonials-orb-two" aria-hidden="true"></div>

        <div class="container alumni-testimonials-wrap">
            <div class="alumni-testimonials-heading">
                <div class="alumni-testimonials-copy">
                    <p class="alumni-testimonials-kicker">Apa Kata Alumni?</p>
                    <h2 class="alumni-testimonials-title">Cerita pengalaman belajar dari para lulusan.</h2>
                </div>

                <div class="alumni-testimonials-controls" aria-label="Kontrol testimoni alumni">
                    <button type="button" class="alumni-testimonial-control" data-testimonial-prev aria-label="Testimoni sebelumnya">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="m15 6-6 6 6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <button type="button" class="alumni-testimonial-control" data-testimonial-next aria-label="Testimoni berikutnya">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="m9 6 6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="alumni-testimonials-window">
                <?php foreach ($alumniTestimonials as $index => $testimonial): ?>
                    <article
                        class="alumni-testimonial-slide <?= $index === 0 ? 'is-active' : '' ?>"
                        data-testimonial-slide
                        aria-hidden="<?= $index === 0 ? 'false' : 'true' ?>"
                    >
                        <div class="alumni-testimonial-profile">
                            <?php if (!empty($testimonial['image'])): ?>
                                <img
                                    src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/<?= htmlspecialchars($testimonial['image']) ?>"
                                    alt="Foto <?= htmlspecialchars($testimonial['name']) ?>"
                                    class="alumni-testimonial-avatar"
                                >
                            <?php else: ?>
                                <span class="alumni-testimonial-avatar alumni-testimonial-avatar-initials" aria-hidden="true">
                                    <?= htmlspecialchars($testimonial['initials']) ?>
                                </span>
                            <?php endif; ?>
                            <div class="alumni-testimonial-person">
                                <span class="alumni-testimonial-chip">Alumni Pascasarjana</span>
                                <h3><?= htmlspecialchars($testimonial['name']) ?></h3>
                                <p><?= htmlspecialchars($testimonial['role']) ?></p>
                                <small><?= htmlspecialchars($testimonial['meta']) ?></small>
                            </div>
                        </div>

                        <div class="alumni-testimonial-quote">
                            <svg class="alumni-testimonial-quote-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5.5 11.5h4.2v7H3.8v-5.1c0-4.2 1.9-6.9 5.7-8.1v2.9c-2 .8-3.2 1.9-4 3.3Zm10.1 0h4.2v7h-5.9v-5.1c0-4.2 1.9-6.9 5.7-8.1v2.9c-2 .8-3.2 1.9-4 3.3Z" fill="currentColor"></path>
                            </svg>
                            <blockquote>“<?= htmlspecialchars($testimonial['quote']) ?>”</blockquote>
                            <div class="alumni-testimonial-note">
                                <span aria-hidden="true"></span>
                                <p><?= htmlspecialchars($testimonial['highlight']) ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="alumni-testimonials-footer">
                <div class="alumni-testimonials-dots" aria-label="Pilih testimoni alumni">
                    <?php foreach ($alumniTestimonials as $index => $testimonial): ?>
                        <button
                            type="button"
                            class="alumni-testimonial-dot <?= $index === 0 ? 'is-active' : '' ?>"
                            data-testimonial-dot
                            aria-label="Tampilkan testimoni <?= $index + 1 ?>"
                            aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                        ></button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require BASE_PATH . '/resources/views/layouts/footer.php'; ?>
