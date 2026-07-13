<footer class="site-footer" id="site-footer">
    <div class="footer-pattern" aria-hidden="true"></div>

    <div class="container footer-cta">
        <div>
            <p class="footer-cta-kicker">Penerimaan Mahasiswa Baru</p>
            <h2>Siap melanjutkan studi di Pascasarjana STP AMPTA?</h2>
            <p>Kenali program Magister Terapan Pariwisata dan dapatkan informasi pendaftaran melalui laman PMB.</p>
        </div>
        <a
            href="https://pmb.ampta.ac.id/"
            class="footer-cta-button"
            target="_blank"
            rel="noopener noreferrer"
        >
            Kunjungi PMB <span aria-hidden="true">&rarr;</span>
        </a>
    </div>

    <div class="container footer-main">
        <div class="footer-brand-column">
            <a class="footer-brand" href="<?= htmlspecialchars($appConfig['url']) ?>/">
                <img
                    src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png"
                    alt="Logo STP AMPTA"
                    class="footer-logo"
                >
                <span>
                    <strong>Pascasarjana STP AMPTA</strong>
                    <small>Yogyakarta</small>
                </span>
            </a>

            <p class="footer-summary">
                Program Magister Terapan Pariwisata yang berfokus pada perencanaan, pengembangan destinasi,
                hospitality, dan pariwisata berkelanjutan.
            </p>

            <div class="footer-contact-list">
                <p>
                    <span class="footer-contact-label">Alamat</span>
                    Jl. Laksda Adisucipto KM 6, Caturtunggal, Depok, Sleman 55281, Indonesia
                </p>
                <p>
                    <span class="footer-contact-label">Telepon</span>
                    <a href="tel:+62274485115">+62 274 485115</a>
                </p>
                <p>
                    <span class="footer-contact-label">WhatsApp PMB</span>
                    <a href="https://wa.me/6288215435648" target="_blank" rel="noopener noreferrer">0882-1543-5648</a>
                </p>
            </div>
        </div>

        <nav class="footer-column" aria-label="Navigasi footer">
            <h3>Navigasi</h3>
            <a href="<?= htmlspecialchars($appConfig['url']) ?>/">Beranda</a>
            <a href="#program-profile">Profil Program</a>
            <a href="#fasilitas">Fasilitas</a>
            <a href="#alumni-insight">Alumni &amp; Prospek</a>
            <a href="#informasi-kegiatan">Informasi &amp; Kegiatan</a>
        </nav>

        <nav class="footer-column" aria-label="Website Lainnya">
            <h3>Website Lainnya</h3>
            <a href="https://ampta.ac.id/" target="_blank" rel="noopener noreferrer">Website STP AMPTA</a>
            <a href="https://pmb.ampta.ac.id/" target="_blank" rel="noopener noreferrer">Portal PMB</a>
            <a href="https://opac.ampta.ac.id/" target="_blank" rel="noopener noreferrer">Library STP Ampta</a>
            <a href="https://repository.ampta.ac.id/" target="_blank" rel="noopener noreferrer">Repository STP Ampta</a>
        </nav>

        <div class="footer-connect-column">
            <h3>Terhubung dengan Kami</h3>
            <p>Ikuti informasi kampus dan hubungi tim kami melalui kanal resmi.</p>

            <div class="footer-socials">
                <a
                    href="https://www.instagram.com/stp_ampta_yogyakarta/"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Instagram STP AMPTA"
                >
                    <span class="footer-social-icon">IG</span>
                    Instagram
                </a>
                <a
                    href="https://wa.me/6288215435648"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="WhatsApp PMB STP AMPTA"
                >
                    <span class="footer-social-icon">WA</span>
                    WhatsApp
                </a>
                <a
                    href="https://youtube.com/@stpamptayogyakartaofficial5266?si=T5ZF17D1ko5gIFSe"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="YouTube STP AMPTA"
                >
                    <span class="footer-social-icon">YT</span>
                    YouTube
                </a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName) ?>. All Right Reserved.</p>
            <p>Website Pascasarjana STP AMPTA Yogyakarta</p>
        </div>
    </div>
</footer>

<a href="#hero-section" class="back-to-top" aria-label="Kembali ke bagian atas">&uarr;</a>

<script src="<?= htmlspecialchars($appConfig['url']) ?>/assets/js/app.js"></script>
</body>
</html>
