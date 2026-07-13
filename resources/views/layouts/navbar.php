<header class="site-header">
    <div class="container navbar">
        <a class="brand" href="<?= htmlspecialchars($appConfig['url']) ?>/">
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

        <nav class="nav-menu" aria-label="Navigasi utama">
            <a href="<?= htmlspecialchars($appConfig['url']) ?>/">Beranda</a>
            <a href="#program-profile">Profil</a>
            <a href="#program-profile">Program</a>
            <a href="#status-aplikasi">Informasi</a>
            <a href="#site-footer">Kontak</a>
        </nav>

        <a class="nav-cta" href="#program-profile">Daftar PMB</a>
    </div>
</header>
