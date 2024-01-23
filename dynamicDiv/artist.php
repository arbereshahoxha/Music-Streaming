<?php
include("db.php");
 class Artist{
    private $coverPhoto;
    private $emri;
    private $description;
    private $readMore;
    public function __construct($coverPhoto,$emri,$description,$readMore){
        $this->coverPhoto = $coverPhoto;
        $this->emri= $emri;
        $this->description=$description;
        $this->readMore=$readMore;
    }
    public function getCoverPhoto(){
        return $this->coverPhoto;
    }
    public function setCoverPhoto($coverPhoto){
        $this->coverPhoto = $coverPhoto;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function setEmri($emri){
        $this->emri = $emri;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getReadMore(){
        return $this->readMore;
    }
    public function setReadMore($readMore){
        $this->readMore = $readMore;
    }
    public function __toString(){
        return $this->getCoverPhoto() . " - " . $this->getEmri() ." - " . $this->getDescription() ." - " . $this->getReadMore();
    }
    public function displayArtist(){
        echo "<div class='artists-artist'>";
        echo " <img src='Artists/$this->coverPhoto'>";
        echo " <div class='artists-description'>";
        echo "<h2>$this->emri</h2>";
        echo "<p>$this->description</p>";
        echo "<a href='$this->readMore'><input type='button' value='Read More' id='artists-info'></a>";
        echo "</div>";
        echo "</div>";
    }

    public function ekziston($conn){
        $sql = "SELECT * FROM artist WHERE emri='$this->emri'";
        $result = mysqli_query($conn, $sql);
        $count_emri = mysqli_num_rows($result);

        $sql = "SELECT * FROM artist WHERE description='$this->description'";
        $result = mysqli_query($conn, $sql);
        $count_d = mysqli_num_rows($result);

        if ($count_emri == 0 && $count_d == 0) {
            return false; //Nuk ekziston
        } else {
            return true; //Ekziston ne databaze
        }
    }
    public function addToDatabase($conn) {
        if (!$this->ekziston($conn)) {
            //nese nuk ekziston ne databaze
            //shto ne databaze
            $sql = "INSERT INTO artist(coverPhoto, emri, description, readMore) VALUES('$this->coverPhoto', '$this->emri', '$this->description', '$this->readMore')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo '<script>alert("Artist registered successfully");</script>';
            }
            //Nese nuk mund te shtohet ne databaze atehere ka server/databaze error
            else {
                echo '<script>alert("There has been a server error");</script>';
            }
        } else {
            //Nese if kushti nuk plotesohet i bie qe useri ekziston ne databaze
            echo '<script>alert("Artist already exists!");</script>';
        }
    }
}


?>