<?php
    class Song {
        private $songName;
        private $songAuthors;
        private $songImage;
        private $songMedia;

        public function __construct($songName, $songAuthors, $songImage, $songMedia) {
            $this->songName = $songName;
            $this->songAuthors = $songAuthors;
            $this->songImage = $songImage;
            $this->songMedia = $songMedia;
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

    }

?>