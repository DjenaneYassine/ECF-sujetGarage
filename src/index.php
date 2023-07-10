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
<body id="body" class="text-xs" style="font-family:'Noto Sans'; font-weight: 200;">
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
        <div class="contain-nav flex items-center justify-between text-white m-0 h-15" style="height: 70px; background-color: #262526f3;">
            <div class="logo ml-10">
                <div class="border-2 border-white-500 p-1 pb-2" 
                     style=" border-radius: 2px; font-weight: 500;">
                     <a class="m-2 text-xl" href="">Vp</a>
                </div>
            </div>
            <nav class="min-h-screen">
                <ul class="flex items-center" style="font-weight: 300">
                    <li class="mr-10"><a href="#">Accueil</a></li>
                    <?php if(isset($_SESSION['role']) &&  $_SESSION['role'] == "admin") {
                        echo '<li class="mr-10"><a href="#">Administrateur</a></li>';
                    }elseif(isset($_SESSION['role']) &&  $_SESSION['role'] == "employé"){
                        echo '<li class="mr-10"><a href="#">Employer</a></li>';
                    }; ?>
                    <li class="mr-10"><a href="#">Services</a></li>
                    <li class="mr-10"><a href="#">Le garage</a></li>
                    <li class="mr-10"><a href="./page-venteAuto/venteOccas.html">Voiture d'occasion</a></li>
                    <li class="mr-10"><a href="#">A propos</a></li>
                    <li class="rdv mr-10 border-2 border-white-500 btn-top" >
                        <a class="" href="#">Prendre rendez-vous</a>
                    </li>
                    <div class="mr-10" id="separation"></div>
                    <li class="connect mr-10 border-2 border-red-500 btn-top" 
                        style="border: 4px solid #D92332; background-color: #D92332;">
                        <a onclick="clicklogin()" class="" href="#">Connexion</a>
                    </li>
                </ul>
                <div id="wrapperModal-login">
                    <div id="contentModal-login">
                        <div id="modal-login">
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="wrapper-title-h1 ml-10 mt-10 text-white flex flex-col" style="font-size: 100px; font-weight: 800; height: 30%; border-left: 2px solid white; align-items: center; padding-top: 40px;">
            <div class="text-white" style="font-weight: 800; padding-left: 20px;" >
                <h1>
                    <div>Garage</div>
                    <div>V.Parrot</div>
                </h1>
            </div>
        </div>
        <div class="wrapper-menu-deroulant-top">
            <div class="contain-menu-deroulant-top flex">

                <div class="chevron-left">
                    <button>
                        <svg class="icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path  stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                        </svg>
                       
                    </button>
                </div>

                <div class="contain-menuDeroulant">
                    <a href="" class="contain-venteAuto">
                        <svg class="icon-menuDeroulant" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40">
                            <path id="car-front-fill" d="M7.873,7.05A7.816,7.816,0,0,1,15.06,2H34.942a7.818,7.818,0,0,1,7.181,5.05L44.6,13.21a2.63,2.63,0,0,0,1.187,1.347A5.991,5.991,0,0,1,48.8,18.763l1.047,5.6A8.652,8.652,0,0,1,50,25.993V27.37a8.477,8.477,0,0,1-3.125,6.657v6.307A1.617,1.617,0,0,1,45.313,42h-6.25A1.617,1.617,0,0,1,37.5,40.333v-4.46c-4.037.16-8.578.293-12.5.293s-8.462-.133-12.5-.293v4.46A1.617,1.617,0,0,1,10.938,42H4.688a1.617,1.617,0,0,1-1.562-1.667V34.027A8.477,8.477,0,0,1,0,27.37V25.993A8.87,8.87,0,0,1,.154,24.36L1.2,18.76a5.989,5.989,0,0,1,3.012-4.2A2.626,2.626,0,0,0,5.4,13.21L7.879,7.05Zm1.5,21.617a3.34,3.34,0,0,0,0-6.667,3.34,3.34,0,0,0,0,6.667Zm31.25,0A3.34,3.34,0,1,0,37.5,25.333,3.234,3.234,0,0,0,40.623,28.667ZM18.748,22a3.34,3.34,0,0,0,0,6.667h12.5a3.34,3.34,0,0,0,0-6.667ZM9.079,12.63a1.8,1.8,0,0,0,.116,1.7,1.561,1.561,0,0,0,1.437.739C13.476,14.823,21.1,14.5,25,14.5s11.525.323,14.366.567a1.561,1.561,0,0,0,1.437-.739,1.8,1.8,0,0,0,.116-1.7L37.929,6.253a1.555,1.555,0,0,0-1.4-.92H13.463a1.555,1.555,0,0,0-1.4.92l-2.988,6.38Z" transform="translate(-0.001 -2)" fill="#f2f2f2"/>
                        </svg>
                        <div class="title-menuDeroulant">Voiture d'occasion</div>
                        <p class="text-menuDeroulant text-white">Des véhicules d'occasion soigneusement inspectés et fiables, offrant une option abordable pour tous les conducteurs en quête de qualité.</p>
                    </a>
                </div>
                <div class="contain-menuDeroulant">
                    <a href="" class="contain-venteAuto">
                        <svg class="icon-menuDeroulant" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40">
                            <path id="activity" d="M18.75,2a1.571,1.571,0,0,1,1.469,1.1L31.25,35.455l4.781-14.027A1.571,1.571,0,0,1,37.5,20.334H48.438a1.67,1.67,0,0,1,0,3.333H38.594L32.719,40.9a1.531,1.531,0,0,1-2.938,0L18.75,8.547,13.969,22.571a1.571,1.571,0,0,1-1.469,1.1H1.563a1.67,1.67,0,0,1,0-3.333h9.844L17.281,3.1A1.571,1.571,0,0,1,18.75,2Z" transform="translate(0 -2)" fill="#f2f2f2" fill-rule="evenodd"/>
                          </svg>       
                        <div class="title-menuDeroulant">Révision Auto</div>
                        <p class="text-menuDeroulant text-white">Offrez à votre voiture une révision complète, assurant une performance optimale et une tranquillité d'esprit.
                            </p>
                    </a>
                </div>
                <div class="contain-menuDeroulant hidden-tempo" id="">
                    <a href="" class="contain-venteAuto">
                        <svg class="icon-menuDeroulant" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40">
                            <path id="car-front-fill" d="M7.873,7.05A7.816,7.816,0,0,1,15.06,2H34.942a7.818,7.818,0,0,1,7.181,5.05L44.6,13.21a2.63,2.63,0,0,0,1.187,1.347A5.991,5.991,0,0,1,48.8,18.763l1.047,5.6A8.652,8.652,0,0,1,50,25.993V27.37a8.477,8.477,0,0,1-3.125,6.657v6.307A1.617,1.617,0,0,1,45.313,42h-6.25A1.617,1.617,0,0,1,37.5,40.333v-4.46c-4.037.16-8.578.293-12.5.293s-8.462-.133-12.5-.293v4.46A1.617,1.617,0,0,1,10.938,42H4.688a1.617,1.617,0,0,1-1.562-1.667V34.027A8.477,8.477,0,0,1,0,27.37V25.993A8.87,8.87,0,0,1,.154,24.36L1.2,18.76a5.989,5.989,0,0,1,3.012-4.2A2.626,2.626,0,0,0,5.4,13.21L7.879,7.05Zm1.5,21.617a3.34,3.34,0,0,0,0-6.667,3.34,3.34,0,0,0,0,6.667Zm31.25,0A3.34,3.34,0,1,0,37.5,25.333,3.234,3.234,0,0,0,40.623,28.667ZM18.748,22a3.34,3.34,0,0,0,0,6.667h12.5a3.34,3.34,0,0,0,0-6.667ZM9.079,12.63a1.8,1.8,0,0,0,.116,1.7,1.561,1.561,0,0,0,1.437.739C13.476,14.823,21.1,14.5,25,14.5s11.525.323,14.366.567a1.561,1.561,0,0,0,1.437-.739,1.8,1.8,0,0,0,.116-1.7L37.929,6.253a1.555,1.555,0,0,0-1.4-.92H13.463a1.555,1.555,0,0,0-1.4.92l-2.988,6.38Z" transform="translate(-0.001 -2)" fill="#f2f2f2"/>
                        </svg>
                        <div class="title-menuDeroulant">Mécanique</div>
                        <p class="text-menuDeroulant text-white">Des véhicules d'occasion soigneusement inspectés et fiables, offrant une option abordable pour tous les conducteurs en quête de qualité.</p>
                    </a>
                </div>
                <div class="contain-menuDeroulant hidden-tempo">
                    <a href="" class="contain-venteAuto">
                        <svg class="icon-menuDeroulant" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40">
                            <path id="car-front-fill" d="M7.873,7.05A7.816,7.816,0,0,1,15.06,2H34.942a7.818,7.818,0,0,1,7.181,5.05L44.6,13.21a2.63,2.63,0,0,0,1.187,1.347A5.991,5.991,0,0,1,48.8,18.763l1.047,5.6A8.652,8.652,0,0,1,50,25.993V27.37a8.477,8.477,0,0,1-3.125,6.657v6.307A1.617,1.617,0,0,1,45.313,42h-6.25A1.617,1.617,0,0,1,37.5,40.333v-4.46c-4.037.16-8.578.293-12.5.293s-8.462-.133-12.5-.293v4.46A1.617,1.617,0,0,1,10.938,42H4.688a1.617,1.617,0,0,1-1.562-1.667V34.027A8.477,8.477,0,0,1,0,27.37V25.993A8.87,8.87,0,0,1,.154,24.36L1.2,18.76a5.989,5.989,0,0,1,3.012-4.2A2.626,2.626,0,0,0,5.4,13.21L7.879,7.05Zm1.5,21.617a3.34,3.34,0,0,0,0-6.667,3.34,3.34,0,0,0,0,6.667Zm31.25,0A3.34,3.34,0,1,0,37.5,25.333,3.234,3.234,0,0,0,40.623,28.667ZM18.748,22a3.34,3.34,0,0,0,0,6.667h12.5a3.34,3.34,0,0,0,0-6.667ZM9.079,12.63a1.8,1.8,0,0,0,.116,1.7,1.561,1.561,0,0,0,1.437.739C13.476,14.823,21.1,14.5,25,14.5s11.525.323,14.366.567a1.561,1.561,0,0,0,1.437-.739,1.8,1.8,0,0,0,.116-1.7L37.929,6.253a1.555,1.555,0,0,0-1.4-.92H13.463a1.555,1.555,0,0,0-1.4.92l-2.988,6.38Z" transform="translate(-0.001 -2)" fill="#f2f2f2"/>
                        </svg>
                        <div class="title-menuDeroulant">Carrosserie</div>
                        <p class="text-menuDeroulant text-white">Des véhicules d'occasion soigneusement inspectés et fiables, offrant une option abordable pour tous les conducteurs en quête de qualité.</p>
                    </a>
                </div>

                <div class="chevron-right">
                    <button>
                        <svg class= "icon" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <main style="height: 3000px; font-weight: 400;">
        <div class="wrapper-main-bloc1 flex">
            <div class="img1-main">
                <img src="../img/3-kuah4.png">
            </div>
            <div class="contain-text1-main">
                <h2>
                    <span class="title-main">BIENVENUE</span><br>
                    DANS NOTRE ENTREPRISE!
                </h2>
                <p>Vincent Parrot, votre expert automobile de confiance à Chambéry !
                    Avec plus de 15 ans d'expérience, Vincent Parrot a créé son propre garage pour offrir des services de réparation automobile de qualité supérieure. Notre équipe hautement qualifiée est prête à prendre soin de votre véhicule avec expertise et dévouement.
                    Chez Garage V. Parrot, nous comprenons l'importance de la confiance entre vous et votre mécanicien. C'est pourquoi nous considérons chaque voiture qui passe nos portes comme un précieux bijou qui mérite les meilleurs soins. Votre satisfaction et votre sécurité sont nos priorités absolues.
                    En plus de nos services de réparation et d'entretien, nous mettons également à votre disposition une sélection de véhicules d'occasion de qualité, soigneusement inspectés pour répondre à vos besoins et à votre budget.
                    Faites confiance à notre expertise et à notre engagement envers un service client exceptionnel. Contactez nous dès aujourd'hui et découvrez pourquoi tant de clients satisfaits choisissent le Garage V. Parrot pour tous leurs besoins automobiles.</p>
            </div>
        </div>
        <div class="wrapper-main-services">
            <div class="bg-main-services">
                <svg id="Tracé_2" xmlns="http://www.w3.org/2000/svg" width="1998.678" height="585.475" viewBox="0 0 1998.678 585.475">
                    <path data-name="Tracé 2" d="M36.215.924,1969.973,0l-36.339,415.361L0,414.868Z" transform="matrix(0.996, -0.087, 0.087, 0.996, 0, 171.694)" fill="#262526"/>
                </svg>
            </div>
            <div class="wrapper-text-services">
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
        </div>
        <div style="height: 550px"></div>
        <div class="wrapper-main-bloc1 flex">
            <div id="contain-bloc2"class="contain-text1-main">
                <h2>
                    <span class="title-main">AU SUJET</span><br>
                    DE NOTRE ENTREPRISE
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
    </main>
    <footer>
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
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Le garage</a></li>
                                <li><a href="#">Voiture d'occasion</a></li>
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
