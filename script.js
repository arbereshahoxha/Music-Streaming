// Validimi i formave - sign up

function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('passwordConfirm').value;

    var isValid = true;
    var nameRegex = /^[a-zA-Z\s]*$/;
    if (!nameRegex.test(name)) {
        alert('Please enter a valid name');
        isValid = false;
    }
    var emailRegex = /^\S+@\S+\.\S*$/;
    if (email.trim() !== '' && !emailRegex.test(email)) {
        alert("Please enter a valid email");
        isValid = false;
    }
    if (password.trim() !== '' && password.length < 8) {
        alert("Password must be at least 8 characters");
        isValid = false;
    }
    if (confirmPassword !== password) {
        alert("Passwords do not match");
        isValid = false;
    }
    if (isValid && !alert('Signup successful!')) {
        document.getElementById("yourFormId").submit();
    }

    return isValid;
}

