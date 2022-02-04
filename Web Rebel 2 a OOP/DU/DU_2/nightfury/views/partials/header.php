<?php



$page_name =  basename($_SERVER['SCRIPT_NAME'], '.php');

if ($page_name == 'index') $page_name = 'VŠETKO';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nightfury</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="js/jquery-2.1.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<div class="contact-bar">
			<div class="container">
				<ul class="menu personal">
					<li><i class="fa fa-phone"></i><a href="tel:+421900111222">+421 900 111 222</a></li>
					<li><i class="fa fa-envelope"></i><a href="mailto:email@mailinator.com">email@mailinator.com</a></li>
				</ul>
				<ul class="menu social">
					<li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="nav-bar">
			<div class="container">
				<h1 class="logo">
					<a href="#">
						<strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
					</a>
				</h1>

                <!-- class="selected" pri aktivnom prvku navigacie-->
                
                    <nav class="group">
                        <ul class="menu navigation">
                          <li><a href="index.php"><i class="fa fa-shield fa-2x"></i> Domov</a></li>
                            <li><a href="fotografia.php"><i class="fa fa-leaf fa-2x"></i> Portfolio</a></li>
                            <li><a href="web.php"><i class="fa fa-bolt fa-2x"></i> O nás</a></li>
                            <li><a href="video.php"><i class="fa fa-trophy fa-2x"></i> Kontakt</a></li>  
                    </nav>
               
			</div>
		</div>
	</header>
