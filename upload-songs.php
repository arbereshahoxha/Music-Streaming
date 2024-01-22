<?php
include("db.php");
include("dynamicDiv/song.php");

if (isset($_POST['submit'])) {
    $coverPhoto = $_POST['songName'];
    $emri = $_POST['songAuthors'];
    $description = $_POST['songImage'];
    $readMore = $_POST['songMedia'];
    $role = 0;

    // Check if a user with the same name or email already exists
    $sql = "SELECT * FROM song WHERE songName='$songName'";
    $result = mysqli_query($conn, $sql);
    $count_song = mysqli_num_rows($result);

    $sql = "SELECT * FROM song WHERE songAuthors='$songAuthors'";
    $result = mysqli_query($conn, $sql);
    $count_artist = mysqli_num_rows($result);

    if ($count_song == 0 || $count_artist == 0) {
        $sql = "INSERT INTO song(songName, songAuthors, songImage, songMedia) VALUES('$songName','$songAuthors', '$songImage', '$songMedia')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Song added succesfully");</script>';
            header("Location: homepage.php");
        }
    } elseif ($count_user > 0) {
        echo '<script>alert("This song already exists");</script>';
    }else {
        echo '<script>alert("There has been a server error");</script>';
    }
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