<?php
namespace App\Entity;
class Chambre{
    private $idChambre;
    private $numeroChambre;
    private $etageChambre;
    private $idFormatChambre;
    private $idHotel;

    
    public function __construct($idChambre, $numeroChambre, $etageChambre, $idFormatChambre, $idHotel){
        $this->idChambre = $idChambre;
        $this->numeroChambre = $numeroChambre;
        $this->etageChambre = $etageChambre;
        $this->idFormatChambre = $idFormatChambre;
        $this->idHotel = $idHotel;
    }
}
?>