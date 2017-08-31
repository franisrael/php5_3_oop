<?php

/*
* Write a PHP script which will display the colors on the following way:
* Output:
* white, green, red,
* green
* red
* white
*/
$color = array('white', 'green', 'red');

foreach ($color as $value) {
	echo "$value, ";
}
sort($color);

echo "<ul>";
foreach ($color as $key=>$value) {
	echo "<li>$value</li>";
}
echo "</ul>";