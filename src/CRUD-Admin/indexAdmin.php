<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styleAdmin.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700;800;900&display=swap');
  </style>
</head>
<body>
    <header>
    <nav>
                <ul>
                    <div class="contain-logo">
                        <div class="logo"
                            style=" border-radius: 2px; font-weight: 500;">
                            <a href="/src/index.php">Vp</a>
                        </div>
                    </div>
                    <div class="contain-nav">
                        <li><a class="navigation" href="/src/index.php">Accueil</a></li>
                        <?php if(isset($_SESSION['role']) &&  $_SESSION['role'] == "admin") {
                            echo '<li><a class="navigation" href="/src/CRUD-Admin/indexAdmin.php">Administrateur</a></li>';
                        }elseif(isset($_SESSION['role']) &&  $_SESSION['role'] == "employé"){
                            echo '<li><a class="navigation" href="/src/CRUD-Admin/indexAdmin.php">Employer</a></li>';
                        }; ?>
                        <li><a class="navigation" href="#">Services</a></li>
                        <li><a class="navigation" href="#">Le garage</a></li>
                        <li><a class="navigation" href="/src/page-venteAuto/indexAuto.php">Voiture d'occasion</a></li>
                        <li><a class="navigation" href="#">A propos</a></li>
                        <li class="rdv btn-top" >
                            <a class="" href="/src/contact/indexContact.php">Contactez-nous</a>
                        </li>
                        <div id="separation"></div>
                        <?php 
                        
                        if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){
                            echo '<div style="margin-right: 20px">';
                            echo '<a onclick="clicksession()" href="#"><img style="width: 30px" src="/img/user.svg"></a>';
                            echo '</div>';
                        }else{
                            echo '<li class="connect btn-top" >';
                            echo '<a onclick="clicklogin()" class="" href="#">Connexion</a>';
                            echo '</li>';
                        }
                        ?>
                    </div>
                </ul>
                <div id="wrapperModal-login">
                    <div id="contentModal-login">
                        <div id="modal-login">
                            
                        </div>
                    </div>
                </div>
            </nav>
    </header>
    <div class="sidebar" style="padding-top:70px;">
    <h1>Administrateur</h1>
    <ul>
        <form action="" method="POST">
            <li>COMPTE UTILISATEUR</li>
            <li style="margin-bottom: 40px;"><a href="/src/CRUD-Admin/gestion-compte.php"><img class="svg-admin" src="/img/user.svg"><span> Compte employé</span></a></li>
            <li>GESTION VOITURE D'OCCASION</li>
            <li style="margin-bottom: 40px;"><a href="/src/page-venteAuto/indexAuto.php"><img class="svg-admin" src="/img/auto.svg"><span> Voiture d'occasion</span></a></li>
            <?php 
                if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
                    echo '<li>GESTION DIFFERENTS SERVICES</li>';
                    echo '<li style="margin-bottom: 40px;"><a href="/src/CRUD-Admin/indexServ.php"><img class="svg-admin" src="/img/services.svg"><span> Services</span></a></li>';
                }
            ?>
            
            <li>GESTION CLIENTS</li>
            <li><a href="/src/CRUD-Admin/gestion-contact.php"><img class="svg-admin" src="/img/contact.svg"><span> Contact client</span></a></li>
            <li><a href="/src/CRUD-Admin/gestion-avisClient.php"><img class="svg-admin" src="/img/avis.svg"><span> Avis client</span></a></li>
        </form>
    </ul>
  </div>
</body>
</html>