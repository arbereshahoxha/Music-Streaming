<?php
include("dynamicDiv/song.php");

if (isset($_POST['submit'])) {
    $song = new Song(
        0, //Random ID
        $_POST['songName'],
        $_POST['songAuthors'],
        $_POST['songImage'],
        $_POST['songMedia'],
    );

    $song->addToDatabase($conn);
}

?>

<h1>Upload Songs</h1>
<form action="" method="POST" >
    <label for="songName">Song Name : </label>
    <input type="text" id="coverPhoto" name="songName"/>

    <label for="songAuthors">Song Authors:</label>
    <input type="text" id="songAuthors" name="songAuthors"/>

    <label for="songImage">Song Image:</label>
    <input id="file" name="songImage"/>

    <label for="songMedia">Song Media:</label>
    <input type="text" id="songMedia" name="songMedia"/>

    <button type="submit" name="submit">Done</button>

</form>