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
                        <a href='edit.php' id=$row[ID]>Edit</a>
                        <a href='delete.php' id=$row[ID]>Delete</a>
                    </td>
                </tr>
                ";

            }
            ?>
        </table>
    </body>
</html>
<?php }?>