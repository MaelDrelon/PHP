<?php require("Personnage.php"); ?>

<html>
<head>
</head>
<body>
    <?php 
        echo "<h1>You encounter a foe!</h1>";
        $Personnage1 = new Personnage(2);
        $Personnage2 = new Personnage(1);

    $Personnage1->AfficherPersonnage();
    $Personnage2->AfficherPersonnage();

    echo"<p>Lancement du combat</p>";

    while ($Personnage1->_vie !=0 && $Personnage2->_vie != 0)
    {
        if(rand(0, 1))
        {
            echo "<p>";
            $Personnage1->Attaquer($Personnage2);
            $Personnage2->Defense($Personnage1);
            echo "</p>";
        }    
        else
        {
            echo "<p>";
            $Personnage2->Attaquer($Personnage1);
            $Personnage1->Defense($Personnage2);
            echo "</p>";
        }
    }
    
    ?>
</body>