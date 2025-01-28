<?php
namespace App\Entity;
class FormatChambre{
    private $idFormat;
    private $libelleFormat;
    private $prixFormat;
    private $descriptionFormat;
    
    public function __construct($idFormat, $libelleFormat, $prixFormat, $descriptionFormat){
        $this->idFormat = $idFormat;
        $this->libelleFormat = $libelleFormat;
        $this->prixFormat = $prixFormat;
        $this->descriptionFormat = $descriptionFormat;
    }
}
?>