<?php

class Administrateur extends Utilisateur
{
    private $adminLevel;
    public function __construct($idUser, $email, $pwd, $numeroTel, $nom, $prenom, $adminLevel)
    {
        parent::__construct($idUser, $email, $pwd, $numeroTel,$nom, $prenom);
        $this->adminLevel = $adminLevel;
    }
}
?>