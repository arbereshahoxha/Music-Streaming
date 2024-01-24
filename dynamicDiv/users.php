<?php
include("db.php");
class User{
    private $ID; //Readonly
    private $emriMbiemri;
    private $gender;
    private $email;
    private $password;
    private $role;
    private $connection;
    public function __construct($ID, $emriMbiemri,$gender,$email,$password,$role){
        $this->ID = $ID;
        $this->emriMbiemri = $emriMbiemri;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }
    public function getID() {
        return $this->ID;
    }
    public function getEmriMbiemri(){
        return $this->emriMbiemri;
    }
    public function setEmriMbiemri($emriMbiemri){
        $this->emriMbiemri = $emriMbiemri;
    }
    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }
    public function __toString(){
        return "Roli : ". $this->role ."  Emri dhe mbiemri : " . $this->emriMbiemri . "  Gjinia : " . $this->gender . "  Emaili : " . $this->email . " Passwordi: " . $this->password;
    }

    public function ekziston($conn) {
        $sql = "SELECT * FROM user WHERE emriMbiemri='$this->emriMbiemri'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "SELECT * FROM user WHERE email='$this->email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if ($count_user == 0 && $count_email == 0) {
            return false; //Nuk ekziston
        } else {
            return true; //Ekziston ne databaze
        }
        
    }
    public function addToDatabase($conn) {
        if (!$this->ekziston($conn)) {
            //nese nuk ekziston ne databaze
            //shto ne databaze
            $sql = "INSERT INTO user(emriMbiemri, gender, email, password, role) VALUES('$this->emriMbiemri', '$this->gender', '$this->email', '$this->password', $this->role)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script>alert("User registered successfully");</script>';
            }
            //Nese nuk mund te shtohet ne databaze atehere ka server/databaze error
            else {
                echo '<script>alert("There has been a server error");</script>';
            }
        } else {
            //Nese if kushti nuk plotesohet i bie qe useri ekziston ne databaze
            echo '<script>alert("User already exists!");</script>';
        }
    }
    public function getUserByID($conn, $ID) {
        $sql = "select * from user where ID = $ID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new User(
                $row['ID'],
                $row['emriMbiemri'],
                $row['gender'],
                $row['email'],
                $row['password'],
                $row['role']
            );
        } else {
            return null; // User not found
        }
    }
    public static function deleteUser($conn, $ID) {
        $sql = "delete from user where ID = ?";

        $statement = $conn->prepare($sql);

        $statement->execute([$ID]);
    }
}

?>
