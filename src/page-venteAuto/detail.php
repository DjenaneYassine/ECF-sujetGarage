<?php 
session_start();
require_once '../CRUD-Admin/mesFonctionsSQL.php';

$id = $_GET['id'];

$auto = readAuto($id);
$img = $auto[2];
$annee = $auto[3];
$kilometre = $auto[4];
$model = $auto[5];
$boite = $auto[6];
$des = $auto[7];


echo '<div class="wrapper-detail">';
    echo '<div class="contain-detail">';    
        echo '<div class="contain-galerie">';
            echo '<img style="object-fit: cover; width: 400px" src="'. $img .'">';
        echo '</div>';
        echo '<div class="sep"></div>';
        echo '<main>';
            echo '<div class="caract">';
                echo '<h2>Caractéristiques</h2>';
                echo '<ul style="margin-top: 0px; margin-bottom: 0px;">
                <li>Model : '. $model .'</li>
                <li>Année : '. $annee .'</li>
                <li>Kilometre : '. $kilometre .'</li>
                <li>Boite à vitesse : '. $boite .'</li>
                </u>';
            echo '</div>';
            echo '<div class="sep"></div>';
            echo '<div class="descrip">';
                echo '<h2>Description</h2>';
                echo '<div>'. $des .'</div>' ;    
            echo '</div>';
            echo '<a href="/src/"></a>';
        echo '</main>';
    echo '</div>';
echo '</div>';



?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200;300;400;500;600;700;800;900&display=swap');
    .wrapper-detail{
        font-family: 'Noto Sans', sans-serif;
        height: 100vh;
        width: 98vw;

        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contain-detail{
        height: 690px;
        width: 500px;
        box-shadow: 0 0 13px 9px #0000002e;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .contain-galerie{
        margin-top: 30px;
    }

    main{
        height: calc(100% - 200px);
        width: 100%;
        display: flex;
        flex-direction: column;
        /* margin-left: auto;
        margin-right: auto; */
    }

    li{
        font-size: small;
    }
    .caract, .descrip{
        padding-left: 50px;
        padding-right: 50px;
        height: 50%;
        display: flex;
        flex-direction: column;
    }

    .sep{
        width: 80%;
        border: 1px solid #0000001f;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5%;
        display: flex;
        flex-wrap: wrap;
    }

    .descrip > div{
        max-width: 500px;
        word-wrap: break-word;
        font-size: small;
    }
</style>