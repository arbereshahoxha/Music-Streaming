// Validimi i formave - sign up

function validateForm(){
    var name = document.getElementById('name').value;
    var name = document.getElementById('email').value;
    var name = document.getElementById('password').value;
    var name = document.getElementById('passwordConfirm').value;
    
    var nameRegex = /^[a-zA-Z\s]$/;
    if(!nameRegex.test(name)){
        aler('Please enter a valid name');
        return false;
    }
    var emailRegex = /^$/;
    if(!emailRegex.test(email)){
        aler('Please enter a valid email');
        return false;
    }
    if(password.length < 8){
        alert('Password must be at least 8 characters ');
        return false;
    }

    if(password !== confirmPassword){
        alert('Passwords do not match')
        return false;
    }
    
}