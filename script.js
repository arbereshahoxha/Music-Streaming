// Validimi i formave - sign up

// function validateForm(){
//     var name = document.getElementById('name').value;
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;
//     var confirmPassword = document.getElementById('passwordConfirm').value;
    
//     var nameRegex = /^[a-zA-Z\s]$/;
//     if(!nameRegex.test(name)){
//         alert('Please enter a valid name');
//         return false;
//     }
//     var emailRegex = /^[^\s@]+@[^\s@]+[^\s@]+$/;
//     if(!emailRegex.test(email)){
//         alert('Please enter a valid email');
//         return false;
//     }
//     if(password.length < 8){
//         alert('Password must be at least 8 characters ');
//         return false;
//     }
//     if(password !== confirmPassword){
//         alert('Passwords do not match')
//         return false;
//     }
//     return true;
// }
function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('passwordConfirm').value;

    var nameRegex = /^[a-zA-Z\s]*$/;
    if (!nameRegex.test(name)) {
        alert('Please enter a valid name');
        return false;
    }

    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email');
        return false;
    }

    if (password.length < 8) {
        alert('Password must be at least 8 characters');
        return false;
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return false;
    }

    alert('Signup successful!');
    return true;
}

//audio player
function playSong(song) {
    let player = document.getElementById("player");
    player.src = song;
    player.type = 'audio/mp3'
    player.load();
    player.play();
}