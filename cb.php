<?php

	if ($_GET["submit"]){
		echo "Hello";
	}

?>

<html>

<head>
	<link rel="icon" href="cb/images/cb-logo.png">
	<title>Closed Bracket</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="cb/assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<noscript>
		<link rel="stylesheet" href="cb/assets/css/noscript.css" />
	</noscript>
</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon fa-code"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>CLOSED BRACKET</h1>
					<p>
						A software company creating mobile applications and designing personal and commerical websites.
						<br />
						 Get a beautiful and responsive solution for your web and mobile needs. No hassle, no worry. 
 
					</p>
					<p class="info">
						View our software services tab to get started. 
					</p>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#work">Our Work</a></li>
					<li><a href="#services">Software Services</a></li>
					<li class="temp"><a href="#contact">Get in Touch</a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- Services -->
			<article id="services">
				<h2 class="major">Services</h2>
				<span class="image main"><img src="cb/images/pic01.jpg" alt="" /></span>
				<p>Aenean ornare velitss lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis,
					nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus
					erat id euismod egestas. By the way, check out my <a href="#work">awesome work</a>.</p>
				<p></p>
			</article>

			<!-- Work -->
			<article id="work">
				<h2 class="major">Our Work</h2>
				<span class="image main"><img src="cb/images/pic02.jpg" alt="" /></span>
				<p>We are working on some exciting projects. Stay tuned for more information coming soon!</p>
			</article>

			<!-- About -->
			<article id="about">
				<h2 class="major">About</h2>
				<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet
					ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris
					nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit
					amet ex mollis mattis lorem ipsum dolor sit amet.</p>
			</article>

			<!-- Contact -->
			<article id="contact">
				<h2 class="major">Contact</h2>
				<form method="post" action="#">
					<div class="field half first">
						<label for="subject">Subject</label>
						<input type="text" subject="subject" id="subject" />
					</div>
					<div class="field half">
						<label for="email">Your Email</label>
						<input type="text" name="email" id="email" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="4"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" class="special" /></li>
						<li><input type="reset" value="Reset" /></li>
					</ul>
				</form>
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
			</article>
			
		</div>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright">&copy; Closed Bracket. All Rights Reserved.</p>
		</footer>

	</div>

	<!-- BG -->
	<div id="bg"></div>

	<!-- Scripts -->
	<script src="cb/assets/js/jquery.min.js"></script>
	<script src="cb/assets/js/skel.min.js"></script>
	<script src="cb/assets/js/util.js"></script>
	<script src="cb/assets/js/main.js"></script>

</body>

</html>