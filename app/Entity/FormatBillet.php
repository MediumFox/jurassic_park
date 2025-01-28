<?php
namespace App\Entity;
class FormatBillet{
    private $idBillet;
    private $libelleBillet;
    private $imageBillet;
    private $descriptionBillet;
    private $prixBillet;

    
    public function __construct($idBillet, $libelleBillet, $imageBillet, $descriptionBillet, $prixBillet){
        $this->idBillet = $idBillet;
        $this->libelleBillet = $libelleBillet;
        $this->imageBillet = $imageBillet;
        $this->descriptionBillet = $descriptionBillet;
        $this->prixBillet = $prixBillet;
    }
}
?>