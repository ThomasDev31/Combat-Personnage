<?php
require './personnage/personnage.php';

class Gobelin extends Personnage{
    public function __construct(string $name, int $strength = 35, int $life = 135){
        parent::__construct($name, $strength, $life);
    }
    public function Reverse(){
        $name = $this->getName();
        echo(strrev("Je m'appelle $name"));
    }
}