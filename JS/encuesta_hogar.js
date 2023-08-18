console.log('conectado a encuesta Hogar Js');

 //GUARDAR ENCUESTA HOGAR CON AJAX
 $('#eh_guardar').click(function(e) {
    e.preventDefault();   
  
   

   
   const datos_v = {
        E2P1: $('input[name=group_tipo_hogar]:checked').val(),
        E2P2: $('#eh_n_cuarto').val(),
        E2P3: $('#eh_n_persona_cuarto').val(),
        
        E2P4: $('input[name=eh_comparte_cuarto]:checked').val(),
        E2P4_PDRE: $("#E2P4_PDRE:checked").val() ? $("#E2P4_PDRE:checked").val() : "No" ,
        E2P4_PTRO: $("#E2P4_PTRO:checked").val() ? $("#E2P4_PTRO:checked").val() : "No" ,
        E2P4_ABU: $("#E2P4_ABU:checked").val() ? $("#E2P4_ABU:checked").val() : "No" ,
        E2P4_TIO: $("#E2P4_TIO:checked").val() ? $("#E2P4_TIO:checked").val() : "No" ,
        E2P4_HER: $("#E2P4_HER:checked").val() ? $("#E2P4_HER:checked").val() : "No" ,
        E2P4_PRI: $("#E2P4_PRI:checked").val() ? $("#E2P4_PRI:checked").val() : "No" ,
        E2P4_OTR: $("#E2P4_OTR:checked").val() ? $("#E2P4_OTR:checked").val() : "No" ,
        E2P4_NO_P_HOG: $("#E2P4_NO_P_HOG:checked").val() ? $("#E2P4_NO_P_HOG:checked").val() : "No" ,
        
        E2P5: $('input[name=group_servicio_sanitario]:checked').val(),
        E2P6: $('input[name=eh_ubi_sanitaria]:checked').val() ? $('input[name=eh_ubi_sanitaria]:checked').val() : 'No Aplica',
        E2P7: $('#eh_n_inodoro').val() ? $('#eh_n_inodoro').val() : 'No Aplica',
        E2P8: $('input[name=eh_exclu_sanitaria]:checked').val() ? $('input[name=eh_exclu_sanitaria]:checked').val() : 'No Aplica',
        
        E2P9_NIN: $("#E2P9_NIN:checked").val() ? $("#E2P9_NIN:checked").val() : "No" ,
        E2P9_LMANO: $("#E2P9_LMANO:checked").val() ? $("#E2P9_LMANO:checked").val() : "No" ,
        E2P9_LDEO: $("#E2P9_LDEO:checked").val() ? $("#E2P9_LDEO:checked").val() : "No" ,
        E2P9_LPLTO: $("#E2P9_LPLTO:checked").val() ? $("#E2P9_LPLTO:checked").val() : "No" ,
        
        E2P10: $('input[name=eh_elimina_basura]:checked').val() ?  $('input[name=eh_elimina_basura]:checked').val() : 'No Aplica',
        E2P11: $('input[name=eh_obt_agua]:checked').val() ? $('input[name=eh_obt_agua]:checked').val() : 'No Aplica',
        E2P12: $('input[name=eh_persistencia_agua]:checked').val() ? $('input[name=eh_persistencia_agua]:checked').val() : 'No Aplica',
        E2P13: $('input[name=eh_suficiente_agua]:checked').val() ?  $('input[name=eh_suficiente_agua]:checked').val() : 'No Aplica',
        E2P14: $('input[name=eh_suministro_agua]:checked').val() ? $('input[name=eh_suministro_agua]:checked').val() : 'No Aplica',
        E2P15: $('input[name=eh_purificación_agua]:checked').val() ? $('input[name=eh_purificación_agua]:checked').val() : 'No Aplica',
        id_hogar: $('#id_hogar').val()

       }
       //  console.log(datos_v.nombre_u,datos_v.apellido_u,datos_v.cedula_u,datos_v.correo_u);
       console.log(datos_v);
   if (isEmpty(datos_v.E2P1)) {
       return M.toast({ html: 'Pregunta #1 vacía, por favor complete todos los campos',  classes: 'rounded' });
   } else if (isEmpty(datos_v.E2P2)) {
       return M.toast({ html: 'Pregunta #2 vacía, por favor complete el campo', classes: 'rounded' });
   } else if (isEmpty(datos_v.E2P3)) {
       return M.toast({ html: 'Pregunta #3 vacía, por favor complete el campo', classes: 'rounded' });
   }else if(isEmpty(datos_v.E2P4)){
       return M.toast({ html: 'Pregunta #4 vacía, por favor complete el campo', classes: 'rounded' });
   }else if(isEmpty(datos_v.E2P5)){
        return M.toast({ html: 'Pregunta #5 vacía, por favor complete el campo', classes: 'rounded' });
   }else {
       $.ajax({
           type: "POST",
           url: "../Database/eh_crear.php",
           data: datos_v,
           success: function(response) {
               M.toast({ html: response, classes: 'rounded' });
              // $('#ev_form')[0].reset(); //limpia las casjas de texto
            //    window.location.href = 'index.php';

           }
       });
   }
});


//Muesta la opción si de la pregunta 4
$("input[name='eh_comparte_cuarto']").click(function() {
    var opcionSeleccionada = $(this).attr('value');
    if(opcionSeleccionada === "Si"){
        $('#div_eh_conquien_comp_cuarto').css("display","")
    }else{
        $('#div_eh_conquien_comp_cuarto').css("display","none")
        $("input[name='eh_conquien_comp_cuarto']").prop('checked', false);
    }
});

//Bifurcacion pregunta 5
$("input[name='group_servicio_sanitario']").click(function() {
    var opcionSeleccionada = $(this).attr('value');
    if(opcionSeleccionada === "No tiene servicio sanitario"){

        $('#div_eh_ubi_sanitaria').css("display","none")
        $('#div_eh_n_inodoro').css("display","none")
        $('#div_eh_exclu_sanitaria').css("display","none")
        $('#div_eh_group_lavadero').css("display","none")

        $("input[name='eh_ubi_sanitaria']").prop("checked", false);
        $('#eh_n_inodoro').val("")
        $("input[name='eh_exclu_sanitaria']").prop("checked", false);
        $("input[name='eh_group_lavadero']").prop('checked', false);
        
    }else{
        $('#div_eh_ubi_sanitaria').css("display","")
        $('#div_eh_n_inodoro').css("display","")
        $('#div_eh_exclu_sanitaria').css("display","")
        $('#div_eh_group_lavadero').css("display","")
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

//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}
