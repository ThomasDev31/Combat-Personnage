<?php 

class Personnage{
    private string $name;
    private int $strength;
    private int $life;
    
    public function __construct(string $name, int $strength = 0, int $life = 100){
        $this->name = $name;
        $this->strength = $strength;
        $this->life = $life;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getStrength(){
        return $this->strength;
    }
    
    public function getLife(){
        return $this->life;
    }
    
    public function setLife($newlife){
        return $this->life = $newlife;
    }
    
    public function takeAttack(int $damage){
        $this->life -= $damage;
        if($this->life <= 0){
            $this->life = 0; 
        }
        
    }
    
    public function heal($player = null): void {
        if($player === null){
            $healAmount = rand(0,60);
            $this->life += $healAmount;
            echo $this->getName() . ' se soigne de ' . $healAmount . ' il a maintenant '. $this->life . ' points de vie.<br>';
        }else{
            $healAmount = rand(0,60);
            $player->setLife($player->getLife() + $healAmount) ;
            echo $this->getName() . ' soigne ' . $player->getName() .' de ' .$healAmount .' il a maintenant '. $player->life . ' points de vie.<br>';
        }
    }
    
    public function __tostring(){
        return"Je m'appelle " . $this->name ." j'ai " . $this->strength . " en force et j'ai " . $this->life . " en vie.<br>";
    }
    
}