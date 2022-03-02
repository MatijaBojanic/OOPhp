<?php

class Age
{
    private $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 120)
        {
            throw new InvalidArgumentException('That makes no sense');
        }
        $this->age = $age;
    }
}

function register(string $name, Age $age){

}

$age = new Age(35);
// This way we protect validity of the 'age'
// To change it create new instance of obj
// This type of object is immutable

regiester('John Doe', $age);