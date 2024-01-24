<?php

include("dynamicDiv/artist.php");

if (isset($_GET['ID'])) {
    $artistID = $_GET['ID'];

    $conn = new DatabaseConnection; 
    $connection = $conn->startConnection();

    Artist::deleteArtist($connection, $artistID);
    header("location: dashboard.php");
} else {
    echo "Invalid ID";
}
?>
