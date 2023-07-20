<!doctype html>
<html style="height: 100%" >
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <link href="./style.css" rel="stylesheet">
  <link href="./modal-devis/modal-devis.css" rel="stylesheet">
  <link href="./modal-login/login.css" rel="stylesheet">
  <title>Garage V.Parrot</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700;800;900&display=swap');
  </style>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>
<?php 
    session_start();
    require_once "./CRUD-Admin/mesFonctions.php";
    require_once './CRUD-Admin/mesFonctionsSQL.php';

    $names = getNameServices();
?>
<body id="body"style="font-family:'Noto Sans';">
<!--Modal -->
<div id="wrapperModal-devis">
    <!-- Modal content -->
    <div class="contentModal-devis">
        <div id="devis-maVoiture"></div>
        <div id="devis-monDevis"></div>
        <div id="devis-monGarage"></div>
        <div id="devis-monRdv"></div>
        <div id="devis-monHoraire"></div>
    </div>
    <div id="modalValid"></div>
</div>
    
    <header>
    <nav>
                <ul>
                    <div class="contain-logo">
                        <div class="logo"
                            style=" border-radius: 2px;">
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
                        <li><a class="navigation" href="#services">Services</a></li>
                        <li><a class="navigation" href="#garage">Le garage</a></li>
                        <li><a class="navigation" href="./page-venteAuto/indexAuto.php">Voiture d'occasion</a></li>
                        <li><a class="navigation" href="#footer">A propos</a></li>
                        <li class="rdv  btn-top" >
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
                        <div id="modal-login"></div>
                        <div id="modal-session"></div>
                        <div id="modal-register"></div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="wrapper-title-h1 ml-10 mt-10 text-white flex flex-col" style="font-size: 100px; font-weight: 800; height: 30%; align-items: center;">
            <div class="text-white" style="border-left: 2px solid white; font-weight: 800; padding-left: 20px;margin-top: 180px;" >
                <h1>
                    <div>Garage</div>
                    <div>V.Parrot</div>
                </h1>
            </div>
        </div>
    </header>
    <main style="height: 2300px; font-weight: 400;">
        <div class="wrapper-main-bloc1 flex">
            <div class="img1-main">
                <img src="../img/3-kuah4.png">
            </div>
            <div class="contain-text1-main">
                <h2>
                    <span class="title-main">BIENVENUE</span><br>
                    <span class="title-main">DANS NOTRE ENTREPRISE!</span>
                </h2>
                <p>Vincent Parrot, votre expert automobile de confiance à Chambéry !
                    Avec plus de 15 ans d'expérience, Vincent Parrot a créé son propre garage pour offrir des services de réparation automobile de qualité supérieure. Notre équipe hautement qualifiée est prête à prendre soin de votre véhicule avec expertise et dévouement.
                    Chez Garage V. Parrot, nous comprenons l'importance de la confiance entre vous et votre mécanicien. C'est pourquoi nous considérons chaque voiture qui passe nos portes comme un précieux bijou qui mérite les meilleurs soins. Votre satisfaction et votre sécurité sont nos priorités absolues.
                    En plus de nos services de réparation et d'entretien, nous mettons également à votre disposition une sélection de véhicules d'occasion de qualité, soigneusement inspectés pour répondre à vos besoins et à votre budget.
                    Faites confiance à notre expertise et à notre engagement envers un service client exceptionnel. Contactez nous dès aujourd'hui et découvrez pourquoi tant de clients satisfaits choisissent le Garage V. Parrot pour tous leurs besoins automobiles.</p>
            </div>
        </div>
        <div  id="services" class="wrapper-main-services">
                <div class="contain-text-services">
                    <h2 class="text-white">
                        LE GARAGE AUTOMOBILE V.PARROT PEUT GERER TOUTES VOS REPARATION AUTOMOBILE<br>
                        <span class="service-inclus">SERVICES INCLUS</span>
                    </h2>
                    <div class="container-grid-services">
                        <?php 
                            gridDynamique($names);        
                        ?>
                        <div class="btn-devis item-25">
                            <button id="btn-devis" style="font-size: 15px;" href="./modal-devis/modal-devis.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <path id="arrow-return-right_1_" data-name="arrow-return-right (1)" d="M1.536,1.5A.586.586,0,0,0,1,2.125v6a2.928,2.928,0,0,0,2.678,3.125H14.17l-3.586,4.182a.7.7,0,0,0,0,.885.484.484,0,0,0,.759,0l4.5-5.25a.7.7,0,0,0,0-.885l-4.285-5a.484.484,0,0,0-.759,0,.7.7,0,0,0,0,.885L14.17,10H3.678A1.757,1.757,0,0,1,2.071,8.125v-6A.586.586,0,0,0,1.536,1.5Z" transform="translate(-0.5 -1)" fill="#f2f2f2" stroke="#f2f2f2" stroke-width="1" fill-rule="evenodd"/>
                                  </svg>
                                  FAIRE UN DEVIS
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        <div  id="garage" class="wrapper-main-bloc1 flex">
            <div id="contain-bloc2"class="contain-text1-main">
                <h2>
                    <span class="title-main">AU SUJET</span><br>
                    <span class="title-main">DE NOTRE ENTREPRISE</span>
                </h2>
                <p id="p">Notre garage automobile est un lieu où expertise et passion se rencontrent. Avec une équipe de mécaniciens qualifiés et dévoués, nous offrons des services de réparation et d'entretien de qualité supérieure. Chaque véhicule est pris en charge avec soin et nous nous efforçons de dépasser les attentes de nos clients à chaque étape du processus. Nous fournissons également des pièces détachées de qualité, garantissant des réparations fiables et durables. Notre objectif est de créer une expérience client exceptionnelle en offrant un service personnalisé, des conseils honnêtes et transparents, et en mettant l'accent sur la satisfaction du client. Faites-nous confiance pour prendre soin de votre véhicule et bénéficiez de notre expertise pour assurer son bon fonctionnement et sa longévité.
                Votre voiture mérite le meilleur, et nous sommes là pour la lui offrir.</p>
                <button class="btn-savoirPlus">EN SAVOIR PLUS</button>
            </div>
            <div id="img-bloc2" class="img1-main">
                <img src="../img/depositphotos_54320635-stock-photo-mechanic-working-on-car-engine.jpg">
            </div>
        </div>
        <div class="contain-flex-img">
            <div class="img-services img1">
                <a href="">
                    <img src="../img/istockphoto-1284285153-170667a.jpg">
                </a> 
            </div>
            <div class="img-services img2">
                <a href="">
                <img src="../img/carrossier-les-martres-de-veyre_6.jpg">
                </a> 
            </div>
            <div class="img-services img3">
                <a href="">
                    <img src="../img/160653vroomly.com-pour-auto-moto.com-1.jpeg">
                </a> 
            </div>
            <div class="img-services img4">
                <a href="">
                    <img src="../img/istockphoto-517048548-612x612.jpg">
                </a> 
            </div>
        </div>
        <div class="wrapper-line">
            <div></div>
        </div>
        <div class="wrapper-avis-client">
            <div class="contain-avis-client">
                <div class="chevron-left-avis">
                    <button>
                        <svg style="color: red" class="icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path  stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                        </svg>
                    </button>
                </div>
                <div class="avis avi1">
                    <p>"J'ai récemment fait appel au Garage 
                        V.Parrot pour une réparation sur ma voiture,
                         et je dois dire que je suis extrêmement 
                        satisfait du service que j'ai reçu. 
                        Dès que je suis entré dans le garage, 
                        j'ai été accueilli chaleureusement par 
                        l'équipe qui s'est montrée très professionnelle et amicale."
                    </p>
                    <bold>DJENANE Yassine - Carrosserie</bold>
                </div>
                <div class="avis avi2">
                    <div class="contain-star">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="star_FILL1_wght400_GRAD-25_opsz48" d="M87.786-812l2.031-9.245L83-827.457l9.005-.828L95.5-837l3.511,8.714,8.989.828-6.817,6.213L103.23-812l-7.73-4.9Z" transform="translate(-83 837)" fill="#d94350"/>
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="star_FILL1_wght400_GRAD-25_opsz48" d="M87.786-812l2.031-9.245L83-827.457l9.005-.828L95.5-837l3.511,8.714,8.989.828-6.817,6.213L103.23-812l-7.73-4.9Z" transform="translate(-83 837)" fill="#d94350"/>
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="star_FILL1_wght400_GRAD-25_opsz48" d="M87.786-812l2.031-9.245L83-827.457l9.005-.828L95.5-837l3.511,8.714,8.989.828-6.817,6.213L103.23-812l-7.73-4.9Z" transform="translate(-83 837)" fill="#d94350"/>
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="star_FILL1_wght400_GRAD-25_opsz48" d="M87.786-812l2.031-9.245L83-827.457l9.005-.828L95.5-837l3.511,8.714,8.989.828-6.817,6.213L103.23-812l-7.73-4.9Z" transform="translate(-83 837)" fill="#d94350"/>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                            <path id="star_FILL0_wght400_GRAD-25_opsz48" d="M90.494-815.976l5.006-3.148,5.006,3.181-1.338-5.964,4.408-4.026-5.809-.547L95.5-832.113,93.249-826.5l-5.809.53,4.408,4.009ZM87.786-812l2.031-9.245L83-827.457l9.005-.828L95.5-837l3.511,8.714,8.989.828-6.817,6.213L103.23-812l-7.73-4.9ZM95.5-823.7Z" transform="translate(-83 837)" fill="#d94350"/>
                          </svg>   
                    </div>
                    <p>"J'ai récemment fait appel au Garage 
                        V.Parrot pour une réparation sur ma voiture,
                         et je dois dire que je suis extrêmement 
                        satisfait du service que j'ai reçu. 
                        Dès que je suis entré dans le garage, 
                        j'ai été accueilli chaleureusement par 
                        l'équipe qui s'est montrée très professionnelle et amicale."
                    </p>
                    <bold>DJENANE Yassine - Carrosserie</bold>
                    <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="84.575" height="56.096" viewBox="0 0 84.575 56.096">
                        <path id="format_quote_FILL1_wght400_GRAD0_opsz48" d="M221.581-663.9l10.572-20.4h-24.58V-720h37v36.718L234.531-663.9Zm-47.573,0,10.572-20.4H160V-720h37v36.718L186.958-663.9Z" transform="translate(-160 720)" fill="#d94350"/>
                      </svg>                      
                </div>
                <div class="avis avi3">
                    <p>"J'ai récemment fait appel au Garage 
                        V.Parrot pour une réparation sur ma voiture,
                         et je dois dire que je suis extrêmement 
                        satisfait du service que j'ai reçu. 
                        Dès que je suis entré dans le garage, 
                        j'ai été accueilli chaleureusement par 
                        l'équipe qui s'est montrée très professionnelle et amicale."
                    </p>
                    <bold>DJENANE Yassine - Carrosserie</bold>
                </div>
                <div class="chevron-right-avis">
                    <button>
                        <svg style="color: red" class= "icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                        </svg>
                </div>
            </div>
        </div>
        <div class="container-btn-avis">
                <a href="./avis-clients/indexAvis.php" class="btn-avis">Ajouter mon avis</a>
        </div>
    </main>
    <footer id="footer">
        <div class="wrapper-footer">
            <div class="contain-footer">
                <div class="garage-v-parrot">
                    <div>
                        <h2>GARAGE V.PARROT</h2>
                        <div>
                            <p>Garage Auto-mobile</p>
                            <p>Réparation, Révision, Vente auto d'occasion.</p>
                        </div>
                    </div>
                    <div class="logo-footer">
                        <div class="border-2 border-white-500 p-1 pb-2" 
                             style=" border-radius: 2px; font-weight: 500;">
                             <a class="m-2 text-xl" href="">Vp</a>
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <div>
                        <h3>MENU</h3>
                        <div>
                            <ul>
                                <li><a href="#body">Accueil</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#garage">Le garage</a></li>
                                <li><a href="/src/page-venteAuto/indexAuto.php">Voiture d'occasion</a></li>
                                <li><a href="#">A propos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div>
                        <h3>CONTACTEZ-NOUS</h3>
                        <div>
                            <ul>
                                <li>Contact@Vparrot.fr</li>
                                <li>09 63 54 89 52</li>
                                <li>8 rue des champs,<br>
                                    73000 Chambéry
                                    France</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="horaire">
                    <div>
                        <h3>HORAIRE</h3>
                        <div>
                            <ul>
                                <li>Lundi au Vendredi : 08:45 - 12:00, 14:00 - 18:00</li>
                                <li>Samedi : 08:45 - 12:00</li>
                                <li>Dimanche : Fermé</li>
                                <li>Le garage est :<?php if(openOrClose()==true){ 
                                                                echo '<span class="font-open">Ouvert</span>';}
                                                            else{
                                                                echo '<span class="font-close">Fermer</span>';
                                                            };
                                ?></li >
                                <?php
                                if(isset($_SESSION['role'])&& $_SESSION['role']=='admin'){

                                    echo '<form class="form-horaire" action="./CRUD-Admin/mesFonctions.php" method="POST">';
                                    echo '<button class="btn-open btn-horaire" name="open">Ouvert</button>';
                                    echo '<button class="btn-close btn-horaire" name="close">Fermer</button>';
                                    echo '</form>';
                                }else{
                                    echo '';
                                }
                                
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./script.js">
    </script>
</body>
</html>
