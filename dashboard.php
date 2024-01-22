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
        default:
            break;
    }
?>
<html>
    <head>
        <title>Admin Dashboard Panel</title>
        <link rel="stylesheet" href="styling/dashboard.css">
    </head>

    <body>
        <header>
            <a href="homepage.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES DASHBOARD PANEL</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>

        <div id="users_artists">
            <div class="users_artists_div">
                <h1 class="title">USERS</h1>
                <button class="user_artists_button" onclick="window.location.href='read.php'">See All</button>
                <button class="user_artists_button" onclick="window.location.href='create.php'">NEW</button>
            </div>
            <div class="users_artists_div">
                    <h1 class="title">ARTISTS</h1>
                    <button class="user_artists_button" onclick="window.location.href='readArtist.php'">See All</button>    
                    <button class="user_artists_button" onclick="window.location.href='createArtist.php'">NEW</button>
            </div>
            
        </div>
    </body>
</html>

<?php
  }
?>