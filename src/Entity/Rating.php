<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/4/8
 * Time: 18:22
 */
class Rating
{
    protected $game;
    protected $user;
    protected $score;

    public function toArray()
    {
        return [
            'score' => $this->getScore(),
        ];
    }

    public function getGame()
    {
        return $this->game;
    }

    public function setGame($value)
    {
        $this->game = $value;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($value)
    {
        $this->user = $value;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($value)
    {
        $this->score = $value;
    }
}