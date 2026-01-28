<?php
namespace Safari\Animaux;

class Animal {

    public $nom;
    public $poid;
    public $estMalade = false;

    public function __construct($n, $p){
        $this->nom = $nom;
        $this->poid = $poid;
    }

    public function manger(){
        return "L'animal mange.";
    }

    public function seSoigner(){
        $this->$estMalade = false;
    }  

    public function crier(){
        return "WRAAAAAA!!";
    }
}

?>