<?php /** @noinspection PhpExpressionResultUnusedInspection */

/** @noinspection PhpPureAttributeCanBeAddedInspection */
//namespace App\PHP81;
//
//enum Value
//{
//    case King;
//}
//
//
//
//    enum Suit: string {
//        //region cases...
//        case Hearts     = '♥';
//        case Diamonds   = '♦';
//        case Clubs      = '♣';
//        case Spades     = '♠';
//        //endregion
//
//        public function color(): string {
//            return match($this) {
//                Suit::Hearts, Suit::Diamonds => 'Red',
//                Suit::Clubs, Suit::Spades => 'Black',
//            };
//        }
//
//        public function from() {}
//
//        public function __construct() {}
//        public function __get(string $name) {}
//    }
//
//
//
//
//    $s1 = Suit::from('♥'); // Suit::Hearts
//    $s2 = Suit::tryFrom('x'); // null
//
//    $suits = Suit::cases();
//    $randomSuit = $suits[array_rand($suits)];
//
//
//    enum PhpStormVersion: string
//    {
//        case v2021_1 = '2021.1';
//        case v2021_2 = '2021.2';
//    }






















//function pick_a_card(Suit $suit) {}
//
//$val = Suit::Diamonds;
//
//pick_a_card($val);
//pick_a_card(Suit::Clubs);
//pick_a_card('Spades');    // TypeError: pick_a_card(): Argument #1 ($suit) must be of type Suit, string given
//
//
//class Foo
//{
//    public Suit $prop;
//}
//
//$f = new Foo;
//$f->prop = Suit::Diamonds;
//
//enum PhpStormVersion: string
//{
//    case v2021_1 = '2021.1';
//    case v2021_2 = '2021.2';
//
//    public static function from()
//    {
//    }
//}
//
//$v = PhpStormVersion::v2021_2;
//echo PhpStormVersion::v2021_2->value;
//echo $v->value;
//
//PhpStormVersion::from();
//
//    enum Enum: int
//    {
//        case One = 1;
//    }
//
//    echo Enum::One->value; // should not be highlighted
//    Enum::from(1); // should not be highlighted
//
//Enum::cases();
//
//function p(BackedEnum $enum)
//{
//    var_dump($enum);
//}
//
//p(PhpStormVersion::v2021_1);
//
//Enum::test
//
//enum Size {
//    case Small;
//    case Medium;
//    case Large;
//}
//
//$val = Suit::Diamonds;
//
//$str = match ($val) {
//    Suit::Spades => "The swords of a soldier",
//    Suit::Clubs => "Weapons of war",
//    Suit::Diamonds => "Money for this art",
//    default => "The shape of my heart",
//}
