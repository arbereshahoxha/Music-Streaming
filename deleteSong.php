<?php

include("dynamicDiv/song.php");

if (isset($_POST['ID'])) {
    $songID = $_POST['ID'];
    $song = getSongByID($conn,$songID);
    $song -> deleteSong($conn);
    header("location: readSongs.php");
} else {
    echo "Invalid ID";
}
?>