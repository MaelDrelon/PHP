<?php
    $password="mimos";
    $Login="somim";
    function form($Login,$password) {
        ?>
        <form action="" method="post">
            <div>
                <label for="Login">Identifiant :</label>
                <input type="text" name="Login" id="Login">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <button type="submit" name="Confirm">Confirmer</button>
            </div>
        </form>
        <?php
            if(isset($_POST['Confirm'])){
                if($_POST['Login']==$Login){
                    if($_POST['password']==$password){
                        return "ok"; 
                    }
                }else{
                    return "Mauvais mot de passe";
                }
                
            }
    }
    ?>
<head>
</head>
<body>
    <div>
        <?php
            if(form("somim","mimos")=="ok")
            {
                echo"Bienvenue";
                ?><div><a href="lienS.php">Lien secret</a></div><?php
            }else{
                echo"Mot de passe incorrect";
            }
        ?>
</body>
