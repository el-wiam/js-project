
const userName = document.querySelector('#name');
const emailEl = document.querySelector('#email');
const passwordEl = document.querySelector('#pwd');
const confirmPasswordEl = document.querySelector('#confirm');

const form = document.querySelector('#form');

function isEmpty(value){
    if(value==='') return false;
    return true;
}

function isBetween(length,min,max){
    if(length < min || length > max) return false
    return true;
}


function showError(input,message){
    const formField = input.parentElement;
    formField.className="form-group text-center error";
    const error = formField.querySelector('small');
    error.textContent = message;
}

function showSuccess(input){
const formField = input.parentElement;
formField.className="form-group text-center success";
const error = formField.querySelector('small');
error.textContent = '';
}


function checkUsername(){
    let valid = false;

    const   min = 3,
            max = 25;

    const username = userName.value.trim();

    if (!isEmpty(username)) {
        showError(userName, 'Username ne peut pas etre vide.');

    } else if (!isBetween(username.length, min, max)) {
        showError(userName, `Username entre ${min} et ${max} caracteres.`)
    } else {
        showSuccess(userName);
        valid = true;
    }

    return valid;
}

function checkEmail(){
    let valid = false;
    const email = emailEl.value.trim();
    if (!isEmpty(email)) {
        showError(emailEl, 'Email ne peut pas etre vide.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email n est pas valide.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

function checkPassword(){
    let valid = false;

    const password = passwordEl.value.trim();

    if (!isEmpty(password)) {
        showError(passwordEl, 'Password ne peut pas etre vide.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Le mot de passe doit comporter au moins 8 caractères, dont au moins 1 caractère minuscule, 1 caractère majuscule, 1 chiffre et 1 caractère spécial entre (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};

function checkConfirmPassword(){
    let valid = false;
    // check confirm password
    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if (!isEmpty(confirmPassword)) {
        showError(confirmPasswordEl, 'Veuillez saisir à nouveau le mot de passe');
    } else if (password !== confirmPassword) {
        showError(confirmPasswordEl, 'Le mot de passe ne correspond pas');
    } else {
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
};

function isEmailValid(email){
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);a
};

function isPasswordSecure(password){
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};






const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
            console.log(args);
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'name':
            checkUsername();
            break;
        case 'email':
            checkEmail();
            break;
        case 'pwd':
            checkPassword();
            break;
        case 'confirm':
            checkConfirmPassword();
            break;
    }
}));

