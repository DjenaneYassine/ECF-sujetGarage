<?php 
session_start();
require_once '../CRUD-Admin/mesFonctionsSQL.php';
$columns = getAllAuto();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./venteOccas.css" rel="stylesheet">
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
                            <a href="/src/">Vp</a>
                        </div>
                    </div>
                    <div class="contain-nav">
                        <li><a class="navigation" href="/src/index.php">Accueil</a></li>
                        <?php if(isset($_SESSION['role']) &&  $_SESSION['role'] == "admin") {
                            echo '<li><a class="navigation" href="#">Administrateur</a></li>';
                        }elseif(isset($_SESSION['role']) &&  $_SESSION['role'] == "employé"){
                            echo '<li><a class="navigation" href="#">Employer</a></li>';
                        }; ?>
                        <li><a class="navigation" href="#">Services</a></li>
                        <li><a class="navigation" href="#">Le garage</a></li>
                        <li><a class="navigation" href="./page-venteAuto/indexAuto.php">Voiture d'occasion</a></li>
                        <li><a class="navigation" href="#">A propos</a></li>
                        <li class="rdv  btn-top" >
                            <a class="" href="/src/contact/indexContact.php">Contactez-nous</a>
                        </li>
                        <div id="separation"></div>
                        <li class="connect btn-top" >
                            <a onclick="clicklogin()" class="" href="#">Connexion</a>
                        </li>
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
    <main style="height: 1500px">
        
            <?php
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                echo '<div class="container-btnCreer">';
                    echo '<a class="new-annonce" href="/src/CRUD-Admin/formulaireAuto.php">
                    <img src="/img/add.svg">
                    <div>Créer une nouvelle annonce</div>
                    </a>';
                echo '</div>';
            };
            ?>
        </div>
        
        <div class="wrapper-auto">
            <div class="contain-auto">
            <?php 
                foreach($columns as $row){
                    $id = $row[0];
                    $price = $row[1];
                    $picture = $row[2];
                    $annee = $row[3];
                    $kilometre = $row[4];
                    $model = $row[5];
                    $boite = $row[6];
                    echo '<div class="auto auto-'.$id.'">';
                        echo '<div class="img-container">';
                        echo '<img id="imgAuto" class="img-auto" src="' . $picture . '" alt="">';
                        echo '<a class="img-link" href="/src/contact.php">Contactez-nous</a>';
                        if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                            echo '<a class="delete-link" href="/src/CRUD-Admin/createUptadeAuto.php?id='.$id.'&action=delete"><img id="delete" src="/img/delete.svg"></a>';
                        }
                        echo '<a class="detail-link" href="">Détails</a>';
                        echo '</div>';
                        echo '<div class="grid-auto">';
                        echo '<div class="model">' . $model .' '. $annee . '</div>';
                        echo '<div class="bg-price"><div class="price">' . $price . '</div></div>';
                        echo '<div class="separation-auto"></div>';
                        echo '<div class="kilometre">'. '<img class="svg-auto" src="/img/kilometre.svg">' . $kilometre . '</div>';
                        
                        echo '<div class="boite">'. '<img class="svg-auto boite-svg" src="/img/boite.svg">'. $boite . '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>   
            </div>
        </div>
        <script src="venteOcass.js">
        </script>
        <script src="../script.js">
        </script>
    </main>
</body>
</html>