document.addEventListener("DOMContentLoaded", function () {
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
