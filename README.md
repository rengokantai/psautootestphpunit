#### psautootestphpunit
#####Tests PHPUnit
######
src/Repo/repo.php
```
require __DIR__ . '/../fol/GameRepo.php

class GameRepo
{
  public function findById($id){
```

src/web/index.php
```
<ul>
  <?php foreach ($games as $game):?>
    <li>
      <?php echo $game->getTitle() ?><br>
    </li>
  <?php endfroeach?>
</ul>
```

Create test:
src/Test/Unit/GameTest.php
```
<?php
require __DIR__ . "/../../Entity/Game.php";
class GameTest extends PHPUnit_Framework_TestCase{
  public function testImage_WithNull(){
    $game=Game()
    $game->setImagePath(null);
    $this.assertEquals('/images/x.jpg,$game->getImagePath());
  }
}
```
Run:
```
phpunit src/Test/GameTest.php
```
