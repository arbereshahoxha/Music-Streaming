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
    if (isValid) {
        document.getElementById("yourFormId").submit();
    }
    return isValid;
}

//Validimi te krijimi i artisteve
function validateArtist() {
    var coverPhoto = document.getElementById("coverPhoto").value;
    var emri = document.getElementById("emri").value;
    var description = document.getElementById("description").value;
    var readMore = document.getElementById("readMore").value;

    if (coverPhoto === "") {
        alert("Please select a cover photo");
        return false;
    }

    if (emri === "") {
        alert("Please enter a name");
        return false;
    }

    if (description === "") {
        alert("Please enter a description");
        return false;
    }

    if (readMore === "") {
        alert("Please enter additional information");
        return false;
    }

    return true;
}
//Validimi te krijimi i userave
function validateUser() {
    var emriMbiemri = document.getElementById('emriMbiemri').value;
    var gender = document.getElementById('gender').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var role = document.getElementById('role').value;

    if (emriMbiemri === "") {
        alert("Please enter your First & Last Name");
        return false;
    }

    if (gender === "") {
        alert("Please select a Gender");
        return false;
    }

    if (email === "") {
        alert("Please enter your Email");
        return false;
    }

    if (password === "") {
        alert("Please enter a Password");
        return false;
    }

    if (role === "") {
        alert("Please enter a Role");
        return false;
    }

    return true;
}
//Validimi te add songs
function validateSong() {
    var songName = document.getElementById("songName").value;
    var songImage = document.getElementById("songImage").value;

    if (songName === "") {
        alert("Please enter a Song Name");
        return false;
    }

    if (songImage === "") {
        alert("Please select a Song Image");
        return false;
    }

    return true;
}