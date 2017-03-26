<?php
/**
 * Session demo
 *
 * Allways start with session_start()
 */
session_start();

// Set some session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["password"] = false;

?>
<!DOCTYPE html>
	<html>

			<head>
				<title>Session demo</title>

				<style>
					/**
					 * Create css via PHP
					 * (and get the value from a session, or cookie)
					 */
					.favColor { 
						color: <?php echo $_SESSION['favcolor']; ?>
					}
				</style>

			</head>


			<body>
				<h2> Use the session value </h2>
				<p>
					The favorite color is: 
					<span class="favColor"> 
						<?php echo $_SESSION['favcolor'] ?> 
					</span>
				</p>
	

				<h2> The session object </h2>
				<p>
					Inside the session object, you'll find this:
				<p/>

				<pre>
					<?php print_r( $_SESSION ); ?>
				</pre>

		</body>
</html>
