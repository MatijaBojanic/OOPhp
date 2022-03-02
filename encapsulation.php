<?php
// Protected means children have access to it
// Private means only it has access to it
// Basically we are making sure that only things that should and can work with smthg work with it
class TennisMatch
{
    protected $playerOne;

    public function score()
    {
        //lots of factors go into scoring
    }
    protected function hasWinner()
    {

    }
    protected function hasAdvantage()
    {

    }
}