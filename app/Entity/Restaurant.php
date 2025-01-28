<?php
namespace App\Entity;
class Restaurant{
    private $idRestaurant;
    private $libelleRestaurant;
    private $imageRestaurant;
    private $idBiome;
    private $nbTable;
    
    public function __construct($idRestaurant, $libelleRestaurant, $imageRestaurant, $idBiome, $nbTable){
        $this->idRestaurant = $idRestaurant;
        $this->libelleRestaurant = $libelleRestaurant;
        $this->imageRestaurant = $imageRestaurant;
        $this->idBiome = $idBiome;
        $this->nbTable = $nbTable;
    }
}
?>