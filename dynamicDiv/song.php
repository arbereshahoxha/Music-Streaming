<?php
include("../db.php");
    class Song {
        private $id;
        private $songName;
        private $songAuthors;
        private $songImage;
        private $songMedia;

        public function __construct($id, $songName, $songAuthors, $songImage, $songMedia) {
            $this->id = $id;
            $this->songName = $songName;
            $this->songAuthors = $songAuthors;
            $this->songImage = $songImage;
            $this->songMedia = $songMedia;
        }
        public function getID() {
            return $this->id;
        }

        public function getSongName() {
            return $this->songName;
        }

        public function setSongName($songName) {
            $this->songName = $songName;
        }

        public function getSongAuthors() {
            return $this->songAuthors;
        }

        public function setSongAuthors($songAuthors) {
            $this->songAuthors = $songAuthors;
        }

        public function getSongImage() {
            return $this->songImage;
        }

        public function setSongImage($songImage) {
            $this->songImage = $songImage;
        }

        public function getSongMedia() {
            return $this->songMedia;
        }
        public function setSongMedia($songMedia) {
            $this->songMedia = $songMedia;
        }

        public function __toString() {
            return $this->songName." - ".$this->songAuthors;
        }
        public function displaySong() {
            echo "<div class='songs-kanget'". "onclick='playSong(`".$this->songMedia."`)'>";
            echo "<img src='fotot/$this->songImage' alt='song-image'>";
            echo "<h2>$this->songName</h2>";
            echo "<p>$this->songAuthors</p>";
            echo "</div>";
        }

        public function displayYourSong() {
            echo "<div class='songs-kanget'". "onclick='playRandomSong()'>";
            echo "<img src='fotot/$this->songImage' alt='song-image'>";
            echo "<h2>$this->songName</h2>";
            echo "<p>$this->songAuthors</p>";
            echo "</div>";
        }

        public function displayYourSongs($conn) {
            //TODO
        }

        public function ekziston($conn) {
            $sql = "SELECT * FROM song WHERE songName='$this->songName'";
            $result = mysqli_query($conn, $sql);
            $count_song = mysqli_num_rows($result);

            $sql = "SELECT * FROM song WHERE songAuthors='$this->songAuthors'";
            $result = mysqli_query($conn, $sql);
            $count_artist = mysqli_num_rows($result);

            if ($count_song == 0 && $count_artist == 0) {
                return false; //Nuk ekziston
            } else {
                return true; //Ekziston ne databaze
            }
        }

        public function addToDatabase($conn) {
            if(!$this->ekziston($conn)) {
                $sql = "INSERT INTO song(songName, songAuthors, songImage) VALUES('$this->songName','$this->songAuthors', '$this->songImage')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<script>alert("Song added succesfully");</script>';
                    header("Location: homepage.php");
                } else {
                    echo '<script>alert("There has been a server error!");</script>';
                }

            } else {
                echo '<script>alert("This song already exists!");</script>';
            }
        }   
    }
?>