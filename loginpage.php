<?php
if(isset($_POST["LogInButton"])){
    if(empty($_POST["email"]) || empty($_POST["password"])){
        echo '<script>alert("Please fill in all the fields");</script>';
    }else{
        $email= $_POST["email"];
        $password = $_POST["password"];

        include"users.php";
        $i= 0;
        foreach($users as $user){
            if($user["email"] == $email && $user["password"] == $password){
                session_start();

                $_SESSION["email"] = $user["email"];
                $_SESSION["password"] = $password;
                $_SESSION["role"] = $user["role"];
                $_SESSION["loginTime"] = date("h:i:s");
                header("location:homepage.php");
                exit();
            }else{
                $i++;
                if($i == sizeof($users)) {
                    echo "Incorrect email or password";
                    exit();
                }
            }
        }
    }
}


?>

<html lang="en">
    <head>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="loginstyle.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;700;800&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="loginBlock">
                <div class="topLogin">
                    <img src="Logot/PurpleLogo.png" alt="Logo" class="logo">
                    <h3>Music Streaming</h3>
                </div>

                <div class="mainLogin">
                    <h1>Login to Your Account</h1>
                    <p>Login using social networks</p>

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

                    <div class="loginForm">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <a href="homepage.html"><button name="LogInButton">Log In</button></a>
                        </form>
                    </div>
                </div>
                
            </div>

            <div class="signUpBlock">
                <div class="signUpMain">
                    <h1>New Here?</h1>
                    <p>Quickly set up your new account.</p>
                    <a href="signuppage.php"><button>Sign Up</button></a>
                </div>
            </div>
        </div>
        
    </body>
</html>