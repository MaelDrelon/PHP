<head>
    <link rel="stylesheet" type="text/css" href="exo1.css">     
</head>
<body>
<form action="" method="get">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php 
    if(isset($_GET['nom']))
    {
        echo '<p><div class="violet">Vous êtes '.$_GET['nom'].'</div></p>';
    } 
    highlight_file((__FILE__));
?>
</body>