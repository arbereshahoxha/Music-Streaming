<?php
include("users.php");

if (isset($_POST['submit'])) {

    //Krijo user te ri nga post
    $user = new User(
        $_POST['emriMbiemri'],
        $_POST['gender'],
        $_POST['email'],
        $_POST['password'],
        0
    );

    //Shto userin ne databaze
    $user->addToDatabase($conn);
}
?>

<html>
    <head>
        <title>SignUp Page</title>
        <link rel="stylesheet" href="signupstyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;700;800&family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="loginBlock">
                <div class="loginMain">
                    <h1>Have an Account?</h1>
                    <p>Log into your account here</p>
                    <a href="loginpage.php"><button>Log In</button></a>
                </div>
            </div>


            <div class="signUpBlock">
                <div class="topSignUp">
                    <img src="Logot/PurpleLogo.png" alt="Logo" class="logo">
                    <h3>Music Streaming</h3>
                </div>

                <div class="mainSignUp">
                    <h1>Create an Account</h1>
                    <p>Sign up using social networks</p>

                    <div class="socialMediaIcons">
                        <a href=""><img src="Logot/google.png" alt="Google"></a>
                        <a href=""><img src="Logot/facebook.png" alt="Facebook"></a>
                        <a href=""><img src="Logot/linkedin.png" alt="LinkedIn"></a>
                    </div> 

                    <div class="hrBreak">
                        <hr>
                        <p>OR</p>
                        <hr>
                    </div>

                    <form class="signUpForm" onsubmit="return validateForm()" method="post">
                        <input type="text" id="name" name="emriMbiemri" placeholder="Your First & Last Name" required>
                        <select name="gender" required>
                            <option value="" disabled selected>Your Gender</option>
                            <option value="option1">Male</option>
                            <option value="option2">Female</option>
                        </select>
                        <input type="text" id="email" name="email" placeholder="Your Email" required>
                        <input type="password" id="password" name="password" placeholder="Your Password" required>
                        <input type="password" id="passwordConfirm" name="cpassword" placeholder="Confirm Your Password" required>
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>

    </body>
</html>