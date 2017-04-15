<?php require "header.php"; ?>

<?php
// SAVE THE CHARACTER NAME IN A COOKIE
// Using GET to store values and echo via a variable.

if(isset($_GET['name'])) {
	setcookie("characterName", $_GET['name'], time()+ (60 * 60 * 24));		
}

// Conditional: if the GET exists there may not be a cookie so:
if(isset($_COOKIE['characterName']) ) {
	// get the cookie
	$name = $_COOKIE['characterName'];	
	}

if(isset($_GET['name'])) {
	// else write out the name
	$name = $_GET['name'];
}
?>

<header>
	<h1> Microlite '84 Character Sheet </h1>
</header>

<div id="wrap" class="grid flex">

<?php
/**
* RPC a la MicroLite 81
*/

	// ARRAY 
	$race[] = "Human"; // No. 0
	$race[] = "Elf"; // 1
	$race[] = "Hobbit"; // 2
	$race[] = "Dwarf";
	$race[] = "Troll";

	// define some extra races from the Microlite booklet - or be creative here.

	// SOME ARRAY METHODS
	//0-1-2-n
	//echo $race[0]; // first row
	//unset($race[2]); // delete a value
	//var_dump($race); // test
	//asort($race); // sort low -> high
	//arsort($race); // sort high -> low

	$races = count($race) -1 ; // because the array count starts at 0	

	// INDEXED ARRAY
	$class[] = "Thief";
	$class[] = "Fighter";
	$class[] = "Wizard";

	$classes = count($class) -1 ; // because the array count starts at 0


	// ASSOCIATIVE ARRAY
	// Define the character array.
	// "key" => value
	$character = array(
		"strength" => rand(3,18),
		"dexterity" => rand(3,18),
		"mind" => rand(3,18),
		"charisma" => rand(3,18),
		"class" => $class[rand(0, $classes)],
		"race" => $race[rand(0, $races)], 
		"address" => "Shire",
		"hitpoints" => rand(3,18),
		"level" => 1,
	);

	$p = "<pre>";
	$pe = "</pre>";

	/*
	echo $p;
	var_dump($character);
	echo $pe;
	*/

	// CONDITIONAL STATEMENTS
	// If, else, elseif
	if($character['charisma'] > 13) {
			$character['class'] = $class[2]; // Wizard. And this is the manual way to get a value.
		}

		if($character['strength'] > $character['charisma'] or $character['strength'] >= 13) {
			$character['class'] = $class[1]; // Fighter.	
		}
		
		else{
			$character['class'] = $class[rand(0, $classes)];		
		}


	

// IF NO COOKIE EXISTS
if(!isset( $_COOKIE["character"] )) {

	// serialize the array
	$toCookie = serialize($character);
	// var_dump($toCookie);	
	
	setcookie("character", $toCookie, time()+ (60 * 60 * 60 * 24)); 
	
	// CREATE CHARACTER AND CHOOSE NAME FORM
	// The name will be saved outside this conditional sentence	
	print '<div class="col_4">
					<form action="#" method="get" enctype="multipart/form-data">
						<input type="text" name="name" value="enter character name">
						<button name="save" value="saveCharacter" type="submit">Save the name</button>
						<button name="Cancel" value="Cancel" type="reset">Cancel</button>
			</form>
			</div>
			<div class="col_8">
					<blockquote>
						The goal of Microlite81 games is to recreate the style and feel of the dice based fantasy role playing games from the 1980s.<br>
					</blockquote>
					<ol>
						<li> Give your character a name. </li>
						</li> Save </li>
						<li> Have your dices ready and ... </li>
						<li> Play! </li>
					</ol>
			</div>			
			
			';

	}
	


// IF COOKIE EXISTS
if(isset( $_COOKIE["character"] ) ) {

	$charUnSer = unserialize($_COOKIE["character"]); // cookie ready and reserialized

	// Character stats, race etc.
	print "<div class='col_4'>
				<h4> Name:&nbsp; ". $name ." </h4>
				<table class='sortable striped'>
					<thead>
						<tr>
							<th> Stats  </td> <th> Value </td>
					</tr>
				</thead>
			<tbody>
	";

	// THE LOOP (writing the character stats tables)
	foreach ($charUnSer as $key => $value)
		{
			print "	
				<tr>
	  				<td>	$key </td> <td> $value </td>
  				</tr>
  				";
			}
?>
</tbody>
</table>
</div>


<!-- THE BACKPACK -->
<div class="col_4">
	<h6>Backpack Items (max 20)</h6>
<ol class="alt">
<?php
// WHILE LOOP
$i = 1;

while ($i <= 20) {

print "<li> </li>";	

$i++;
} 
?>
</ul>
</div>

<?php require "about.php"; // the about text ?>

</div><!-- ends the grid -->

<?php } // ends the if-no-cookie-exists ?>

<?php require "footer.php"; ?>