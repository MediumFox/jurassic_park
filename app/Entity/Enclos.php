<?php
namespace App\Entity;
class Enclos{
    private $idEnclos;
    private $libelleEnclos;
    private $idBiome;

    
    public function __construct($idEnclos, $libelleEnclos, $idBiome){
        $this->idEnclos = $idEnclos;
        $this->libelleEnclos = $libelleEnclos;
        $this->idBiome = $idBiome;
    }
}
?>