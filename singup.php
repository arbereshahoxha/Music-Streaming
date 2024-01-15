<?php
include("db.php");

    if(isset($_POST['submit'])){
        $emriMbiemri = $_POST['$emriMbiemri'];
        $gender = $_POST['gender'];
        $email= $_POST['email'];
        $password = $_POST['password'];

        //Per me kontrollu a ekziston ne databaze ni user me te njejtin emer mbiemer ose email
        $sql = "select * from user where emriMbiemri='$emriMbiemri'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "select * from user where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 && $count_email == 0){
            $sql = "INSERT INTO user(emriMbiemri,gender,email,password) values($emriMbiemri,$gender,$email,$password)";
            $result = mysqli_query($conn , $sql);
            if($result){
                header("Location: homepage.php");
            }
        }else{
            if($count_user > 0){
                echo 
                '<script> 
                window.location.href = "singuppage.php"
                alert("This person already exists") 
                </script>';
            }
            if($count_email > 0){
                echo 
                '<script> 
                window.location.href = "singuppage.php"
                alert("This email already exists") 
                </script>';
            }
        }

    }

?>