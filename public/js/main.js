/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle', 'nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    // Active link
    navLink.forEach(n => n.classList.remove('active'))
    this.classList.add('active')

    // Remove menu mobile
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}

navLink.forEach(n => n.addEventListener('click', linkAction))

/*===== WORK SWIPER =====*/
let swiperWork = new Swiper(".mySwiper", {
    cssMode: true,
    loop: true,

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

/*===== SCROLL UP =====*/
function scrollUp() {
  const scrollUp = document.getElementById('scroll-up');
  // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
  if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*===== FORM VALIDATION =====*/
window.onload = () => {
    lastname.addEventListener('input', checkInputLastName);
    firstname.addEventListener('input', checkInputFirstName);
    email.addEventListener('input', checkInputEmail);
    message.addEventListener('input', checkInputMessage);
    agreeterms.addEventListener('input', checkInputAgreeTerms);
}

let form = document.querySelector('#contact__form');
const lastname = document.querySelector('#contact__form-lastname');
const firstname = document.querySelector('#contact__form-firstname');
const email = document.querySelector('#contact__form-email');
const message = document.querySelector('#contact__form-message');
const agreeterms = document.querySelector('#contact__form-agreeterms');

function checkInputLastName() {
    // trim to remove the whitespaces
    const lastnameValue = lastname.value.trim();

    if (lastnameValue === '') {
        setErrorFor(lastname, 'Le nom ne peut pas être vide');
    } else if (isLastNameNumber(lastnameValue)) {
        setErrorFor(lastname, 'Le nom ne peut pas contenir un nombre');
    } else if (!isLastName(lastnameValue)) {
        setErrorFor(lastname, 'La première lettre doit être en majuscule');
    } else {
        setSuccessFor(lastname);
    }
}
function checkInputFirstName() {
    // trim to remove the whitespaces
    const firstnameValue = firstname.value.trim();

    if (firstnameValue === '') {
        setErrorFor(firstname, 'Le prénom ne peut pas être vide');
    } else if (isFirstNameNumber(firstnameValue)) {
        setErrorFor(firstname, 'Le prénom ne peut pas contenir un nombre ');
    } else if (!isFirstName(firstnameValue)) {
        setErrorFor(firstname, 'La première lettre doit être en majuscule');
    } else {
        setSuccessFor(firstname);
    }
}
function checkInputEmail() {
    // trim to remove the whitespaces
    const emailValue = email.value.trim();

    if (emailValue === '') {
        setErrorFor(email, 'L\'adresse e-mail ne peut pas être vide');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'L\'adresse e-mail n\'est pas valide');
    } else {
        setSuccessFor(email);
    }
}
function checkInputMessage() {
    // trim to remove the whitespaces
    const messageValue = message.value.trim();
    if (messageValue === '') {
        setErrorFor(message, 'Le message ne peut pas être vide');
    } else if (!isMessageLengthMin(messageValue)) {
        setErrorFor(message, 'Un minimun 150 caractères est requis.');
    } else if (!isMessageLengthMax(messageValue)) {
        setErrorFor(message, 'Pas plus de 2000 caractères possible.');
    } else {
        setSuccessFor(message);
    }
}
function checkInputAgreeTerms() {
    const agreetermsValue = agreeterms.checked;
    if (agreetermsValue === false) {
        setErrorFor(agreeterms, 'La case doit être cochée pour envoyer le message.');
    } else {
        setSuccessFor(agreeterms);
    }
}

form.addEventListener('submit', event => {
    //e.preventDefault();
    checkInputs(event);
});

function checkInputs(event) {
    // trim to remove the whitespaces
    const lastnameValue = lastname.value.trim();
    const firstnameValue = firstname.value.trim();
    const emailValue = email.value.trim();
    const messageValue = message.value.trim();
    const agreetermsValue = agreeterms.checked;
    // We initialize the score
    let score = 0;

    if (lastnameValue === '') {
        setErrorFor(lastname, 'Le nom ne peut pas être vide');
    } else if (isLastNameNumber(lastnameValue)) {
        setErrorFor(lastname, 'Le nom ne peut pas contenir un nombre');
    } else if (!isLastName(lastnameValue)) {
        setErrorFor(lastname, 'La première lettre doit être en majuscule');
    } else {
        score++;
        setSuccessFor(lastname);
    }

    if (firstnameValue === '') {
        setErrorFor(firstname, 'Le prénom ne peut pas être vide');
    } else if (isFirstNameNumber(firstnameValue)) {
        setErrorFor(firstname, 'Le prénom ne peut pas contenir un nombre ');
    } else if (!isFirstName(firstnameValue)) {
        setErrorFor(firstname, 'La première lettre doit être en majuscule');
    } else {
        score++;
        setSuccessFor(firstname);
    }

    if (emailValue === '') {
        setErrorFor(email, 'L\'adresse e-mail ne peut pas être vide');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'L\'adresse e-mail n\'est pas valide');
    } else {
        score++;
        setSuccessFor(email);
    }

    if (messageValue === '') {
        setErrorFor(message, 'Le message ne peut pas être vide');
    } else if (!isMessageLengthMin(messageValue)) {
        setErrorFor(message, 'Un minimun 150 caractères est requis.');
    } else if (!isMessageLengthMax(messageValue)) {
        setErrorFor(message, 'Pas plus de 2000 caractères possible.');
    } else {
        score++;
        setSuccessFor(message);
    }

    if (agreetermsValue === false) {
        setErrorFor(agreeterms, 'Cochez la case.');
    } else {
        score++;
        setSuccessFor(agreeterms);
    }

    if (score === 5) {
        alert('submit, Formulaire OK , Envoi en Cours !');
        console.log("Formulaire OK , Envoi en Cours !");
        //event.preventDefault();
        return true;
    } else {
        alert('submit, Erreur Formulaire!');
        console.log("Erreur Formulaire!");
        event.preventDefault();
        return false;
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'contact__content error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'contact__content success';
}

function isLastNameNumber(lastname) {
    return /\d/.test(lastname);
}

function isLastName(lastname) {
    return /^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-'’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-'’\s]{0,1})*$/.test(lastname);
}

function isFirstNameNumber(firstname) {
    return /\d/.test(firstname);
}

function isFirstName(firstname) {
    return /^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-'’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-'’\s]{0,1})*$/.test(firstname);
}

function isMessageLengthMin(message) {
    if (message.length >= 150) {
        return true;
    }
}

function isMessageLengthMax(message) {
    if (message.length <= 2000) {
        return true;
    }
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
