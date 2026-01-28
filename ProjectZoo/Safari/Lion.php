<?php
namespace Safari\Animaux;

class Lion extends Animal{


    private $niveauAgressivite;

    public function crier(){
        return "ROAAAAR!" . $this->nom . "rugit férocement.";
    }

    public function chasser(){
        return "Le Lion part en chasse.";
    }
}

?>