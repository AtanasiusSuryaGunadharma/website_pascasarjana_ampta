document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.querySelector("#internal-login-password");
    const passwordToggle = document.querySelector("[data-password-toggle]");
    const captchaCheck = document.querySelector("[data-captcha-check]");
    const loginForm = document.querySelector("[data-login-demo]");
    const loginStatus = document.querySelector("[data-login-status]");

    passwordToggle?.addEventListener("click", function () {
        if (!(passwordInput instanceof HTMLInputElement)) return;

        const willShow = passwordInput.type === "password";
        passwordInput.type = willShow ? "text" : "password";
        passwordToggle.setAttribute("aria-pressed", willShow ? "true" : "false");
        passwordToggle.textContent = willShow ? "Sembunyi" : "Lihat";
    });

    captchaCheck?.addEventListener("click", function () {
        const isChecked = captchaCheck.getAttribute("aria-pressed") === "true";
        captchaCheck.setAttribute("aria-pressed", isChecked ? "false" : "true");
    });

    loginForm?.addEventListener("submit", function (event) {
        event.preventDefault();

        if (captchaCheck?.getAttribute("aria-pressed") !== "true") {
            if (loginStatus) loginStatus.textContent = "Silakan centang verifikasi captcha terlebih dahulu.";
            captchaCheck?.focus();
            return;
        }

        if (loginStatus) {
            loginStatus.textContent = "Tampilan login berhasil diuji. Proses autentikasi belum diaktifkan.";
        }
    });
});
