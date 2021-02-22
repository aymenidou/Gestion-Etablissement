<?php
class Admin
{
    private $id;
    private $cin;
    private $nom;
    private $prenom;
    private $genre;
    private $date_naissance;
    private $adresse;
    private $contrat;
    private $salaire;
    private $date_embauche;
    private $telephone;
    private $avatar;
    function __construct($row)
    {
        $this->id = $row['id'];
        $this->cin = $row['cin'];
        $this->nom = $row['nom'];
        $this->prenom = $row['prenom'];
        $this->genre = $row['genre'];
        $this->date_naissance = $row['date_naissance'];
        $this->adresse = $row['adresse'];
        $this->contrat = $row['contrat'];
        $this->salaire = $row['salaire'];
        $this->date_embauche = $row['date_embauche'];
        $this->telephone = $row['telephone'];
        $this->avatar = $row['avatar'];
    }
    function getId()
    {
        return $this->id;
    }
    function getNom()
    {
        return $this->nom;
    }
    function setNom($nom)
    {
        $this->nom = $nom;
    }
    function getPrenom()
    {
        return $this->prenom;
    }
    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    function getCin()
    {
        return $this->cin;
    }
    function setCin($cin)
    {
        $this->cin = $cin;
    }
    function getGenre()
    {
        return $this->genre;
    }
    function setGenre($genre)
    {
        $this->genre = $genre;
    }
    function getDate_Naissance()
    {
        return $this->date_naissance;
    }
    function setDate_Naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }
    function getDate_Embauche()
    {
        return $this->date_embauche;
    }
    function setDate_Embauche($date_embauche)
    {
        $this->date_embauche = $date_embauche;
    }
    function getAdresse()
    {
        return $this->adresse;
    }
    function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    function getContrat()
    {
        return $this->contrat;
    }
    function setContrat($contrat)
    {
        $this->contrat = $contrat;
    }
    function getSalaire()
    {
        return $this->salaire;
    }
    function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    function getTelephone()
    {
        return $this->telephone;
    }
    function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    function getAvatar()
    {
        return $this->avatar;
    }
    function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }
}
