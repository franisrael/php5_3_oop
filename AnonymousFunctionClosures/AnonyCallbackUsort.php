<?php

// Custom array sorting with usort() 
$people = array(
	array( 'name' => 'Omran', 'age' => 39 ),
	array( 'name' => 'ShiShi', 'age' => 23),
	array('name' => 'Badol', 'age' => 46 )
 );

usort($people, function($personA, $personB){
	return ($personA['age'] < $personB['age']) ? -1 : 1;
});

print_r($people);