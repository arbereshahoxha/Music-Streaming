<?php

include("dynamicDiv/users.php");

if (isset($_GET['ID'])) {
    $userID = $_GET['ID'];

    $conn = new DatabaseConnection; 
    $connection = $conn->startConnection();

    User::deleteUser($connection, $userID);
    header("location: dashboard.php");
} else {
    echo "Invalid ID";
}
?>
