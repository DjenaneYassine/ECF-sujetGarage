
<?php
require_once "../config.php";
require_once "../CRUD-Admin/mesFonctionsSQL.php";

//Variable error et succes
$errorChamps ="Veuillez remplir tous les champs";
$errorMdpPseudo = "Votre mot de passe ou identifiant est incorrect.";
$errorCreation = "Seulement un administrateur peut créer un compte.";

$succesSession = "Bienvenue sur votre session.";
$succesCreation = "La crétion du compte à été réalisé avec succes!";

// Chargement du document HTML depuis un fichier

// Sélection de l'élément que vous souhaitez modifier


// Paramètres de connexion à la base de données MySQL
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}


if (isset($_POST['btn'])){
    if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        session_start();
        $_SESSION['login'] = false;
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['password']);
        $sql = "SELECT * FROM users WHERE username = '$pseudo' and mdp='$mdp'";
        $sqlRole = "SELECT userrole FROM users WHERE username = '$pseudo'";
        $result = $connexion->query($sql);
        $resultRole = $connexion->query($sqlRole);
        if ($result && $resultRole->num_rows > 0) {
            $_SESSION['login'] = true;
            $_SESSION['open'] = false;
            $_SESSION['username'] = $result->fetch_assoc()['username'];
            $_SESSION['role'] = $resultRole->fetch_assoc()['userrole'];
            if($_SESSION['username'] == "Vincent Parrot"){
                $_SESSION['role'] == 'admin';
                goToPage("../index.php");
            }else{
                goToPage("../index.php");
            }
        } else {
            echo "Votre nom ou mot de passe est incorrect";
        }

    } else { 
        echo "Veuillez remplir tous les champs";
    }
}

function goToPage($url){
    header("Location: $url");
    exit();
};

if(isset($_POST['btn-deco'])){
    session_start();
    session_destroy();
    goToPage("../index.php");
};




$connexion->close();
?>
