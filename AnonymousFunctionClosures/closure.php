<?php
function myClosure() {
	$local_var = 10;
	return function() use($local_var) {
		return ++$local_var;
	};
}

// create a closure
$my_closure = myClosure();

// call the closure
echo $my_closure().'<br>';
echo $my_closure().'<br>';
echo $my_closure().'<br>';

// a random closure
$random_closure = myClosure();
echo $random_closure().'<br>';

// back to my_closure
echo $my_closure().'<br>';