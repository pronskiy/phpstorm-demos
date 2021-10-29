<?php




/*
Smart extract from condition:
[gif]
*/
//
//if (foo('test') || bar()) {
//
//}

/*
Extract variable with usages outside lambda/anonymous function:
[gif]
check side effects: fn () => <selection>bar()</selection>; transform to closure
- $this->doSomething($b01 = new \Pim\Pam\Poum\Button('Text')); more careful extraction

Extracting array item from loop:
[gif]
 /// extracting $arr[i] from loop
*/


fn () => bar();

$y = 1;

$fn1 = fn($x) => $x + $y; // bug with extract

$posts = [/* … */];

$ids = array_map(fn($post) => $post->id, $posts);




function process(mixed $i) {
}
function do_stuff(int $ref) {
}
    $array = [
        1, 2, 3];



    for ($i = 0; $i < count($array); $i++) {
        $item = $array[$i];
        echo $item;
        process($item);
        do_stuff($item);
    }


