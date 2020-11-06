<?php
    function moyenne($Valeurs){
        $moyenne=($Valeurs[0]+$Valeurs[1]+$Valeurs[2])/3;
        echo"$moyenne";
    }
?>
<head>
</head>
<body>
    <div>
        <table>
            <form action="" method="post">
                <tr>
                    <th>Valeurs : </th>
                    <td><input type="number" name="Valeur1" id="Valeur1"></td>
                    <td><input type="number" name="Valeur2" id="Valeur2"></td>
                    <td><input type="number" name="Valeur3" id="Valeur3"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="Calcul">Calcul</button></td>
                </tr>  
            </form> 
        </table>   
    </div>
    <div class="bottom">
        <?php
            if(isset($_POST['Calcul'])){
                moyenne(
                    array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3'])
                );
            }
        ?>
    </div>
</body>