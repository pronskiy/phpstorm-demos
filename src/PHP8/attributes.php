<?php
namespace App\PHP8;





    use Attribute;

    #[Attribute(
        Attribute::TARGET_CLASS |
        Attribute::TARGET_METHOD |
        Attribute::IS_REPEATABLE
    )]
    class FooAttribute
    {
    }










class Base
{
    #[FooAttribute]
    public function m(#[FooAttribute] $value)
    {
        $a = $value ?? throw new \InvalidArgumentException();
    }
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