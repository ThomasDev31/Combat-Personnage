<?php



class Game{
    private int $length;
    private array $players;
    
    public function __construct(int $length = 0, array $players = []){
        $this->length = $length;
        $this->players = $players;
    }
    
    public function display(){
        return '<h1>Nouvelle partie ! </h1><br>';
    }
    
    public function addPlayer(Personnage $player){
        $this->players[] = $player;
        echo ('Nouveau personnage ' . $player->getName() ."<br>");
    }
    
      public function attack(Personnage $attacker,Personnage $cible){
          $action = rand(0,3);
          if($action === 0){
              
            $damage = rand(20,40) + $attacker->getStrength();
            
            $cible->takeAttack($damage);
            
            echo $attacker->getName() . " a frappé d'un coup critique " . $cible->getName() .'<br>';
            echo $cible->getName() . ' a perdu ' . $damage . ' points de vie. Et il lui reste ' .$cible->getLife() .' <br>';
        
          }else{
            $damage = $attacker->getStrength();
            $cible->takeAttack($damage);
            
            echo $attacker->getName() . ' a frappé ' . $cible->getName() .'<br>';
            echo $cible->getName() . ' a perdu ' . $damage . ' points de vie. Et il lui reste ' .$cible->getLife() .' <br>';
            
          }
        if($cible->getLife() <= 0){
            echo $cible->getName() . ' a perdu. <br>';
        }
    }
    
    public function startGame(){
        $round = 1;
        
        while(count($this->players) >1){
            echo "<br> <h3>Tour $round </h3><br>";
            
            $attackerIndex = array_rand($this->players);
            $attacker = $this->players[$attackerIndex];
            
            $action = rand(0,1);
            if($action === 0){
                do{
                    $targetIndex = array_rand($this->players);
                 } while($targetIndex == $attackerIndex);
                    $target = $this->players[$targetIndex];
                    
                    $this->attack($attacker, $target);
                    
                    if($target->getLife() <= 0){
                        unset($this->players[$targetIndex]);
                        $this->players = array_values($this->players);
                    }
                    
                }else{
                    $healTargetIndex = array_rand($this->players);
                    while($healTargetIndex == $attackerIndex){
                        $healTargetIndex = array_rand($this->players);
                        }
                        $healtarget = $this->players[$healTargetIndex];
                        
                        $attacker->heal($healtarget);
                        
                    
                }
                echo '<br>';
                $round++;
            }
        
        echo "
            <button class='open-modal'>Résultat</button>
            <div class='modal'> 
                <div class='content-modal'>
                    <div class='btn'> 
                        <button class='close'> <i class='fa-solid fa-xmark'></i></button>
                    </div>
                    <div class='content'>" 
                        . $this->players[0]->getName(). " à gagné .
                    </div> 
                </div> 
            </div>
        " ;
    }   
}