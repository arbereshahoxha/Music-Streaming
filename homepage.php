<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RATATUNES</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <header>
        <!-- <p>Headeri</p> -->
    </header>
    <main>
        <div id="home-main-content">
            <div id="home-nav-bar">
                <a href="homepage.php"><h3>Home</h3></a>
                <a href="songslist.php"><h3>Songs</h3></a>
                <a href="genres.php"><h3>Genres</h3></a>
                <h3>About Us</h3>

            </div>

            <!-- Main page -->
            <div id="home-categories">
                
                <div class="home-see-all">
                    <a href="songslist.html">See all</a>
                </div>
                <!-- Songs -->
                <div id="home-songs">
                <div class="home-kanget" onclick="playSong('songs/ElaiUnMeTy.mp3')">
                    <img src="Fotot/un-me-ty.png">
                    <h2>Un Me Ty</h2>
                    <p>Elai</p>
                </div>
                <div class="home-kanget" onclick="playSong('songs/ElaiJoti.mp3')">
                    <img src="Fotot/Joti.png">
                    <h2>Joti</h2>
                    <p>Elai</p>
                </div>
                <div class="home-kanget" onclick="playSong('songs/YllLimaniDafinaZeqiriKaje.mp3')">
                    <img src="Fotot/kaje.png">
                    <h2>Kaje</h2>
                    <p>Yll Limani, Dafina Zeqiri</p>
                </div>
                <div class="home-kanget" onclick="playSong('songs/YllLimaniPerKonJeZbukuru.mp3')">
                    <img src="Fotot/per-kon-je-zbukuru.jpg">
                    <h2>Per kon je zbukuru</h2>
                    <p>Yll Limani</p>
                </div>
                <div class="home-kanget" onclick="playSong('songs/YllLimaniMeJetu.mp3')">
                    <img src="Fotot/me-jetu.jpg">
                    <h2>Me Jetu</h2>
                    <p>Yll Limani</p>
                </div>
                <div class="home-kanget" onclick="playSong('songs/DhurataDoraElvanaGjataGajde.mp3')">
                    <img src="Fotot/Gajde.png">
                    <h2>Gajde</h2>
                    <p>Dhurata Dora,Elvana Gjata</p>
                </div>
                </div>

                <div class="home-see-all">
                    <a href="genres.html">See all</a>
                </div>

                <!-- Genres -->
                <div id="home-genres">
                        <div class="home-genre-box" id="home-Trending">
                        <a href="songslist.html">
                            <div class="home-genre">
                                <p>Trending</p>
                            </div>
                        </a>
                        </div>
            
                        <div class="home-genre-box" id="home-For-You">
                        <a href="songslist.html">
                            <div class="home-genre">
                                <p>For You</p>
                            </div>
                        </a>
                        </div>
            
                        <div class="home-genre-box" id="home-Pop">
                        <a href="songslist.html">
                            <div class="home-genre">
                                <p>Pop</p>
                            </div>
                        </a>
                        </div>
                        
                        <div class="home-genre-box" id="home-Hip-Hop">
                        <a href="songslist.html">
                            <div class="home-genre">
                                <p>Hip-Hop</p>
                            </div>
                        </a>
                        </div>
            
                        <div class="home-genre-box" id="home-Mood">
                        <a href="songslist.html">
                            <div class="home-genre">
                                <p>Mood</p>
                            </div>
                        </a>
                        </div>
                </div>

                <div class="home-see-all">
                    <a href="popular-artist.html">See all</a>
                </div>

                <!-- Artists -->
                <div id="home-artists">
                    <div class="home-artist">
                        <img src="Artists/Eminem.jpg">
                        <div class="home-description">
                            <h2>Eminem</h2>
                            <a href="https://www.biography.com/musicians/eminem"><input type="button" value="Read More" id="home-info"></a>
                        </div>
                    </div>
                    <div class="home-artist">
                        <img src="Artists/akon.jpg">
                        <div class="home-description">
                            <h2>Akon</h2>
                           <a href="https://www.biography.com/musicians/akon">
                                <input type="button" value="Read More" id="home-info">
                            </a>
                        </div>
                    </div>
                    <div class="home-artist">
                        <img src="Artists/elai.jpg">
                        <div class="home-description">
                            <h2>Elai</h2>
                            <a href="https://en.wikipedia.org/wiki/Elai_(rapper)"><input type="button" value="Read More" id="home-info"></a>
                        </div>
                    </div>
                    <div class="home-artist">
                        <img src="Artists/dua-lipa.jpg">
                        <div class="home-description">
                            <h2>Dua</h2>
                            <a href="https://www.britannica.com/biography/Dua-Lipa"><input type="button" value="Read More" id="home-info"></a>
                        </div>
                    </div>
                    <div class="home-artist">
                        <img src="Artists/yll-limani.jpg">
                        <div class="home-description">
                            <h2>Yll</h2>
                            <a href="https://en.wikipedia.org/wiki/Yll_Limani"><input type="button" value="Read More" id="home-info"></a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        
    </main>
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
    <script src="script.js"></script>
    <script src="mediaPlayer.js"></script>
</body>
</html>