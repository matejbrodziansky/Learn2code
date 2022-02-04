<?php

	//require_once '_inc/config.php';

	if ( ! $item = get_item() ) {
		show_404();
	}

	//include_once "_partials/header.php";  


	
	$page = basename($_SERVER['PHP_SELF'],'.php');
	
	if ($page == 'index')
	{
		$page = 'add';
	}
	elseif ($page == 'edit')
	{
		$page = 'edit';
	}

	
	elseif ($page == 'delete')
	{
		$page = 'delete';
	}


	
?>
	
	
	
    <div class="page-header">
        <h1>VERY MUCH <?php echo $page?></h1>
    </div>
	
	<div class="row">
		<form id="<?php echo $page ?>-form" class="col-sm-6" action="_inc/<?php echo $page ?>-item.php" method="post">
		<p class="form-group">
			<?php if ($page == 'delete') echo '<textarea disabled class="form-control" name="message" id="text" rows="1">'.  $item  .'</textarea>';
				else {
					echo '<textarea  class="form-control" name="message" id="text" rows="1">'.  $item  .'</textarea>';
			    	}
			?>
		</p>
		<p class="form-group">
			<input name="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			<input class="btn-sm btn-danger" type="submit" value="<?php echo $page ?> item">
			<span class="controls">
				<a href="<?php echo $base_url ?>" class="back-link text-muted">back</a>
			</span>
		</p>
	</form>
</div>

<?php include_once "_partials/footer.php" ?>