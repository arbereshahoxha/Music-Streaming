<?php

include("dynamicDiv/users.php");

if (isset($_POST['ID'])) {
    $userID = $_POST['ID'];
    $user = getUserByID($conn, $userID);
    $user -> deleteUser($conn);    
    header("location: read.php");
} else {
    echo "Invalid ID";
}
?>
