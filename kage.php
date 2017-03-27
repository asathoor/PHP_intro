<?php
/** 
 * en cookie
 */
$value = 200;
setcookie("MySecretLittleHelper",$value, time()+3600*24); 
?>
<h1> Hej Verden </h1>

<p>
 Inde i kagen står: 
 <?php echo $_COOKIE['MySecretLittleHelper']; ?>
</p>

<div>
	<?php
		if ( $_COOKIE['MySecretLittleHelper'] == 200 ) {
			echo "Du har tidligere købt en sodavand!";
		}
	?>
</div>

<pre>
	<?php print_r( $_COOKIE ); ?>
</pre>
