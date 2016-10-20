console.log ('Stream Player v0.0.1');

window.__audios__    = [];
window.__streamers__ = [];
var StreamerPlyr = function ($streamPlayer) {
	// Some private vars
	// Loading vars - TODO
	var loading            = 0;
	var dependencies       = null;
	var dependenciesLoaded = null;

	// Player
	var playing = false; 
	var volume  = 1; // 1 sound is active, 0 sound is muted
	var audio   = null;

	// Phisic nodes from player
	var $play           = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .play', null, 'first');
	var $pause          = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .pause', null, 'first');
	var $volumeUp       = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .volume-control .volume-up', null, 'first');
	var $volumeMute     = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .volume-control .volume-mute', null, 'first');
	var $timeTotal      = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .time-status .total', null, 'first');
	var $currentTime    = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .time-status .played', null, 'first');
	var $timeControl    = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .progress-bar .time-position', null, 'first');
	var $progressTotal  = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .progress-bar .time-total', null, 'first');
	var $progressLoaded = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .progress-bar .time-loaded', null, 'first');
	var $progressPlayed = $ ('#' + $streamPlayer.getAttribute ('id') + ' .controls .progress-bar .time-played', null, 'first');

	// Controls Nodes to return
	var $controls = {
		pause:       $pause,
		play:        $play,
		volumeUp:    $volumeUp,
		volumeMute:  $volumeMute,
		timeInfo:    {
			timeTotal:   $timeTotal,
			currentTime: $currentTime,
			timeControl: $timeControl
		},
		progressBar: {
			progressTotal:  $progressTotal,
			progressLoaded: $progressLoaded,
			progressPlayed: $progressPlayed
		}
	};

	// Stream File
	var fileUrl = $ ('#' + $streamPlayer.getAttribute ('id'), null, 'first').dataset.stream;

	function __construct ($streamPlayer) {
		createAudioBox ();
		addEvents ();
	}

	function init () {
		__construct ($streamPlayer);
	}

	function createAudioBox () {
		// Create Audio Node
		audio = new Audio ();

		// Set autoplay to false
		audio.autoplay = false;

		// Set audio volume
		audio.volume = volume;

		// Set audio source
		audio.src = fileUrl;

		// Load it
		audio.load();

		// Set default player values
		playing                     = false;
		$timeControl.style.left     = 0;
		$progressLoaded.style.width = 0;
		$progressPlayed.style.width = 0;
	}

	function addEvents () {
		console.log ('Adding events...');

		// Add events to Audio Box
		audio.addEventListener('timeupdate', updateTime);
		audio.addEventListener('ended', endStreaming);
		audio.addEventListener('progress', loadingTime);
		audio.addEventListener('loadedmetadata', updateTotalTime);
		audio.addEventListener('error', handleError);

		// Add events to controls
		$play.addEventListener('click', playStream);
		$pause.addEventListener('click', pauseStream);
		$volumeUp.addEventListener('click', volumeMute);
		$volumeMute.addEventListener('click', volumeUp);

		// TODO
		updateStreamPlayerStatus ();
	}

	function updateTime () {
		// Duration of audio
		var currentTime = audio.currentTime / 60;
			currentTime = currentTime.toFixed (2);

		// Divide duration in minutes - seconds
		var currentTimeSplit   = currentTime.split ('.'),
			currentTimeMinutes = currentTimeSplit[0],
			currentTimeSeconds = currentTimeSplit[1];

			currentTimeSeconds = (currentTimeSeconds * 60) / 100;
			currentTimeSeconds = currentTimeSeconds.toFixed(0);

		// Update time
		$currentTime.innerHTML      = (currentTimeMinutes.length == 1 ? '0' : '') + currentTimeMinutes + ':' + (currentTimeSeconds.length == 1 ? '0' : '') + currentTimeSeconds;
		$progressPlayed.style.width = (audio.currentTime * 100) / audio.duration + '%';
		$timeControl.style.left     = (audio.currentTime * 100) / audio.duration + '%';
	}

	function endStreaming () {
		// TODO
		console.log('endStreaming');
	}

	function loadingTime () {
		if (audio.buffered.length) {
			for (var b = 0; b < audio.buffered.length; b++) {
				$progressLoaded.style.width = (audio.duration / audio.buffered.end(b)) * 100 + '%';
			}
		}
	}

	function updateTotalTime () {
		// Duration of audio
		var duration = audio.duration / 60;
			duration = duration.toFixed (2);


		// Divide duration in minutes - seconds
		var durationSplit   = duration.split ('.'),
			durationMinutes = durationSplit[0],
			durationSeconds = durationSplit[1];

			durationSeconds = (durationSeconds * 60) / 100;
			durationSeconds = durationSeconds.toFixed(0);

		// Update time
		$timeTotal.innerHTML = (durationMinutes.length == 1 ? '0' : '') + durationMinutes + ':' + (durationSeconds.length == 1 ? '0' : '') + durationSeconds;
	}

	function handleError () {
		// TODO
		console.log('handleError');
	}

	function updateStreamPlayerStatus () {
		if (!dependencies) {
			finishStreamPlayerLoad ();
			return;
		}

		if (dependencies.length != dependenciesLoaded.length) {
			updateLoadingMessage ();
			return;
		}

		if (dependencies.length == dependenciesLoaded.length) {
			finishStreamPlayerLoad ();
			return;
		}
	}

	function finishStreamPlayerLoad () {
		// TODO
	}

	function updateLoadingMessage () {
		// TODO
	}

	function finishStreamPlayerLoad () {
		// TODO
	}

	// Methods
	function playStream () {
		$play.style.display = 'none';
		$pause.style.display = 'block';

		for(var a = 0; a < window.__audios__.length; a++) {
			if (!window.__audios__[a].paused) {
				window.__streamers__[a].action.pause();
			}
		}

		audio.play();
		playing = true;
	}

	function pauseStream () {
		$pause.style.display = 'none';
		$play.style.display = 'block';

		audio.pause();
		playing = false;
	}
	function goToTime (time) {
		// TODO
	}
	function setVolume (vol) {
		// TODO
		console.log(vol);
		audio.volume = vol;
		if (vol == 0) {
			$volumeUp.style.display = 'none';
			$volumeMute.style.display = 'block';
		} else if (vol == 1) {
			$volumeUp.style.display = 'block';
			$volumeMute.style.display = 'none';
		}
	}
	function volumeUp () {
		setVolume (1);
	}
	function volumeMute () {
		setVolume (0);
	}

	init ();

	// Public object Streamer to return
	var streamer = {
		controls: $controls,
		fileUrl:  fileUrl,
		action: {
			play:  playStream,
			pause: pauseStream,
			goTo:  goToTime,
			volume: volumeUp,
			mute: volumeMute

		},
		playing: playing,
		volume:  volume
	};

	window.__audios__[window.__audios__.length]       = audio;
	window.__streamers__[window.__streamers__.length] = streamer;
	return streamer;
}
