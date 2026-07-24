document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.querySelector("#internal-login-password");
    const passwordToggle = document.querySelector("[data-password-toggle]");

    passwordToggle?.addEventListener("click", function () {
        if (!(passwordInput instanceof HTMLInputElement)) return;

        const willShow = passwordInput.type === "password";
        passwordInput.type = willShow ? "text" : "password";
        passwordToggle.setAttribute("aria-pressed", willShow ? "true" : "false");
        passwordToggle.textContent = willShow ? "Sembunyi" : "Lihat";
    });

});
