<?php

/*
Write a PHP function to change the following array's all values to upper or lower case. Go to the editor
Sample arrays : 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output : 
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
*/

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "<pre>";
echo "Original array";
print_r($Color);
echo "Values to lower case ";
print_r(array_map('strtolower', $Color));
echo "Values to upper case ";
print_r(array_map('strtoupper', $Color));
echo "</pre>";