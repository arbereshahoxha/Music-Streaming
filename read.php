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
    include("dynamicDiv/users.php");
    $sql="select ID,emriMbiemri,gender,email,role from user";
    $result=mysqli_query($conn,$sql);
?>
<html>
    <head>
        <title>RATATUNES - USERS</title>
        <link rel="stylesheet" href="styling/read.css">
    </head>
    <body>
        <header>
        <a href="dashboard.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES USERS PANEL</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
        </header>
        <table>
            <tr>
                <th>ID</th>
                <th>First and Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
                if(!$result){
                die("Invalid query : " . $conn->error);
                }
                while($row = $result->fetch_assoc()){
                    if ($row['gender'] == 'option1') {
                        $row['gender'] = 'Male';
                    } else if ($row['gender'] == 'option2') {
                        $row['gender'] = 'Female';
                    } 
                    echo"
                    <tr>
                        <td>$row[ID]</td>
                        <td>$row[emriMbiemri]</td>
                        <td>$row[gender]</td>
                        <td>$row[email]</td>
                        <td>$row[role]</td>
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