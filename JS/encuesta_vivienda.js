console.log('conectado a encuesta_vivienda.js');

$(document).ready(function() {
    $('.tooltipped').tooltip();  
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();



    //Quita la selecion de todos los campos 
   /*  $("#unselectall").on("click", function() {
        var nameValue = $(this).attr("name");
        var isChecked = this.checked;
        $("input[name='" + nameValue + "']").prop('checked', false);      
        if (isChecked) {
            $(this).prop('checked', true);
        }

    }); */

});


//Valida caracteres especiale 
let cadena_c = document.querySelectorAll(".unselectall");
for (let i = 0; i < cadena_c.length; i++) {

    cadena_c[i].addEventListener('click', function(a) {  
        var nameValue = $(this).attr("name"); console.log( nameValue);
        var isChecked = this.checked;
        $("input[name='" + nameValue + "']").prop('checked', false);      
        if (isChecked) {
            $(this).prop('checked', true);
        }
    });  
 }
 