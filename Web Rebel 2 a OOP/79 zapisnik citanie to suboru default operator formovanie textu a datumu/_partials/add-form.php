<?php
	
	//mozeme overiť ak mame niečo v post 
	if ( ! empty($_POST) )
	{
		echo '<pre>';
		print_r( $_POST);
		echo '</pre>';
	}


?>
	
	
	<form id="add-form" action="" method="post">
		<p class="form-group">
			<textarea placeholder="what bothers you, you little dummy?"
			          name="message" id="text" rows="3"></textarea>
		</p>
		<p class="form-group submit-button">
			<input type="submit" name="submitted" value="get out of my head">
		</p>
	</form>