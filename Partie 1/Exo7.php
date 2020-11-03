<?php 
    session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="exo1.css">     
</head>
<body>
<form action="" method="session">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php           
        if(isset($_SESSION["nom"]))
        {
            echo"Bonjour ".$_SESSION["nom"];
        }
        else
        {
            echo"Formulaire non saisie";
            
        } 
        echo "<p></p>";
    highlight_file((__FILE__));
?>