<?php

class Promenades
{
    private $id;
    private $titre;
    private $pays;
    private $image;
    private $auteur;
    private $codePostale;
    private $depart;
    private $arrivee;
    private $description;
    private $ville;

    public function __set($name, $value)
    { 

    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getCP()
    {
        return $this->codePostale;
    }

    public function getDepart()
    {
        return $this->depart;
    }

    public function getArrivee()
    {
        return $this->arrivee;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function getVille()
    {
        return $this->ville;
    } 


}



?>
