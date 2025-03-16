<?php
$url = $_GET['rooter'] ?? 'acceuil';

switch($url){
    case('acceuil'):
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