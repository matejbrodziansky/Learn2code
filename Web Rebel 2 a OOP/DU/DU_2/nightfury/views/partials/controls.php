<?php
	require_once('views/partials/header.php')
?>

		<div class="post-content">
			<div class="container">

				<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

				<ul class="menu controls">
  				<?php
  					$page = glob('*.php');
				  	
				     	 foreach($page as $file) {
							$page = basename($file, '.php');
							if ($page == 'index') $page = 'VŠETKO';
							if ($page_name == $page ) echo '<li data-from="left"' .'class="selected"'. '><a href="'. $file . '">'. ucfirst($page) . '</a></li>';
							else echo '<li data-from="left"><a href="'. $file. '">'. ucfirst($page) . '</a></li>';
						 }
				?>
				</ul>
			</div>









































<!-- 
		<div class="post-content">
			<div class="container">

				<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

				<ul class="menu controls">
					<li data-from="left" ><a href="index.php">Všetko</a></li>
					<li data-from="right"><a href="web.php">Web</a></li>
					<li data-from="left" ><a href="branding.php">Branding</a></li>
					<li data-from="right"><a href="fotografia.php">Fotografia</a></li>
					<li data-from="left" ><a href="video.php">Video</a></li>
				</ul>

			</div>
 -->
