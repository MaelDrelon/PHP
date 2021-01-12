<?php
class Personnage
{
    private $_pseudo;
    public $_vie;
    private $_force;
    private $_alive;

    public function __construct($valeurvie,$laforce,$lepseudo)
    {
        $this->_pseudo = $lepseudo;
        $this->_vie = $valeurvie;
        $this->_force = $laforce;
        $this->_alive = true;
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

    public function Alive()
    {
        if ($_vie = 0)
        {
            $_alive = false;
        }
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