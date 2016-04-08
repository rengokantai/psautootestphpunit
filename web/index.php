<?php
/**
 * Created by PhpStorm.
 * User: Hernan Y.Ke
 * Date: 2016/4/8
 * Time: 15:29
 */
//echo phpinfo();
require __DIR__ . "/../src/Repository/GameRepository.php";

$repo = new GameRepository();
$games = $repo->findByUserId(1);
//var_dump($games);
?>
<ul>
    <?php foreach ($games as $game): ?>
        <?php echo $game->getTitle() ?><br>
        <?php echo $game->getRating() ?><br>
        <img src="<?php echo $game->getImagePath() ?>"><br>
    <?php endforeach ?>
</ul>

