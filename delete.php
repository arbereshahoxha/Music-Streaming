<?php

include("dynamicDiv/users.php");

if (isset($_POST['ID'])) {
    $userID = $_POST['ID'];

    // $conn = new DatabaseConnection; 
    // $connection = $conn->startConnection();
    $user = new User();

    $user -> deleteUser( $userID);
    header("location: dashboard.php");
} else {
    echo "Invalid ID";
}
?>
