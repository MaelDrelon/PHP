<head>
    <link rel="stylesheet" type="text/css" href="exo1.css"> 
</head>
<body>
<form action="" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php 
    if(isset($_POST['nom']))
    {
        echo '<p><div class="red">Vous êtes '.$_POST['nom'].'</div></p>';
    } 
    highlight_file((__FILE__));
?>

</body>