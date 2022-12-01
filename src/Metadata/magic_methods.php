<?php


class PrefixInstance {
	public function prefixInstanceMethod(): void {

	}
}

class Foo {
	public function __call(
		string $name, array $arguments) {
	}

	function bar(Foo $foo): void
	{
		$foo->prefix()->
	}
}
