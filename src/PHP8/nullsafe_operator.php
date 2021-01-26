<?php

$country =  null;

$session = new StdClass();

    // PHP ≤7.4
    if ($session !== null) {
        $user = $session->user;

        if ($user !== null) {
            $address = $user->getAddress();

            if ($address !== null) {
                $country = $address->country;
            }
        }
    }

    // PHP 8
    $country = $session?->user?->getAddress()?->country;


$booking = new class() {
    public function getStartDate()
    {
        return $this;
    }
};

// PHP
$startDate = $booking->getStartDate();
$dateAsString = $startDate ? $startDate->asDateTimeString() : null;

$dateAsString = $booking->getStartDate()?->asDateTimeString();


// Can't use nullsafe operator in write context
$foo = new class() { public $bar;};


    $foo?->bar->baz = 'baz';


    foreach ([1, 2, 3] as $foo?->bar->baz) {}
    unset($foo?->bar->baz);
    [$foo?->bar->baz] = 'baz';

    $x = &$foo?->bar;






function nn() :stdClass
{
    return new stdClass();
}

$n = nn()?->test;