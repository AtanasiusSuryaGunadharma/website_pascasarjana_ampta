<?php

$lecturers = [
    [
        'name' => 'Dr. Arif Prasetyo, S.ST.Par., M.Par.',
        'initials' => 'AP',
        'position' => 'Lektor Kepala',
        'email' => 'arif.prasetyo@ampta.ac.id',
        'expertise' => 'Perencanaan Destinasi dan Pariwisata Berkelanjutan',
        'accent' => 'navy',
    ],
    [
        'name' => 'Dr. Maya Kurniasih, S.E., M.M.',
        'initials' => 'MK',
        'position' => 'Lektor',
        'email' => 'maya.kurniasih@ampta.ac.id',
        'expertise' => 'Manajemen Hospitality dan Pengembangan SDM',
        'accent' => 'gold',
    ],
    [
        'name' => 'Prof. Dr. Bambang Suharto, M.Sc.',
        'initials' => 'BS',
        'position' => 'Guru Besar',
        'email' => 'bambang.suharto@ampta.ac.id',
        'expertise' => 'Kebijakan Pariwisata dan Ekonomi Kreatif',
        'accent' => 'teal',
    ],
    [
        'name' => 'Dr. Citra Lestari, S.ST.Par., M.Par.',
        'initials' => 'CL',
        'position' => 'Lektor Kepala',
        'email' => 'citra.lestari@ampta.ac.id',
        'expertise' => 'Pemasaran Destinasi dan Perilaku Wisatawan',
        'accent' => 'blue',
    ],
    [
        'name' => 'Dr. Dimas Wicaksono, M.M.Par.',
        'initials' => 'DW',
        'position' => 'Lektor',
        'email' => 'dimas.wicaksono@ampta.ac.id',
        'expertise' => 'Manajemen Event dan MICE',
        'accent' => 'navy',
    ],
    [
        'name' => 'Dr. Endah Puspitasari, M.Si.',
        'initials' => 'EP',
        'position' => 'Lektor Kepala',
        'email' => 'endah.puspitasari@ampta.ac.id',
        'expertise' => 'Sosiologi Pariwisata dan Pariwisata Berbasis Komunitas',
        'accent' => 'gold',
    ],
    [
        'name' => 'Fajar Nugroho, S.ST.Par., M.Sc.',
        'initials' => 'FN',
        'position' => 'Asisten Ahli',
        'email' => 'fajar.nugroho@ampta.ac.id',
        'expertise' => 'Transformasi Digital dan Analitik Pariwisata',
        'accent' => 'teal',
    ],
    [
        'name' => 'Dr. Grace Natalia, S.E., M.M.',
        'initials' => 'GN',
        'position' => 'Lektor',
        'email' => 'grace.natalia@ampta.ac.id',
        'expertise' => 'Kewirausahaan Pariwisata dan Inovasi Layanan',
        'accent' => 'blue',
    ],
];

require BASE_PATH . '/resources/views/layouts/header.php';
require BASE_PATH . '/resources/views/layouts/navbar.php';
?>

<main id="top" class="lecturer-page">
    <section class="lecturer-hero" aria-labelledby="lecturer-page-title">
        <div class="lecturer-hero-media" aria-hidden="true"></div>
        <div class="lecturer-hero-overlay" aria-hidden="true"></div>
        <div class="container lecturer-hero-inner">
            <div class="lecturer-hero-copy">
                <div class="lecturer-hero-chips">
                    <span>Profil Akademik</span>
                    <span>Program Pascasarjana</span>
                </div>
                <p class="lecturer-hero-kicker">Pascasarjana STP AMPTA Yogyakarta</p>
                <h1 id="lecturer-page-title">Dosen dan <span>Bidang Keahlian</span></h1>
                <p>Kenali tenaga pendidik yang mendukung pembelajaran, penelitian, dan pengembangan pariwisata yang relevan dengan kebutuhan industri.</p>
            </div>

            <div class="lecturer-hero-card" aria-hidden="true">
                <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="">
                <div>
                    <span>Tim Akademik</span>
                    <strong>Pengajar, peneliti, dan praktisi pariwisata.</strong>
                </div>
            </div>
        </div>
    </section>

    <nav class="lecturer-breadcrumb" aria-label="Breadcrumb">
        <div class="container">
            <a href="<?= htmlspecialchars($appConfig['url']) ?>/">Beranda</a>
            <span aria-hidden="true">/</span>
            <span aria-current="page">Dosen</span>
        </div>
    </nav>

    <section class="lecturer-directory" aria-labelledby="lecturer-list-title">
        <div class="container">
            <div class="lecturer-directory-head">
                <div>
                    <p class="section-kicker">Daftar Dosen</p>
                    <h2 id="lecturer-list-title">Profil Dosen Pascasarjana</h2>
                    <p>Data berikut masih berupa contoh dan dapat diganti dengan profil dosen resmi.</p>
                </div>

                <label class="lecturer-search">
                    <span>Cari dosen atau bidang keahlian</span>
                    <span class="lecturer-search-field">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="10.8" cy="10.8" r="6.3" fill="none" stroke="currentColor" stroke-width="2"></circle>
                            <path d="m15.7 15.7 4.2 4.2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                        <input type="search" placeholder="Contoh: hospitality" autocomplete="off" data-lecturer-search>
                    </span>
                </label>
            </div>

            <p class="lecturer-result-status" data-lecturer-status aria-live="polite"><?= count($lecturers) ?> profil dosen ditampilkan</p>

            <div class="lecturer-grid" data-lecturer-grid>
                <?php foreach ($lecturers as $lecturer): ?>
                    <article class="lecturer-card" data-lecturer-card>
                        <div class="lecturer-avatar lecturer-avatar-<?= htmlspecialchars($lecturer['accent']) ?>" aria-label="Avatar <?= htmlspecialchars($lecturer['name']) ?>">
                            <span><?= htmlspecialchars($lecturer['initials']) ?></span>
                            <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="" aria-hidden="true">
                        </div>

                        <div class="lecturer-card-body">
                            <span class="lecturer-position"><?= htmlspecialchars($lecturer['position']) ?></span>
                            <h3><?= htmlspecialchars($lecturer['name']) ?></h3>

                            <a class="lecturer-email" href="mailto:<?= htmlspecialchars($lecturer['email']) ?>">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <rect x="3.5" y="5" width="17" height="14" rx="2.5" fill="none" stroke="currentColor" stroke-width="1.8"></rect>
                                    <path d="m5 7 7 5.3L19 7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"></path>
                                </svg>
                                <?= htmlspecialchars($lecturer['email']) ?>
                            </a>

                            <div class="lecturer-expertise">
                                <span>Bidang keahlian</span>
                                <p><?= htmlspecialchars($lecturer['expertise']) ?></p>
                            </div>

                            <div class="lecturer-research-links" aria-label="Profil penelitian <?= htmlspecialchars($lecturer['name']) ?>">
                                <a href="https://scholar.google.com/scholar?q=<?= rawurlencode($lecturer['name']) ?>" target="_blank" rel="noopener noreferrer">Google Scholar</a>
                                <a href="https://sinta.kemdikbud.go.id/authors" target="_blank" rel="noopener noreferrer">SINTA</a>
                                <a href="https://www.scopus.com/search/form.uri?display=authorLookup" target="_blank" rel="noopener noreferrer">Scopus</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="lecturer-empty" data-lecturer-empty hidden>
                <strong>Profil belum ditemukan</strong>
                <p>Coba gunakan nama, jabatan, atau kata kunci bidang keahlian yang berbeda.</p>
            </div>
        </div>
    </section>
</main>

<?php require BASE_PATH . '/resources/views/layouts/footer.php'; ?>
