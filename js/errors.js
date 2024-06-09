//Verificando se possui letra de a-Z, e se possui caracteres especiais.
const regexNome = /^[a-zA-Z\s]+$/;
//Verifica o email.
const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function validar_contato() {
    let errors = document.querySelectorAll('.input-contato');

    let count_erro = 0;
    errors.forEach((element, index) => {
        switch (true) {
            case element.value.trim() === '':
            case !regexNome.test(errors[0].value):
            case index === 1 && !regexEmail.test(errors[1].value):
                document.getElementById('error-' + element.name).hidden = false;
                document.getElementById('contato-' + element.name).style.borderBottom = '2px solid rgb(219, 37, 24)';
                count_erro++;

                break;
            default:
                document.getElementById('error-' + element.name).hidden = true;
                document.getElementById('contato-' + element.name).style.borderBottom = '2px solid rgb(24, 128, 219)';
                break;
        }
    });
    return count_erro <= 0;
}
