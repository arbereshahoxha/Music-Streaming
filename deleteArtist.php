<?php

include("dynamicDiv/artist.php");

if (isset($_POST['ID'])) {
    $artistID = $_POST['ID'];
    $artist = getArtistByID($conn,$artistID);
    $artist -> deleteArtist($conn);
    header("location: readArtist.php");
} else {
    echo "Invalid ID";
}
?>
