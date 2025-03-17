<?php
$url = $_GET['rooter'] ?? 'accueil';

switch($url){
    case('accueil'):
        $template = './views/index.phtml';
        break;
    case('combat'):
        $template = './views/combat.phtml';
        break;
    case('scrore'):
        $template = './views/score.phtml';
        break;
    default:
        $template = './views/index.phtml';
        break;
}