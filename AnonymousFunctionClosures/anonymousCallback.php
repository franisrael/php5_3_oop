<?php

/*
 * A callback function is a function that
 * you create yourself, then pass to another
 * function as an argument. Once it has
 * access to your callback function, the
 * receiving function can then call it 
 * whenever it needs to.
 * This gives you an easy 
 *
 * Many built-in PHP functions accept callback,
 * and you can also write your own callbac-accepting
 * functions. Let's look at a couple of
 * built-in functions that use callbacks, and
 * see how to use them.
 * Using array_map() to run a callback function
 * on each element in an array
*/

// Create a regular callback function
function nameToGreeting( $name ) {
	return 'Hello ' . ucfirst( $name ) . '!';
}

// ...then map the callback function to elements in an array.
$names = array( 'Omran', 'ShiShi', 'Badol');
print_r( array_map( nameToGreeting, $names ));
