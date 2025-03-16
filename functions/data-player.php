<?php 
if(isset($_POST['name']) && isset($_POST['strength']) && isset($_POST['life']) && isset($_POST['classe'])){
    foreach($_POST['name'] as $index => $name){
        $name = htmlspecialchars($_POST['name'][$index]);
        $strength = (int)$_POST['strength'][$index];
        $life =   (int)$_POST['life'][$index];
        $class = htmlspecialchars($_POST['classe'][$index]);
    }
}
?>