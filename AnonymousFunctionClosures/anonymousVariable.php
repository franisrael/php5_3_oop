<?php

// Assign an anonymous function to a variable 
$makeGretting = function($name, $timeOfDay_) {
	return ( "Good $timeOfDay, $name!" );
};

// Call the anonymous function
echo $makeGretting( 'Omran', 'morning' ).'<br>';
echo $makeGretting( 'ShiShir', 'afternoon').'<br>';

// Store 3 anonymous functions in an array

$luckyDip = array(
	function() {
		echo 'You got a bar of toffess!';
	},
	function() {
		echo 'You got a toy car!';
	},
	function() {
		echo 'You got some balloons!';
	}
);

// Call a random function
$choice = rand( 0, 2 );
$luckyDip[$choice]();