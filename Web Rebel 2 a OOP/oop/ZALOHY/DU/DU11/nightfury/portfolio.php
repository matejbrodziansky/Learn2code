<?php include_once "_patrials/header.php"; ?>

				<nav class="group">
					<ul class="menu navigation">
						<li><a href="index.php"><i class="fa fa-shield fa-2x"></i> Domov</a></li>
						<li class="selected"><a href="portfolio.php"><i class="fa fa-leaf fa-2x"></i> Portfolio</a></li>
						<li><a href="about.php"><i class="fa fa-bolt fa-2x"></i> O nás</a></li>
						<li><a href="contact.php"><i class="fa fa-trophy fa-2x"></i> Kontakt</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<main>
		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">

					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>


					<?php include '_patrials/menu_controls.php' ?>
					
					<?php
					 $page = $_GET['page'];
					 $page = ( $page == 'vsetko') ? 'all' : "$page" ;
					?>
					
					<?php include "portfolio/$page.php" ?>
				</div>

	<?php include_once "_patrials/footer.php"; ?>