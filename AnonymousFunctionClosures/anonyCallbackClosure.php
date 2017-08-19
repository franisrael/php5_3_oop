<?php

// Closure 

function myClosure( $num ) {
	return function( $x ) use ( $num ){
		return $num * $x;
	};
}

$closure = myClosure( 10 );
printf($closure( 2 ).'\n');
echo $closure( 4 ).'\n';