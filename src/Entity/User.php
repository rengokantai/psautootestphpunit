<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/4/8
 * Time: 18:12
 */
class User
{
    protected $ratings;

    public function getRatings()
    {
        return $this->ratings;
    }

    public function findRatingsByGenre($genreCode)
    {
        $filteredRatings = [];
        foreach ($this->getRatings() as $rating) {
            if ($rating->getGame()->getGenreCode() == $genreCode) {
                $filteredRatings[] = $rating;
            }
        }

        return $filteredRatings;
    }

    public function getGenreCompatibility($genreCode)
    {
        $ratings = $this->findRatingsByGenre($genreCode);
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
}