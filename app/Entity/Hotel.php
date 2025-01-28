<?php
namespace App\Entity;
class Hotel{
    private $idHotel;
    private $libelleHotel;
    private $imageHotel;
    private $descriptionHotel;
    private $idBiome;
    
    public function __construct($idFormat, $libelleFormat, $prixFormat, $descriptionFormat){
        $this->idFormat = $idFormat;
        $this->libelleFormat = $libelleFormat;
        $this->prixFormat = $prixFormat;
        $this->descriptionFormat = $descriptionFormat;
    }
}
?>