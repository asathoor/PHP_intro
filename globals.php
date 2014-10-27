<h1>$_SERVER</h1>

<h2>Root dir</h2>

<p>
<?php

$root =	$_SERVER['CONTEXT_DOCUMENT_ROOT']; // root dir
$script = $_SERVER['SCRIPT_NAME']; // file name

echo $root . $script; // path to this file

// Exercise 1
// create a link to the present file via php
// tip: a href

echo "";
?>
</p>

<h2>Server name, ip, port</h2>
<p>
	<?php
	echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
	echo "Server address: " . $_SERVER['SERVER_ADDR'] . "<br>";
	echo "Server port: " . $_SERVER['SERVER_PORT'] . "<br>";
	?>
</p>

<h2>ETC</h2>

<p>By thine own ingenium device others via keen observations of php info.</p>