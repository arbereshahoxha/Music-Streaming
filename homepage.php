<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RATATUNES</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="genres.css">
    <link rel="stylesheet" href="songslist.css">
    <link rel="stylesheet" href="artists.css">

    <!-- Using PHP include refreshes the page and reloads the entire music player logic-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function loadContent(page) {
            $.ajax({
            type: "POST",
            url: page,
            data: {},
            success: function(response) {
                $("#home-categories").html(response);
            }
            });
        }

        //default
        loadContent('default.php');
    </script>
</head>
<body>
    <header>
        asd<!-- <p>Headeri</p> -->
    </header>
    <div id="home-main-content">
        <div id="home-nav-bar">
                <form method="post" id="myForm">
                    <input type="button" name="home" value="Home" onclick="loadContent('default.php')">
                    <input type="button" name="songs" value="Songs" onclick="loadContent('songslist.php')">
                    <input type="button" name="genres" value="Genres" onclick="loadContent('genres.php')">
                    <input type="button" name="aboutus" value="About Us"> 
                </form>
        </div>
        <!-- Main page -->
        <div id="home-categories">
        </div>
    </div>
    <div id="home-mediaPlayer">
    <audio src="" type ="audio/mp3" preload="metadata" loop></audio>
            <div id="home-songInformation">
                asd
            </div>
            <div id="home-centerPlayer">
                <div id="home-playButtons">
                    <button class="home-playerButton" id="home-previous-button"><img src="icons/previus-button.png" alt="previous" id="home-previous-icon"></button>
                    <button class="home-playerButton" id="home-play-button"><img src="icons/play-button-white.png" alt="play/pause" id="home-play-icon"></button>
                    <button class="home-playerButton" id="home-next-button"><img src="icons/next-button.png" alt="next" id="home-next-icon"></button>
                </div>
                <div id="home-lowerPlayer">
                    <span id="home-current-time" class="home-time">0:00</span>
                    <input type="range" class="home-longSlider" id="home-seek-slider" max="100" value="0">
                    <span id="home-duration" class="home-time">0:00</span>
                </div>
            </div>
            
            <div id="home-volumeControls">
                <output id="home-volume-output">100</output>
                <button class="home-playerButton" id="home-mute-button"><img src="icons/volume-button.png" alt="play/pause" id="home-mute-icon"></button>
                <input type="range" class="home-shortSlider" id="home-volume-slider" max="100" value="100">
            </div>
    </div>
    <script src="mediaPlayer.js"></script>
</body>
</html>