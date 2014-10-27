<h1>Cookies Demo</h1>

<?php
// file: form_update_array.php

$status = NULL; // can output status messages

// simple character model
$character = array(
	"name" => "Legolas",
	"hitpoints" => 8,
	);	

// change value of the hitpoints according to GET
if( isset( $_GET['hitpoints']) ) {
	$character['hitpoints'] = $_GET['hitpoints'];	
	setcookie("Microlite81_hitpoints", $_GET['hitpoints'], time()+ (60 * 60 * 60 * 24));
	$status = "Hitpoints saved: " . $_GET['hitpoints'];
}

if($character['hitpoints'] <=0) {
		$status = $character['name'] . " is not able to figth right now.";
	}

if(isset($_COOKIE['Microlite81_hitpoints']) && isset($_GET['hitpoints']) && $character['hitpoints'] !== $_COOKIE['Microlite81_hitpoints']) {
	echo $_COOKIE['Microlite81_hitpoints'] . "= cookie. " . $character['hitpoints'] . " = character array. " . $_GET['hitpoints'] . " = GET";
}
else {
	echo "Cookie = " . $_COOKIE['Microlite81_hitpoints'] . ". Character array = " . $character['hitpoints'] . ". GET not set yet.";
}


// form method GET 
echo "<h2>" . $character["name"] . " HP = " . $character['hitpoints'] . "</h2>";
print '<div>
	<form action="cookies_demo.php" method="get" enctype="multipart/form-data">
		Hitpoints <input type="text" name="hitpoints" value="'
		. $character['hitpoints'] 
		. '" size="2" maxlength="3">
		<button name="submit" value="submit" type="submit">Save</button>
		<button name="Cancel" value="Cancel" type="reset">Cancel</button>
	</form>
	</div>
';
?>

<p>The idea of a cookie is: you get the state from your last visit! Ideal for Welcome back ...</p>