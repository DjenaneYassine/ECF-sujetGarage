<?php
//Créer la connexion aves la base de donnée
function getDatabaseConnexion() {
        $serveur = "localhost";
        $utilisateur = "root";
        $motdepasse = "Yassine73";
        $basededonnees = "ecf-garageauto";

        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
        return $connexion;
}


//Récupère tous les services depuis la base de donnée
function getAllServices() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from services");
    $rows = mysqli_fetch_all($res);

    return $rows;
}

function getNameServices(){
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT service_nom FROM services");
    $rows = mysqli_fetch_all($res);
    
    return $rows;
};

//Créer un nouveau serivice
function createService($nom, $description) {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO services (service_nom, service_description) 
            VALUES ('$nom', '$description')";
        $con->query($sql);
}

//Lis un service
function readService($id) {
    $con = getDatabaseConnexion();
    $requete = "SELECT * from services where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetch_All();
    if (!empty($row)) {
        return $row[0];
    }
    
}

//Mise à jour d'un service
function updateUser($nom, $description, $id) {
    $con = getDatabaseConnexion();
    $requete = "UPDATE services set 
                service_nom = '$nom',
                service_description = '$description'
                WHERE id = '$id';";
    $con->query($requete);

}

//Supprime un service depuis la base de donnée
function deleteService($id) {
    $con = getDatabaseConnexion();
    $requete = "DELETE from services where id = '$id' ";
    $con->query($requete);

}

function getNewService() {
    $user['service_nom'] = "";
    $user['service_description'] = "";
    $user['id'] = "";
}


function getConnex(){
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT connect FROM sessions");
    $rows = mysqli_fetch_all($res);
    
    return $rows;
}

function updateConnex($connect, $id) {
    $con = getDatabaseConnexion();
    $requete = "UPDATE sessions set 
                connect = '$connect'
                WHERE id = '$id'";
    $con->query($requete);

}


?>