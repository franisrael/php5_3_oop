<?php

/*
* Write a PHP script which will display the colors on the following way:
* Output:
* white, green, red,
*/
$color = array('white', 'green', 'red');
echo "<ul>";
foreach ($color as $key=>$value) {
	echo "<li>$value</li>";
}
echo "</ul>";