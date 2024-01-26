<?php
include("dynamicDiv/db.php");

if(isset($_POST['ID'])) {
    $ID = $_POST['ID'];

    $sql = "DELETE FROM contact WHERE ID = '$ID'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Your message has been deleted sucesully");</script>';
        header("location:readContact.php");
    }else {
        echo '<script>("Error");</script>';
    }
}
?>