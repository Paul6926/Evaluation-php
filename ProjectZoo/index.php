<?php
    
#//Import les classes (Avec Autoloader)
spl_autoload_register(function ($class){

    $file = str_replace('\\','/', $class) . '.php';
    if(file_exists($file)) require $file;
    
});   
use Safari\Animaux;
use Safari\Lion;
use Safari\Perroquet;
use Safari\Parc\Enclos;

$enclos = new Enclos(3);

$lion = new Lion ("Simba" , 150);
$perroquet1 = new Perroquet('Rio' , 2);
$perroquet2 = new Perroquet('Jago' , 3);
$lion2 = new Lion ('Nala' , 175);

$enclos->ajouterAnimal($lion) . "<br>";
$enclos->ajouterAnimal($perroquet1) . "<br>";
$enclos->ajouterAnimal($perroquet2) . "<br>";
$enclos->ajouterAnimal($lion2) . "<br>";

?>