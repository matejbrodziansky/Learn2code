
<?php    include_once "assets/function.php" ?>


					<ul class="menu controls">
						<li data-from="left" <?= set_nav_page_selected('vsetko') ?>><a href="portfolio.php?page=vsetko">Všetko</a></li>
						<li data-from="right" <?= set_nav_page_selected('web') ?> ><a href="portfolio.php?page=web">Web</a></li>
						<li data-from="left" <?= set_nav_page_selected('branding') ?>><a href="portfolio.php?page=branding">Branding</a></li>
						<li data-from="right" <?= set_nav_page_selected('fotografia') ?>><a href="portfolio.php?page=fotografia">Fotografia</a></li>
						<li data-from="left" <?= set_nav_page_selected('video') ?>><a href="portfolio.php?page=video">Video</a></li>
					</ul>

