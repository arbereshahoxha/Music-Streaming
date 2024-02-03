<?php
    session_start();
    $userRole = $_SESSION['role'];
    $email = $_SESSION['email'];
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
    include("dynamicDiv/db.php");
    $sql="select * from contact";
    $result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>RATATUNES - MESSAGES</title>
        <link rel="stylesheet" href="styling/read.css">
    </head>
    <body>
        <header>
        <a href="dashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES MESSAGES</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>First and Last Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            <?php
                if(!$result){
                die("Invalid query : " . $conn->error);
                }
                while($row = $result->fetch_assoc()){
                    $ID = $row['ID'];
                    echo"
                    <tr>
                        <td>$row[ID]</td>
                        <td>$row[fullName]</td>
                        <td>$row[subject]</td>
                        <td>$row[message]</td>
                        <td>$row[userEmail]</td>
                        
                        <td>
                            <form action='deleteContact.php' method='POST'>
                                <input type='hidden' name='user_email' value='<?php echo $_SESSION[email]; ?>'>
                                <input type='hidden' name='ID' value='$ID'>
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