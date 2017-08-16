<?php

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