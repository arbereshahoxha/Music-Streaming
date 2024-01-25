<?php
    include("db.php");
    class Song {
        private $id;
        private $songName;
        private $songAuthors;
        private $songImage;
        private $songMedia;
        private $authorID;

        public function __construct($id, $songName, $songAuthors, $songImage, $songMedia, $authorID) {
            $this->id = $id;
            $this->songName = $songName;
            $this->songAuthors = $songAuthors;
            $this->songImage = $songImage;
            $this->songMedia = $songMedia;
            $this->authorID = $authorID;
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

        public function getAuthorID() {
            return $this->authorID;
        }

        public function __toString() {
            return $this->songName." - ".$this->songAuthors;
        }
        public function displaySong() {
            if ($this->songMedia == "nomedia") {
                echo "<div class='songs-kanget'". "onclick='playRandomSong()'>";
            } else {
                echo "<div class='songs-kanget'". "onclick='playSong(`".$this->songMedia."`)'>";
            }
            echo "<img src='fotot/$this->songImage' alt='song-image'>";
            echo "<h2>$this->songName</h2>";
            echo "<p>$this->songAuthors</p>";
            echo "</div>";
        }

        public function ekziston($conn) {
            $sql = "SELECT * FROM song WHERE songName='$this->songName' and songAuthors='$this->songAuthors'";
            $result = mysqli_query($conn, $sql);
            $count_song = mysqli_num_rows($result);

            if ($count_song == 0) {
                return false; //Nuk ekziston
            } else {
                return true; //Ekziston ne databaze
            }
        }

        public function addToDatabase($conn) {
            if(!$this->ekziston($conn)) {
                $sql = "INSERT INTO song(songName, songAuthors, songImage, songMedia, artistID) VALUES('$this->songName','$this->songAuthors', '$this->songImage', '$this->songMedia', '$this->authorID')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<script>alert("Song added succesfully");</script>';
            
                } else {
                    echo '<script>alert("There has been a server error!");</script>';
                }

            } else {
                echo '<script>alert("This song already exists!");</script>';
            }
        }   

        public function deleteSong($conn) {
            $conn -> query("DELETE from song where id = $this->id");
        }

        public function editSong($conn) {
            $sql = "UPDATE song SET songName='$this->songName',songAuthors='$this->songAuthors', songImage='$this->songImage', songMedia='$this->songMedia' where id='$this->id'";
	        $conn -> query($sql);
        }
    }

    function getSongByID($conn, $ID) {
        $sql = "SELECT * from song where id=$ID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Song(
                $row["id"],
                $row["songName"],
                $row["songAuthors"],
                $row["songImage"],
                $row["songMedia"],
                $row["artistID"]);
        } else {
            return null;
        }
    }

    function showArtistSongs($conn, $ID) {
        $sql = "SELECT * from song where ArtistID=$ID";
        $result = $conn -> query($sql);
        if (!$result) {
            die("Invalid query: ". $conn -> error);
        }

        while ($row = $result->fetch_assoc()) {
            $song = new Song(
                $row["ID"],
                $row["songName"],
                $row["songAuthors"],
                $row["songImage"],
                $row["songMedia"],
                $row["artistID"]);
            
            echo"
                <tr>
                    <td>{$song->getID()}</td>
                    <td>{$song->getSongName()}</td>
                    <td>{$song->getSongAuthors()}</td>
                    <td>{$song->getSongImage()}</td>
                    <td>{$song->getSongMedia()}</td>
                    <td>{$song->getAuthorID()}</td>
                    <td>
                        <form action='editSong.php' method='POST'>
                            <input type='hidden' name='id' value='{$row["id"]}'}>
                            <button type='submit' name='edit'>Edit</button>
                        </form>
                        <form action='deleteSong.php' method='POST'>
                            <input type='hidden' name='id' value='{$row["id"]}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                </tr>
                ";
        }
    }

    function showAllSongs($conn) {
        $sql = "SELECT * from song";
        $result = mysqli_query($conn, $sql);
        
        if (!$result) {
            die("Invalid query: ". $conn -> error);
        }

        while ($row = $result ->fetch_assoc()) {

            $song = new Song(
                $row["id"],
                $row["songName"],
                $row["songAuthors"],
                $row["songImage"],
                $row["songMedia"],
                $row["artistID"]);

                echo"
                    <tr>
                        <td>{$song->getID()}</td>
                        <td>{$song->getSongName()}</td>
                        <td>{$song->getSongAuthors()}</td>
                        <td>{$song->getSongImage()}</td>
                        <td>{$song->getSongMedia()}</td>
                        <td>{$song->getAuthorID()}</td>
                        <td>
                        <form action='editSong.php' method='POST'>
                            <input type='hidden' name='id' value='{$row["id"]}'>
                            <button type='submit' name='edit'>Edit</button>
                        </form>
                        <form action='deleteSong.php' method='POST'>
                            <input type='hidden' name='id' value='{$row["id"]}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                    ";

        }
    }

?>