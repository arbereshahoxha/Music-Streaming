<?php

include("dynamicDiv/artist.php");
if (isset($_POST['ID'])) {
    $artistID = $_POST['ID'];
    $artist = getArtistByID($conn, $artistID);
} else {
    echo "Invalid ID";
}
if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
    $coverPhoto = $_POST['coverPhoto'];
    $emri = $_POST['emri'];
    $description = $_POST['description'];
    $readMore = $_POST['readMore'];


    $artist = new Artist($ID,$coverPhoto,$emri,$description,$readMore);
    $artist -> editArtist($conn);
    header("location:readArtist.php");
}

?>

<html>
    <head>
        <title>RATATUNES EDIT ARTIST</title>
        <link rel="stylesheet" href="styling/create.css">
    </head>
    <body>
    <header>
            <a href="artistDashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES EDIT ARTIST</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <form action="" method="POST" >

        <label for="id">ID :</label>
        <input type="text" id="ID" name="ID" value="<?=$artist->getID() ?>" required>

        <label for="coverPhoto">Cover Photo</label>
        <input type="file" id="coverPhoto" name="coverPhoto" value="<?=$artist->getCoverPhoto() ?>" accept="image/*"/>

        <label for="emri">Name :</label>
        <input type="text" id="emri" name="emri" value="<?=$artist->getEmri() ?>" required>

        <label for="description">Description:</label>
        <textarea  id="description" name="description" value="<?=$artist->getDescription() ?>" required></textarea>

        <label for="readMore">Read More:</label>
        <textarea id="readMore" name="readMore" value="<?=$artist->getReadMore() ?>" required></textarea>

        <button type="submit" name="submit">Update</button>
        </form>
    </body>
</html>