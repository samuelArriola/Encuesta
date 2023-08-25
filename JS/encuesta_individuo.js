//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}


function validarNumero(input, longitu = 2) {
    if (input.value.length > longitu) {
      input.value = input.value.slice(0, longitu);
    }
}