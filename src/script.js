

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
        modal.style.display = "flex";
        modalValid.style.display ="none";

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
var btnLogin = document.querySelector("body > header > div.flex.items-center.justify-between.text-white.m-0.h-15 > nav > ul > li.connect.mr-10.border-2.border-red-500.btn-top > a");
//Boutton Register
var btn = document.getElementById("btn-devis");
//Wrapper modal
var modalWrapperLogin = document.getElementById("wrapperModal-login");
//content modal
var modalLogin = document.getElementById("modal-login")

//Ouvre la modale "Connection"
async function clicklogin(){
    modalWrapperLogin.style.display ="block";
    await loadPage(modalLogin, "./modal-login/userLogin.php")
};












//------ MODAL Login/Register ------//


