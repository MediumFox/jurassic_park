<?php
namespace Entity;
class Biome{
    private $libelleBiome;
    private $descriptionBiome;

    public function __construct($libelleBiome, $descriptionBiome){
        $this->nom = $libelleBiome;
        $this->prenom = $descriptionBiome;
    }

    public function __toString() {
        return "{$this->libelleBiome}, {$this->descriptionBiome}";
    }
}

?>