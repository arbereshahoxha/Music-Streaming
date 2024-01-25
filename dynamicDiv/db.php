<?php

class DatabaseConnection {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "musicstreaming";
    private $conn; // Added property to store the connection

    public function startConnection() {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            echo "Error connecting to the database";
            return null;
        } else {
            return $this->conn;
        }
    }
}

$db = new DatabaseConnection();
$conn = $db->startConnection();

?>