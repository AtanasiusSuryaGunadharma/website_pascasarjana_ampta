document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.querySelector("[data-nav-toggle]");
    const navContent = document.querySelector("[data-nav-content]");
    const searchToggle = document.querySelector("[data-search-toggle]");
    const searchPanel = document.querySelector("[data-search-panel]");
    const searchForm = document.querySelector("[data-site-search]");
    const searchInput = document.querySelector("[data-search-input]");
    const searchStatus = document.querySelector("[data-search-status]");

    function closeSearch() {
        if (!searchToggle || !searchPanel) return;
        searchPanel.hidden = true;
        searchToggle.setAttribute("aria-expanded", "false");
        searchToggle.setAttribute("aria-label", "Buka pencarian");
    }

    function closeNavigation() {
        if (!navToggle || !navContent) return;
        navContent.classList.remove("is-open");
        navToggle.setAttribute("aria-expanded", "false");
        navToggle.setAttribute("aria-label", "Buka navigasi");
    }

    navToggle?.addEventListener("click", function () {
        const willOpen = !navContent?.classList.contains("is-open");
        navContent?.classList.toggle("is-open", willOpen);
        navToggle.setAttribute("aria-expanded", willOpen ? "true" : "false");
        navToggle.setAttribute("aria-label", willOpen ? "Tutup navigasi" : "Buka navigasi");
        if (!willOpen) closeSearch();
    });

    searchToggle?.addEventListener("click", function () {
        if (!searchPanel) return;
        const willOpen = searchPanel.hidden;
        searchPanel.hidden = !willOpen;
        searchToggle.setAttribute("aria-expanded", willOpen ? "true" : "false");
        searchToggle.setAttribute("aria-label", willOpen ? "Tutup pencarian" : "Buka pencarian");
        if (willOpen) {
            window.setTimeout(() => searchInput?.focus(), 50);
        }
    });

    searchForm?.addEventListener("submit", function (event) {
        event.preventDefault();
        const query = searchInput?.value.trim().toLocaleLowerCase("id-ID") ?? "";

        document.querySelectorAll(".site-search-highlight").forEach((element) => {
            element.classList.remove("site-search-highlight");
        });

        if (query.length < 2) {
            if (searchStatus) searchStatus.textContent = "Masukkan minimal 2 karakter untuk melakukan pencarian.";
            searchInput?.focus();
            return;
        }

        const searchTargets = Array.from(document.querySelectorAll(
            "main h1, main h2, main h3, main p, main a, .site-footer h3, .site-footer p, .site-footer a"
        ));
        const match = searchTargets.find((element) =>
            element.textContent?.trim().toLocaleLowerCase("id-ID").includes(query)
        );

        if (!match) {
            if (searchStatus) searchStatus.textContent = `Informasi “${searchInput?.value.trim()}” belum ditemukan pada halaman ini.`;
            return;
        }

        if (searchStatus) searchStatus.textContent = `Hasil ditemukan. Mengarahkan ke bagian terkait…`;
        closeSearch();
        closeNavigation();
        match.classList.add("site-search-highlight");
        match.scrollIntoView({ behavior: "smooth", block: "center" });
        window.setTimeout(() => match.classList.remove("site-search-highlight"), 2300);
    });

    navContent?.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function () {
            if (window.matchMedia("(max-width: 1180px)").matches) closeNavigation();
            closeSearch();
        });
    });

    document.addEventListener("click", function (event) {
        const target = event.target;
        if (!(target instanceof Node)) return;
        if (searchPanel && searchToggle && !searchPanel.contains(target) && !searchToggle.contains(target)) {
            closeSearch();
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            closeSearch();
            closeNavigation();
        }
    });

    window.addEventListener("resize", function () {
        if (!window.matchMedia("(max-width: 1180px)").matches) closeNavigation();
    });

    const carousel = document.querySelector("[data-carousel]");

    if (carousel) {
        const slides = Array.from(carousel.querySelectorAll(".carousel-slide"));
        const indicators = Array.from(carousel.querySelectorAll(".carousel-indicator"));
        const prevButton = carousel.querySelector("[data-prev]");
        const nextButton = carousel.querySelector("[data-next]");

        if (slides.length > 0) {
            let currentIndex = 0;
            let autoplay = null;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("is-active", i === index);
                });

                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle("is-active", i === index);
                });

                currentIndex = index;
            }

            function nextSlide() {
                showSlide((currentIndex + 1) % slides.length);
            }

            function prevSlide() {
                showSlide((currentIndex - 1 + slides.length) % slides.length);
            }

            function stopAutoplay() {
                if (autoplay !== null) {
                    window.clearInterval(autoplay);
                    autoplay = null;
                }
            }

            function startAutoplay() {
                stopAutoplay();
                autoplay = window.setInterval(nextSlide, 5000);
            }

            nextButton?.addEventListener("click", function () {
                nextSlide();
                startAutoplay();
            });

            prevButton?.addEventListener("click", function () {
                prevSlide();
                startAutoplay();
            });

            indicators.forEach((indicator, index) => {
                indicator.addEventListener("click", function () {
                    showSlide(index);
                    startAutoplay();
                });
            });

            carousel.addEventListener("mouseenter", stopAutoplay);
            carousel.addEventListener("mouseleave", startAutoplay);
            carousel.addEventListener("focusin", stopAutoplay);
            carousel.addEventListener("focusout", startAutoplay);

            showSlide(0);
            startAutoplay();
        }
    }

    const testimonialCarousel = document.querySelector("[data-testimonial-carousel]");

    if (testimonialCarousel) {
        const testimonialSlides = Array.from(testimonialCarousel.querySelectorAll("[data-testimonial-slide]"));
        const testimonialDots = Array.from(testimonialCarousel.querySelectorAll("[data-testimonial-dot]"));
        const testimonialPrev = testimonialCarousel.querySelector("[data-testimonial-prev]");
        const testimonialNext = testimonialCarousel.querySelector("[data-testimonial-next]");

        if (testimonialSlides.length > 0) {
            let testimonialIndex = 0;
            let testimonialAutoplay = null;

            function showTestimonial(index) {
                testimonialSlides.forEach((slide, slideIndex) => {
                    const isActive = slideIndex === index;
                    slide.classList.toggle("is-active", isActive);
                    slide.setAttribute("aria-hidden", isActive ? "false" : "true");
                });

                testimonialDots.forEach((dot, dotIndex) => {
                    const isActive = dotIndex === index;
                    dot.classList.toggle("is-active", isActive);
                    dot.setAttribute("aria-current", isActive ? "true" : "false");
                });

                testimonialIndex = index;
            }

            function stopTestimonialAutoplay() {
                if (testimonialAutoplay !== null) {
                    window.clearInterval(testimonialAutoplay);
                    testimonialAutoplay = null;
                }
            }

            function startTestimonialAutoplay() {
                stopTestimonialAutoplay();
                if (testimonialSlides.length < 2) return;
                testimonialAutoplay = window.setInterval(function () {
                    showTestimonial((testimonialIndex + 1) % testimonialSlides.length);
                }, 6500);
            }

            testimonialPrev?.addEventListener("click", function () {
                showTestimonial((testimonialIndex - 1 + testimonialSlides.length) % testimonialSlides.length);
                startTestimonialAutoplay();
            });

            testimonialNext?.addEventListener("click", function () {
                showTestimonial((testimonialIndex + 1) % testimonialSlides.length);
                startTestimonialAutoplay();
            });

            testimonialDots.forEach((dot, index) => {
                dot.addEventListener("click", function () {
                    showTestimonial(index);
                    startTestimonialAutoplay();
                });
            });

            testimonialCarousel.addEventListener("mouseenter", stopTestimonialAutoplay);
            testimonialCarousel.addEventListener("mouseleave", startTestimonialAutoplay);
            testimonialCarousel.addEventListener("focusin", stopTestimonialAutoplay);
            testimonialCarousel.addEventListener("focusout", startTestimonialAutoplay);

            showTestimonial(0);
            startTestimonialAutoplay();
        }
    }

    const backToTop = document.querySelector(".back-to-top");
    const programProfile = document.querySelector("#program-profile");
    const siteHeader = document.querySelector(".site-header");

    if (backToTop && programProfile) {
        function updateBackToTopVisibility() {
            const headerHeight = siteHeader?.offsetHeight ?? 0;
            const programProfileTop = programProfile.getBoundingClientRect().top + window.scrollY - headerHeight;
            const shouldShow = window.scrollY >= programProfileTop;

            backToTop.classList.toggle("is-visible", shouldShow);
            backToTop.setAttribute("aria-hidden", shouldShow ? "false" : "true");
            backToTop.setAttribute("tabindex", shouldShow ? "0" : "-1");
        }

        backToTop.addEventListener("click", function (event) {
            event.preventDefault();
            document.querySelector("#hero-section")?.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        });

        window.addEventListener("scroll", updateBackToTopVisibility, { passive: true });
        window.addEventListener("resize", updateBackToTopVisibility);
        updateBackToTopVisibility();
    }
});
