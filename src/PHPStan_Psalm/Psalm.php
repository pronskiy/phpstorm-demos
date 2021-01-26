<?php

/**
 * @return array<string>
 */
function takesAnInt(int $i)
{
    return [$i, "hello"];
}

$data = ["some text", 5];
takesAnInt($data[0]);

$condition = rand(0, 5);
if ($condition) {
} elseif ($condition) {
}


/**
 * @param-out  string $s
 */
function addFoo(?string &$s) : void {
    if ($s === null) {
        $s = "hello";
    }
    $s .= "foo";
}


class MyLongNamedClass{}
/**
 * @psalm-param class-string<MyLongNamedClass> $param
 */
function f($param)
{
}

/**
 * @param callable-string $p
 */
function sc(string $p) :void
{
}

sc(\Exception::class);

interface ProxyGeneratorInterface
{}

/**
 * @param class-string<\ProxyGeneratorInterface> $s
 */
function takesArray($s): void
{
}

takesArray(\Exception::class);

/**
 * Takes one array with keys and another with values and combines them
 *
 * @template TKey
 * @template TValue
 *
 * @return array<int, \Exception>
 */


function array_combine2(array $arr, array $arr2): array
{
    return [];
}

foreach (array_combine2([], []) as $k => $value)
{
    $value->
}