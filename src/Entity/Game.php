<?php

/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/4/8
 * Time: 15:40
 */
class Game
{
    protected $title;
    protected $imagePath;
    protected $rating;

    public function getAverageScore(){
        $ratings = $this->getRating();
        $numRatings = count($ratings);
        if ($numRatings == 0) {
            return null;
        }

        $total = 0;
        foreach ($ratings as $rating) {
            $score = $rating->getScore();
            if ($score === null) {
                $numRatings--;
                continue;
            }
            $total += $score;
        }
        return $total / $numRatings;
    }

    public  function isRecommended($user){
        $compatibility = $user->getGenreCompatibility($this->getGenreCode());
        return $this->getAverageScore() / 10 * $compatibility >= 3;
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {
        if ($this->imagePath == null) {
            return '/images/image.png';
        }
        return $this->imagePath;
    }

    /**
     * @param mixed $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function toArray()
    {
        $array = [
            'title' => $this->getTitle(),
            'imagePath' => $this->getImagePath(),
            'ratings' => [],
        ];
        foreach ($this->getRatings() as $rating) {
            $array['ratings'][] = $rating->toArray();
        }
        return $array;
    }

}