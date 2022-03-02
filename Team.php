<?php
class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }
    // static constructor
    public static function start(...$parsams)
    {
        return new static(...$parsams);
    }
    public function getName()
    {
        return $this->name;
    }

    public function getMembers(): array
    {
        return $this->members;
    }



}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

$acme = new Team("Acme",[
    new Member('John Doe'),
    new Member('Jane Doe'),
]);
var_dump($acme);
$acme = Team::start("Acme");
var_dump($acme);