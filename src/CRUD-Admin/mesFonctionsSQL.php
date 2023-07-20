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

//Récupère tous les services depuis la base de donnée
function getAllAuto() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from auto");
    $rows = mysqli_fetch_all($res);

    return $rows;
}

function readAuto($id) {
    $con = getDatabaseConnexion();
    $requete = "SELECT * from auto where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetch_All();
    if (!empty($row)) {
        return $row[0];
    }
    
}

function createAuto($prix, $image, $annee, $kilometre, $model, $boite, $des) {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO auto (prix, image, annee, kilometre, model, boite, description)    
            VALUES (CONCAT('$prix', '€'), '$image', $annee, CONCAT('$kilometre', ' km'), '$model', '$boite', '$des')";
        $con->query($sql);
}

function deleteAuto($id) {
    $con = getDatabaseConnexion();
    $requete = "DELETE from auto where id = '$id' ";
    $con->query($requete);

}



function getAllContact() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from contact");
    $rows = mysqli_fetch_all($res);

    return $rows;
}

function createContact($sujet, $nom, $prenom, $email, $tel, $message) {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO contact (sujet, nom, prenom, adresse_mail, tel, message) 
            VALUES ('$sujet', '$nom', '$prenom', '$email', $tel, '$message')";
        $con->query($sql);
}

function deleteContact($id) {
    $con = getDatabaseConnexion();
    $requete = "DELETE from contact where id = '$id' ";
    $con->query($requete);

}

function getAllAvis() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from avisclient");
    $rows = mysqli_fetch_all($res);

    return $rows;
}

function createAvis($nom, $prenom, $prestation, $message, $note) {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO avisclient (nom, prénom, prestations, msg, note) 
            VALUES ('$nom', '$prenom', '$prestation', '$message', $note)";
        $con->query($sql);
}

function deleteAvis($id) {
    $con = getDatabaseConnexion();
    $requete = "DELETE from avisclient where id = '$id' ";
    $con->query($requete);

}


function getAllCompte() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from users");
    $rows = mysqli_fetch_all($res);

    return $rows;
}
function deleteCompte($id) {
    $con = getDatabaseConnexion();
    $requete = "DELETE from users where id = '$id' ";
    $con->query($requete);

}

function getAllAvisValide() {
    $con = getDatabaseConnexion();
    $res = mysqli_query($con, "SELECT * from users");
    $rows = mysqli_fetch_all($res);

    return $rows;
}

function createAvisValide($nom, $prenom, $prestation, $message, $note) {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO avisvalide (nom, prénom, prestations, msg, note) 
            VALUES ('$nom', '$prenom', '$prestation', '$message', $note)";
        $con->query($sql);
}


?>