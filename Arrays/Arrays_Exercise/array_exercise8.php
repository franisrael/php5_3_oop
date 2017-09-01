<?php

/*
* Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. Go to the editor
* Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
* Expected Output :
* Average Temperature is : 70.6 
* List of seven lowest temperatures : 60, 62, 63, 63, 64, 
* List of seven highest temperatures : 76, 78, 79, 81, 85,
*/

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$coun = count($temperatures);
$avg = array_sum($temperatures) / count($temperatures);

echo $avg."<br>";

echo "<br> List of seven lowest temperatures<br>";
sort($temperatures);
show($temperatures);

echo "<br> List of seven highest temperatures<br>";
//rsort($temperatures);
show_reve($temperatures, $coun);

function show_reve($temperatures, $coun) {
	for($i= $coun - 7; $i < $coun; $i++) {
		echo $temperatures[$i].", ";
	}
}

function show($temperatures) {
	for($i=0; $i<7; $i++) {
		echo $temperatures[$i].", ";
	}
}