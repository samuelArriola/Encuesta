console.log('conectado a encuesta_vivienda.js');

$(document).ready(function() {
    $('.tooltipped').tooltip();  
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();



});


//Guardar Encuestas Vivien 

  //GUARDAR USUARIO CON AJAX
  $('#ev_guardar').click(function(e) {
    e.preventDefault();   
  
    var ef_group_problema_sector = [];
    $("input[name='ef_group_problema_sector']:checked").each(function() {
        ef_group_problema_sector.push(($(this).attr("value")));
    });

   
   const datos_v = {
        E1P1: $('input[name=ev_group_tipo_v]:checked').val(),
        E1P2: $('input[name=ev_group_pares_ext]:checked').val(),
        E1P3: $('input[name=ev_group_piso]:checked').val(),

        E1P4_ACU:  $("#ev_inp_estrato_Acu:checked").val() ? $("#ev_inp_estrato_Acu:checked").val() : "No" ,
        E1P4_ACU_EST: $("#ev_estrato_Acu").val() ? $("#ev_estrato_Acu").val() : "No Aplica" ,
        E1P4_ALC: $("#ev_inp_alca:checked").val() ? $("#ev_inp_alca:checked").val() : "No" ,
        E1P4_BAS:  $("#ev_inp_veces_Bas:checked").val() ? $("#ev_inp_veces_Bas:checked").val() : "No" , 
        E1P4_BAS_VEC:  $("#ev_veces_Bas").val() ? $("#ev_veces_Bas").val() : "No Aplica"  ,
        E1P4_ENE:  $("#ev_inp_estarto_ene:checked").val() ? $("#ev_inp_estarto_ene:checked").val() : "No" ,
        E1P4_ENE_EST:  $("#ev_estarto_ene").val() ? $("#ev_estarto_ene").val() : "No Aplica" ,
        E1P4_GAS:  $("#ev_inp_gas:checked").val() ? $("#ev_inp_gas:checked").val() : "No" ,
        E1P4_INT: $("#ev_inp_int:checked").val() ? $("#ev_inp_int:checked").val() : "No" ,
        E1P4_NIN:  $("#ev_group_servicio_ningu:checked").val() ? $("#ev_group_servicio_ningu:checked").val() : "No" ,
        
        E1P5_HUM: $("#E1P5_HUM:checked").val() ? $("#E1P5_HUM:checked").val() : "No" ,
        E1P5_CAL_E: $("#E1P5_CAL_E:checked").val() ? $("#E1P5_CAL_E:checked").val() : "No" ,
        E1P5_MAL_V: $("#E1P5_MAL_V:checked").val() ? $("#E1P5_MAL_V:checked").val() : "No" ,
        E1P5_COC_L: $("#E1P5_COC_L:checked").val() ? $("#E1P5_COC_L:checked").val() : "No" ,
        E1P5_MAL_I: $("#E1P5_MAL_I:checked").val() ? $("#E1P5_MAL_I:checked").val() : "No" ,
        E1P5_COD_D: $("#E1P5_COD_D:checked").val() ? $("#E1P5_COD_D:checked").val() : "No" ,
        E1P5_TAL_NE: $("#E1P5_TAL_NE:checked").val() ? $("#E1P5_TAL_NE:checked").val() : "No" ,
        E1P5_GOT_T: $("#E1P5_GOT_T:checked").val() ? $("#E1P5_GOT_T:checked").val() : "No" ,
        E1P5_GRI_P: $("#E1P5_GRI_P:checked").val() ? $("#E1P5_GRI_P:checked").val() : "No" ,

        E1P6_MON: $("#E1P6_MON:checked").val() ? $("#E1P6_MON:checked").val() : "No" ,
        E1P6_AVE: $("#E1P6_AVE:checked").val() ? $("#E1P6_AVE:checked").val() : "No" ,
        E1P6_GAT: $("#E1P6_GAT:checked").val() ? $("#E1P6_GAT:checked").val() : "No" ,
        E1P6_PER: $("#E1P6_PER:checked").val() ? $("#E1P6_PER:checked").val() : "No" ,
        E1P6_OTR: $("#E1P6_OTR:checked").val() ? $("#E1P6_OTR:checked").val() : "No" ,
        E1P6_NIN: $("#E1P6_NIN:checked").val() ? $("#E1P6_NIN:checked").val() : "No" ,

        E1P7_ADO:  $("#E1P7_ADO:checked").val() ? $("#E1P7_ADO:checked").val() : "No" ,
        E1P7_NEG:  $("#E1P7_NEG:checked").val() ? $("#E1P7_NEG:checked").val() : "No" ,
        E1P7_COM:  $("#E1P7_COM:checked").val() ? $("#E1P7_COM:checked").val() : "No" ,

        E1P8_RUI:$("#E1P8_RUI:checked").val() ? $("#E1P8_RUI:checked").val() : "No" ,
        E1P8_OLO:$("#E1P8_OLO:checked").val() ? $("#E1P8_OLO:checked").val() : "No" ,
        E1P8_BAS:$("#E1P8_BAS:checked").val() ? $("#E1P8_BAS:checked").val() : "No" ,
        E1P8_CON_A:$("#E1P8_CON_A:checked").val() ? $("#E1P8_CON_A:checked").val() : "No" ,
        E1P8_CON_RIO:$("#E1P8_CON_RIO:checked").val() ? $("#E1P8_CON_RIO:checked").val() : "No" ,
        E1P8_INV:$("#E1P8_INV:checked").val() ? $("#E1P8_INV:checked").val() : "No" ,
        E1P8_ANI:$("#E1P8_ANI:checked").val() ? $("#E1P8_ANI:checked").val() : "No" ,
        E1P8_INC:$("#E1P8_INC:checked").val() ? $("#E1P8_INC:checked").val() : "No" ,

        E1P9: $('#ev_grupo_persona').val(),
        id_vivienda: $('#id_vivienda').val(),

       }
       //  console.log(datos_v.nombre_u,datos_v.apellido_u,datos_v.cedula_u,datos_v.correo_u);
       console.log(datos_v);
   if (isEmpty(datos_v.E1P1)) {
       return M.toast({ html: 'Nombre de usuario vacío, por favor complete todos los campos',  classes: 'rounded' });
   } else if (isEmpty(datos_v.E1P2)) {
       return M.toast({ html: 'Apellido de usuario vacío, por favor complete el campo', classes: 'rounded' });
   } else if (isEmpty(datos_v.E1P3)) {
       return M.toast({ html: 'Cedula de usuario vacío, por favor complete el campo', classes: 'rounded' });
   }else if(isEmpty(datos_v.E1P9)){
       return M.toast({ html: 'Tipo de usuario vacío, por favor complete el campo', classes: 'rounded' });
   }else {
       $.ajax({
           type: "POST",
           url: "../Database/ev_create.php",
           data: datos_v,
           success: function(response) {
               M.toast({ html: response, classes: 'rounded' });
              // $('#ev_form')[0].reset(); //limpia las casjas de texto
            //    window.location.href = 'index.php';

           }
       });
   }
});


//Oculto pregunta 6 cundo la pregunta 5 es ninguna
$("input[name='ev_group_animales']").click(function() {
    var opcionSeleccionada = $(this).attr('value');
    if(opcionSeleccionada === "Ninguno"){
        $('#ev_group_razon_animales').css("display","none")
        $("input[name='ev_group_razon_animales']").prop('checked', false);
    }else{
        $('#ev_group_razon_animales').css("display","")
    }
});

//Desmarca el check ninguno cuando se selecciona una opción.
$(":checkbox").on("change", function() {
    if ($(this).is(":checked") && !$(this).hasClass("unselectall")) {
        $("input[name='" + $(this).attr("name") + "'][value='Ninguno']").prop('checked', false);
    }
});

//Mostrar alternativa de acuducto
$("#ev_inp_estrato_Acu").on("change", function() {
    if ($(this).is(":checked") ) {
        $('#ev_div_estrato_Acu').css("display","")
    }else{
        $('#ev_div_estrato_Acu').css("display","none")
    }
});

//Mostrar alternativa de Basuras
$("#ev_inp_veces_Bas").on("change", function() {
    if ($(this).is(":checked")) {
        $('#ev_div_veces_Bas').css("display","")
        
    }else{
        $('#ev_div_veces_Bas').css("display","none")
    }
});

//Mostrar alternativa de Energía
$("#ev_inp_estarto_ene").on("change", function() {
    if ($(this).is(":checked") ) {
        $('#ev_div_estarto_ene').css("display","")
        
    }else{
        $('#ev_div_estarto_ene').css("display","none")
    }
});

//Mostrar alternativa de Energía
$("#ev_group_servicio_ningu").on("change", function() {
    if ($(this).is(":checked") && $(this).attr('value') == "Ninguno" ) {
        quitar_alt();        
    }
});

let quitar_alt = ()=>{
    $('#ev_div_estrato_Acu').css("display","none");
    $('#ev_estarto_ene').val("");
    $('#ev_veces_Bas').val("");
    $('#ev_estrato_Acu').val("")
    $('#ev_div_veces_Bas').css("display","none");
    $('#ev_div_estarto_ene').css("display","none");
}
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
 
 function validarNumero(input) {
    if (input.value.length > 2) {
      input.value = input.value.slice(0, 2);
    }
  }
 
//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}
