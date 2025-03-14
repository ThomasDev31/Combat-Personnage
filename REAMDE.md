Dans le 'index.php' 
Vous pouvez initialiser autant de personnages que vous voulez avec: 

- new Gobelin ('Nom du personnage', 'Force du personnage', 'Vie du personnage')
    Si vous mettez aucune valeur en tant que force il aura 35 de force et pour la vie 150. 
    Il faut lui mettre Obligatoirement un nom.

- new Troll ('Nom du personnage', 'Force du personnage', 'Vie du personnage')
    Si vous mettez aucune valeur en tant que force il aura 50 de force et pour la vie 200. 
    Il faut lui mettre Obligatoirement un nom.

-new Pangolin ('Nom du personnage', 'Force du personnage', 'Vie du personnage')
    Si vous mettez aucune valeur en tant que force il aura 120 de force et pour la vie 40. 
    Il faut lui mettre Obligatoirement un nom.


Si vous voulez créer de nouvelles classes de Personnages 
Tapez ceci ('dans un nouveau fichier class-"nom de la class".php'): 
- '<?php 
require_once'./personnage/personnage.php'
class "nom de la classe" extends Personnage{
    public function __construct(string $name, int $strength = 40, int $life = 120){
        parent::__construct($name, $strength, $life);
    }
}' 

Vous pouvez changer les caratéristiques de strength ('force') et life ('vie').

- Dans le index.php faut instancier votre nouveau personnage avec 
- '$nomdelavariable' = new "Nom de la classe de votre personnage"
- puis faut les ajouter au jeu avec $game->addPlayer('$nomdelavariable')
- Enfin vous pouvez lancer le jeu avec $game->startGame()