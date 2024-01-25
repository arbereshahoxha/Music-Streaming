<?php
    session_start();
    $userRole = $_SESSION['role'];
    $userID = $_SESSION['ID'];
    if(!isset($_SESSION['email'])) {
        header("location:loginpage.php");
    }
    else{
        switch($userRole){
            case 0:
                header("location:homepage.php");
                break;
            default:
                break;
        }
    }
    include("dynamicDiv/song.php");
    $songID;
    if (isset($_POST['id'])) {
        $songID = $_POST['id'];

    } else {
        echo "Invalid ID";
    }
    $song = getSongByID($conn, $songID);
    
    if(isset($_POST['submit'])){
        $ID = $_POST['ID'];
        $coverPhoto = $_POST['coverPhoto'];
        $emri = $_POST['emri'];
        $description = $_POST['description'];
        $readMore = $_POST['readMore'];
    
    
        $editedSong = new Song(
                            $_POST['songId'],
                            $_POST['songName'],
                            $_POST['songAuthor'],
                            $_POST['songImage'],
                            $_POST['songMedia'],
                            $_POST['authorID']);
        $editedSong -> editSong($conn);
        header("location:dashboard.php");
    }

?>

<html>
    <head>
        <title>RATATUNES EDIT SONG</title>
        <link rel="stylesheet" href="styling/create.css">
        <script src="script.js"></script>
    </head>
    <body>
        <header>
            <a href="artistDashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES EDIT SONG</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()">
            <h1>Add Song</h1>
            <input type="hidden" id="songId" name="songId" value="<?= $song->getID()?>">

            <label for="songName">Song Name</label>
            <input type="text" id="songName" name="songName" value="<?= $song->getSongName()?>" required>

            <label for="songAuthor">Song Author</label>
            <input type="text" id="songAuthor" name="songAuthor" value="<?= $song->getSongAuthors()?>" required>

            <label for="songImage">Song Image</label>
            <input type="file" id="songImage" name="songImage" value="<?= $song->getSongImage()?>"  required>

            <label for="songMedia">Song Media</label>
            <input type="text" id="songAuthor" name="songAuthor" value="<?= $song->getSongMedia()?>" required>

            <input type="hidden" id="authorID" name="authorID" value="<?= $song->getAuthorID()?>">


            <button type="submit" name="submit">Update</button>
        </form>
    </body>
</html>

