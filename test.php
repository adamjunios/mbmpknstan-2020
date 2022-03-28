<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
<div id="wrapper">
 <div id="iphone">
  <div id="camera">
   <span></span>
   <span></span>
  </div>
  <div id="screen">
   <div id="content-wrap">
    <div id="background"></div>
    <div id="content">
     <div id="header">
      <span id="menu-btn"><img src="https://emilcarlsson.se/assets/svg/menu.svg" alt="" class="svg"></span>
      <span id="options-btn"><img src="https://emilcarlsson.se/assets/svg/more.svg" alt="" class="svg"></span>
     </div>
     <div class="jcarousel">
      <ul id="songs">
      	<li class="song" data-audio="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Leo%20-%20Trying.mp3" data-color="#f38578">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/trying-album-cover.jpg">
			<p class="song-title">Trying</p>
			<p class="song-artist">Leo</p>
			</li>
      </ul>
     </div>
     <audio crossorigin>
				<source src="" type="audio/mpeg">
			</audio>
     <div id="controls">
      <span id="previous-btn"><i class="fa fa-step-backward fa-fw" aria-hidden="true"></i></span>
      <span id="play-btn"><i class="fa fa-play fa-fw" aria-hidden="true"></i></span>
      <span id="next-btn"><i class="fa fa-step-forward fa-fw" aria-hidden="true"></i></span>
     </div>
     <div id="timeline">
      <span id="current-time">--:--</span>
      <span id="total-time">--:--</span>
      <div class="slider" data-direction="horizontal">
				<div class="progress">
					<div class="pin" id="progress-pin" data-method="rewind"></div>
				</div>
			</div>
     </div>
     <div id="sub-controls">
      <i class="fa fa-random" aria-hidden="true"></i>
      <i class="fa fa-refresh" aria-hidden="true"></i>
      <i class="fa fa-bluetooth-b active" id="bluetooth-btn" aria-hidden="true"></i>
      <i class="fa fa-heart-o" id="heart-icon" aria-hidden="true"></i>
     </div>
    </div>
    <div id="overlay"></div>
   </div>
   <div id="sidemenu">
    <ul>
     <li>
      <i class="fa fa-search fa-fw" aria-hidden="true"></i>
			 Search
     </li>
     <li>
      <img class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/music-player.svg" alt="">
			 Playlists
     </li>
     <li>
      <img id="album-icon" class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/album-icon.svg" alt="">
      Albums
     </li>
     <li>
      <i class="fa fa-microphone fa-fw" aria-hidden="true"></i>
      Artists
     </li>
			<li>
				<i class="fa fa-podcast fa-fw" aria-hidden="true"></i>
				Podcasts
			</li>
			<li>
				<i class="fa fa-cog fa-fw" aria-hidden="true"></i>
				Settings
			</li>
    </ul>
   </div>
	 <div id="bluetooth-devices" class="menu">
			<span class="close-btn"><span>&times;</span> Close</span>
			<h3>Devices nearby</h3>
			<ul>
				<li class="connected">
					<img id="headphones-icon" class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/headphone.svg" alt="">
					<p>
						Major II Bluetooth
						<span>Connected</span>
					</p>
				</li>
				<li>
					<img id="headphones-icon" class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/loudspeaker.svg" alt="">
					<p>
						Sonos One
						<span>Connected</span>
					</p>
				</li>
				<li>
					<img id="headphones-icon" class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/car.svg" alt="">
					<p>
						Kia Motors
						<span>Connected</span>
					</p>
				</li>
			</ul>
			<p class="info-text">
				Make sure your bluetooth device is turned on and in range.
			</p>
		</div>
	 <div id="song-options" class="menu">
		 <span class="close-btn"><span>&times;</span> Close</span>
		 <div id="song-info">
		 	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/rockstar-album-cover.jpg" alt="">
			 <div class="artist-wrap">
			 	<p>
			 		<span class="title">rockstar</span>
					<span class="artist">Post Malone, 21 Savage</span>
			 	</p>
			 </div>
		 </div>
	 	<ul>
	 		<li>
        <i class="fa fa-music fa-fw add" aria-hidden="true"></i>
				Add to playlist
			</li>
			<li>
				<i class="fa fa-microphone fa-fw" aria-hidden="true"></i>
				View Artist
			</li>
     <li>
      <img id="album-icon" class="svg menu-icons" src="https://emilcarlsson.se/assets/svg/compact-disc.svg" alt="">
      View Album
     </li>
			<li>
				<i class="fa fa-share-square-o fa-fw" aria-hidden="true"></i>
				Share
			</li>
	 	</ul>
	 </div>
	 <div id="home-screen">
		<div class="home-content">
			<h2>Music Player App</h2>
			<p id="made-by">Made by <a href="https://codepen.io/emilcarlsson">@emilcarlsson</a></p>
			<div class="app-icon">
				<img class="svg" src="https://emilcarlsson.se/assets/svg/music-note.svg" alt="">
			</div>
			<p id="icons-by">Icons by <a href="http://fontawesome.io/" title="Font Awesome">Font Awesome</a>, <a href="https://www.flaticon.com/authors/those-icons" title="Those Icons">Those Icons</a>,<br /><a href="https://www.flaticon.com/authors/epiccoders" title="EpicCoders">EpicCoders</a> & <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a></p>
		</div>
	 </div>
  </div>
  <div id="home-btn"></div>
 </div>
</div>

<script>
    /*
 * Icons by:
 * Font Awesome – http://fontawesome.io/
 * Those Icons – https://www.flaticon.com/authors/those-icons
 * EpicCoders – https://www.flaticon.com/authors/epiccoders
 * Smashicons – https://www.flaticon.com/authors/smashicons
 */

$(document).ready(function () {
	var songs = [
		{
			title: "rockstar",
			artist: "Post Malone, 21 Savage",
			cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/rockstar-album-cover.jpg",
			audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Post%20Malone%20-%20rockstar%20ft.%2021%20Savage%20(1).mp3",
			color: "#c3af50"
		},
		{
			title: "Let You Down",
			artist: "NF",
			cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/perception-album-cover.png",
			audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/NF%20-%20Let%20You%20Down.mp3",
			color: "#25323b"
		},
		{
			title: "Silence",
			artist: "Marshmello, Khalid",
			cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/silence-album-cover.jpg",
			audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Marshmello%20-%20Silence%20ft.%20Khalid.mp3",
			color: "#c1c1c1"
		},
		{
			title: "I Fall Apart",
			artist: "Post Malone",
			cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/stoney-cover-album.jpg",
			audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/Post%20Malone%20-%20I%20Fall%20Apart.mp3",
			color: "#cd4829"
		},
		{
			title: "Fireproof",
			artist: "VAX, Teddy Sky",
			cover: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/fireproof-album-cover.jpeg",
			audioFile: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/308622/VAX%20-%20Fireproof%20Feat%20Teddy%20Sky.mp3",
			color: "#5d0126"
		}
	];
	
	for (let song of songs) {
		$("#songs").append('<li class="song" data-audio="' + song.audioFile + '" data-color="'+ song.color +'">' + 
			'<img src="' + song.cover + '">' +
			'<p class="song-title">' + song.title + '</p>' +
			'<p class="song-artist">' + song.artist + '</p>' + 
			'</li>');
	}
	
	$('.jcarousel').jcarousel({
			wrap: 'circular'
	});
});

/*
 * Replace all SVG images with inline SVG
 */
jQuery('img[src$=".svg"]').each(function(){
	var $img = jQuery(this);
	var imgID = $img.attr('id');
	var imgClass = $img.attr('class');
	var imgURL = $img.attr('src');

	jQuery.get(imgURL, function(data) {
		// Get the SVG tag, ignore the rest
		var $svg = jQuery(data).find('svg');

		// Add replaced image's ID to the new SVG
		if(typeof imgID !== 'undefined') {
			$svg = $svg.attr('id', imgID);
		}
		// Add replaced image's classes to the new SVG
		if(typeof imgClass !== 'undefined') {
			$svg = $svg.attr('class', imgClass+' replaced-svg');
		}

		// Remove any invalid XML tags as per http://validator.w3.org
		$svg = $svg.removeAttr('xmlns:a');

		// Replace image with new SVG
		$img.replaceWith($svg);

	}, 'xml');

});

// Current slide
$('.jcarousel').on('jcarousel:visiblein', 'li', function(event, carousel) {
	let cover = $(this).find("img").attr("src");
	let songTitle = $(this).find("p.song-title").html();
	let songArtist = $(this).find("p.song-artist").html();
	let audioSrc = $(this).attr("data-audio");
	let backgroundColor = $(this).attr("data-color");
	$("body").css('background', backgroundColor)
	$("#background").css('background-image', 'url('+cover+')');
	$("audio").find("source").attr("src", ""+audioSrc+"");
	player.load();
	player.currentTime = 0;
	$("#song-info").find("img").attr("src", cover);
	$("#song-info .artist-wrap p").find("span.title").html(songTitle);
	$("#song-info .artist-wrap p").find("span.artist").html(songArtist);
});

// Previous slide
$('#previous-btn').click(function() {
	$('.jcarousel').jcarousel('scroll', '-=1');
	$('#play-btn i').removeClass('fa-pause');
	player.pause();
});

// Next slide
$('#next-btn').click(function() {
	if ($(".fa-random").hasClass('active')) {
		let songs = $("#songs li").length - 1;
		let randomSong = Math.floor(Math.random() * songs) + 1;
		$('.jcarousel').jcarousel('scroll', '+=' + randomSong);
	} else {
		$('.jcarousel').jcarousel('scroll', '+=1');
	}
	$('#play-btn i').removeClass('fa-pause');
	player.pause();
});

// Play Icon Switcher
$('#play-btn').click(function() {
	$(this).find('i').toggleClass('fa-pause');
});

// Menu
$("#menu-btn").click(function() {
	$("#content-wrap").addClass('inactive');
	$("#sidemenu").addClass('active');
});

// Home Button
$("#home-btn").click(function() {
	$("#home-screen").addClass('active');
	$(".menu").removeClass('active');
	$("#content-wrap").addClass('minimized');
});

// App
$(".app-icon").click(function() {
	$("#content-wrap").removeClass('minimized');
	setTimeout(function(){ $("#home-screen").removeClass('active'); }, 300);
});

// Overlay
$("#overlay").click(function () {
	$("#content-wrap").removeClass('inactive');
	$("#sidemenu").removeClass('active');
});

// Options
$("#options-btn").click(function() {
	$("#song-options").addClass('active');
});

// Bluetooth
$("#bluetooth-btn").click(function() {
	$("#bluetooth-devices").addClass('active');
});

// Bluetooth Menu
$("#bluetooth-devices ul li").click(function() {
	$(this).toggleClass('connected');
	$(this).siblings().removeClass('connected');
	
	if ($("#bluetooth-devices ul li").hasClass('connected')) {
		$("#sub-controls i.fa-bluetooth-b").addClass('active');
	} else {
		$("#sub-controls i.fa-bluetooth-b").removeClass('active');
	}
});

// Close Menu
$(".close-btn").click(function() {
	$(".menu").removeClass('active');
});

$('#sub-controls i').click(function () {
	if(!$(this).hasClass('fa-bluetooth-b')) {
		$(this).toggleClass('active');
	}
	
	if ($("#heart-icon").hasClass('active')) {
		$("#heart-icon").removeClass('fa-heart-o');
		$("#heart-icon").addClass('fa-heart');
	} else {
		$("#heart-icon").removeClass('fa-heart');
		$("#heart-icon").addClass('fa-heart-o');
	}
});

/*
 * Music Player
 * By Greg Hovanesyan
 * https://codepen.io/gregh/pen/NdVvbm
 */

var audioPlayer = document.querySelector('#content');
var playpauseBtn = audioPlayer.querySelector('#play-btn');
var progress = audioPlayer.querySelector('.progress');
var sliders = audioPlayer.querySelectorAll('.slider');
var player = audioPlayer.querySelector('audio');
var currentTime = audioPlayer.querySelector('#current-time');
var totalTime = audioPlayer.querySelector('#total-time');

var draggableClasses = ['pin'];
var currentlyDragged = null;

window.addEventListener('mousedown', function(event) {
  
  if(!isDraggable(event.target)) return false;
  
  currentlyDragged = event.target;
  let handleMethod = currentlyDragged.dataset.method;
  
  this.addEventListener('mousemove', window[handleMethod], false);

  window.addEventListener('mouseup', () => {
    currentlyDragged = false;
    window.removeEventListener('mousemove', window[handleMethod], false);
  }, false);  
});

playpauseBtn.addEventListener('click', togglePlay);
player.addEventListener('timeupdate', updateProgress);
player.addEventListener('loadedmetadata', () => {
  totalTime.textContent = formatTime(player.duration);
});
player.addEventListener('ended', function(){
  player.currentTime = 0;
	
	if ($(".fa-refresh").hasClass('active')) {
		togglePlay();
	} else {
		if ($(".fa-random").hasClass('active')) {
			let songs = $("#songs li").length - 1;
			let randomSong = Math.floor(Math.random() * songs) + 1;
			$('.jcarousel').jcarousel('scroll', '+=' + randomSong);
		} else {
			$('.jcarousel').jcarousel('scroll', '+=1');
		}
		togglePlay();
	}
});

sliders.forEach(slider => {
  let pin = slider.querySelector('.pin');
  slider.addEventListener('click', window[pin.dataset.method]);
});

function isDraggable(el) {
  let canDrag = false;
  let classes = Array.from(el.classList);
  draggableClasses.forEach(draggable => {
    if(classes.indexOf(draggable) !== -1)
      canDrag = true;
  })
  return canDrag;
}

function inRange(event) {
  let rangeBox = getRangeBox(event);
  let direction = rangeBox.dataset.direction;
	let screenOffset = document.querySelector("#screen").offsetLeft + 26;
	var min = screenOffset - rangeBox.offsetLeft;
	var max = min + rangeBox.offsetWidth;   
	if(event.clientX < min || event.clientX > max) { return false };
  return true;
}

function updateProgress() {
  var current = player.currentTime;
  var percent = (current / player.duration) * 100;
  progress.style.width = percent + '%';
  
  currentTime.textContent = formatTime(current);
}

function getRangeBox(event) {
  let rangeBox = event.target;
  let el = currentlyDragged;
  if(event.type == 'click' && isDraggable(event.target)) {
    rangeBox = event.target.parentElement.parentElement;
  }
  if(event.type == 'mousemove') {
    rangeBox = el.parentElement.parentElement;
  }
  return rangeBox;
}

function getCoefficient(event) {
  let slider = getRangeBox(event);
	let screenOffset = document.querySelector("#screen").offsetLeft + 26;
  let K = 0;
	let offsetX = event.clientX - screenOffset;
	let width = slider.clientWidth;
	K = offsetX / width;
  return K;
}

function rewind(event) {
  if(inRange(event)) {
    player.currentTime = player.duration * getCoefficient(event);
  }
}

function formatTime(time) {
  var min = Math.floor(time / 60);
  var sec = Math.floor(time % 60);
  return min + ':' + ((sec<10) ? ('0' + sec) : sec);
}

function togglePlay() {
	player.volume = 0.5;
	
  if(player.paused) {
    player.play();
  } else {
    player.pause();
  }  
}
</script>
</body>
</html>