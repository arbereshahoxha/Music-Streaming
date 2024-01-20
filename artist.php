<?php
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
        return $this->getCoverPhoto . " - " . $this->getEmri ." - " . $this->getDescription ." - " . $this->getReadMore;
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
 }


?>