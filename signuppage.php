<?php
include("db.php");
if(isset($_POST['submit'])){
    $emriMbiemri = $_POST['emriMbiemri'];
    $gender = $_POST['gender'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $role = false;

    //Per me kontrollu a ekziston ne databaze ni user me te njejtin emer mbiemer ose email
    $sql = "select * from user where emriMbiemri='$emriMbiemri'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from user where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 && $count_email == 0){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user(emriMbiemri,gender,email,password,role) values('$emriMbiemri','$gender','$email','$password','$role')";
        $result = mysqli_query($conn , $sql);
        if($result){
            echo 
            '<script>alert("SignUp succesful")</script>';
            header("Location: logimpage.php");
        }
    }else{
        if($count_user > 0){
            echo 
            '<script>alert("This person already exists")</script>';
            header("Location: loginpage.php");
        }
        if($count_email > 0){
            echo '<script>alert("This email already exists")</script>';
            header("Location: loginpage.php");
        }
    }


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