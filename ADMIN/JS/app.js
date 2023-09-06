console.log('conectado a app.js');
let PreRes = [];
//advanced branching
//skip logic
$(document).ready(function() {
    $('.tooltipped').tooltip();

    // $('select').material_select({
    //     isMultiple : true,
    // });
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();

      $('.ci_fec_naci').datepicker({
        format: 'dd/mm/yyyy',
        onOpen: function() {
            var f2 = new Date();
            var y2 = f2.getFullYear();
            var m2 = f2.getMonth();
            var d2 = f2.getDate();
  
             var instance = M.Datepicker.getInstance($('.ci_fec_naci'));
             instance.options.maxDate = new Date(y2, m2, d2);  
  
         },
  
    });   
});
  

//--------------  VIVIENDA ------------------7

// Crear VIVIENDA
$('#ix_crearCasa').click(function(e) {
    e.preventDefault();
    const datos_c = {
            referencia: $('#ix_ref').val(),
        }
    
    if (isEmpty(datos_c.referencia)) {
        return M.toast({ html: 'Referencia de vivienda vacío, por favor complete el campo', classes: 'rounded' });
    } else {
        $.ajax({
            type: "POST",
            url: "Database/v_crear.php",
            data: datos_c,
            success: function(response_e) {
                M.toast({ html: response_e, classes: 'rounded' });
                mostrarVivienda()
                $('#ix_ref').val("")
                $('#modalCrearVivienda').modal('close');

            }
        });
    }

});


 //BUSCAR VIVIENDA
 $('#buscar_vivienda').keyup(function() {
    var buscar = $('#buscar_vivienda').val();
    if (buscar != "") {
        mostrarVivienda(buscar);
    } else {
        mostrarVivienda();
    }
});

mostrarVivienda();

//Motrar Vivienda 
function mostrarVivienda(dat) {
    $.ajax({
        type: "POST",
        url: "Database/v_buscar.php",
        data: { dato: dat },
        dataType: "html"
    })
    .done(function(respuesta) { //done: si el ajax es verdadero, hazme esto es para recibir ... o susses 
        $('#mostrar_vivienda').html(respuesta);
    })
}

//----------------Encuesta Vivienda ----------------------------//
$('#ec_sig_1').click( (e)=>{
    e.preventDefault();
    console.log('haz dadi clic');
        $('#ec_en_1').css("display","none")
        $('#ec_en_2').css("display","")
});

$('#ec_atras_1').click( (e)=>{
    e.preventDefault();
    console.log('haz dadi clic');
        $('#ec_en_1').css("display","")
        $('#ec_en_2').css("display","none")
});



//_----------ENCUETA VIVIENDA  ---------------------/

/*  //Limpia y llena el select
 $("#ec_s1_servicio").change(function() {
     var opcionSeleccionada = $(this).val();
     console.log('HAZ DADO CLICK '+ opcionSeleccionada );
    let res_Select = opcionSeleccionada.indexOf('Ninguno');

    if( res_Select !== -1){
        $('#ec_s1_servicio').val('');
        $('#ec_s1_servicio option:selected').empty();
    }else{
        console.log('NO ES NINGUNO'); 
   }


});

function changeNinguna(e){
  console.log(e) 
}
 */

//Valida caracteres especiale 
let cadena_c = document.querySelectorAll(".caracteresEpesiales");
for (let i = 0; i < cadena_c.length; i++) {
    cadena_c[i].addEventListener('focusout', function(a) {  
        let campo = a.target; //variable.target es similar al this
        let cadena_valor = campo.value;   
        let re = /[%&'"*+^$`{}()|[\]\\]/g;
        let resultado = cadena_valor.replace(re, '');
        campo.value= resultado;
    });  
 }
 

 //GUARDAR PREGUNTAS CON AJAX
/* $('#ec_form').submit(function(e) {

    e.preventDefault();
    console.log('Haz dado click');

    var parametros = $(this).serialize();
   console.log(parametros);
    $.ajax({
        type: "POST",
        url: "Database/ec_guardar.php",
        data: parametros,
        success: function(response) {
            M.toast({ html: response, classes: 'rounded' });
            $('#ec_form')[0].reset(); //limpia las casjas de texto
            // $('#modalCrearFamilias').modal('close');
        }
    });
    
});
 */

 function getRespuesta( ){ 
  
    //OBTENGO EL OBJETO DIV
    let div_ec =[... document.querySelectorAll(".ENCUESTA_VIVIENDA")];
    let respuesta = document.querySelectorAll(".EC_RES");
    let respuestaRadio = document.querySelectorAll('.EC_RES input[type="radio"]');
   /*  for (let i = 0; i < respuesta.length; i++) {
        console.log( respuesta.value );
       
    } */

   /*  respuesta.forEach(elemento => {
        const valor = elemento.value;
        console.log(valor);
        // valoresRespuesta.push(valor);
      });
    
      respuestaRadio.forEach(radio => {
        if (radio.checked) {
            console.log(radio.value);
          }
        // valoresRespuesta.push(valor);
      }); */

      div_ec.forEach(elemento => {
                // console.log(elemento);

                //
                let pregunta  = elemento.querySelector('.EC_PREGUNTA').textContent;
                let respuesta = elemento.querySelector('.EC_RES').value;
                // console.log(elemento.children);
                
                console.log( elemento.querySelector('.EC_RES').value);
                let TemPreRes = {
                   'pregunta' : pregunta,
                   'respuesta' : respuesta,
                   'T_encuesta' : 'ENCUESTA VIVIENDA',
                }
                    
                PreRes.push(TemPreRes);
        // valoresRespuesta.push(valor);
      });
}



//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}
