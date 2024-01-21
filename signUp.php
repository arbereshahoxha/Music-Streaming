<?php
include("db.php");
include("users.php");

if (isset($_POST['submit'])) {
    $emriMbiemri = $_POST['emriMbiemri'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 0;

    // Check if a user with the same name or email already exists
    $sql = "SELECT * FROM user WHERE emriMbiemri='$emriMbiemri'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_user == 0 && $count_email == 0) {
        $sql = "INSERT INTO user(emriMbiemri, gender, email, password, role) VALUES('$emriMbiemri', '$gender', '$email', '$password', $role)";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("SignUp successful");</script>';
            header("Location: homepage.php");
        }
    } elseif ($count_user > 0) {
        echo '<script>alert("This person already exists");</script>';
    } elseif ($count_email > 0) {
        echo '<script>alert("This email already exists");</script>';
    } else {
        echo '<script>alert("There has been a server error");</script>';
    }
}
?>