<?php 

require_once "mesFonctionsSQL.php";
//Affiche un tableau () dynamique alimenter par la base de donnée
function afficherTableau($tabHeaders, $rows) {
    ?>

    <table border="1" align="center">
        <tr>
        <?php foreach ($tabHeaders as $header): ?>
            <th><?php echo $header; ?></th>
        <?php endforeach; ?>
            <th>Modifier/Supp</th>
        </tr>

        <?php foreach ($rows as $row): ?>
            <tr>
            <?php for ($i = 0; $i < count($tabHeaders); $i++): ?>
                <?php if ($i == 0){ ?>
                    <td><?php echo '<a href=formulaireServices.php?id='.$row[$i].' >'.$row[$i].'</a>'; ?></td>
                    <?php } else { ?>
                        <td><?php echo $row[$i]; ?></td>
                        <?php } ?>
                    
            <?php endfor; ?>
            <?php echo '<td align="center"><a href="formulaireServices.php?id='.$row[0].'">Modif/Supp</a></td>'; ?>
            </tr>
        <?php endforeach; ?>

    </table>
    <?php    
}



//Récupere le header de la table
function getHeaderTable() {
    $headers = array();
    $headers[] = "identifiant";
    $headers[] = "service_nom";
    $headers[] = "service_description";
    return $headers;
}

//Affiche une grid (services) dynamique alimenter par la base de donnée
function gridDynamique($names){
    $i = 0;
    foreach($names as $name){
        echo '<div class="item item-'.$i .'">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="11.963" height="16.622" viewBox="0 0 11.963 16.622">';
        echo '<path id="chevron-right" d="M4.729,1.675a.961.961,0,0,1,1.109,0l9.394,7.186a.506.506,0,0,1,0,.848L5.838,16.9a.962.962,0,0,1-1.109,0,.506.506,0,0,1,0-.848l8.842-6.762L4.729,2.523A.539.539,0,0,1,4.5,2.1a.539.539,0,0,1,.23-.424Z" transform="translate(-3.999 -0.999)" fill="#d92332" stroke="#d92332" stroke-width="1" fill-rule="evenodd"/>';
        echo '</svg>';
            
        echo $name[0];

        echo '</div>';
        $i++;
    }
}


if(isset($_POST['open'])){
    updateConnex(1,1);
    header("Location: ../index.php");
    exit();
}elseif(isset($_POST['close'])){
    updateConnex(0,1);
    header("Location: ../index.php");
    exit();
};

function openOrClose(){
    $connect = getConnex();
    foreach($connect as $value){
        if ($value[0] == 1){
            return true;
        }else{
            return false;
        }
    }
};

function getHeaderTableContact() {
    $headers = array();
    $headers[] = "identifiant";
    $headers[] = "Sujet";
    $headers[] = "Nom";
    $headers[] = "Prénom";
    $headers[] = "E-mail";
    $headers[] = "Télephone";
    $headers[] = "Message";
    return $headers;
}

function afficherTableauContact($tabHeaders, $rows) {
    echo '<table border="1" align="center">';
    echo '<tr>';
        foreach ($tabHeaders as $header){
            echo '<th>'.$header.'</th>';
        }
        echo '<th>Supprimer</th>';
    echo '</tr>';

        foreach ($rows as $row){
            echo '<tr>';
            for ($i = 0; $i < count($tabHeaders); $i++){
                echo '<td>'.$row[$i].'</td>';
            }
            echo '<td><a href="/src/CRUD-Admin/deleteContact.php?id='.$row[0].'">Supprimer</a></td>';
            echo '</tr>';
        }
    echo '</table>';

}

function getHeaderTableAvis() {
    $headers = array();
    $headers[] = "identifiant";
    $headers[] = "Nom";
    $headers[] = "Prénom";
    $headers[] = "Prestations";
    $headers[] = "Note";
    $headers[] = "Message";
    return $headers;
}

function afficherTableauAvis($tabHeaders, $rows) {
    echo '<table border="1" align="center">';
    echo '<tr>';
        foreach ($tabHeaders as $header){
            echo '<th>'.$header.'</th>';
        }
        echo '<th>Supprimer</th>';
        echo '<th>Valider</th>';
    echo '</tr>';

        foreach ($rows as $row){
            echo '<tr>';
            for ($i = 0; $i < count($tabHeaders); $i++){
                echo '<td>'.$row[$i].'</td>';
            }
            echo '<td><a href="/src/CRUD-Admin/deleteSendAvis.php?id='.$row[0].'&delete=D">Supprimer</a></td>';
            echo '<td><a href="/src/CRUD-Admin/deleteSendAvis.php?id='.$row[0].'&nom='.$row[1].'&prenom='.$row[2].'&prest='.$row[3].
                                                                '&note='.$row[4].'&msg='.$row[5].'&send=send">Valider</a></td>';
            echo '</tr>';
        }
    echo '</table>';

}

function getHeaderTableCompte() {
    $headers = array();
    $headers[] = "Id";
    $headers[] = "Identifiant";
    $headers[] = "Mot de passe";
    $headers[] = "Role";
    return $headers;
}


function afficherTableauCompte($tabHeaders, $rows) {
    echo '<table border="1" align="center">';
    echo '<tr>';
        foreach ($tabHeaders as $header){
            echo '<th>'.$header.'</th>';
        }
        echo '<th>Supprimer</th>';
    echo '</tr>';

        foreach ($rows as $row){
            echo '<tr>';
            for ($i = 0; $i < count($tabHeaders); $i++){
                echo '<td>'.$row[$i].'</td>';
            }
            echo '<td><a href="/src/CRUD-Admin/deleteCompte.php?id='.$row[0].'">D</a></td>';
            echo '</tr>';
        }
    echo '</table>';

}