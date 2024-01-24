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
    include("dynamicDiv/artist.php");
    $sql="select * from artist";
    $result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>RATATUNES - ARTISTS</title>
        <link rel="stylesheet" href="styling/read.css">
    </head>
    <body>
        <header>
            <a href="dashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES ARTISTS PANEL</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>Cover Photo</th>
                <th>Name</th>
                <th>Description</th>
                <th>ReadMore</th>
                <th>Action</th>
            </tr>

            <?php
            if(!$result){
                die("Invalid query : " . $conn->error);
            }
            while($row = $result->fetch_assoc()){
                echo"
                <tr>
                    <td>$row[ID]</td>
                    <td>$row[coverPhoto]</td>
                    <td>$row[emri]</td>
                    <td>$row[description]</td>
                    <td>$row[readMore]</td>
                    <td>
                    <form action='editArtist.php'>
                        <input type='hidden' name='ID' value='{$row['ID']}'>
                        <button type='submit' name='edit'>Edit</button>
                    </form>
                    <form action='deleteArtist.php'>
                        <input type='hidden' name='ID' value='{$row['ID']}'>
                        <button type='submit' name='delete'>Delete</button>
                    </form>
                    </td>
                </tr>
                ";

            }
            ?>
        </table>
    </body>
</html>
<?php }?>