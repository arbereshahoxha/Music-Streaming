 <div class="artists-container">
 <?php 
 include("artist.php");

    $sql="select * from artist";
    $artistResult=mysqli_query($conn,$sql);
    $artists=[];
    while ($row = mysqli_fetch_assoc($artistResult)) {
        $artist = new Artist(
            $row['ID'],
            $row['coverPhoto'],
            $row['emri'],
            $row['description'],
            $row['readMore']
        );
        $artists[] = $artist;
    }
    foreach($artists as $artist){
        $artist->displayArtist();
    }
 
 ?>

</div>
