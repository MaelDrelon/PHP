<?php 
    $Tableaux = array("Nom"=> "Drelon",
                      "Prenom"=>"Mael",
                      "MDP"=>"1234");
    function tableau($Tableaux)
    {
        echo '<table>
                        <td>'
                        .$Tableaux["Nom"].
                        '</td>
                        <td>'
                        .$Tableaux["Prenom"].
                        '</td>
                        <td>'
                        .$Tableaux["MDP"].
                        '</td>
              </table>';
    }
?>

<head> 
</head>
<body>
        <?php tableau($Tableaux); ?>
</body>