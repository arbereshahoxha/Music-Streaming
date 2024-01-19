const audioPlayerContainer = document.getElementById("home-container");
const playButton = document.getElementById("home-play-button");
const playIconContainer = document.getElementById("home-play-icon");
const muteButton = document.getElementById("home-mute-button");
const muteIconContainer = document.getElementById("home-mute-icon");
const seekSlider = document.getElementById("home-seek-slider");
const volumeSlider = document.getElementById("home-volume-slider");
const outputContainer = document.getElementById("home-volume-output");

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
let songs = [
            "16Bars-Noizy.mp3",
            "2003-Elai.mp3",
            "Alkool-NoizyYllLimani.mp3",
            "Benzema-Elai.mp3",
            "Besame-DhurataDora.mp3",
            "Criminal-DhurataDora.mp3",
            "EKeniDit-RomeoLedriVula.mp3",
            "Ex-ElvanaGjata.mp3",
            "Fotografia-Blero.mp3",
            "Gajde-DhurataDoraElvanaGjata.mp3",
            "Hapa-NoizyYllLimani.mp3",
            "Ika-Elai.mp3",
            "JaFala-TeutaSelimi.mp3",
            "JenaMbreter2-Noizy.mp3",
            "Joti-Elai.mp3",
            "Kaje-YllLimaniDafinaZeqiri.mp3",
            "Kallma-NoizyDhurataDora.mp3",
            "KuKu-Elai.mp3",
            "Lale-Elai.mp3",
            "Luj-DhurataDoraElvanaGjata.mp3",
            "Malet-YllLimani.mp3",
            "Medalioni-NoizyStresi.mp3",
            "MeJetu-YllLimani.mp3",
            "MiAmor-DhurataDoraNoizy.mp3",
            "MuNda-Elai.mp3",
            "NeFundTeBotes-Noizy.mp3",
            "PaMu-DhurataDora.mp3",
            "PerKonJeZbukuru-YllLimani.mp3",
            "PrettyLittleFears-JCole.mp3",
            "Rrotullo-ElvanaGjataDhurataDora.mp3",
            "Teta-Elai.mp3",
            "TikiTaka-Elai.mp3",
            "UKry-YllLimani.mp3",
            "UnMeTy-Elai.mp3",
            "Yalla-NoizyYllLimani.mp3"
            ];
audio.src = songs[0];


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
        if (song == songs[i]) {
            songPointer = i;
            audio.src = songLocation+songs[i];
            loadSong();
            audio.play()
            playState="pause";
            playIconContainer.src = "icons/pause-button-white.png";
            return;
        } else {

        }
    }
}

//If the song is loaded, it displays the duration
//It also sets the maximum value of the slider to the length of the song
const loadSong = () => {
    if (audio.readyState > 0) {
        displayDuration();
        setSliderMax();
    } else {
        audio.addEventListener('loadedmetadata', () => {
            displayDuration();
            setSliderMax();
        });
    }
}

//Plays previous song
const previousSong = () => {
    if (songPointer == 0) {
        songPointer = songs.length - 1;
        audio.src = songs[songPointer];
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    } else {
        songPointer -= 1;
        audio.src = songs[songPointer];
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
        audio.src = songs[songPointer];
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    } else {
        songPointer += 1;
        audio.src = songs[songPointer];
        loadSong();
        audio.play();
        playState = "pause";
        playIconContainer.src = "icons/pause-button-white.png";
    }
}
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

