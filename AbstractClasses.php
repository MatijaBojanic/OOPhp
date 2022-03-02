<?php


abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', '$0', $class));
    }
    public function icon()
    {
        return strtolower(str_replace(' ', '-',$this->name())).'.png';
    }
    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user){

    }

}
// won't execute because we do not fulfill the abstract method inherited from AchievementType
class ReachTop50 extends AchievementType
{

}

$achievement = new FirstThousandPoints();
var_dump($achievement);