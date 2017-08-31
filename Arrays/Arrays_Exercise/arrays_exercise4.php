<?php

/* Write a PHP script to get the first element of the above array.
 * Expected result: white
 */

$color = array('fourth' => 'white', 'sixth' => 'green', 11 => 'red');

$x = array_shift(array_values($color));

echo $x."<br>";

var_dump($color);

echo "<br>";

$x = array_shift($color);

/*
* array_shift() shifts the first value of the array off and returns it,
* shortening the array by one element and moving everything down.
* All numerical array keys will be modified to start counting from 
* zero while literal keys won't be touched
*
* Note: This function will reset() the array pointer of the input array after use.
*
* Returns the shifted value, or NULL if array is empty or is not an array
*/

echo $x;

echo "<br>";

var_dump($color);