<?php
namespace Safari\Perroquet;
class Perroquet extends Animal{
    public function crier(){
        return "Coco veut un gateau !" . $this->nom . "siffle";
    }

    public function voler(){
        return "Le perroquet ss'envole .";
    }

    
}
?>