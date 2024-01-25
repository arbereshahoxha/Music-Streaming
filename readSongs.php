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
?>

<html>
    <head>
        <title>RATATUNES - UPLOAD SONGS</title>
        <link rel="stylesheet" href="styling/read.css">
    </head>
    <body>
        <header>
            <a href="artistDashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES SONGS PANEL</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>Song Name</th>
                <th>Song Authors</th>
                <th>Song Image</th>
                <th>Song Media File</th>
                <th>Author ID</th>
            </tr>
            <?php
                if ($userRole == 1) {
                    showArtistSongs($conn, $_SESSION['ID']);
                } else if ($userRole == 2) {
                    showAllSongs($conn);
                } else {
                    echo "<script>alert('Server error!')</script";
                }
            ?>
        </table>
    </body>
</html>
