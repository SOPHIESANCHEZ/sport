//FONCTION POUR LE MENU BURGER EN RESPONSIVE
/*function toggleMenu () {  
    const navbar = document.querySelector('.navbar');//LES CONST AVEC QUERY SELECTOR VONT RETOURNER LES ELEMENTS NAVBAR ET BURGER
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', (e) => {   
      navbar.classList.toggle('show-nav');//RENVOIE A LA LISTE DE CLASSE ALTERNATIVE A CLASS NAME
    });    
  }
  toggleMenu();//Je rappelle ma fonction sinon ça ne fonctionne pas
*/
// burger JQUERY
$(document).ready(()=>{
function toggleMenu (){
    $('.burger') .on('click',function(){
        $('.navbar').toggleClass('show-nav')
    });
  }
  toggleMenu();
  //FONCTION POUR LE SCROLL DE LA BARRE NAV 

//barnav JQUERY

    $(this).scroll(function () {
      var scroll = $(this).scrollTop();
      if (scroll > 100) {
        $(".navbar").css("background", "red");
      } else {
        $(".navbar").css("background", "");
      }
    });
  
   /*function changeColorOnScroll(){
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
*/
/*Formulaire en jquery*/
    let name = $("#nom");
    let prename = $("#prenom");
    let mail = $("#email");
    let phone = $("#number");
    let sujet = $("#sujet");
    let message = $("#message");

    // Error SPAN
    let error_name = $("#errorName");
    let error_prename = $("#errorFirstName");
    let error_mail = $("#errorEmail");
    let error_phone = $("#errorTel");
    let error_sujet = $("#errorSujet");
    let error_message = $("#errorMessage");



    let pathArr =location.pathname.split('/');
    if(pathArr.includes('contact.html')){
        $("#myForm").on("submit", valid_f);
        function valid_f(e){
            let myRegex = (/^[a-zA-Z]+$/);
            let myRegexNum = /^[0-9\s]+$/;
            let myRegexMail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
                if ($("#nom").val() === "") {
                    error_name.css("display", "block")
                    name.addClass("control-danger")
                    name.removeClass("control-success")
                    $("#nom").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else if (!myRegex.test($("#nom").val())) {
                    error_name.css("display", "block")
                    name.addClass("control-danger")
                    name.removeClass("control-success")
                    $("#nom").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else {
                    error_name.css("display", "none")
                    name.addClass("control-success")
                    name.removeClass("control-danger")
                    $("#nom").css("border", "solid 1px green");
                }
                if ($("#prenom").val() == "") {
                    error_prename.css("display", "block")
                    prename.addClass("control-danger")
                    prename.removeClass("control-success")
                    $("#prenom").css("border", "solid 1px red");
                    e.preventDefault();
                } else if (!myRegex.test(prename.val())) {
                    error_prename.css("display", "block")
                    prename.addClass("control-danger")
                    prename.removeClass("control-success")
                    $("#prenom").css("border", "solid 1px red");
                    e.preventDefault();
                } else {
                    error_prename.css("display", "none")
                    prename.addClass("control-success")
                    prename.removeClass("control-danger")
                    $("#prenom").css("border", "solid 1px green");
                }
                if (mail.val() == "") {
                    error_mail.css("display", "block")
                    mail.addClass("control-danger")
                    mail.removeClass("control-success")
                    $("#email").css("border", "solid 1px red");
                    e.preventDefault();
                } else if (!myRegexMail.test(mail.val())) {
                    error_mail.css("display", "block")
                    mail.addClass("control-danger")
                    mail.removeClass("control-success")
                    $("#email").css("border", "solid 1px red");
                    e.preventDefault();
                } else {
                    error_mail.css("display", "none");
                    mail.addClass("control-success")
                    mail.removeClass("control-danger")
                    $("#email").css("border", "solid 1px green");
                }
                if (phone.val() == "") {
                    error_phone.css("display", "block")
                    phone.addClass("control-danger")
                    phone.removeClass("control-success")
                    $("#number").css("border", "solid 1px red");
                    e.preventDefault();
                } else if (!myRegexNum.test(phone.val()) || phone.val().length != "10") {
                    error_phone.css("display", "block")
                    phone.addClass("control-danger")
                    phone.removeClass("control-success")
                    $("#number").css("border", "solid 1px red");
                    e.preventDefault();
                } else {
                    error_phone.css("display", "none")
                    phone.addClass("control-success")
                    phone.removeClass("control-danger")
                    $("#number").css("border", "solid 1px green");
                }
                if ($("#sujet").val() === "") {
                    error_sujet.css("display", "block")
                    sujet.addClass("control-danger")
                    sujet.removeClass("control-success")
                    $("#sujet").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else if (!myRegex.test($("#sujet").val())) {
                    error_sujet.css("display", "block")
                    sujet.addClass("control-danger")
                    sujet.removeClass("control-success")
                    $("#sujet").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else {
                    error_sujet.css("display", "none")
                    sujet.addClass("control-success")
                    sujet.removeClass("control-danger")
                    $("#sujet").css("border", "solid 1px green");
                }
                if ($("#message").val() === "") {
                    error_message.css("display", "block")
                    message.addClass("control-danger")
                    message.removeClass("control-success")
                    $("#message").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else if (!myRegex.test($("#message").val())) {
                    error_message.css("display", "block")
                    message.addClass("control-danger")
                    message.removeClass("control-success")
                    $("#message").css("border", "solid 1px red");
                    e.preventDefault();
                }
                else {
                    error_message.css("display", "none")
                    message.addClass("control-success")
                    message.removeClass("control-danger")
                    $("#message").css("border", "solid 1px green");
                }
                




        }
}
}); 

//FONCTION POUR LA VALIDATION DU FORMULAIRE
/*let pathArray = window.location.pathname.split('/');
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
}*/
//if (window.location.href.indexOf('file:///C:/Users/utilisateur/Documents/groupe1-3/contact.html'))
//document.getElementById("myForm").addEventListener("submit",valid_F)