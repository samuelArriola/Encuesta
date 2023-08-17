console.log('conectado a encuesta Hogar Js');




//Muesta la opción si de la pregunta 5
$("input[name='eh_comparte_cuarto']").click(function() {
    var opcionSeleccionada = $(this).attr('value');
    if(opcionSeleccionada === "Si"){
        $('#div_eh_conquien_comp_cuarto').css("display","")
    }else{
        $('#div_eh_conquien_comp_cuarto').css("display","none")
    }
});


//Cundo se selecciona ninguno se desmarcan las demás 
let cadena_c = document.querySelectorAll(".unselectall");
for (let i = 0; i < cadena_c.length; i++) {

    cadena_c[i].addEventListener('click', function(a) {  
        console.log('evaluando Unselecall');
        var nameValue = $(this).attr("name"); 
        var isChecked = this.checked;
        $("input[name='" + nameValue + "']").prop('checked', false);      
        if (isChecked) {
            $(this).prop('checked', true);
        }
    });  
 }
 

//Desmarca el check ninguno cuando se selecciona una opción.
$(":checkbox").on("change", function() {
    if ($(this).is(":checked") && !$(this).hasClass("unselectall")) {
        $("input[name='" + $(this).attr("name") + "'][value='Ninguno']").prop('checked', false);
    }
});

function validarNumero(input) {
    if (input.value.length > 2) {
      input.value = input.value.slice(0, 2);
    }
  }