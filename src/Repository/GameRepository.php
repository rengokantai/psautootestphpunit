<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/4/8
 * Time: 15:36
 */
require __DIR__ ."/../Entity/Game.php";
class GameRepository{
    public function findByUserId($id){
        $games = [];
        for($i=1;$i<4;$i++){
            $game = new Game();
            $game->setTitle("Game ".$i);
            $game->setImagePath("/images/image.png");
            $game->setRating(4);
            $games[]=$game;
        }
        return $games;
    }
}