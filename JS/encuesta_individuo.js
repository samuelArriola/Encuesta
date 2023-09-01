console.log('Conectada a encuesta individuo.js');




$('#ei_guardar').click( (e)=>{
  e.preventDefault();   
  const data = {
    E3P4 :  $('input[name=ci_p_jefe_hogar]:checked').val() ? $('input[name=ci_p_jefe_hogar]:checked').val(): 'No aplica' ,
    fec_naci : $('#ci_fec_naci').val(),

    E3P6 :  $('input[name=ci_sexo]:checked').val() ? $('input[name=ci_sexo]:checked').val() : 'No aplica', 
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

    E3SP1:  $('input[name=eis_p1]:checked').val() ? $('input[name=eis_p1]:checked').val() : 'No aplica',
    E3SP2:  $('input[name=eis_p2]:checked').val() ? $('input[name=eis_p2]:checked').val() : 'No aplica',
    E3SP3:  $('input[name=eis_p3]:checked').val() ? $('input[name=eis_p3]:checked').val() : 'No aplica',
    E3SP4:  $('input[name=eis_p4]:checked').val() ? $('input[name=eis_p4]:checked').val() : 'No aplica',
    E3SP5:  $('input[name=eis_p5]:checked').val() ? $('input[name=eis_p5]:checked').val() : 'No aplica',
    E3SP6:  $('input[name=eis_p6]:checked').val() ? $('input[name=eis_p6]:checked').val() : 'No aplica',
    E3SP7:  $('input[name=eis_p7]:checked').val() ? $('input[name=eis_p7]:checked').val() : 'No aplica',
    E3SP8:  $('input[name=eis_p8]:checked').val() ? $('input[name=eis_p8]:checked').val() : 'No aplica',
    
    E3SP9_1:  $('input[name=eis_p9_1]:checked').val() ? $('input[name=eis_p9_1]:checked').val() : 'No aplica',
    E3SP9_2:  $('input[name=eis_p9_2]:checked').val() ? $('input[name=eis_p9_2]:checked').val() : 'No aplica',
    E3SP9_3:  $('input[name=eis_p9_3]:checked').val() ? $('input[name=eis_p9_3]:checked').val() : 'No aplica',
    
    E3SP10_1:  $('input[name=eis_p10_1]:checked').val() ? $('input[name=eis_p10_1]:checked').val() : 'No aplica',
    E3SP10_2:  $('input[name=eis_p10_2]:checked').val() ? $('input[name=eis_p10_2]:checked').val() : 'No aplica',
   
    E3SP11:  $('input[name=eis_p11]:checked').val() ? $('input[name=eis_p11]:checked').val() : 'No aplica',
    E3SP12:  $('input[name=eis_p12]:checked').val() ? $('input[name=eis_p12]:checked').val() : 'No aplica',
   
    E3SP13:  $('input[name=eis_p13]:checked').val() ? $('input[name=eis_p13]:checked').val() : 'No aplica',
    E3SP13_1:  $('input[name=eis_p13_1]:checked').val() ? $('input[name=eis_p13_1]:checked').val() : 'No aplica',
  
    E3SP14:  $('input[name=eis_p14]:checked').val() ? $('input[name=eis_p14]:checked').val() : 'No aplica',
  
    E3SP15_FIS:  $('input[name=FISICA]:checked').val() ? $('input[name=FISICA]:checked').val() : 'No aplica',
    E3SP15_AUD:  $('input[name=AUD]:checked').val() ? $('input[name=AUD]:checked').val() : 'No aplica',
    E3SP15_VIS:  $('input[name=Visual]:checked').val() ? $('input[name=Visual]:checked').val() : 'No aplica',
    E3SP15_COG:  $('input[name=COG]:checked').val() ? $('input[name=COG]:checked').val() : 'No aplica',
    E3SP15_PSI:  $('input[name=Psicosocial]:checked').val() ? $('input[name=Psicosocial]:checked').val() : 'No aplica',
    E3SP15_MUL:  $('input[name=MUL]:checked').val() ? $('input[name=MUL]:checked').val() : 'No aplica',
    E3SP15_SOR:  $('input[name=Sordoceguera]:checked').val() ? $('input[name=Sordoceguera]:checked').val() : 'No aplica',
    
    E3SP16_1:  $('#eis_p16_1').val() ? $('#eis_p16_1').val() : 'No aplica',
    E3SP16_2:  $('#eis_p16_2').val() ? $('#eis_p16_2').val() : 'No aplica',
    E3SP16_3:  $('#eis_p16_3').val() ? $('#eis_p16_3').val() : 'No aplica',
    E3SP16_4:  $('#eis_p16_4').val() ? $('#eis_p16_4').val() : 'No aplica',
    E3SP16_5:  $('#eis_p16_5').val() ? $('#eis_p16_5').val() : 'No aplica',
    E3SP16_6:  $('#eis_p16_6').val() ? $('#eis_p16_6').val() : 'No aplica',
    E3SP16_7:  $('#eis_p16_7').val() ? $('#eis_p16_7').val() : 'No aplica',
    E3SP16_8:  $('#eis_p16_8').val() ? $('#eis_p16_8').val() : 'No aplica',
    
    Obs1: $('#eis_pObs1').val() ? $('#eis_pObs1').val() : 'No aplica',
    
    E3SP16_8:  $('#eis_p16_8').val() ? $('#eis_p16_8').val() : 'No aplica',
    
    E3SP17:  $('input[name=eis_p17]:checked').val() ? $('input[name=eis_p17]:checked').val() : 'No aplica',
    E3SP17_1:   $('#_eis_p17_1').val() ? $('#_eis_p17_1').val() : 'No aplica',
    E3SP17_2:   $('#_eis_p17_2').val() ? $('#_eis_p17_2').val() : 'No aplica',
    Obs1: $('#eis_pObs1').val() ? $('#eis_pObs1').val() : 'No aplica',
    
    E3SP18:  $('input[name=eis_p18]:checked').val() ? $('input[name=eis_p18]:checked').val() : 'No aplica',
    E3SP18_1:  $('input[name=eis_p18_1]:checked').val() ? $('input[name=eis_p18_1]:checked').val() : 'No aplica',
    
    E3SP19:  $('input[name=eis_p19]:checked').val() ? $('input[name=eis_p19]:checked').val() : 'No aplica',
    E3SP20:  $('input[name=eis_p20]:checked').val() ? $('input[name=eis_p20]:checked').val() : 'No aplica',
    
    Obs2: $('#eis_pOb2').val() ? $('#eis_pOb2').val() : 'No aplica',
    
    eie_p1: $('input[name=eie_p1]:checked').val() ? $('input[name=eie_p1]:checked').val() : 'No aplica' ,
    eie_p2: $('input[name=eie_p2]:checked').val() ? $('input[name=eie_p2]:checked').val() : 'No aplica' ,
    eie_p2_1: $('input[name=eie_p2_1]:checked').val() ? $('input[name=eie_p2_1]:checked').val() : 'No aplica' ,
    eie_p3: $('input[name=eie_p3]:checked').val() ? $('input[name=eie_p3]:checked').val() : 'No aplica' ,
    eie_p4: $('input[name=eie_p4]:checked').val() ? $('input[name=eie_p4]:checked').val() : 'No aplica' ,
    eie_p5: $('input[name=eie_p5]:checked').val() ? $('input[name=eie_p5]:checked').val() : 'No aplica' ,
    eie_p6: $('input[name=eie_p6]:checked').val() ? $('input[name=eie_p6]:checked').val() : 'No aplica' ,
    eie_p7: $('#eie_p7').val() ? $('#eie_p7').val() : 'No aplica' ,   

    EIT_P1: $('input[name=eit_p1]:checked').val() ? $('input[name=eit_p1]:checked').val() : 'No aplica' ,
    EIT_P2: $('input[name=eit_p2]:checked').val() ? $('input[name=eit_p2]:checked').val() : 'No aplica' ,
    EIT_P3: $('input[name=eit_p3]:checked').val() ? $('input[name=eit_p3]:checked').val() : 'No aplica' ,
    EIT_P4: $('input[name=eit_p4]:checked').val() ? $('input[name=eit_p4]:checked').val() : 'No aplica' ,
    EIT_P5: $('input[name=eit_p5]:checked').val() ? $('input[name=eit_p5]:checked').val() : 'No aplica' ,
    EIT_P6: $('input[name=eit_p6]:checked').val() ? $('input[name=eit_p6]:checked').val() : 'No aplica' ,
    EIT_P7: $('input[name=eit_p7]:checked').val() ? $('input[name=eit_p7]:checked').val() : 'No aplica' ,
    
    EIT_P8_1: $('input[name=eit_p8_1]:checked').val() ? $('input[name=eit_p8_1]:checked').val() : 'No aplica' ,
    EIT_P8_2: $('input[name=eit_p8_2]:checked').val() ? $('input[name=eit_p8_2]:checked').val() : 'No aplica' ,
    EIT_P8_3: $('input[name=eit_p8_3]:checked').val() ? $('input[name=eit_p8_3]:checked').val() : 'No aplica' ,
    EIT_P8_4: $('input[name=eit_p8_4]:checked').val() ? $('input[name=eit_p8_4]:checked').val() : 'No aplica' ,
    EIT_P8_5: $('input[name=eit_p8_5]:checked').val() ? $('input[name=eit_p8_5]:checked').val() : 'No aplica' ,
    EIT_P8_6: $('input[name=eit_p8_6]:checked').val() ? $('input[name=eit_p8_6]:checked').val() : 'No aplica' ,
    EIT_P8_7: $('input[name=eit_p8_7]:checked').val() ? $('input[name=eit_p8_7]:checked').val() : 'No aplica' ,
   
    EIT_P9_1: $('input[name=eit_p9_1]:checked').val() ? $('input[name=eit_p9_1]:checked').val() : 'No aplica' ,
    EIT_P9_2: $('input[name=eit_p9_2]:checked').val() ? $('input[name=eit_p9_2]:checked').val() : 'No aplica' ,

    EIT_P10: $('input[name=eit_p10]:checked').val() ? $('input[name=eit_p10]:checked').val() : 'No aplica' ,
    EIT_P11: $('input[name=eit_p11]:checked').val() ? $('input[name=eit_p11]:checked').val() : 'No aplica' ,
    EIT_P12: $('input[name=eit_p12]:checked').val() ? $('input[name=eit_p12]:checked').val() : 'No aplica' ,
    EIT_P13: $('input[name=eit_p13]:checked').val() ? $('input[name=eit_p13]:checked').val() : 'No aplica' ,
    EIT_P14: $("#eit_p14").val() ? $("#eit_p14").val() : 'No aplica' ,
    EIT_P15: $('input[name=eit_p15]:checked').val() ? $('input[name=eit_p15]:checked').val() : 'No aplica' ,
    EIT_P16: $("#eit_p16").val() ? $("#eit_p16").val() : 'No aplica' ,
    
    EIT_P17: $('input[name=eit_p17]:checked').val() ? $('input[name=eit_p17]:checked').val() : 'No aplica' ,
    EIT_P17_1: $('#eit_p17_1').val() ? $('#eit_p17_1').val() : 'No aplica' ,
    
    EIT_P18: $('input[name=eit_p18]:checked').val() ? $('input[name=eit_p18]:checked').val() : 'No aplica' ,
    EIT_P18_1: $('#eit_p18_1').val() ? $('#eit_p18_1').val() : 'No aplica' ,
    
    EIT_P19: $('input[name=eit_p19]:checked').val() ? $('input[name=eit_p19]:checked').val() : 'No aplica' ,
    EIT_P19_1: $('#eit_p19_1').val() ? $('#eit_p19_1').val() : 'No aplica' ,
    
    EIT_P20: $('input[name=eit_p20]:checked').val() ? $('input[name=eit_p20]:checked').val() : 'No aplica' ,
    EIT_P20_1: $('#eit_p20_1').val() ? $('#eit_p20_1').val() : 'No aplica' ,
    
    EIT_P21: $('input[name=eit_p21]:checked').val() ? $('input[name=eit_p21]:checked').val() : 'No aplica' ,
    EIT_P21_1: $('#eit_p21_1').val() ? $('#eit_p21_1').val() : 'No aplica' ,
    EIT_PObs: $('#EIT_PObs').val() ? $('#EIT_PObs').val() : 'No aplica' ,
    
    EIM_P1: $('input[name=EIM_P1]:checked').val() ? $('input[name=EIM_P1]:checked').val() : 'No aplica' ,
    EIM_P2: $('input[name=EIM_P2]:checked').val() ? $('input[name=EIM_P2]:checked').val() : 'No aplica' ,
    EIM_P3: $('input[name=EIM_P3]:checked').val() ? $('input[name=EIM_P3]:checked').val() : 'No aplica' ,
    EIM_P4: $('input[name=EIM_P4]:checked').val() ? $('input[name=EIM_P4]:checked').val() : 'No aplica' ,
    EIM_P5: $('input[name=EIM_P5]:checked').val() ? $('input[name=EIM_P5]:checked').val() : 'No aplica' ,
    EIM_P6: $('input[name=EIM_P6]:checked').val() ? $('input[name=EIM_P6]:checked').val() : 'No aplica' ,
    EIM_P7: $('input[name=EIM_P7]:checked').val() ? $('input[name=EIM_P7]:checked').val() : 'No aplica' ,
    
    EIM_P8_1: $('input[name=EIM_P8_1]:checked').val() ? $('input[name=EIM_P8_1]:checked').val() : 'No aplica' ,
    EIM_P8_2: $('input[name=EIM_P8_2]:checked').val() ? $('input[name=EIM_P8_2]:checked').val() : 'No aplica' ,
    EIM_P8_3: $('input[name=EIM_P8_3]:checked').val() ? $('input[name=EIM_P8_3]:checked').val() : 'No aplica' ,
    EIM_P8_4: $('input[name=EIM_P8_4]:checked').val() ? $('input[name=EIM_P8_4]:checked').val() : 'No aplica' ,
    EIM_P8_5: $('input[name=EIM_P8_5]:checked').val() ? $('input[name=EIM_P8_5]:checked').val() : 'No aplica' ,
    EIM_P8_6: $('input[name=EIM_P8_6]:checked').val() ? $('input[name=EIM_P8_6]:checked').val() : 'No aplica' ,
    EIM_P8_7: $('input[name=EIM_P8_7]:checked').val() ? $('input[name=EIM_P8_7]:checked').val() : 'No aplica' ,
    EIM_P8_8: $('input[name=EIM_P8_8]:checked').val() ? $('input[name=EIM_P8_8]:checked').val() : 'No aplica' ,
    EIM_P8_9: $('input[name=EIM_P8_9]:checked').val() ? $('input[name=EIM_P8_9]:checked').val() : 'No aplica' ,
    EIM_P8_10: $('input[name=EIM_P8_10]:checked').val() ? $('input[name=EIM_P8_10]:checked').val() : 'No aplica' ,
    EIM_P8_11: $('input[name=EIM_P8_11]:checked').val() ? $('input[name=EIM_P8_11]:checked').val() : 'No aplica' ,
    
    EIM_P9: $('input[name=EIM_P9]:checked').val() ? $('input[name=EIM_P9]:checked').val() : 'No aplica' ,
    EIM_P10: $('input[name=EIM_P10]:checked').val() ? $('input[name=EIM_P10]:checked').val() : 'No aplica' ,
    EIM_P11: $('input[name=EIM_P11]:checked').val() ? $('input[name=EIM_P11]:checked').val() : 'No aplica' ,
    EIM_P12: $('input[name=EIM_P12]:checked').val() ? $('input[name=EIM_P12]:checked').val() : 'No aplica' ,
    EIM_P13: $('input[name=EIM_P13]:checked').val() ? $('input[name=EIM_P13]:checked').val() : 'No aplica' ,
    EIM_P14: $('input[name=EIM_P14]:checked').val() ? $('input[name=EIM_P14]:checked').val() : 'No aplica' ,
    EIM_P15: $('input[name=EIM_P15]:checked').val() ? $('input[name=EIM_P15]:checked').val() : 'No aplica' ,

    id_indi: $('#id_indi').val(),
  }

  console.log(data);

 /*  if (isEmpty(data.E3P4)) {
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
 */


  $.ajax({
    type: "POST",
    url: "../Database/ei_create.php",
    data: data,
    success: function(response) {
        M.toast({ html: response, classes: 'rounded' });
        console.log(response);
        /* $('#ei_form')[0].reset(); //limpia las casjas de texto
        window.history.go(-1); */

    }
});


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
    $('#ei_migrante').css("display","")
  }else{
    $('#ei_migrante').css("display","none")
   
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

//------------------------- ENCUESTA SALUD -----------------------------------------------//

//Mostrar bifurcación de nacionalidad 
$("input[name='eis_p1']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eis_p2').css("display","none");
  }else if(opcionSeleccionada === 'No Sabe'){
    $('#div_eis_p2').css("display","none");
    $('#div_eis_p3').css("display","none");
    $('#div_eis_p4').css("display","none");
  }else{
    $('#div_eis_p2').css("display","");
    $('#div_eis_p3').css("display","");
    $('#div_eis_p4').css("display","");
  }
});

//Mostrar bifurcación de Pregumta #3 
$("input[name='eis_p3']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === 'No Sabe' || opcionSeleccionada === 'Subsidiado'){
    $('#div_eis_p4').css("display","none");
  }else{
    $('#div_eis_p4').css("display","");
  }
});

//Mostrar bifurcación de Pregumta #7 
$("input[name='eis_p7']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === 'No' || opcionSeleccionada === 'Subsidiado'){
    $('#div_eis_p8').css("display","none");
  }else{
    $('#div_eis_p8').css("display","");
  }
});

//Mostrar bifurcación de Pregumta #11
$("input[name='eis_p11']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === 'No' ){
    $('#div_eis_p12').css("display","none");
    $('#div_eis_p12').css("display","none");
  }else{
    $('#div_eis_p12').css("display","");
    $('#div_eis_p12').css("display","");
  }
});

//Mostrar bifurcación de Pregumta #12
$("input[name='eis_p12']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === 'Acudió a Ia entidad de seguridad social en salud de la cual es afiliado(a)'){
    $('#div_eis_p13').css("display","");
  }else{
    $('#div_eis_p13').css("display","none");
  }
});


//Mostrar las alternativas Pregunta #13
$("input[name='eis_p13']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eis_p13_1').css("display","")
  }else{
    $('#div_eis_p13_1').css("display","none")
    $("input[name='eis_p13_1']").prop('checked', false);
  }
});

//Mostrar las alternativas Pregunta #14
$("input[name='eis_p14']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "No"){
    $('#div_eis_p15').css("display","none")
    $('#div_eis_p16').css("display","none")
    resetalt16()
    resetalt15() 
    
  }else if (opcionSeleccionada === 'No Sabe') {
    $('#div_eis_p15').css("display","none")
    $('#div_eis_p16').css("display","")
    resetalt15() 

  } else{
    $('#div_eis_p15').css("display","")
    $('#div_eis_p16').css("display","")
   
    
   }
});

let  resetalt15 = ()=>{
  $("input[name='FISICA']").prop('checked', false);
  $("input[name='AUD']").prop('checked', false);
  $("input[name='Visual']").prop('checked', false);
  $("input[name='COG']").prop('checked', false);
  $("input[name='Psicosocial']").prop('checked', false);
  $("input[name='MUL']").prop('checked', false);
  $("input[name='Sordoceguera']").prop('checked', false);
}

let  resetalt16 = ()=>{
  $("#eis_p16_1")[0].reset();
  $("#eis_p16_2")[0].reset();
  $("#eis_p16_3")[0].reset();
  $("#eis_p16_4")[0].reset();
  $("#eis_p16_5")[0].reset();
  $("#eis_p16_6")[0].reset();
  $("#eis_p16_7")[0].reset();
  $("#eis_p16_8")[0].reset(); 
}


//Mostrar las alternativas Pregunta #17
$("input[name='eis_p17']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eis_p17_1').css("display","")
  }else{
    $('#div_eis_p17_1').css("display","none")
    $("#_eis_p17_1").val(""); 
    $("#_eis_p17_2").val(""); 
  }
});

//Mostrar las alternativas Pregunta #18
$("input[name='eis_p18']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eis_p18_1').css("display","")
  }else{
    $('#div_eis_p18_1').css("display","none")
    $("input[name='eis_p18_1']").prop('checked', false);
  }
});

//------------------------- ENCUESTA EDUCACIÓN -----------------------------------------------//


//Mostrar las alternativas Pregunta #2
$("input[name='eie_p2']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eie_p2_1').css("display","")
  }else{
    $('#div_eie_p2_1').css("display","none")
    $("input[name='eie_p2_1']").prop('checked', false);
  }
});

//Mostrar las alternativas Pregunta #4
$("input[name='eie_p4']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  console.log(opcionSeleccionada);
  if(opcionSeleccionada === "Ninguno"){
    $('#div_eie_p6').css("display","none")
    $('#div_eie_p5').css("display","none")
    $('#div_eie_p7').css("display","none")
    $("input[name='eie_p5']").prop('checked', false);
    $("input[name='eie_p6']").prop('checked', false);
    $("#eie_p7").val("");
  }else{
    $('#div_eie_p5').css("display","")
    $('#div_eie_p6').css("display","")
    $('#div_eie_p7').css("display","")
  }
});

//Mostrar las alternativas Pregunta #5
$("input[name='eie_p5']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  console.log(opcionSeleccionada);
  if(opcionSeleccionada === "Ninguno"){
    $('#div_eie_p6').css("display","none")
    $('#div_eie_p7').css("display","none")
    $("input[name='eie_p6']").prop('checked', false);
    $("#eie_p7").val("");
  }else{
    $('#div_eie_p6').css("display","")
    $('#div_eie_p7').css("display","")
  }
});

//Mostrar las alternativas Pregunta #6
$("input[name='eie_p6']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  console.log(opcionSeleccionada);
  if(opcionSeleccionada === "No" || opcionSeleccionada === "No Sabe"){
    $('#div_eie_p7').css("display","none")
    $("#eie_p7").val("");
  }else{
    $('#div_eie_p7').css("display","")
  }
});

//------------------------- FUERZA DE TRABAJO -----------------------------------------------//

//Mostrar las alternativas Pregunta #1
$("input[name='eit_p1']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  console.log(opcionSeleccionada);
  if(opcionSeleccionada === "Trabajando" ){
    reset_eietp2();
    
  }else if(opcionSeleccionada === 'Incapacitado Permanente para Trabajar'){
    rese_eitp();
  }else{
    reset_eietp2();
    $('#div_eit_p2').css("display","none")
    $('#div_eit_p3').css("display","none")
    $("input[name='eit_p2']").prop('checked', false);
    $("input[name='eit_p3']").prop('checked', false);
  }

});

let reset_eietp2 = ()=>{
  $('#div_eit_p2').css("display","")
  $('#div_eit_p3').css("display","")
  $('#div_eit_p4').css("display","")
  $('#div_eit_p5').css("display","")
  $('#div_eit_p6').css("display","")
  $('#div_eit_p7').css("display","")
  $('#div_eit_p8').css("display","")
  $('#div_eit_p9').css("display","")
  $('#div_eit_p10').css("display","")
  $('#div_eit_p11').css("display","")
  $('#div_eit_p12').css("display","")
  $('#div_eit_p13').css("display","")
  $('#div_eit_p14').css("display","")
  $('#div_eit_p15').css("display","")
  $('#div_eit_p16').css("display","")
  $('#div_eit_p17').css("display","")
  $('#div_eit_p18').css("display","")
  $('#div_eit_p19').css("display","")
  $('#div_eit_p20').css("display","")
  $('#div_eit_p21').css("display","")
}

let rese_eitp = ()=>{
  $('#div_eit_p2').css("display","none")
  $('#div_eit_p3').css("display","none")
  $('#div_eit_p4').css("display","none")
  $('#div_eit_p5').css("display","none")
  $('#div_eit_p6').css("display","none")
  $('#div_eit_p7').css("display","none")
  $('#div_eit_p8').css("display","none")
  $('#div_eit_p9').css("display","none")
  $('#div_eit_p10').css("display","none")
  $('#div_eit_p11').css("display","none")
  $('#div_eit_p12').css("display","none")
  $('#div_eit_p13').css("display","none")
  $('#div_eit_p14').css("display","none")
  $('#div_eit_p15').css("display","none")
  $('#div_eit_p16').css("display","none")
  $('#div_eit_p17').css("display","none")
  $('#div_eit_p18').css("display","none")
  $('#div_eit_p19').css("display","none")
  $('#div_eit_p20').css("display","none")
  
  $("input[name='eit_p2']").prop('checked', false);
  $("input[name='eit_p3']").prop('checked', false);
  $("input[name='eit_p4']").prop('checked', false);
  $("input[name='eit_p5']").prop('checked', false);
  $("input[name='eit_p6']").prop('checked', false);
  $("input[name='eit_p7']").prop('checked', false);
  
  $("input[name='eit_p8_1']").prop('checked', false);
  $("input[name='eit_p8_2']").prop('checked', false);
  $("input[name='eit_p8_3']").prop('checked', false);
  $("input[name='eit_p8_4']").prop('checked', false);
  $("input[name='eit_p8_5']").prop('checked', false);
  $("input[name='eit_p8_6']").prop('checked', false);
  $("input[name='eit_p8_7']").prop('checked', false);

  $("input[name='eit_p9_1']").prop('checked', false);
  $("input[name='eit_p9_2']").prop('checked', false);

  $("input[name='eit_p10']").prop('checked', false);
  $("input[name='eit_p11']").prop('checked', false);
  $("input[name='eit_p12']").prop('checked', false);
  $("input[name='eit_p13']").prop('checked', false);
  $("input[name='eit_p14']").prop('checked', false);
  $("input[name='eit_p15']").prop('checked', false);
  $("input[name='eit_p16']").prop('checked', false);
  
  $("input[name='eit_p17']").prop('checked', false);
  $("#eit_p17_1").val("");
  
  $("input[name='eit_p18']").prop('checked', false);
  $("#eit_p18_1").val("");
  
  $("input[name='eit_p19']").prop('checked', false);
  $("#eit_p19_1").val("");

  $("input[name='eit_p120']").prop('checked', false);
  $("#eit_p20_1").val("");

}

//Mostrar las alternativas Pregunta #2
$("input[name='eit_p2']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eit_p3').css("display","none")
    $('#div_eit_p4').css("display","none")
    $('#div_eit_p5').css("display","none")
    $('#div_eit_p6').css("display","none")
    $('#div_eit_p7').css("display","none")
    $('#div_eit_p8').css("display","none")
    $('#div_eit_p9').css("display","none")
    $('#div_eit_p10').css("display","none")
    $("input[name='eit_p3']").prop('checked', false);
    $("input[name='eit_p4']").prop('checked', false);
    $("input[name='eit_p5']").prop('checked', false);
    $("input[name='eit_p6']").prop('checked', false);
    $("input[name='eit_p7']").prop('checked', false);

    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);

    $("input[name='eit_p9_1']").prop('checked', false);
    $("input[name='eit_p9_2']").prop('checked', false);

    $("input[name='eit_p10']").prop('checked', false);
  }else{
    $('#div_eit_p3').css("display","")
    $('#div_eit_p4').css("display","")
    $('#div_eit_p5').css("display","")
    $('#div_eit_p6').css("display","")
    $('#div_eit_p7').css("display","")
    $('#div_eit_p8').css("display","")
    $('#div_eit_p9').css("display","")
    $('#div_eit_p10').css("display","")
  }
});

//Mostrar las alternativas Pregunta #3
$("input[name='eit_p3']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eit_p4').css("display","none")
    $('#div_eit_p5').css("display","none")
    $('#div_eit_p6').css("display","none")
    $('#div_eit_p7').css("display","none")
    $('#div_eit_p8').css("display","none")
    $('#div_eit_p9').css("display","none")
    $('#div_eit_p10').css("display","none")
    $("input[name='eit_p4']").prop('checked', false);
    $("input[name='eit_p5']").prop('checked', false);
    $("input[name='eit_p6']").prop('checked', false);
    $("input[name='eit_p7']").prop('checked', false);
    $("input[name='eit_p8']").prop('checked', false);
    $("input[name='eit_p9']").prop('checked', false);
    $("input[name='eit_p10']").prop('checked', false);
  }else{
    $('#div_eit_p4').css("display","")
    $('#div_eit_p5').css("display","")
    $('#div_eit_p6').css("display","")
    $('#div_eit_p7').css("display","")
    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);

    $("input[name='eit_p9_1']").prop('checked', false);
    $("input[name='eit_p9_2']").prop('checked', false);

    $('#div_eit_p10').css("display","")
  }
});

//Mostrar las alternativas Pregunta #4
$("input[name='eit_p4']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si"){
    $('#div_eit_p5').css("display","none")
    $('#div_eit_p6').css("display","none")
    $('#div_eit_p7').css("display","none")
    $('#div_eit_p8').css("display","none")
    $('#div_eit_p9').css("display","none")
    $('#div_eit_p10').css("display","none")
    $("input[name='eit_p5']").prop('checked', false);
    $("input[name='eit_p6']").prop('checked', false);
    $("input[name='eit_p7']").prop('checked', false);
    $("input[name='eit_p8']").prop('checked', false);
    $("input[name='eit_p9']").prop('checked', false);
    $("input[name='eit_p10']").prop('checked', false);
  }else{
    $('#div_eit_p5').css("display","")
    $('#div_eit_p6').css("display","")
    $('#div_eit_p7').css("display","")
    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);
  
    $("input[name='eit_p9_1']").prop('checked', false);
    $("input[name='eit_p9_2']").prop('checked', false);
  
    $('#div_eit_p10').css("display","")
  }
});

//Mostrar las alternativas Pregunta #5
$("input[name='eit_p5']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Capacitación" || opcionSeleccionada === "Vacaciones" || opcionSeleccionada === "Festivos" || opcionSeleccionada === "Enfermedad, permiso o licencia"){
    $('#div_eit_p6').css("display","none")
    $('#div_eit_p7').css("display","none")
    $('#div_eit_p8').css("display","none")
    $('#div_eit_p9').css("display","none")
    $('#div_eit_p10').css("display","none")
    $("input[name='eit_p6']").prop('checked', false);
    $("input[name='eit_p7']").prop('checked', false);
    $("input[name='eit_p8']").prop('checked', false);
    $("input[name='eit_p9']").prop('checked', false);
    $("input[name='eit_p10']").prop('checked', false);
  }else{

    $('#div_eit_p6').css("display","")
    $('#div_eit_p7').css("display","")
    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);
  
    $("input[name='eit_p9_1']").prop('checked', false);
    $("input[name='eit_p9_2']").prop('checked', false);
  
    $('#div_eit_p10').css("display","")
  }
});

//Mostrar las alternativas Pregunta #6
$("input[name='eit_p6']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p7').css("display","none")
    $('#div_eit_p8').css("display","none")
    $('#div_eit_p9').css("display","none")
    $('#div_eit_p10').css("display","none")
    $("input[name='eit_p7']").prop('checked', false);
    $("input[name='eit_p8']").prop('checked', false);
    $("input[name='eit_p9']").prop('checked', false);
    $("input[name='eit_p10']").prop('checked', false);
  }else{
    $('#div_eit_p7').css("display","")
    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);
  
    $("input[name='eit_p9_1']").prop('checked', false);
    $("input[name='eit_p9_2']").prop('checked', false);
  
    $('#div_eit_p10').css("display","")
  }
});

//Mostrar las alternativas Pregunta #7
$("input[name='eit_p7']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "No" ){
    $('#div_eit_p8').css("display","none")
    $("input[name='eit_p8_1']").prop('checked', false);
    $("input[name='eit_p8_2']").prop('checked', false);
    $("input[name='eit_p8_3']").prop('checked', false);
    $("input[name='eit_p8_4']").prop('checked', false);
    $("input[name='eit_p8_5']").prop('checked', false);
    $("input[name='eit_p8_6']").prop('checked', false);
    $("input[name='eit_p8_7']").prop('checked', false);
  
  }else{
    $('#div_eit_p8').css("display","")
  }
});

//Mostrar las alternativas Pregunta #11
$("input[name='eit_p11']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "No" ){
    $('#div_eit_p12').css("display","none")
    $('#div_eit_p13').css("display","none")
    $("input[name='eit_p12']").prop('checked', false);
    $("input[name='eit_p13']").prop('checked', false);
  }else{
    $('#div_eit_p12').css("display","")
    $('#div_eit_p13').css("display","")
  }
});

//Mostrar las alternativas Pregunta #12
$("input[name='eit_p12']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Verbal" || opcionSeleccionada === "No sabe" ){
    $('#div_eit_p13').css("display","none")
    $("input[name='eit_p13']").prop('checked', false);
  }else{
    $('#div_eit_p13').css("display","")
  }
});

//Mostrar las alternativas Pregunta #17
$("input[name='eit_p17']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p17_1').css("display","")
  }else{
    $('#div_eit_p17_1').css("display","none")
    $("#eit_p17_1").val("");
  }
}); 

//Mostrar las alternativas Pregunta #18
$("input[name='eit_p18']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p18_1').css("display","")
  }else{
    $('#div_eit_p18_1').css("display","none")
    $("#eit_p18_1").val("");
  }
}); 

//Mostrar las alternativas Pregunta #19
$("input[name='eit_p19']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p19_1').css("display","")
  }else{
    $('#div_eit_p19_1').css("display","none")
    $("#eit_p19_1").val("");
  }
}); 

//Mostrar las alternativas Pregunta #20
$("input[name='eit_p20']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p20_1').css("display","")
  }else{
    $('#div_eit_p20_1').css("display","none")
    $("#eit_p20_1").val("");
  }
}); 

//Mostrar las alternativas Pregunta #21
$("input[name='eit_p21']").click(function() {
  var opcionSeleccionada = $(this).attr('value');
  if(opcionSeleccionada === "Si" ){
    $('#div_eit_p21_1').css("display","")
  }else{
    $('#div_eit_p21_1').css("display","none")
    $("#eit_p21_1").val("");
  }
}); 

//------------------------- FUERZA DE MIGRANTES -----------------------------------------------//


//------------------------- GLOBAL -----------------------------------------------//

//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}


function validarNumero(input, longitu = 2) {
    if (input.value.length > longitu) {
      input.value = input.value.slice(0, longitu);
    }
}