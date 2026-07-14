<header class="site-header">
    <div class="container navbar">
        <a class="brand" href="<?= htmlspecialchars($appConfig['url']) ?>/" aria-label="Pascasarjana STP AMPTA - Beranda">
            <img
                src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png"
                alt="Logo STP AMPTA"
                class="brand-logo"
            >
            <div class="brand-text">
                <span class="brand-title">Pascasarjana STP AMPTA</span>
                <span class="brand-subtitle">Yogyakarta</span>
            </div>
        </a>

        <button
            type="button"
            class="nav-toggle"
            aria-label="Buka navigasi"
            aria-controls="primary-navigation-wrap"
            aria-expanded="false"
            data-nav-toggle
        >
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
        </button>

        <div class="nav-content" id="primary-navigation-wrap" data-nav-content>
            <nav class="nav-menu" aria-label="Navigasi utama">
                <a class="is-active" href="<?= htmlspecialchars($appConfig['url']) ?>/#hero-section" aria-current="page">Beranda</a>
                <a href="#program-profile">Profil</a>
                <a href="#informasi-kegiatan">Info PMB</a>
                <a href="#program-profile">Akademik</a>
                <a href="#fasilitas">Layanan</a>
                <a href="https://www.ampta.ac.id/read/halaman/26" target="_blank" rel="noopener noreferrer">Dosen</a>
                <a href="#site-footer">Kontak</a>
            </nav>

            <div class="nav-actions">
                <div class="nav-search">
                    <button
                        type="button"
                        class="nav-search-toggle"
                        aria-label="Buka pencarian"
                        aria-controls="site-search-panel"
                        aria-expanded="false"
                        data-search-toggle
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="10.8" cy="10.8" r="6.4" fill="none" stroke="currentColor" stroke-width="2"></circle>
                            <path d="m16 16 4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div class="nav-search-panel" id="site-search-panel" data-search-panel hidden>
                        <form class="nav-search-form" role="search" data-site-search>
                            <label for="site-search-input">Cari informasi di halaman ini</label>
                            <div class="nav-search-field">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <circle cx="10.8" cy="10.8" r="6.4" fill="none" stroke="currentColor" stroke-width="2"></circle>
                                    <path d="m16 16 4 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                                <input
                                    id="site-search-input"
                                    type="search"
                                    name="q"
                                    placeholder="Contoh: program, fasilitas, PMB"
                                    autocomplete="off"
                                    data-search-input
                                >
                                <button type="submit">Cari</button>
                            </div>
                            <p class="nav-search-status" data-search-status aria-live="polite">Masukkan kata kunci untuk menemukan bagian yang Anda perlukan.</p>
                        </form>
                    </div>
                </div>

                <a
                    class="nav-cta"
                    href="https://pmb.ampta.ac.id/"
                    target="_blank"
                    rel="noopener noreferrer"
                >Daftar PMB</a>
            </div>
        </div>
    </div>
</header>
