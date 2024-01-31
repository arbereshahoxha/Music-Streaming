<?php

include("dynamicDiv/song.php");

if (isset($_POST['id'])) {
    $songID = $_POST['id'];
    $song = getSongByID($conn,$songID);
    $song -> deleteSong($conn);
    header("location: readSongs.php");
} else {
    echo "Invalid ID";
}
?>