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
  
  //GUARDAR USUARIO CON AJAX
  $('#guardar_usuario').click(function(e) {
     e.preventDefault();    

    const datos_u = {
            nombre_u: $('#cu_name').val(),
            apellido_u: $('#cu_last_name').val(),
            cedula_u: $('#cn_iden').val(),
            correo_u: $('#cn_mail').val(),
            pass: $('#cn_pass').val(),
            tipo_u: $('input[name=cu_group_tipo_u]:checked').val()

        }
        //  console.log(datos_u.nombre_u,datos_u.apellido_u,datos_u.cedula_u,datos_u.correo_u);
    if (isEmpty(datos_u.nombre_u)) {
        return M.toast({ html: 'Nombre de usuario vacío, por favor complete todos los campos',  classes: 'rounded' });
    } else if (isEmpty(datos_u.apellido_u)) {
        return M.toast({ html: 'Apellido de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_u.cedula_u)) {
        return M.toast({ html: 'Cedula de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_u.correo_u)) {
        return M.toast({ html: 'Correo de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_u.pass)) {  
        return M.toast({ html: 'Contraseña de usuario vacío, por favor complete el campo', classes: 'rounded' });
    }else if(isEmpty(datos_u.tipo_u)){
        return M.toast({ html: 'Tipo de usuario vacío, por favor complete el campo', classes: 'rounded' });
    }else {
        $.ajax({
            type: "POST",
            url: "../Database/u_create.php",
            data: datos_u,
            success: function(response) {
                M.toast({ html: response, classes: 'rounded' });
                $('#registra_u')[0].reset(); //limpia las casjas de texto
               

            }
        });
    }
});

mostrarU();

//Mostrar usuario desde el menu 3
$('#cu_mostrarUsuario').click( ()=>{
    mostrarU();
})

 //BUSCAR USUARIOS
 $('#buscar_u').keyup(function() {
    var buscar = $('#buscar_u').val();
    if (buscar != "") {
        mostrarU(buscar);
    } else {
        mostrarU();
    }
});

//MOSTRAR USUARIOS CON AJAX
function mostrarU(dat) {
    $.ajax({
        type: "POST",
        url: "../Database/u_buscar.php",
        data: { dato: dat },
        dataType: "html"
    })
    .done(function(respuesta) { //done: si el ajax es verdadero, hazme esto es para recibir ... o susses 
        $('#mostrar_usu').html(respuesta);
    })
}

//Borrar usuarios
$('#eliminarUsuarios').click(function() {
    let id_u = $('#obtieneID').val();
    $.ajax({
        type: "POST",
        url: "../Database/u_borrar.php",
        data: { id_u },
        dataType: "html",
        success: function(response) {
            mostrarU();
            M.toast({ html: response, classes: 'rounded' });
        }
    })
})

//Eliminado logico de usuarios
function eliminarUsuariosLogicos(estado) {
    let id_ul = $('#obtieneIDLogico').val();
    $.ajax({
        type: "POST",
        url: "../Database/u_borrar.php",
        data: {
            id_u :id_ul,
            estado
        },
        dataType: "html",
        success: function(response) {
            mostrarU();
            M.toast({ html: response, classes: 'rounded' });
        }
    })
}

function recibeIDLogico(id_u) {
    $('#obtieneIDLogico').val(id_u);
}


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
            url: "../Database/v_crear.php",
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
        url: "../Database/v_buscar.php",
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



//------------------ HOGAR ----------------------//

//GUARDAR HOGARES CON AJAX
$('#cf_guardar').click(function(e) {
    e.preventDefault();

    const datos_fami = {
            referencia: $('#cf_referencia').val(),
            id_vivienda: $('#cf_id_casa').val(),
        }
        //  console.log(datos_fami.nombre_u,datos_fami.apellido_u,datos_fami.cedula_u,datos_fami.correo_u);
    if (isEmpty(datos_fami.referencia)) {
        return M.toast({ html: 'Referencia vacío, por favor complete todos los campos',  classes: 'rounded' });
    } else if (isEmpty(datos_fami.id_vivienda)) {
        return M.toast({ html: 'Id de casa vacío, por favor complete el campo', classes: 'rounded' });
    } else {
        $.ajax({
            type: "POST",
            url: "../Database/h_create.php",
            data: datos_fami,
            success: function(response) {
                M.toast({ html: response, classes: 'rounded' });
                $('#cf_form')[0].reset(); //limpia las casjas de texto
                mostrarFamilia();
                $('#modalCrearFamilias').modal('close');
            }
        });
    }
});

 //BUSCAR HOGAR
 $('#cf_buscar_familia').keyup(function() {
    var buscar = $('#cf_buscar_familia').val();

    console.log(buscar);
    if (buscar != "") {
        mostrarFamilia( buscar);
    } else {
        mostrarFamilia();
    }
});

mostrarFamilia();

//MOSTRAR FAMILIA 
function mostrarFamilia(buscar) {
    var id_vivienda = $('#cf_id_casa').val();
    console.log(buscar, id_vivienda);
    $.ajax({
        type: "POST",
        url: "../Database/h_buscar.php",
        data: { buscar, id_vivienda },
        dataType: "html"
    })
    .done(function(respuesta) { //done: si el ajax es verdadero, hazme esto es para recibir ... o susses 
        $('#cf_mostrar_familia').html(respuesta);
        
    })
}


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
        url: "../Database/ec_guardar.php",
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
