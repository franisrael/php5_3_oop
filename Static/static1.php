<?php
/*
 * Example of using __callStatic() vs __call
 * 
 * MAGIC METHODS
 *
 * __callStatic is designed for handling static method calls, which gives us the ability
 * to better design our method overloading.
 *
 * __call is designed to handle method calls for methods that aren't defined or visible 
 * in the class
 *
 * PHP does enforce the definition of the __callStatic() method; it must be public, and
 * it must be declared static.
 * Likewise, the __call magic method must also be defined public, just as all the magic 
 * methods must be.
 * 
 */

class Foo {
	public static function __callStatic($name, $args){
		echo "Called method $name statically<br>";
	}
	public function __call($name, $args){
		echo "Called method $name<br>";
	}
}

Foo::dog();
Foo::Talcual();
$foo = new Foo;
$foo->perro();
$foo->other();