<h1>The most simple gallery</h1>

<?php
$dir    = 'images';
$files1 = scandir($dir); // . .. foerst
$files2 = scandir($dir, 1); // . .. sidst

/*remove (=unset)  . .. from files1*/
unset($files1[0],$files1[1]);

echo "<div id='gallery'>";

/*loop out object content*/
foreach ($files1 as $img) {
	echo "<img src='images/$img' width='150' style='float:left' />";
}

echo "</div>";
?>
