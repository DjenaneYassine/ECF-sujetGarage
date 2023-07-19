
<?php 

session_start();

?>

<link rel="stylesheet" type="text/css" href="./login.css">
<div class="contain-modal-login">
    <h2>Création compte employé</h2>
    <form action="/src/modal-login/traitement-connexion.php" method="POST">
        <div class="identifiantLogin">
            <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
        </div>
        <div class="mdpLogin">
            <input type="password" id="password" name="password" placeholder="Mot de passe">
        </div>
        <div class="contain-btnLogin">
            <input style="margin:0; cursor:pointer;" class="btnFormLogin" type="submit" id="btn-register" name="btn-register" value="Envoyer">
            <a  class="btnFormLogin" onclick="clicklogin()" href="#">Retour en arrière</a>
        </div>
    </form>
</div>
