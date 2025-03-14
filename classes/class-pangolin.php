<?php

require_once './personnage/personnage.php';

class Pangolin extends Personnage{
    public function __construct(string $name, int $strength = 40, int $life = 120){
        parent::__construct($name, $strength, $life);
    }
}