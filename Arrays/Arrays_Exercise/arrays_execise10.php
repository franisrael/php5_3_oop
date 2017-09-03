<?php

/*
Write a PHP program to merge (by index) the following two arrays. Go to the editor
Sample arrays : 
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 
Expected Output :

Array  
(      
	[0] => Array          
	(              
		[0] => w3resource              
		[1] => 77              
		[2] => 87          
	)        
	[1] => Array          
	(              
		[0] => com              
		[1] => 23              
		[2] => 45          
	)    
)
*/

$array2 = array(array(77, 87), array(23, 45), 88);
$array1 = array("w3resource", "com", array("my", "solution"));

$combi_mer = function ($array1, $array2){
	return  array_merge((array)$array2, (array)$array1);
};

echo "<pre>";
print_r(
	array_map(
		function ($x, $y){
			return  array_merge((array)$x, (array)$y);
		},
		$array2,
		$array1
	)
);
echo "</pre>";