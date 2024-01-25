<?php
    session_start();
    if(!isset($_SESSION['email']))
        header("location:loginpage.php");
    else {
        $userRole = $_SESSION['role'];
        switch($userRole){
            case 0:
                header("location:homepage.php");
                break;
            default:
                break;
        }
    }
    include("dynamicDiv/song.php");

    if (isset($_POST['submit'])) {
        $song = new Song(
            0, //Random ID for constructor
            $_POST['songName'],
            $_SESSION["emriMbiemri"],
            $_POST['songImage'],
            "nomedia",
            $_SESSION['ID']);

        $song->addToDatabase($conn);
    }
?>

<html>
    <head>
        <title>RATATUNES ADD SONG</title>
        <link rel="stylesheet" href="styling/create.css">
        <script src="script.js"></script>
    </head>
    <body>
        <header>
            <a href="artistDashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES ADD SONG</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()">
            <h1>Add Song</h1>
            <label for="songName">Song Name</label>
            <input type="text" id="songName" name="songName" required>


            <label for="songImage">Song Image</label>
            <input type="file" id="songImage" name="songImage" required>

            <button type="submit" name="submit">Add Song</button>
        </form>
    </body>
</html>