<?php
class AchievementType
{
    public function name()
    {

    }
    public function difficulty()
    {
        return 'intermediate';
    }
    public function icon()
    {

    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user){

    }
    // override parent class func
    public function name()
    {
        return 'Welcome Aboard!';
    }
}