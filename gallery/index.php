<?php
	$page = "Gallery";
 	include("../config.php");
?><!DOCTYPE html>
<html>
<head>
	<title>Gallery - <?php echo $name ?></title>
	<link rel="icon" type="image/png" href="<?php echo $logo ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo $domain ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo $domain ?>/css/subpages.css">
	<link rel="stylesheet" href="<?php echo $domain ?>/css/cards.css">
	<meta name="theme-color" content="#<?php echo $color ?>">
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:creator" content="@jekeltor" />
	<meta property="og:url" content="https://gfnrp.us" />
	<meta property="og:title" content="<?php echo $name ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:image" content="<?php echo $logo ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
	<script>
		$('html, body').css({
		  	'overflow': 'hidden',
		  	'height': '100vh'
		});

		window.onload = function() {
			document.querySelector(".preloader").classList.add("loaded");
			$('html, body').css({
			  	'overflow': 'auto',
			 	'height': 'auto'
			});
		}
	</script>
	<style>
	body {
		height: 100vh;
		width: 100%;
		overflow: hidden;
		margin: 0;
		background-color: rgb(39, 43, 48);
		font-family: 'Inria Sans', sans-serif;
	}

	.preloader {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 10;
	height: 100vh;
	width: 100%;
	opacity: 1;
	background-color: #141414;
	transition: all .5s ease;
}

.preloader.loaded {
	z-index: -1;
	opacity: 0;
}

.dropdown {
	display: flex;
	position: fixed;
	height: 100vh;
	width: 100%;
	background-color: #212121;
	align-items: center;
	justify-content: center;
	opacity: 0;
	z-index: -1;
	transition: all .5s ease;
	text-align: center;
}

.dropdown .center a {
	display: block;
	font-size: 5vh;
	color: #fff;
	margin: 1vh 0%;
	text-decoration: none;
}

.dropdown.shown {
	z-index: 4;
	opacity: 1;
}

.navbar {
	display: flex;
	width: 80%;
	position: fixed;
	align-items: center;
	justify-content: center;
	padding: 3vh 10%;
	z-index: 5;
	transition: all .5s ease;
}

.navbar.scrolled {
	padding: 1.5vh 10%;
	background-color: #141414;
}

.navbar.dropdownshown {
	padding: 3vh 10%;
	background-color: none;
}

.navbar .left {
	display: flex;
	width: 35%;
	align-items: center;
	justify-content: flex-start;
	opacity: 1;
	transition: all .5s ease;
}

.navbar.dropdownshown .left {
	opacity: 0;
}

.navbar .left img {
	height: 7.5vh;
	width: auto;
}

.navbar .right {
	width: 65%;
	text-align: right;
}

.navbar .right a {
	font-size: 2.5vh;
	color: #fff;
	margin-left: 2%;
	text-decoration: none;
	position: relative;
}

.navbar .right .links a::after {
	position: absolute;
	top: 75%;
	left: 50%;
	color: transparent;
	content: '•';
	text-shadow: 0 0 transparent;
	font-size: 2vh;
	transition: text-shadow 0.3s, color 0.3s;
	transform: translateX(-50%);
	pointer-events: none;
}

.navbar .right .links a:hover::after, .navbar .right .links a:focus::after, .navbar .right .links .active::after {
	color: #fff;
	text-shadow: .4vw 0 #fff, -.4vw 0 #fff;
}

.navbar .right a.dropdownbtn, .navbar .right a.dropdownbtnclose {
	display: none;
	font-size: 3vh;
}

.navbar.dropdownshown .right a.dropdownbtn {
	display: none;
}

.navbar.dropdownshown .right a.dropdownbtnclose {
	display: inline-block;
	font-size: 3.5vh;
}

		.imageviewer {
			display: none;
			position: absolute;
			top: 0;
			left: 0;
			height: 100vh;
			width: 100%;
			align-items: center;
			justify-content: center;
			background-color: rgba(0, 0, 0, .75);
		}

		.imageviewershown {
			display: flex;
			z-index: 20;
		}

		.imageviewer .image {
			width: 75vw;
			height: 42.1vw;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			position: relative;
		}

		.imageviewer .image .source {
			position: absolute;
			left: 0;
			bottom: -3vh;
			color: #fff;
			font-size: 2vh;
		}

		.imageviewer .close {
			position: absolute;
			font-size: 4vh;
			color: #fff;
			right: 4vh;
			top: 4vh;
			cursor: pointer;
		}

		.body {
			display: flex;
			height: 90vh;
			width: 100%;
			background-size: cover;
			background-repeat: no-repeat;
			position: absolute;
			z-index: 1;
			align-items: center;
			justify-content: center;
			<?php if ($youtubeid == "") { ?>
			background-image: url(<?php echo $backgroundimg ?>);
			background-size: cover;
			background-repeat: no-repeat;
			<?php }?>
		}

		.body .bg-video #player {
			left: 0;
			width: 150vw;
			height: 150vh;
			z-index: 1;
		}

		.body .screen {
			display: block;
			height: 90vh;
			width: 100%;
			position: absolute;
			z-index: 2;
		}

		.body .screen .spacer {
			margin-top: 17.5vh;
			padding: 5vh 2.5vw;
			width: 75vw;
			margin-left: 10vw;
			background-color: rgba(255, 255, 255, .2);
		}

		.body .screen .spacer .center {
			width: 100%;
			text-align: center;
		}

		.body .screen .spacer .center h1 {
			font-size: 3vh;
			color: #fff;
			margin: 0;
			margin-bottom: 4vh;
		}

		.body .screen .spacer .center .items {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-row-gap: 4vh; 
     		grid-column-gap: 2vw;

		}

		.body .screen .spacer .center .items .item {
			width: 17.25vw;
			height: 9.70vw;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			cursor: pointer;
		}

		@keyframes preloader {
			0% {
				visibility: visible;
				opacity: 1;
			}

			99% {
				visibility: hidden;
				opacity: 0;
				height: 100vh;
				width: 100%;
			}

			100% {
				height: 0vh;
				width: 0%;
				display: none;
				z-index: -5;
			}
		}

		@keyframes loading {
		  	0% {
		    	transform: rotate(0);
		  	}

		  	50% {
		    	transform: rotate(360deg);
		  	}
		}

		@media screen and (max-width: 600px), (orientation : portrait) {
			body {
				min-height: 100vh;
				overflow: auto;
			}

			.navbar {
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.navbar .mleft {
				display: flex;
				width: 47%;
				margin-left: 3%;
			}

			.navbar .links {
				display: none;
			}

			.navbar .links .link {
				display: none;
			}

			.navbar .links .votea {
				display: none;
			}

			.navbar .mright {
				display: flex;
				width: 46%;
				margin-right: 4%;
			}

			.body {
				min-height: 100vh;
				background-image: url(<?php echo $backgroundimg ?>);
				background-size: cover;
				background-repeat: none;
				background-position: center;
				overflow-y: show !important;
			}

			.body .screen {
				min-height: 100vh;
			}

			.body .bg-video #player {
				display: none;
			}

			.body .screen .spacer .center .items {
				grid-template-columns: repeat(1, 1fr);
			}

			.body .screen .spacer .center .items .item {
				width: 75vw;
				height: 42.18vw;
			}
		} 
	</style>
</head>
<section class="loader" id="loader">
	<div class="loading">
	</div>
</section>
<body>
	<section class="dropdown" id="dropdown">
		<div class="center">
			<?php
				foreach ($linkarray as $key => $link) {
					if ($link == "" || $link == "#") {
					}

					elseif ($link !== "" && $link !== "#" && $link !== null) {
						$piece = explode("#", $link);
						if ($key == "mainbutton") {
							echo '<a class="votea" href="'.$piece[1].'">'.$piece[0].'</a>';
						}

						elseif ($key !== "mainbutton") {
							echo '<a class="link" href="'.$piece[1].'">'.$piece[0].'</a>';
						}
					}
				}
			?>
		</div>
	</section>
	<section class="navbar" id="navbar">
		<div class="mleft">
			<img src="<?php echo $logo ?>" id="navbarleft">
		</div>
		<div class="links">
			<?php
				foreach ($linkarray as $key => $link) {
					if ($link == "" || $link == "#") {
					}

					elseif ($link !== "" && $link !== "#" && $link !== null) {
						$piece = explode("#", $link);
						if ($key == "mainbutton") {
							echo '<a class="votea" href="'.$piece[1].'">'.$piece[0].'</a>';
						}

						elseif ($key !== "mainbutton") {
							if ($piece[0] == "Gallery") {
								echo '<a class="active" href="'.$piece[1].'">'.$piece[0].'</a>';
							}

							elseif ($piece[0] !== basename(dirname($_SERVER[PHP_SELF]))) {
								echo '<a href="'.$piece[1].'">'.$piece[0].'</a>';
							}
						}
					}
				}
			?>
		</div>
		<div class="mright">
			<a onclick="dropDown()" id="dropdownbtn"><i class="fas fa-bars"></i></a>
		</div>
	</section>
	<section class="imageviewer" id="imageviewerparent">
		<div class="image" id="imageviewer">
			<a class="source" id="imagesource" target="_blank">Open Source</a>
		</div>
		<a class="close" onclick="showImage()"><i class="fas fa-times"></i></a>
	</section>
	<section class="body">
		<div class="bg-video" id="bg-video">
			<?php if ($youtubeid == "") {
			}

			else if ($youtubeid !== "" && $youtubeid !== null) {
			?>
	  		<iframe id="player" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="640" height="360" src="https://www.youtube.com/embed/<?php echo $youtubeid ?>?autoplay=1&amp;controls=1&amp;loop=1&amp;playlist=<?php echo $youtubeid ?>&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fjakehamblin.com&amp;widgetid=1&amp;modestbranding=1&amp;mute=1"></iframe>
	  		<?php } ?>
	  	</div>
	  	<div class="screen">
	  		<div class="spacer">
	  			<div class="center">
		  			<h1>Gallery</h1>
		  			<div class="items">
			  			<?php
			  				foreach ($gallery as &$background) {
			  			?>
			  				<a class="item" onclick="showImage('<?php echo $background ?>')" target="_blank" style="background-image: url(<?php echo $background ?>)">
			  				</a>
			  			<?php }?>
			  		</div>
		  		</div>
	  		</div>
	  	</div>
	</section>
	<script>
		function copyText(e) {
		  	var textToCopy = document.querySelector(e);
		  	var textBox = document.querySelector(".clipboard");
		  	var changetext = document.getElementById("change");

		  	textBox.setAttribute('value', textToCopy.innerHTML);

		  	textBox.select();
		  	document.execCommand('copy');
		  	changetext.innerHTML = "IP copied";
  			setTimeout(function(){ 
  				changetext.innerHTML = "Click to copy IP";
  			}, 3000);
		}

		function dropDown() {
			var dropdown = document.getElementById("dropdown");
			var dropdownbtn = document.getElementById("dropdownbtn");
			var navbar = document.getElementById("navbar");
			var navbarleft = document.getElementById("navbarleft");

			dropdown.classList.toggle("dropdownshow");
			navbar.classList.toggle("navbarhidden");
			navbarleft.classList.toggle("navbarlefthidden");
			
			if (dropdown.classList.contains("dropdownshow")) {
				dropdownbtn.innerHTML = "<i class='fas fa-times'></i>";
			}

			else {
				dropdownbtn.innerHTML = "<i class='fas fa-bars'></i>";
			}
		}

		function showImage(image) {
			var imageviewerparent = document.getElementById("imageviewerparent");
			var imageviewer = document.getElementById("imageviewer");
			var imagesource = document.getElementById("imagesource");
			imageviewerparent.classList.toggle("imageviewershown");

			if (image == null || image == "") {
				imageviewer.style.backgroundImage = "";
			}

			else if (image != null && image != "") {
				imageviewer.style.backgroundImage = "url(" + image + ")";
				imagesource.href = image;
			}
		}
	</script>
</body>
</html>
