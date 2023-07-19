// const xhr = new XMLHttpRequest();
// xhr.addEventListener('readystatechange',function(){
//     if(xhr.readyState === 4 && xhr.status === 2){
//         console.log(xhr.response);
//     }
// })
// xhr.open('GET', 'test.php');
// xhr.send()

function chargerContenu() {
    // Créer un objet XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configuration de la requête
    xhr.open('GET', 'test.php');

    // Gestionnaire d'événement pour la fin de la requête
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Récupérer le contenu HTML de la réponse
        var contenuHTML = xhr.responseText;

        // Insérer le contenu HTML dans l'élément avec l'ID "conteneur"
        document.getElementsByClassName('contain-body').innerHTML = contenuHTML;
      } else {
        console.error('La requête a échoué :', xhr.status);
      }
    };

    // Gestionnaire d'erreur de la requête
    xhr.onerror = function() {
      console.error('Une erreur est survenue lors de la requête.');
    };

    // Envoyer la requête
    xhr.send();
  }