<?php
namespace App\Entity;
class Produit{
    private $idProduit;
    private $imageProduit;
    private $libelleProduit;
    private $descriptionProduit;
    private $stock;
    private $disponibleAchat;
    private $prixProduit;
    
    public function __construct($idProduit, $imageProduit, $libelleProduit, $descriptionProduit, $stock, $disponibleAchat, $prixProduit){
        $this->idProduit = $idProduit;
        $this->imageProduit = $imageProduit;
        $this->libelleProduit = $libelleProduit;
        $this->descriptionProduit = $descriptionProduit;
        $this->stock = $stock;
        $this->disponibleAchat = $disponibleAchat;
        $this->prixProduit = $prixProduit;
    }
}
?>