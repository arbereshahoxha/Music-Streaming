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
    include("../db.php");
    include("../dynamicDiv/artist.php");
    $sql="select * from artist";
    $result=mysqli_query($conn,$sql);
    
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