<?php   
require_once 'data-player.php';
require_once './Game/game.php';

require_once './classes/class-gobelin.php';
require_once './classes/class-troll.php';
require_once './classes/class-pangolin.php';

$game = new Game();

if(isset($_POST['name']) && isset($_POST['strength']) && isset($_POST['life']) && isset($_POST['classe'])){
    foreach($_POST['name'] as $index => $name){
        $personnage = $index;
        if($_POST['classe'][$index] === "Gobelin"){
            $strength = empty($_POST['strength'][$index])  ? 35 : intval($_POST['strength'][$index]);
            $life = empty($_POST['life'][$index]) ? 135 :intval($_POST['life'][$index]);
            $personnage = new Gobelin($_POST['name'][$index],$strength, $life);
            echo("<br> $personnage, {$_POST['classe'][$index]} <br>");
            $game->addPlayer($personnage);
        }else if($_POST['classe'][$index] === "Troll"){
            $strength = empty($_POST['strength'][$index])  ? 50 : intval($_POST['strength'][$index]);
            $life = empty($_POST['life'][$index]) ? 200 :intval($_POST['life'][$index]);
            $personnage = new Gobelin($_POST['name'][$index],$strength, $life);
            echo("<br> $personnage, {$_POST['classe'][$index]} <br>");
            $game->addPlayer($personnage);
        }else{
            $strength = empty($_POST['strength'][$index])  ? 40 : intval($_POST['strength'][$index]);
            $life = empty($_POST['life'][$index]) ? 120 :intval($_POST['life'][$index]);
            $personnage = new Gobelin($_POST['name'][$index],$strength, $life);
            echo("<br> $personnage, {$_POST['classe'][$index]} <br>");
            $game->addPlayer($personnage);
        }
    }
    $game->startGame();
}
