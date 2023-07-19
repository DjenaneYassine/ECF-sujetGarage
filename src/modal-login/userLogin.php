<?php
session_start();
?>

<link rel="stylesheet" type="text/css" href="./login.css">
<div class="contain-modal-login">
    <h2>Connexion</h2>
    <form action="./modal-login/traitement-connexion.php" method="POST">
        <div class="identifiantLogin">
        <input type="text" id="pseudo" name="pseudo" placeholder="Identifiant">
        </div>
        <div class="mdpLogin">
        <input type="password" id="password" name="password" placeholder="Mot de passe"><br><br>
        </div>
        <div class="MemoryAndmdpForget">
            <div class="memory">
                <input type="checkbox">
                <label>Se souvenir de moi</label>
            </div>
            <div class="mdpForget">
                <a href="">Mot de passe oublié ?</a>
            </div>
        </div>
        <div class="err" id="succesLogin"></div>
        <div class="err" id="errorLogin"></div>
        <div class="contain-btnLogin">
            <button type="submit" class="btnFormLogin" name="btn">Connexion</button>
        </div>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            
        }?>
    </form>
</div>

<script src="../script.js"></script>

