<?php
include("../dynamicDiv/users.php");

if (isset($_POST['submit'])) {
    //Krijo user te ri nga post
    $user = new User(
        $_POST['emriMbiemri'],
        $_POST['gender'],
        $_POST['email'],
        $_POST['password'],
        0
    );

    //Shto userin ne databaze
    $user->addToDatabase($conn);
    //Duhet me shku tek homepage.php sepse POST forma te dergon ne create.php
    header("Location: homepage.php");
}
?>

<h1>Create User</h1>
<form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return validateForm()">
    <label for="emriMbiemri">First & Last Name:</label>
    <input type="text" id="emriMbiemri" name="emriMbiemri" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="submit">Create User</button>
</form>
<script src="script.js"></script>