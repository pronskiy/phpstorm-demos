<?php

class Phake {
	public static function mock(string $class) {
		return new $class;
	}
}

class Phake_IMock {
	public function f() {}
}

class MyClass {
	public function g() {}
}

$mock = Phake::mock(MyClass::class);
$mock->
