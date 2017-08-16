<?php 

/*
* Static to allow to make a reference against
* the current class. So you will change the
* Foo class to use the keyword "static".
*
* Keyword is that it doesn't work the same as
* how this works in the nonstatic context.
* This means that the normal inheritance rules
* do not apply to static calls. The static keyword
* will simply try to resolve the call in the
* current class instead of the class the function
* was defined in.
*/

class Foo{
	protected static $name = 'Foo';
	public static function test(){
		return static::$name;
	}
}

class Bar extends Foo{
	protected static $name = 'Bar';
}

echo Bar::test();