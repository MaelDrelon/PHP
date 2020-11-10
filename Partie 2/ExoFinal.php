<?php
    $login="admin";
    $password="mdp";
    function form($login,$password) {
        ?>
        <form action="" method="post">
            <div>
                <label for="login">Identifiant :</label>
                <input type="text" name="login" id="login">
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
                if($_POST['login']==$login){
                    if($_POST['password']==$password){
                        return "Ok"; 
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
            if(form("admin","mdp")=="ok")
            {
                echo"Bienvenue";
                ?><div><a href="">Lien secret</a></div><?php
            }else{
                echo"Mot de passe incorrect";
            }
        ?>
</body>
