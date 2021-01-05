<?php
class User    
{
    private$_id;
    private$_Nom;
    public function __construct($id,$nom)
    {
        try 
        {
            $base = new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon', 'root', 'root');
            $DonneeBruteUser = $base->query("SELECT * from Personnage");
            $TabUserIndex = 0;
            while ($tab = $DonneeBruteUser->fetch())
            {
                $TabUser[$TabUserIndex++] = new User($tab['id'],$tab['Pseudo']);       
            }      
        }
        
        catch(exception$e) 
        {
            $e->getMessage();      
        }
        $this->_id = $id;
        $this->_Nom = $nom;        
    }
    public function getId()
    {
        return$this->_id;       
    }
    public function getNom()
    {
        return$this->_Nom;        
    } 
}   
?>