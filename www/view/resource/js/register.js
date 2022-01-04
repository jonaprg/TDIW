const form = document.getElementById("formLogin");
const email = document.getElementById("email");
const password = document.getElementById("password");

$('#formLogin').on('submit', (e) => {
    e.preventDefault();

    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (checkInputs(emailValue, passwordValue)) {
        e.currentTarget.submit();
    }


});

const checkInputs = (emailValue, passwordValue) => {
    let checkEmail = false;
    let checkPass = false;
    if (emailValue === '') {
        setInputAndMessage(email, 'El email está en blanc :/', 'error');
    } else if (!validateEmail(emailValue)) {
        setInputAndMessage(email, 'El correu no es correcte :(', 'error');
    } else {
        setInputAndMessage(email, 'El correu es correcte :)', 'success' );
        checkEmail = true;
    }

    if (passwordValue === '') {
        setInputAndMessage(password, 'La contrasenya está en blanc :/', 'error');
    }
    else {
        setInputAndMessage(password, '', 'success' );
        checkPass =  true
    }
    return checkEmail && checkPass;
}

const setInputAndMessage = (input, message, classN) => {
    const container = input.parentElement;
    const small = container.querySelector('small');

    small.innerText = message;
    container.className =  'input-container ' + classN;
}

const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};