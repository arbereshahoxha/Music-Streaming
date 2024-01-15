<?php

class DatabaseConnection{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "musicstreaming";

    public function startConnection(){
        if(!$conn = mysqli_connect($this->server,$this->username,$this->password,$this->database)){
            echo "Error connecting to the database";
            return null;
        }else{
            echo "";
            return $conn;
        }
    }
}
$db = new DatabaseConnection();
$db -> startConnection();

?>