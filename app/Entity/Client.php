<?php

class Client extends Utilisateur
{
    private $adressePostale;
    private $codePostal;

    public function __construct($idUser, $email, $pwd, $numeroTel, $nom, $prenom, $adressePostale, $codePostal)
    {
        parent::__construct($idUser, $email, $pwd, $numeroTel,$nom, $prenom);
        $this->adressePostale = $adressePostale;
        $this->codePostal = $codePostal;
    }
}
?>