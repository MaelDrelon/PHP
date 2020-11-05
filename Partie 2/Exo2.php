<?php 
    $Tableaux1['Mael'];
    $Tableaux2['Drelon'];
    $Tableaux3['Mimos'];
    function tableau($Tableaux1,$Tableaux2,$Tableaux3)
    {
        echo '<table>
                        <td>'
                        .$Tableaux1['Mael'].
                        '</td>
                        <td>'
                        .$Tableaux2['Drelon'].
                        '</td>
                        <td>'
                        .$Tableaux3['Mimos'].
                        '</td>
              </table>';
    }
?>

<head>
    <link rel="stylesheet" href="CssExo1.css"> 
</head>
<body>
        <?php tableau($Tableaux1,$Tableaux2,$Tableaux3); ?>
</body>