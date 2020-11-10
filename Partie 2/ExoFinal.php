<?php
    $Password="somiM";
    $Login="Mimos";
    function form($Login,$Password) {
        ?>
        <form action="" method="post">
            <div>
                <label for="Login">Identifiant :</label>
                <input type="text" name="Login" id="Login">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" name="Password" id="Password">
            </div>
            <div>
                <button type="submit" name="Confirm">Confirmer</button>
            </div>
        </form>
        <?php
            if(isset($_POST['Confirm'])){
                if($_POST['Login']==$Login){
                    if($_POST['Password']==$Password){
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
            if(form("Mimos","somiM")=="ok")
            {
                echo"Bienvenue";
                ?><div><a href="">Lien secret</a></div><?php
            }else{
                echo"Mot de passe incorrect";
            }
        ?>
</body>
