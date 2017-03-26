<?php include "header.php"; ?>

	<h1>Cookie</h1>

	<p>Saving info about a user, preferences or whether they're accepted as logged in.<p>

	<?php
	// send a cookie that expires in 24 hours
	$value = "value_but_no_spaces_please";
	setcookie("MySecretLittleHelper",$value, time()+3600*24); 

	// get values from the cookie
	if(isset( $_COOKIE["MySecretLittleHelper"] ) ) {
		echo "<h2>Welcome back</h2><p> Here is what I've saved in the secret little cookie:</p>";
		echo "<p>Cookie value: " . $_COOKIE["MySecretLittleHelper"] . "</p>";

	}
	else {
		echo "C'mon, gimme a break. PLEASE!<br> I'm storing the cookie. M'kay. So refresh the page. Like a new visit. M'kay?";
	}
	?>

	<h2>A Counter Cookie</h2>

	<p> I count your visits: 

	<?php
	// counter

	setcookie("MyCounter",1, time()+3600*24); 

	// get values from the cookie
	if(isset( $_COOKIE["MyCounter"] ) ) {
		echo $_COOKIE["MyCounter"];
		$newValue = $_COOKIE["MyCounter"] + 1;
		setcookie("MyCounter",$newValue, time()+3600*24); 
	}
	else {
		echo "Well, the cookie is saved. But you'll have to come back to see it. Clik refresh please.";
	}

	$price = 12;

	if($_COOKIE["MyCounter"] > 10) {
		// the ryan air trick
		$price = $price * 2;
	}


	?>

	<h2>Cookies will store info for the next visit</h2>

	<p>
		We save info in a cookie, so that the browser will remember the settings by the <strong>next</strong> visit.
	</p>
	<p>
		Let's use that info:
	</p>
	<p style="color:red">
	<?php echo "Special price for you my friend, only: " . $price; ?>
	</p>

	<p>
		We save info in a cookie, so that the browser will remember the settings by the <strong>next</strong> visit.
	</p>
	<p>
		Let's use that info:
	</p>
	<p style="color:red">
	<?php echo "Special price for you my friend, only: " . $price; ?>
	</p>

<?php include "footer.php"; ?>4
