<?php
include("db.php");

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
            echo '<script>loadContent("dashboard.php");</script>';
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

<h1>Create User</h1>
    <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()">
        <label for="emriMbiemri">First & Last Name:</label>
        <input type="text" id="emriMbiemri" name="emriMbiemri" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="" disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="submit">Create User</button>
    </form>
    <script src="script.js"></script>


<!-- 
// include "db.php";

// if(isset($_POST['submit'])){
//     $emriMbiemri = $_POST['emriMbiemri'];
//     $gender = $_POST['gender'];
//     $email= $_POST['email'];
//     $password = $_POST['password'];
//     $role = 0;

//     //Per me kontrollu a ekziston ne databaze ni user me te njejtin emer mbiemer ose email
//     $sql = "select * from user where emriMbiemri='$emriMbiemri'";
//     $result = mysqli_query($conn, $sql);
//     $count_user = mysqli_num_rows($result);

//     $sql = "select * from user where email='$email'";
//     $result = mysqli_query($conn, $sql);
//     $count_email = mysqli_num_rows($result);

//     if($count_user == 0 && $count_email == 0){
//         $sql = "INSERT INTO user(emriMbiemri,gender,email,password,role) values('$emriMbiemri','$gender','$email','$password','$role')";
//         $result = mysqli_query($conn , $sql);
//         if($result){
//             echo '<script>alert("SignUp succesful")</script>';
//             header("location: dashboard.php");
//             exit;
//         }
//     }elseif($count_user > 0){
//         echo '<script>alert("This person already exists")</script>';
//     }elseif($count_email > 0){
//         echo '<script>alert("This email already exists")</script>';
//     } else{ 
//         echo '<script>alert("There has been a server error")</script>';
//     }  
    
// }

?> -->
<!-- 
<form onsubmit="return validateForm()" method="post" action="">
    <input type="text" id="name" name="emriMbiemri" placeholder="Your First & Last Name" required>
    <select name="gender" required>
        <option value="" disabled selected>Your Gender</option>
        <option value="option1">Male</option>
        <option value="option2">Female</option>
    </select>
    <input type="text" id="email" name="email" placeholder="Your Email" required>
    <input type="password" id="password" name="password" placeholder="Your Password" required>
    <input type="password" id="passwordConfirm" name="cpassword" placeholder="Confirm Your Password" required>
    <button type="submit" name="submit">Create User</button>
</form>
<script src="script.js"></script> -->