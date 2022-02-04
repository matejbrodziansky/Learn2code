<?php include_once "../patrials/header.php"  ?>

<ul class="menu controls">
	<?php
						require_once "../assets/config.php" ;
						
						$page = glob('*.php');
						
						foreach($page as $file) {
							$page = basename($file, '.php');
							if ($page == 'all') $page = 'VŠETKO';
							if ($page_name == $page ) echo '<li data-from="left"' .'class="selected"'. '><a href="'. $file . '">'. ucfirst($page) . '</a></li>';
							else echo '<li data-from="left"><a href="'. $file. '?page='. $page .'">'. ucfirst($page) . '</a></li>';
						}
						?>
					</ul>
					
				</div>
				
<?php include_once "../patrials/footer.php"  ?>