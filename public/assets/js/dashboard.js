document.addEventListener("DOMContentLoaded", function () {
    const body = document.body;
    const toggle = document.querySelector("[data-sidebar-toggle]");
    const overlay = document.querySelector("[data-sidebar-overlay]");

    function closeMobileSidebar() {
        body.classList.remove("admin-sidebar-mobile-open");
        if (window.matchMedia("(max-width: 840px)").matches) {
            toggle?.setAttribute("aria-expanded", "false");
        }
    }

    toggle?.addEventListener("click", function () {
        if (window.matchMedia("(max-width: 840px)").matches) {
            const willOpen = !body.classList.contains("admin-sidebar-mobile-open");
            body.classList.toggle("admin-sidebar-mobile-open", willOpen);
            toggle.setAttribute("aria-expanded", willOpen ? "true" : "false");
            return;
        }

        const willCollapse = !body.classList.contains("admin-sidebar-collapsed");
        body.classList.toggle("admin-sidebar-collapsed", willCollapse);
        toggle.setAttribute("aria-expanded", willCollapse ? "false" : "true");
    });

    overlay?.addEventListener("click", closeMobileSidebar);

    window.addEventListener("resize", function () {
        if (!window.matchMedia("(max-width: 840px)").matches) {
            closeMobileSidebar();
            toggle?.setAttribute(
                "aria-expanded",
                body.classList.contains("admin-sidebar-collapsed") ? "false" : "true"
            );
        }
    });
});
