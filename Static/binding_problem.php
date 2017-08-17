<?php

/*
 * This is because the self::$name reference
 * made in the test() method is done with the
 * Foo class. The binding occurs this way 
 * because this is where the function is defined
 */

class Foo{
	protected static $name = 'Foo';
	public function test(){
		return self::$name;
	}
}

class Bar extends Foo{
	protected static $name = 'Bar';
}

echo Bar::test();