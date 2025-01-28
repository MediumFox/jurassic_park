<?php

class Utilisateur{
    private $idUser;
    private $email;
    private $pwd;
    private $numeroTel;
    private $nom;
    private $prenom;
    
    public function __construct($idUser, $email, $pwd, $numeroTel, $nom, $prenom){
        $this->idUser = $idUser;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->numeroTel = $numeroTel;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}
?>