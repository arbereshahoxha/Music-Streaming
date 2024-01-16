<?php
// include("db.php");

$user1 =[
    "name" => "Admin",
    "lastname" =>"Admini",
    "email" => "admin@gmail.com",
    "username" => "itstheadmin",
    "password" => "admin123",
    "role" => "admin"
];

class User{
    private $emriMbiemri;
    private $gender;
    private $email;
    private $password;
    private $role;
    public function __construct($emriMbiemri,$gender,$email,$password,$role){
        $this->emriMbiemri = $emriMbiemri;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
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
}

?>
