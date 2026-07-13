document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector("[data-carousel]");

    if (!carousel) {
        return;
    }

    const slides = Array.from(carousel.querySelectorAll(".carousel-slide"));
    const indicators = Array.from(carousel.querySelectorAll(".carousel-indicator"));
    const prevButton = carousel.querySelector("[data-prev]");
    const nextButton = carousel.querySelector("[data-next]");

    if (slides.length === 0) {
        return;
    }

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
});
