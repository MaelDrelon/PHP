<?php


class Personnage
{
    private $_pseudo;
    public $_vie;
    private $_force;
    private $_ID;

    public function __construct($id)
    {
        $BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $this->_pseudo;
        $this->_vie;
        $this->_force;
        $this->_ID = $id;
        $id = $BDD->query ('SELECT * FROM `Personnage` WHERE `id` = $id');
    }

    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_pseudo.', </p> ';
        echo "<p>J'ai ".$this->_vie.' de santé.';
    }
    
    public function Attaquer($Perso)
    {
        echo "<p>".$this->_pseudo." attaque ".$Perso->getNom();"</p>";
    }

    public function Defense($Perso)
    {
        $this->_vie = $this->_vie - $Perso->getForce();
        echo "<p>".$this->_pseudo." à encore ".$this->_vie." HP. ";
    }

    public function getNom()
    {
        return $this->_pseudo;
    }

    public function getForce()
    {
        return $this->_force;
    }

    public function Vainqueur()
    {
        echo "<p>".$this->_pseudo." à gagné le combat";
    }

}