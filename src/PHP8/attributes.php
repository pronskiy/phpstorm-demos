<?php
namespace App\PHP8;







class Base
{
//    #[FooAttribute]
//    public function m(#[FooAttribute] $value)
//    {
//        $a = $value ?? throw new \InvalidArgumentException();
//    }
}

class Child extends Base
{
    public function m($value)
    {
    }
}

#[
    ORM\Entity,
    ORM\Table("user")
]
class User
{
    #[ORM\Id, ORM\Column("integer"), ORM\GeneratedValue]
    private $id;

    #[ORM\Column("string", ORM\Column::UNIQUE)]
    #[Assert\Email(["message" => "The email '{{ value }}' is not a valid email."])]
    private $email;
}