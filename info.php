<!DOCTYPE html>
<html>
<head>
<title>PHP info</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta >
</head>
<body>

<h1 style="text-align:center">PHP info</h1>

<? // phpinfo(); ?>

<?

/* PRINT AND ECHO */

print("<h1>Hello World!</h1>");
echo "<h2>World Hello</h2>"; // is a oneliner, but you can concatenate:

echo "";

print "
some more text
more
and more
"; // print can extend over multiple lines

print "
	<div class='oh'>
		<p>
			Poem by William Butler Yeats
		</p>

		<h3>A Coat</h3>

			I MADE my song a coat<br>
			Covered with embroideries<br>
			Out of old mythologies<br>
			From heel to throat;<br>
			But the fools caught it,<br>
			Wore it in the world's eyes<br>
			As though they'd wrought it.<br>
			Song, let them take it,<br>
			For there's more enterprise<br>
			In walking naked. 
	</div>
"; // put out html
?>

<pre>

<? 
/* VARIABLES */

print_r ($_SERVER);
?>

</pre>

<?
$foo = "Hello";
$bar = "World";

print "
<h3>Print out variables</h3>
$foo $bar";
?>


</body>
</html>