<?php 

require_once 'mesFonctionsSQL.php';


if(isset($_POST['btn-createAuto'])){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dossier_destination = 'C:\Users\ydjenane\Desktop\ECF-sujetGarage\src\CRUD-Admin\img/';
        if ($_FILES['picture']['error'] === UPLOAD_ERR_OK) {
            $name_picture = $_FILES['picture']['name'];
            $chemin_destination = $dossier_destination . '' . $name_picture;
            if (move_uploaded_file($_FILES['picture']['tmp_name'], $chemin_destination)) {
                $chemin_image = $chemin_destination;
            }else{
                echo 'Une erreur c\'est produit';
            }
        }
    };
}

//Création d'une nouvelle annonce voiture 
if(isset($_POST['btn-createAuto'])){
    $price = $_POST['price'];
    $picture_name = $_FILES['picture']['name'];
    $chemin_picture = '/src/CRUD-Admin/img/' .$picture_name;
    $annee = $_POST['annee'];
    $model = $_POST['model'];
    $kilometre = $_POST['kilometre'];
    $boite = $_POST['boite'];
    $des = $_POST['des'];
    createAuto($price, $chemin_picture, $annee, $kilometre, $model, $boite, $des);
    echo 'Créer avec succes';
}
if (isset($_GET['action'])&& isset($_GET['id'])) {
    $action = $_GET['action'];
    $id = $_GET['id'];
}

if(($_GET['action'] === 'delete')){
    deleteAuto($id);
    echo 'Votre annonce à bien été supprimer';
}else{
    header("Location: /src/page-venteAuto/indexAuto.php");
}

?>
