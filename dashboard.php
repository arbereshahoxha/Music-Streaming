<h1>List of Users</h1>
<button onclick="loadContent('create.php')">NEW</button>
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
    include("db.php");
    include("users.php");
    $sql="select ID,emriMbiemri,gender,email,role from user";
    $result=mysqli_query($conn,$sql);
    
    if(!$result){
        die("Invalid query : " . $conn->error);
    }
    while($row = $result->fetch_assoc()){
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