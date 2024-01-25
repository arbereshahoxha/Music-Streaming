<?php

include("dynamicDiv/users.php");
if (isset($_POST['ID'])) {
    $userID = $_POST['ID'];
    $user = getUserByID($conn, $userID);
} else {
    echo "Invalid ID";
}
if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
    $emriMbiemri = $_POST['emriMbiemri'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $user = new User($ID,$emriMbiemri,$gender,$email,$password,$role);
    $user -> editUser($conn);
    header("location:dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RATATUNES EDIT USER</title>
</head>
<body>
<h1>Edit User</h1>
    <form action="" method="POST">
    <input type="text" name="ID" value="<?=$user->getID() ?>" readonly>
    <input type="text" name="emriMbiemri" value="<?=$user->getEmriMbiemri() ?>">
    <select name="gender" value="<?=$user->getGender()?>" required>
        <option value="" disabled selected>Your Gender</option>
        <option value="option1">Male</option>
        <option value="option2">Female</option>
    </select>
    <input type="email" name="email" value="<?=$user->getEmail() ?>" >
    <input type="password" name="password" value="<?=$user->getPassword() ?>">
    <input type="text" name="role" value="<?=$user->getRole()?>">
    <button type="submit" name="submit">Update</button>
    </form>
</body>
</html>



