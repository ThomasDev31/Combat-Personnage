<?php

require './classes/class-gobelin.php';
require './classes/class-troll.php';
require './classes/class-pangolin.php';
require './Game/game.php';

$personne = new Gobelin('Robin');
$personne1 = new Troll('Thomas');
$personne2 = new Pangolin('Haru');
echo($personne);
echo'<br>';
echo($personne1);
echo'<br>';
echo($personne2);
echo'<br>';
$game = new Game();
echo'<br>';
$game->addPlayer($personne);
echo'<br>';
$game->addPlayer($personne1);
echo'<br>';
$game->addPlayer($personne2);
echo'<br>';
echo($game);
echo'<br>';

$game->startGame();
echo'<br>';
