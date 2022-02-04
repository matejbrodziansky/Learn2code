<?php include_once "assets/config.php"; 


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kickass Website</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/style.css">
</head>


<body class="home">
<?php 
?>

	<header class="site-header">
		<nav class="container">
			<ul class="menu">
			<?php 
			//$page = glob('*.php');			  	
					  foreach( array_reverse($page) as $file) {
						$page = basename($file, '.php');
						if ($page == 'index') $page = 'Home';
						if ($page_name == $page ) echo '<li><a href="'. $file . '"><strong>'. ucfirst($page) . '</strong></a></li>';
						else echo '<li><a href="'. $file. '">'. ucfirst($page) . '</a></li>';
					 }
			?>
			</ul>
		</nav>
	</header>


