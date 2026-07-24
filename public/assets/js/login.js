document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.querySelector("#internal-login-password");
    const passwordToggle = document.querySelector("[data-password-toggle]");
    const usernameInput = document.querySelector('input[name="username"]');
    const rememberUsername = document.querySelector("[data-remember-username]");
    const loginForm = document.querySelector("[data-login-form], [data-login-demo]");
    const rememberedUsernameKey = "ampta_remembered_username";

    try {
        const rememberedUsername = window.localStorage.getItem(rememberedUsernameKey);

        if (
            rememberedUsername
            && usernameInput instanceof HTMLInputElement
            && usernameInput.value.trim() === ""
        ) {
            usernameInput.value = rememberedUsername;
        }

        if (rememberedUsername && rememberUsername instanceof HTMLInputElement) {
            rememberUsername.checked = true;
        }
    } catch {
        // Login tetap dapat digunakan jika penyimpanan browser dinonaktifkan.
    }

    passwordToggle?.addEventListener("click", function () {
        if (!(passwordInput instanceof HTMLInputElement)) return;

        const willShow = passwordInput.type === "password";
        passwordInput.type = willShow ? "text" : "password";
        passwordToggle.setAttribute("aria-pressed", willShow ? "true" : "false");
        passwordToggle.textContent = willShow ? "Sembunyi" : "Lihat";
    });

    loginForm?.addEventListener("submit", function () {
        if (
            !(usernameInput instanceof HTMLInputElement)
            || !(rememberUsername instanceof HTMLInputElement)
        ) {
            return;
        }

        try {
            if (rememberUsername.checked && usernameInput.value.trim() !== "") {
                window.localStorage.setItem(rememberedUsernameKey, usernameInput.value.trim());
            } else {
                window.localStorage.removeItem(rememberedUsernameKey);
            }
        } catch {
            // Penyimpanan username bersifat opsional dan tidak menghalangi login.
        }
    });
});
