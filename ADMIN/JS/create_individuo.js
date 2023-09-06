console.log('conectado a create_individuo.js');
//----------------Individuo ----------------------------//

$(document).ready(function() {

    $('select').formSelect();
    $('.tooltipped').tooltip();
    $('select').formSelect({
        isMultiple : true,
    });
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    $('.collapsible').collapsible();

      $('.ci_fec_naci2').datepicker({
        format: 'mm/dd/yyyy',
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
 $('#ci_crearIndividuos').click(function(e) {
    e.preventDefault();

    const datos_indi = {
            nombre1: $('#ci_nombre1').val(),
            nombre2: $('#ci_nombre2').val(),
            apellido1: $('#ci_apellido1').val(),
            apellido2: $('#ci_apellido2').val(),
            tip_doc: $('#ci_t_doc').val(),
            num_doc: $('#ci_num_doc').val(),
            id_hogar: $('#ci_id_familia').val()

        }
        console.log(datos_indi);
        //  console.log(datos_indi.nombre_u,datos_indi.apellido_u,datos_indi.cedula_u,datos_indi.correo_u);
    if (isEmpty(datos_indi.nombre1)) {
        return M.toast({ html: 'Primer nombre de individuo vacío, por favor complete todos los campos',  classes: 'rounded' });
    } else if (isEmpty(datos_indi.apellido1)) {
        return M.toast({ html: 'Primer apellido vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.apellido2)) {
        return M.toast({ html: 'Segundo apellido vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.tip_doc)) {
        return M.toast({ html: 'Tipo de documento vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.num_doc)) {
        return M.toast({ html: 'Numero de documento vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.id_hogar)) {
        return M.toast({ html: 'Id de hogar no encontrado, por favor complete el campo', classes: 'rounded' });
    } else {
        $.ajax({
            type: "POST",
            url: "../Database/i_create.php",
            data: datos_indi,
            success: function(response) {
                M.toast({ html: response, classes: 'rounded' });
                mostrarIndividuo();
                $('#ci_md_form')[0].reset(); //limpia las casjas de texto
                $('#modalCrearIndividuo').modal('close');

            }
        });
    }
});

  //Coloco el campo otra nacionalidad
  $("#ci_nacionalidad").change(function() {
    var opcionSeleccionada = $(this).val();
    if(opcionSeleccionada == "Otro"){
        $('#ci_dev_ot_nacio').css("display","")
    }else{
        $('#ci_dev_ot_nacio').css("display","none")
    }
});

//Coloco el campo otro sexo
$("#ci_sexo").change(function() {
    var opcionSeleccionada = $(this).val();
    if(opcionSeleccionada == "Otro"){
        $('#ci_dev_ot_sexo').css("display","")
    }else{
        $('#ci_dev_ot_sexo').css("display","none")
        
    }
});


//BUSCAR INDIVIDUOS
$('#buscar_individuo').keyup(function() {
    var buscar = $('#buscar_individuo').val();
    if (buscar != "") {
        mostrarIndividuo(buscar);
    } else {
        mostrarIndividuo();
    }
});

mostrarIndividuo();

//MOSTRAR INDIVIDUOS 
function mostrarIndividuo(buscar) {
    var id_hogar = $('#ci_id_familia').val();
    $.ajax({
        type: "POST",
        url: "../Database/i_buscar.php",
        data: { buscar, id_hogar },
        dataType: "html"
    })
    .done(function(respuesta) { //done: si el ajax es verdadero, hazme esto es para recibir ... o susses 
        $('#mostrar_individuo').html(respuesta);
    })
}


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

//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}


