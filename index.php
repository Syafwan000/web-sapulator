<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SapuLator</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179005924-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-179005924-1');
	</script>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/front.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body onload="realtimeClock()">
	<div class="container">
		<div class="title">
		<h1>
			<center>
				<span>S</span>
				<span>a</span>
				<span>p</span>
				<span>u</span>
				<span>L</span>
				<span>a</span>
				<span>t</span>
				<span>o</span>
				<span>r</span>
			</center>
		</h1>
		<div id="clock"></div>
		<img src="img/logo.png">
		<p class="info">SapuLator | ID</p>
	<div class="start">
		<a class="button" href="build/starter.php">Memulai</a>
	</div>
		<p class="built">Dibangun dengan&nbsp;<i class="fas fa-heart"></i></p>
		<p class="copyright">Hak Cipta&nbsp;<i class="far fa-copyright"></i>&nbsp;ShaWann</p>
		<a class="git" target="_blank" href="https://github.com/Syafwan000"><i class="fab fa-github"></i></a>
		<a class="ig" target="_blank" href="https://www.instagram.com/sha.wannn/"><i class="fab fa-instagram"></i></a>
	</div>

	<script src="js/time.js"></script>
</body>
</html>