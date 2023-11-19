// Variables
const inputs = document.querySelectorAll('input'); // todos los inputs del formulario en un array.
//let cont = 0; // Contador de validaciones de inputs

// Expresiones regulares
const regExp = {
    regName: /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/, // Letras pueden llevar acentos.
    regDni: /^(\d{8})([A-Z])$/,
    regCif: /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/,
    regNie: /^[XYZ]\d{7,8}[A-Z]$/,
    password: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/,
    /*Dígitos, minúsculas y mayúsculas y símbolos La contraseña debe tener al entre 8 y 16 caracteres, 
     al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter no alfanumérico.
     Ejemplo:w3Unpo<code>t0d0*/
    email: /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/

}

// Eventos de todos lo inputs.
inputs.forEach((input) => {
    input.addEventListener('input', seleccionaInput);
    input.addEventListener('blur', seleccionaInput);
});

function seleccionaInput(e) {
    switch (e.target.name) {
        case "usuario":
            validarCampo(regExp.regName.test(e.target.value), e.target);
            break;
        case "password":
            validarCampo(regExp.password.test(e.target.value), e.target);
            break;
        case "confirmarPassword":
            validarCampo(confirmar_Password(e.target.value), e.target);
            break;
        case "nombre":
            validarCampo(regExp.regName.test(e.target.value), e.target);
            break;
        case "apellido1":
            validarCampo(regExp.regName.test(e.target.value), e.target);
            break;
        case "apellido2":
            validarCampo(regExp.regName.test(e.target.value), e.target);
            break;
        case "userEmail":
            validarCampo(regExp.email.test(e.target.value), e.target);
            break;
        case "dni":
            validarCampo(validarDniNifNie(e.target.value), e.target);
            break;
    }
}
function confirmar_Password(e) {
    let value = false;
    let pass = document.querySelector("#password");
    if (e === pass.value) {
        value = true
    } else {
        value = false
    }
    return value;
}

// Implementación de clase is-valid
function validarCampo(expresion, e) {

    if (expresion == true && e.value != "") {
        e.classList.remove('is-invalid');
        e.classList.add('is-valid');
    } else if (expresion == false && e.value != "") {
        e.classList.remove('is-valid');
        e.classList.add('is-invalid');
    }


    /*if (expresion.test(e.value) && e.value != "") {
        e.classList.remove('is-invalid');
        e.classList.add('is-valid');
    } else if (!expresion.test(e.value) && e.value != "") {
        e.classList.remove('is-valid');
        e.classList.add('is-invalid');
    }*/

}


// Js de bootstrap.Solo valida al pulsar submit y marca campo o campos
(function () {
    'use strict';
    // Cuando todos los inputs esten ok
    window.addEventListener('load', function () {
        // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (e) {
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
    }, false);
}
)();


// Validación dni/nif/nie
function validarDniNifNie(str) {
    str = normalizar(str);
    let valido = false;
    const type = tipoDocumento(str); // Variable tipo de documento.

    switch (type) {
        case 'dni':// A función dni.
            valido = validDNI(str);
            break;
        case 'nie':// A función nie.
            valido = validNIE(str);
            break;
        case 'cif':// A funcion cif.
            valido = validCIF(str);
            break;
    }
    return valido;
}

//Función tipo de documento.
function tipoDocumento(str) {
    str = normalizar(str);
    if (str.match(regExp.regDni)) {
        return 'dni';
    }
    if (str.match(regExp.regCif)) {
        return 'cif';
    }
    if (str.match(regExp.regNie)) {
        return 'nie';
    }
}

//Función validar dni.
function validDNI(str) {
    str = normalizar(str);
    const dniLetters = 'TRWAGMYFPDXBNJZSQVHLCKE';
    const letter = dniLetters.charAt(parseInt(str, 10) % 23);
    return letter === str.charAt(8);
}

//Función validar nie.
function validNIE(str) {
    str = normalizar(str);
    // Cambia la letra inicial por el número correspondiente y valida como DNI
    let niePrefix = str.charAt(0);
    switch (niePrefix) {
        case 'X':
            niePrefix = '0';
            break;
        case 'Y':
            niePrefix = '1';
            break;
        case 'Z':
            niePrefix = '2';
            break;
        default:
            return false;
    }
    return validDNI(niePrefix + str.substr(1));
}

//Función validar cif.
function validCIF(str) {
    str = normalizar(str);
    if (!str || str.length !== 9) {
        return false;
    }
    const letters = ['J', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
    const digitos = str.substr(1, str.length - 2);
    const letter = str.substr(0, 1);
    const control = str.substr(str.length - 1);
    let sum = 0;
    let i;
    let digito;
    if (!letter.match(/[A-Z]/)) {
        return false;
    }
    for (i = 0; i < digitos.length; ++i) {
        digito = parseInt(digitos[i]);
        if (isNaN(digito)) {
            return false;
        }
        if (i % 2 === 0) {
            digito *= 2;
            if (digito > 9) {
                digito = Math.floor(digito / 10) + (digito % 10);
            }
            sum += digito;
        } else {
            sum += digito;
        }
    }
    sum %= 10;
    if (sum !== 0) {
        digito = 10 - sum;
    } else {
        digito = sum;
    }
    if (letter.match(/[ABEH]/)) {
        return String(digito) === control;
    }
    if (letter.match(/[NPQRSW]/)) {
        return letters[digito] === control;
    }
    return String(digito) === control || letters[digito] === control;
}

function normalizar(str) {
    // Asegúrese de que esté en mayúsculas y elimine los espacios en blanco y los guiones
    return str.toUpperCase().replace(/\s/g, '').replace(/-/g, '');
}
