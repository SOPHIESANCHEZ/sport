//FONCTION POUR LE MENU BURGER EN RESPONSIVE
function toggleMenu () {  
    const navbar = document.querySelector('.navbar');//LES CONST AVEC QUERY SELECTOR VONT RETOURNER LES ELEMENTS NAVBAR ET BURGER
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', (e) => {   
      navbar.classList.toggle('show-nav');//RENVOIE A LA LISTE DE CLASSE ALTERNATIVE A CLASS NAME
    });    
  }
  toggleMenu();//Je rappelle ma fonction sinon ça ne fonctionne pas
//FONCTION POUR LE SCROLL DE LA BARRE NAV 
function changeColorOnScroll(){
    const navbar = document.querySelector('.nav-fixed'); 
    window.onscroll = () => {
        if (window.scrollY > 300) {
            navbar.classList.add('nav-active');
        } else {
            navbar.classList.remove('nav-active');
        }
    };
}
changeColorOnScroll();//Je rappelle ma fonction sinon ça ne fonctionne pas

//FONCTION POUR LA VALIDATION DU FORMULAIRE
let pathArray = window.location.pathname.split('/');
//VARIABLE QUI PERMET DE SEPARER LES CONTENUS
if(pathArray.includes('contact.html')){
    //CONDITION POUR QUE CETTE FONCTION NE S APLLIQUE QU A LA PAGE CONTACT
    let myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", valid_f); 
    function valid_f(e) {
        let nom = document.getElementById("nom");
        let telephone = document.getElementById("numero");
        let prenom = document.getElementById("prenom");
        let email = document.getElementById("email");
        let sujet = document.getElementById("sujet");
        let message = document.getElementById("message");


    // 3 REGEX DIFFERENTES UNE POUR LE TEXT UNE POUR LE TEL ET UNE POUR LE MAIL
        let myRegex = /^[a-zA-Z-\s]+$/;
        let myRegextelephone = /^[0-9\s]+$/;
        let myRegexmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

       
        if(nom.value === ""){
            nom.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegex.test(nom.value) === false){
            nom.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{ 
            //error_name.innerHTML = "c'est bon!!";  
            nom.style.borderColor = "green";        
        }
        if(telephone.value === ""){
            telephone.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegextelephone.test(telephone.value) == false){
            telephone.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{  
          //error_name.innerHTML = "c'est bon!!";  
            telephone.style.borderColor = "green";                   
        }
        if(prenom.value == ""){
            prenom.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegex.test(prenom.value) === false){
            prenom.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{ 
          // error_numero.innerHTML = "c'est bon!!";  
            prenom.style.borderColor = "green";               
        }
        if(email.value == ""){
            email.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegexmail.test(email.value) === false){
            email.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{ 
           //error_mail.innerHTML = "c'est bon!!";  
            sujet.style.borderColor = "green";                   
        }
        if(sujet.value == ""){
            sujet.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegex.test(sujet.value) === false){
            sujet.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{ 
           //error_mail.innerHTML = "c'est bon!!";  
            sujet.style.borderColor = "green";                   
        }
        if(message.value == ""){
            message.style.borderColor = "red";
            e.preventDefault();
        }
        else if(myRegex.test(message.value) === false){
            message.style.borderColor = "red";
            e.preventDefault();             
        }      
        else{ 
           //error_mail.innerHTML = "c'est bon!!";  
            message.style.borderColor = "green";                   
        }
    }
}
//if (window.location.href.indexOf('file:///C:/Users/utilisateur/Documents/groupe1-3/contact.html'))
//document.getElementById("myForm").addEventListener("submit",valid_F)