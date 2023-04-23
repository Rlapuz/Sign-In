// Frontend Validation
const isvalid = () => {

    const user = document.getElementById("user").value;
    const pass = document.getElementById("pass").value;

    const nameError = document.getElementById("name-error");
    const passError = document.getElementById("pass-error");

    // Reset error messages
    nameError.textContent = "";
    passError.textContent = "";

    if (user.length === 0) {
        nameError.textContent = "Please enter a username";
        return false;
    }

    if (pass.length === 0) {
        passError.textContent = "Please enter a password";
        return false;
    }

    if (pass.length < 8) {
        passError.textContent = "Password must be at least 8 characters long";
        return false;
    }
    return true;
}