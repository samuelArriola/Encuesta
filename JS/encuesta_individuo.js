console.log('Conectada a encuesta individuo.js');




$('#ei_guardar').click( (e)=>{
  e.preventDefault();   
  const data = {
    E3P4 :  $('input[name=ci_p_jefe_hogar]:checked').val() ,
    fec_naci : $('#ci_fec_naci').val(),

    E3P6 :  $('input[name=ci_sexo]:checked').val(), 
    E3P6_1 :  $('input[name=ed_pref_sexo]:checked').val(), 
    E3P6_2:  $('input[name=ed_reco_sexo]:checked').val(), 

    E3P7:  $('input[name=eg_nacionalidad]:checked').val(),

    E3P8 : $('input[name=eig_group_sisben]:checked').val() ? $('input[name=eig_group_sisben]:checked').val() : 'No aplica' ,
    E3P8_PUN : $('input[name=eig_group_sisben_nivel]:checked').val() ? $('input[name=eig_group_sisben_nivel]:checked').val() : 'No aplica', 

    E3P9 : $('input[name=eig_group_afectacion]:checked').val() ? $('input[name=eig_group_afectacion]:checked').val() : 'No aplica', 

    E3P10: $('input[name=ei_group_conflicto_i]:checked').val() ? $('input[name=ei_group_conflicto_i]:checked').val() : 'No aplica', 
    E3P10_1 : $('input[name=eig_p10_1]:checked').val() ? $('input[name=eig_p10_1]:checked').val() : 'No aplica', 
    E3P10_2 : $('input[name=eig_p10_2]:checked').val() ? $('input[name=eig_p10_2]:checked').val() : 'No aplica',
    E3P10_3 : $('input[name=eig_p10_3]:checked').val() ? $('input[name=eig_p10_3]:checked').val() : 'No aplica', 
    E3P10_4 : $('input[name=eig_p10_4]:checked').val() ? $('input[name=eig_p10_4]:checked').val() : 'No aplica', 
    E3P10_5 : $('input[name=eig_p10_5]:checked').val() ? $('input[name=eig_p10_5]:checked').val() : 'No aplica', 
    E3P10_6 : $('input[name=eig_p10_6]:checked').val() ? $('input[name=eig_p10_6]:checked').val() : 'No aplica', 
    E3P10_7 : $('input[name=eig_p10_7]:checked').val() ? $('input[name=eig_p10_7]:checked').val() : 'No aplica', 
    E3P10_8 : $('input[name=eig_p10_8]:checked').val() ? $('input[name=eig_p10_8]:checked').val() : 'No aplica', 
    E3P10_9 : $('input[name=eig_p10_9]:checked').val() ? $('input[name=eig_p10_9]:checked').val() : 'No aplica', 
    E3P10_10 : $('input[name=eig_p10_10]:checked').val() ? $('input[name=eig_p10_10]:checked').val() : 'No aplica', 
    E3P10_11 : $('input[name=eig_p10_11]:checked').val() ? $('input[name=eig_p10_11]:checked').val() : 'No aplica', 
    E3P10_12 : $('input[name=eig_p10_12]:checked').val() ? $('input[name=eig_p10_12]:checked').val() : 'No aplica', 

    E3P11_VID : $('#E3P11_VID').val() ? $('#E3P11_VID').val() : 'No aplica', 
    E3P11_ING : $('#E3P11_ING').val() ? $('#E3P11_ING').val() : 'No aplica', 
    E3P11_SAL : $('#E3P11_SAL').val() ? $('#E3P11_SAL').val() : 'No aplica', 
    E3P11_SEG : $('#E3P11_SEG').val() ? $('#E3P11_SEG').val() : 'No aplica', 
    E3P11_TRA : $('#E3P11_TRA').val() ? $('#E3P11_TRA').val() : 'No aplica', 
    E3P11_TIE : $('#E3P11_TIE').val() ? $('#E3P11_TIE').val() : 'No aplica',

    E3P12 : $('#E3P12').val() ? $('#E3P12').val() : 'No aplica',
    id_indi: $('#id_indi').val(),

  }

  console.log(data);

  if (isEmpty(data.E3P4)) {
      return M.toast({ html: 'Pregunta 4 Vacía, por favor complete todos los campos',  classes: 'rounded' });
  } else if (isEmpty(data.fec_naci)) {
      return M.toast({ html: 'Fecha de nacimiento vacío, por favor complete el campo', classes: 'rounded' });
  } else if (isEmpty(data.E3P6)) {
      return M.toast({ html: 'Pregunta 6 vacío, por favor complete el campo', classes: 'rounded' });
  }else if(isEmpty(data.E3P6_1)){
      return M.toast({ html: 'Pregunta 6.1 vacío, por favor complete el campo', classes: 'rounded' });
  }else if(isEmpty(data.E3P6_2)){
      return M.toast({ html: 'Pregunta 6.2 vacío, por favor complete el campo', classes: 'rounded' });
  }else if(isEmpty(data.E3P7)){
      return M.toast({ html: 'Pregunta 7 vacío, por favor complete el campo', classes: 'rounded' });
  }else if(isEmpty(data.id_indi)){
      return M.toast({ html: 'ID individuo no encontrado, por favor complete el campo', classes: 'rounded' });
  }else {
      $.ajax({
          type: "POST",
          url: "../Database/ei_create.php",
          data: data,
          success: function(response) {
              M.toast({ html: response, classes: 'rounded' });
              $('#ei_form')[0].reset(); //limpia las casjas de texto
              window.history.go(-1);

          }
      });
  }


})
//------------------------- ENCUESTA GENERAL -----------------------------------------------//


//Mostrar las alternativas de Sisben
$("input[name='eig_group_sisben']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eig_group_sisben_nivel').css("display","")
  }else{
    $('#div_eig_group_sisben_nivel').css("display","none")
    $("input[name='eig_group_sisben_nivel']").prop('checked', false);

  }
});

//Mostrar las alternativas de conflicto armado pre 10
$("input[name='ei_group_conflicto_i']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eig_p10_1').css("display","")
  }else{
    $('#div_eig_p10_1').css("display","none")
    alt10();
  }
});

//Mostrar bifurcación de nacionalidad 
$("input[name='eg_nacionalidad']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "VEN"){
    $('#ei_salud').css("display","none")
    $('#ei_educación').css("display","none")
    $('#ei_trabajo').css("display","none")
  }else{
    $('#ei_salud').css("display","")
    $('#ei_educación').css("display","")
    $('#ei_trabajo').css("display","")
  }
});




//limpia variantes de la pregunta 10
let alt10 = ()=>{
  $("input[name='eig_p10_1']").prop('checked', false);
  $("input[name='eig_p10_2']").prop('checked', false);
  $("input[name='eig_p10_3']").prop('checked', false);
  $("input[name='eig_p10_4']").prop('checked', false);
  $("input[name='eig_p10_5']").prop('checked', false);
  $("input[name='eig_p10_6']").prop('checked', false);
  $("input[name='eig_p10_7']").prop('checked', false);
  $("input[name='eig_p10_8']").prop('checked', false);
  $("input[name='eig_p10_9']").prop('checked', false);
  $("input[name='eig_p10_10']").prop('checked', false);
  $("input[name='eig_p10_11']").prop('checked', false);
  $("input[name='eig_p10_12']").prop('checked', false);
}

//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}


function validarNumero(input, longitu = 2) {
    if (input.value.length > longitu) {
      input.value = input.value.slice(0, longitu);
    }
}