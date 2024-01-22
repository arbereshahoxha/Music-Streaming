<?php
    session_start();
    if(!isset($_SESSION['email']))
        header("location:loginpage.php");
    else{
        $userRole = $_SESSION['role'];
        switch($userRole){
            case 0:
                header("location:homepage.php");
                break;
            default:
                break;
        }
include("dynamicDiv/users.php");

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
        <title>RATATUNES CREATE USER</title>
        <link rel="stylesheet" href="styling/create.css">
    </head>
    <body>
        <header>
            <a href="dashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES CREATE USER</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()">
            <h1>Create User</h1>
            <label for="emriMbiemri">First & Last Name</label>
            <input type="text" id="emriMbiemri" name="emriMbiemri" required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Create User</button>
        </form>
<script src="script.js"></script>
    </body>
</html>
<?php } ?>