<?php
include("dynamicDiv/db.php");

if(isset($_POST['submit'])){
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(fullName,email,message) values('$fullName','$email','$message')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo '<script>alert("Your message has been recorded sucesully");</script>';

    }else {
        echo '<script>("Error");</script>';
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styling/contact.css">
    <!-- <link rel="stylesheet" href="styling/contact.css"> -->
</head>
<body>
    <header>
        <a href="homepage.php"><img src="icons/left-arrow.png" alt="return" id="return"></a>
            <h1>RATATUNES CONTACT US</h1>
            <button id="logOutButton" name="logOutButton" onclick="window.location.href='logout.php'">Log Out</button>
    </header>
    <div class="contactUs">
    <form action="" method="post">
        <label for="fullName">Enter full name :</label>
        <input id="fullName" type="text" name="fullName" required>

        <label for="email">Enter email :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>