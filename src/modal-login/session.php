<?php 

session_start();



echo '<h1 style="color: white" class="msg-session ">Bienvenue sur votre session '. $_SESSION['username'].'</h1>';
echo '<span class="role">Votre role : ' 
.$_SESSION['role']. '</span>';
if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    echo '<a type="submit" onclick="clickRegister()" class="btnFormLogin" name="btn-register" href="#">Créer un compte</a>';
}
echo '<form action="./modal-login/traitement-connexion.php" method="POST">';
echo '<div class="wrapper-btn-deco"><input type="submit" id="btn-login" name="btn-deco" value="Se déconnecter"></div>';
echo '</form>';


?> 

<style>
    #modal-session{
        height: 350px;
        padding: 20px;
    }

    msg-session{
        color: white;
        font-size: medium;
    }

    span{
        color: white;
        font-weight: 200;
    }

    

</style>

<script src="../script.js"></script>


