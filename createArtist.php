<?php
    session_start();
    if(!isset($_SESSION['email']))
    header("location:loginpage.php");
    else{
    $userRole = $_SESSION['role'];
    switch($userRole){
        case 0:
            header("location:homepage.php");
            break;
        case 1:
            header("location:homepage.php");
            break;
        default:
            break;
    }
include("dynamicDiv/artist.php");

if (isset($_POST['submit'])) {
    //Krijo nje artist te ri nga post
    $artist = new Artist(
        0, //Random ID for constructor
        $_POST['coverPhoto'],
        $_POST['emri'],
        $_POST['description'],
        $_POST['readMore']
    );
    
    $artist->addToDatabase($conn);
}?>


<html>
    <head>
        <title>RATATUNES CREATE ARTIST</title>
        <link rel="stylesheet" href="styling/create.css">
    </head>
    <body>
        <header>
        <a href="dashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES CREATE ARTIST</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" >
        <h1>Create Artist</h1>
        <label for="coverPhoto">Cover Photo</label>
        <input type="file" id="coverPhoto" name="coverPhoto" accept="image/*"/>

        <label for="emri">Name :</label>
        <input type="text" id="emri" name="emri" required>

        <label for="description">Description:</label>
        <textarea  id="description" name="description" required></textarea>

        <label for="readMore">Read More:</label>
        <textarea id="readMore" name="readMore" required></textarea>

        <button type="submit" name="submit">Create Artist</button>
        </form>
    </body>
</html>

<?php } ?>
