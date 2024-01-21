<?php
include("../db.php");
include("../dynamicDiv/artist.php");

if (isset($_POST['submit'])) {
    $coverPhoto = $_POST['coverPhoto'];
    $emri = $_POST['emri'];
    $description = $_POST['description'];
    $readMore = $_POST['readMore'];
    $role = 1;

    // Check if a user with the same name or email already exists
    $sql = "SELECT * FROM artist WHERE emri='$emri'";
    $result = mysqli_query($conn, $sql);
    $count_emri = mysqli_num_rows($result);

    $sql = "SELECT * FROM artist WHERE description='$description'";
    $result = mysqli_query($conn, $sql);
    $count_d = mysqli_num_rows($result);

    if ($count_emri == 0 && $count_d == 0) {
        $sql = "INSERT INTO artist(coverPhoto, emri, description, readMore, role) VALUES('$coverPhoto', '$emri', '$description', '$readMore', '$role')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("SignUp successful");</script>';
            header("Location: homepage.php");
        }
    } elseif ($count_emri > 0 || $count_d > 0) {
        echo '<script>alert("This artist already exists");</script>';
    }else {
        echo '<script>alert("There has been a server error");</script>';
    }
}
?>

<h1>Create Artist</h1>
<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" >
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
