<div id="songs-all">
<?php
    include("song.php");
    
    $sql = "select * from song";
    $songsResult = mysqli_query($conn, $sql);
    $songs = [];
    while($row = mysqli_fetch_assoc($songsResult)) {
        $song = new Song(
            $row['id'],
            $row['songName'],
            $row['songAuthors'],
            $row['songImage'],
            $row['songMedia'],
            $row['artistID']
        );
        $songs[] = $song;
    }
    foreach($songs as $song) {
        $song->displaySong();
    }
?>
</div>
