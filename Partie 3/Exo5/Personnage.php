<?php
class Personnage
{
    private $_ID;
    public $_User;

    public function __construct($id)
    {
        $BDD = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelonPOO; charset=utf8','mael', '');
        $this->_ID = $id;
        $this->_User = $BDD->query ("SELECT * FROM `Personnage` WHERE `id` = $id")->fetch();
    }


    public function AfficherPersonnage()
    {
        echo "<p>Je suis ".$this->_User["Pseudo"].', </p> ';
        echo "<p>J'ai ".$this->_User["Vie"].' de santé.';
    }
    
    public function Attaquer($Perso)
    {
        echo "<p>".$this->_User["Pseudo"]." attaque ".$Perso->getNom();"</p>";
    }

    public function Defense($Perso)
    {
        $this->_User["Vie"] = $this->_User["Vie"] - $Perso->getForce();
        echo "<p>".$this->_User["Pseudo"]." à encore ".$this->_User["Vie"]." HP. ";
    }

    public function getNom()
    {
        return $this->_User["Pseudo"];
    }

    public function getForce()
    {
        return $this->_User["Puissance"];
    }
}