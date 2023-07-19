
//------ MODAL DEVIS ------//
    //Bouton devis
    var btn = document.getElementById("btn-devis");
    //Wrapper modal
    var modal = document.getElementById("wrapperModal-devis");
    //content modal
    var modalContent = document.querySelector("#wrapperModal-devis > div.contentModal-devis")
    //Modal 
    var maVoiture = document.getElementById("devis-maVoiture");
    var monDevis = document.getElementById("devis-monDevis");
    var monGarage = document.getElementById("devis-monGarage");
    var monRdv = document.getElementById("devis-monRdv");              
    var monHoraire = document.getElementById("devis-monHoraire");              
    var modalValid = document.getElementById("modalValid");              
    
    // Fonction qui récupere le code d'une page hmtl
    async function fetchHtmlAsText(url) {
        const response = await fetch(url);
        return await response.text();
    }

    // Fonction qui charge le code d'une page html à un bloc
    async function loadPage(Modal, page) {
        $(Modal).html(await fetchHtmlAsText(page));
    }

    //Ouvre la modale "ma voiture"
    btn.onclick = async function() {
        await loadPage(maVoiture,"./modal-devis/maVoiture-devis.html");

    }

   //Fonction qui ferme la modal si on clique en dehors de la modal 
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        location.reload();

    }}

    //Fonction qui change la modal
    let btnDevisMaVoiture = document.querySelector(".btn-devis-maVoiture");
    async function nextModal(Modal, page){
        await loadPage(Modal,page)
    }

    //Fonction qui passe de la modal "ma voiture" ---> "mon devis" 
    function nextModalMaVoiture(){
        nextModal(monDevis, "./modal-devis/monDevis-devis.html")
        maVoiture.style.display = "none";
    }

    //Fonction qui passe de la modal "mon devis ---> "mon garage"
    function nextModalMonDevis(){
        nextModal(monGarage, "./modal-devis/monGarage-devis.html")
        monDevis.style.display = "none";
    }

    //Fonction qui passe de la modal "mon garage ---> "mon RDV"
    function nextModalMonGarage(){
        nextModal(monRdv, "./modal-devis/monRdv-devis.html")
        monGarage.style.display = "none";
    }

    //Fonction qui passe de la modal "mon RDV ---> "mes horaires"
    function nextModalMonRdv(){
        nextModal(monHoraire, "./modal-devis/monHoraire-devis.html")
        monRdv.style.display = "none";
    }
    //Fonction qui passe de la modal "mon horaire ---> "modalValid"
    function nextModalHoraire(){
        monHoraire.style.display = "none";
        modalContent.style.display = "none";
        modalValid.style.display ="initial";
        nextModal(modalValid, "./modal-devis/modalValid.html")
    }

    //Fonction qui ferme la modal
    function closeModal(){
        modal.style.display = "none";
        location.reload();
    }
//------ MODAL DEVIS ------//

//------ MODAL Login/Register ------//

//Boutton Login Index
var btnLogin = document.querySelector("body > header > nav > ul > div.contain-nav > li.connect.btn-top > a");
//Boutton Register
document.querySelector("body > header > nav > ul > div.contain-nav > li.connect.btn-top > a")
var btn = document.getElementById("btn-devis");
//Wrapper modal
var modalWrapperLogin = document.getElementById("wrapperModal-login");
//content modal
var modalLogin = document.getElementById("modal-login")

var modalRegister = document.getElementById("modal-register")

var modalSession = document.getElementById("modal-session")

//Ouvre la modale "Connection"
async function clicklogin(){
    await loadPage(modalLogin, "/src/modal-login/userLogin.php")
    modalWrapperLogin.style.display ="block";
    modalLogin.style.display="block";
};

async function clickRegister(){
    await loadPage(modalRegister, "/src/modal-login/userRegister.php")
    modalSession.style.display="none";
    modalWrapperLogin.style.width ="420px";
    modalWrapperLogin.style.height ="520px";
    modalWrapperLogin.style.display ="block";
    modalRegister.style.display="block";
};


async function clicksession(){
    if(modalLogin == undefined){
        alert('Revenir à la page d\'accueil pour accéder à cette fonctionnalité');
    }
    modalLogin.style.display="none";
    modalWrapperLogin.style.display ="block";
    modalWrapperLogin.style.width ="350px";
    modalWrapperLogin.style.height ="250px";
    await loadPage(modalSession, "/src/modal-login/session.php")
};




//----- Menu déroulant -----// 
var currentImageIndex = 0;
var images = document.querySelectorAll('.wrapper-menuD > div');
var previousBtn = document.getElementById('previousBtn');
var nextBtn = document.querySelector("#wrapperModal-login");

// Affiche l'image actuelle et masque les autres
function showImage(index) {
  for (var i = 0; i < images.length; i++) {
    images[i].style.display = 'none';
  }
  images[index].style.display = 'block';
}

// Affiche l'image suivante
function nextImage() {
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  showImage(currentImageIndex);
}

// Affiche l'image précédente
function previousImage() {
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  showImage(currentImageIndex);
}

// Événements de clic sur les boutons précédent et suivant
previousBtn.addEventListener('click', previousImage);
nextBtn.addEventListener('click', nextImage);

// Affiche la première image au chargement de la page
showImage(currentImageIndex);







//------ MODAL Login/Register ------//


