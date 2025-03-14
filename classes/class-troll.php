<?php 
require_once './personnage/personnage.php';

class Troll extends Personnage{
    public function __construct(string $name, int $strength = 50, int $life = 200){
        parent::__construct($name, $strength, $life);
    }
}