<?php
/**
 * Log in form
 */
//session_start();
?>

<p> Tjuhej </p>

<div id="logIn">
	<!-- $_GET: note the url in the browser -->
	<form action="#" method="get" enctype="multipart/form-data">
		<input type="text" name="user"><br>
		<input type="password" name="password"><br>
		<button name="logIn" type="submit">Log in</button>
		<button name="cancel" type="reset">Cancel</button>
	</form>
</div>

<div id="status">
	<?php
	/**
	 * Check submit
	 */
	if ( isset( $_GET['logIn'] ) ) {
		print_r( $_GET );
	}
	else {
		echo "Fill in the form, please.";
	}
	?>
</div>
