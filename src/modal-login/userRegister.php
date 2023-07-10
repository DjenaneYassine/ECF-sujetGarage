<link rel="stylesheet" type="text/css" href="./login.css">
<div class="contain-modal-login">
    <h1 align="center">Inscription utilisateur</h1>
    <form action="userRegister.php" method="POST" align="center">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="pseudo">
        <label for="mot de passe">Mot de passe :</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" id="btn-register" name="btn-register" value="Envoyer">
        <a href="./userLogin.php">Retour en arrière</a>
    </form>
</div>

<?php 
require_once "../config.php";
session_start();

if (isset($_POST['btn-register'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        if($_SESSION['username'] == "Vincent Parrot"){
            $pseudo = htmlspecialchars
            ($_POST['pseudo']);
            $mdp = sha1($_POST['password']);
            
            $sql = "INSERT INTO users (username, mdp, userrole) VALUES ('$pseudo', '$mdp', 'employé')";
            $result = $connexion->query($sql);
       
            if ($connexion->affected_rows > 0) {
                echo "Enregistrement créé avec succès.";
            } else {
                echo "Erreur lors de l'enregistrement";
            }
        }else{
            echo 'Vous ne pouvez pas créer de compte';
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>