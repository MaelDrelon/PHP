<head>
<link rel="stylesheet" type="text/css" href="exo1.css"> 
</head>
<body>
    <?php
        $NombreAleatoire = rand ( 0 , 100 );


        if($NombreAleatoire%2 == 1)
        {
            
            echo '<div class="blue">'.$NombreAleatoire.' est impaire</div>';

        }
        else
        {

            echo '<div class="red">'.$NombreAleatoire. ' est pair</div>';

        }
        highlight_file((__FILE__));
    ?>  
</body>
