const eyeIcon = document.getElementById("eye-icon");
const passInput = document.getElementById("pass");

eyeIcon.addEventListener("click", () => {
    const show = eyeIcon.dataset.show === "false";
    eyeIcon.dataset.show = show;
    if (show) {
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
        passInput.type = "text";
    } else {
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
        passInput.type = "password";
    }
});