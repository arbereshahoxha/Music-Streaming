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
    $songID = null;
    $song = null;
    if (isset($_POST['id'])) {
        $songID = $_POST['id'];
        $song = getSongByID($conn, $songID);
    } else {
        echo "Invalid ID";
    }
    
    
    if(isset($_POST['submit'])){    
        $editedSong = new Song(
                            $_POST['songId'],
                            $_POST['songName'],
                            $_POST['songAuthor'],
                            $_POST['songImage'],
                            $_POST['songMedia'],
                            $_POST['authorID']);
                            echo $editedSong;
        $editedSong -> editSong($conn, 'songImage');
        header("location:readSongs.php");
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
        
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()" enctype='multipart/form-data'">
            <h1>Add Song</h1>
            <input type="hidden" id="songId" name="songId" value="<?= $song->getID()?>">

            <label for="songName">Song Name</label>
            <input type="text" id="songName" name="songName" value="<?= $song->getSongName()?>" required>

            <label for="songAuthor">Song Author</label>
            <input type="text" id="songAuthor" name="songAuthor" value="<?= $song->getSongAuthors()?>" required>

            <label for="songImage">Song Image</label>
            <input type="file" id="songImage" name="songImage" required>

            <label for="songMedia">Song Media</label>
            <input type="text" id="songMedia" name="songMedia" value="<?= $song->getSongMedia()?>" required>

            <input type="hidden" id="authorID" name="authorID" value="<?= $song->getAuthorID()?>">


            <button type="submit" name="submit">Update</button>
        </form>
    </body>
</html>

