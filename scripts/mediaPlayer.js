class Song {
    constructor(titulli,artistet,img,media) {
        this.titulli = titulli;
        this.artistet = artistet;
        this.img = img;
        this.media = media;
    }
}

var song1 = new Song('16Bars', 'Noizy', 'noizy-alpha.jpg', '16Bars-Noizy.mp3');
var song2 = new Song('2003', 'Elai', '2003.png', '2003-Elai.mp3');
var song3 = new Song('Alkool', 'Noizy, Yll Limani', 'alkool.jpg', 'Alkool-NoizyYllLimani.mp3');
var song4 = new Song('Benzema', 'Elai', 'benzema.png', 'Benzema-Elai.mp3');
var song5 = new Song('Besame', 'Dhurata Dora', 'dhurata.jpg', 'Besame-DhurataDora.mp3');
var song6 = new Song('Criminal', 'Dhurata Dora', 'dhurata.jpg', 'Criminal-DhurataDora.mp3');
var song7 = new Song('E Keni Dit', 'Romeo, Ledri Vula', 'e-keni-dit.png', 'EKeniDit-RomeoLedriVula.mp3');
var song8 = new Song('Ex', 'Elvana Gjata', 'ex.jpg', 'Ex-ElvanaGjata.mp3');
var song9 = new Song('Fotografia', 'Blero', 'fotografia.png', 'Fotografia-Blero.mp3');
var song10 = new Song('Gajde', 'Dhurata Dora, Elvana Gjata', 'Gajde.png', 'Gajde-DhurataDoraElvanaGjata.mp3');
var song11 = new Song('Hapa', 'Noizy, Yll Limani', 'hapa.png', 'Hapa-NoizyYllLimani.mp3');
var song12 = new Song('Ika', 'Elai', 'ika.png', 'Ika-Elai.mp3');
var song13 = new Song('Ja Fala', 'Teuta Selimi', 'ja-fala.jpg', 'JaFala-TeutaSelimi.mp3');
var song14 = new Song('Jena Mbreter 2', 'Noizy', 'noizy-alpha.jpg', 'JenaMbreter2-Noizy.mp3');
var song15 = new Song('Joti', 'Elai', 'Joti.png', 'Joti-Elai.mp3');
var song16 = new Song('Kaje', 'Yll Limani, Dafina Zeqiri', 'kaje.png', 'Kaje-YllLimaniDafinaZeqiri.mp3');
var song17 = new Song('Kallma', 'Noizy, Dhurata Dora', 'kallma.png', 'Kallma-NoizyDhurataDora.mp3');
var song18 = new Song('KuKu', 'Elai', 'kuku.jpg', 'KuKu-Elai.mp3');
var song19 = new Song('Lale', 'Elai', 'lale.png', 'Lale-Elai.mp3');
var song20 = new Song('Luj', 'Dhurata Dora, Elvana Gjata', 'dhurata.jpg', 'Luj-DhurataDoraElvanaGjata.mp3');
var song21 = new Song('Malet', 'Yll Limani', 'malet.jpg', 'Malet-YllLimani.mp3');
var song22 = new Song('Medalioni', 'Noizy, Stresi', 'medalioni.jpg', 'Medalioni-NoizyStresi.mp3');
var song23 = new Song('Me Jetu', 'Yll Limani', 'me-jetu.jpg', 'MeJetu-YllLimani.mp3');
var song24 = new Song('Mi Amor', 'Dhurata Dora, Noizy', 'dhurata.jpg', 'MiAmor-DhurataDoraNoizy.mp3');
var song25 = new Song('Mu Nda', 'Elai', 'mu-nda.png', 'MuNda-Elai.mp3');
var song26 = new Song('Ne Fund Te Botes', 'Noizy', 'noizy-alpha.jpg', 'NeFundTeBotes-Noizy.mp3');
var song27 = new Song('Pa Mu', 'Dhurata Dora', 'pa-mu.png', 'PaMu-DhurataDora.mp3');
var song28 = new Song('Per Kon Je Zbukuru', 'Yll Limani', 'per-kon-je-zbukuru.jpg', 'PerKonJeZbukuru-YllLimani.mp3');
var song29 = new Song('Pretty Little Fears', 'JCole', 'pretty-little-fears.jpg', 'PrettyLittleFears-JCole.mp3');
var song30 = new Song('Rrotullo', 'Elvana Gjata, Dhurata Dora', 'rrotullo.jpg', 'Rrotullo-ElvanaGjataDhurataDora.mp3');
var song31 = new Song('Teta', 'Elai', 'teta.png', 'Teta-Elai.mp3');
var song32 = new Song('Tiki Taka', 'Elai', 'tiki-taka.png', 'TikiTaka-Elai.mp3');
var song33 = new Song('U Kry', 'Yll Limani', 'u-kry.jpg', 'UKry-YllLimani.mp3');
var song34 = new Song('Un Me Ty', 'Elai', 'un-me-ty.png', 'UnMeTy-Elai.mp3');
var song35 = new Song('Yalla', 'Noizy, Yll Limani', 'noizy-alpha.jpg', 'Yalla-NoizyYllLimani.mp3');
let songs = [
    song1,song2,song3,song4,song5,
    song6,song7,song8,song9,song10,
    song11,song12,song13,song14,song15,
    song16,song17,song18,song19,song20,
    song21,song22,song23,song24,song25,
    song26,song27,song28,song29,song30,
    song31,song32,song33,song34,song35
];

const audioPlayerContainer = document.getElementById("home-container");
const playButton = document.getElementById("home-play-button");
const playIconContainer = document.getElementById("home-play-icon");
const muteButton = document.getElementById("home-mute-button");
const muteIconContainer = document.getElementById("home-mute-icon");
const seekSlider = document.getElementById("home-seek-slider");
const volumeSlider = document.getElementById("home-volume-slider");
const outputContainer = document.getElementById("home-volume-output");

const songInformation = document.getElementById("home-song-information");
const songImage = document.getElementById("home-now-playing-img");
const songText = document.getElementById("home-now-playing-text");

const previousButton = document.getElementById("home-previous-button");
const nextButton = document.getElementById("home-next-button");



//Gets the audio element from html file
const audio = document.querySelector("audio");
const durationContainer = document.getElementById("home-duration");

//By default the music is paused and unmuted
let playState = "play";
let muteState = "unmuted";

let songLocation = "songs/"
let songPointer = 0;

audio.src = songLocation+songs[0].media;


//Whenever the button is clicked, play previous music
previousButton.addEventListener('click', () => {
    previousSong();
});

nextButton.addEventListener('click', () => {
    nextSong();
});

//Whenever the button is clicked, pause or play the music
playButton.addEventListener('click', () => {
    if(playState == "play") {
        audio.play();
        playIconContainer.src = "icons/pause-button-white.png";
        playState = "pause";
    } else {
        audio.pause();
        playIconContainer.src = "icons/play-button-white.png";
        playState = "play";
    }
});

//Whenever the button is clicked, mute or unmute the music
muteButton.addEventListener('click', () => {
    if(muteState == "unmuted") {
        muteIconContainer.src = "icons/mute-button.png";
        audio.muted = true;
        muteState = "muted";
    } else {
        muteIconContainer.src = "icons/volume-button.png";
        audio.muted = false;
        muteState = "unmuted";
    }
});




//Converts seconds to 00:00 format
const calculateTime = (secs) => {
    const minutes = Math.floor(secs / 60);
    const seconds = Math.floor(secs % 60);
    const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
    return `${minutes}:${returnedSeconds}`;
}

//Changes duration relative to audio length
const displayDuration = () => {
    durationContainer.textContent = calculateTime(audio.duration);
}


//The maximum value of the slider is the length of the song
const setSliderMax = () => {
    seekSlider.max = Math.floor(audio.duration);
}

function playSong(song) {
    for(let i = 0; i < songs.length; i++) {
        if (song == songs[i].media) {
            songPointer = i;
            audio.src = songLocation+songs[i].media;
            loadSong();
            audio.play();
            playState="pause";
            playIconContainer.src = "icons/pause-button-white.png";
            return;
        } else {

        }
    }
}

function updatePlayingNow() {
    let song = songs[songPointer];
    songImage.src = "fotot/"+song.img;
    songText.innerHTML = "<h2>"+song.titulli+"</h2><p>"+song.artistet+"</p>";
}

//If the song is loaded, it displays the duration
//It also sets the maximum value of the slider to the length of the song
const loadSong = () => {
    if (audio.readyState > 0) {
        displayDuration();
        setSliderMax();
        updatePlayingNow();
    } else {
        audio.addEventListener('loadedmetadata', () => {
            displayDuration();
            setSliderMax();
            updatePlayingNow();
        });
    }
}

//Plays previous song
const previousSong = () => {
    if (songPointer == 0) {
        songPointer = songs.length - 1;
        audio.src = songLocation+songs[songPointer].media;
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    } else {
        songPointer -= 1;
        audio.src = songLocation+songs[songPointer].media;
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    }
}

//Plays next song
const nextSong = () => {
    if (songPointer == songs.length - 1) {
        songPointer = 0;
        audio.src = songLocation+songs[songPointer].media;
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    } else {
        songPointer += 1;
        audio.src = songLocation+songs[songPointer].media;
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    }
}
audio.addEventListener('ended', () => {
    nextSong();
});
//This function executes on startup
loadSong();


//Update current time text
const currentTimeContainer = document.getElementById("home-current-time");
seekSlider.addEventListener('input', () => {
    currentTimeContainer.textContent = calculateTime(seekSlider.value);
})

//User changes audio time
seekSlider.addEventListener('change', () => {
    audio.currentTime = seekSlider.value;
});

//Audio updates slider every second
audio.addEventListener('timeupdate', () => {
    seekSlider.value = Math.floor(audio.currentTime);
    currentTimeContainer.textContent = calculateTime(seekSlider.value);
});

//User changes volume
volumeSlider.addEventListener('input', (e) => {
    const value =e.target.value;

    outputContainer.textContent = value;
    audio.volume = value/100;
});

function playRandomSong() {
    let randomNumber = Math.floor(Math.random() *  34); //35 Songs starting from 0 index
    songPointer = randomNumber;
    audio.src = songLocation+songs[songPointer].media;
    loadSong();
    audio.play();
    playState="pause";
    playIconContainer.src = "icons/pause-button-white.png";
}