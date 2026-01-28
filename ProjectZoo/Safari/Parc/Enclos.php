<?php
namespace Safari\Parc;
class Enclos {

    private array $animaux = [];
    private int $capaciteMax = 5;
    private $proprete = 'Propre';

    public function __construct (int $capaciteMax){
        $this->capaciteMax = $capaciteMax;
    }
#//Getter
    public function getAnimaux(): array {
        return $this->animaux;
    }

    public function getcapaciteMax(): int {
        return $this->capaciteMax;
    }

#//Setterr
    public function setcapaciteMax(int $capaciteMax): void {
        $this->capaciteMax = $capaciteMax;
    }

    public function ajouterAnimal(Animal $noouvelAnimal): array {
        
        $this->animaux[] = $nouvelAnimal;
        
        if (count($this->animal) >= $this->capaciteMax){
            return "Erreur : Enclos plein !";
        }
        else {
            $this->animaux[] = $nouvelAnimal;
            return "Bienvenue à " . $nouvelAnimal . "!";
        }
    }

    public function setProprete(string $proprete): void {
        $this->proprete =$proprete;
    }

    public function entretenir(){
        return "Nettoyage en cours ...";
        $this->setProprete ("Propre");
    }


    public function visiteGuidée(){
        return "Voici les animaux de l'enclos : <br>";

        foreach ($this->animaux as $animal) {
            $animal->crier();
    }
    }
        

}
?>