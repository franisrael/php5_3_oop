<?php 

/*
 *
 *
 *
 */

class Dog {
	public static function bark(){
		echo "Woof!";
	}
}

$class = 'Dog';
$action = 'bark';

$class::$action();