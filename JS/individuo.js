console.log('conectado a individuo.js');
//----------------Individuo ----------------------------//

$(document).ready(function() {

    $('select').formSelect();
    $('.tooltipped').tooltip();
    $('select').formSelect({
        isMultiple : true,
    });
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();

      $('.ci_fec_naci').datepicker({
        format: 'yyyy/mm/dd',
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
            full_name: $('#ci_nombre').val(),
            tip_doc: $('#ci_t_doc').val(),
            num_doc: $('#ci_num_doc').val(),
            nacionalidad: $('#ci_nacionalidad').val(),
            otra_naci: $('#ci_ot_nacio').val(),
            sexo: $('#ci_sexo').val(),
            otro_sexo: $('#ci_ot_sexo').val(),
            fec_naci: $('#ci_fec_naci').val(),
            id_familia: $('#ci_id_familia').val()

        }
        //  console.log(datos_indi.nombre_u,datos_indi.apellido_u,datos_indi.cedula_u,datos_indi.correo_u);
    if (isEmpty(datos_indi.full_name)) {
        return M.toast({ html: 'Nombre de usuario vacío, por favor complete todos los campos',  classes: 'rounded' });
    } else if (isEmpty(datos_indi.tip_doc)) {
        return M.toast({ html: 'Tipo de documento vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.num_doc)) {
        return M.toast({ html: 'Numero de documento vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.nacionalidad)) {
        return M.toast({ html: 'Nacionalidad de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.sexo)) {
        return M.toast({ html: 'Sexo de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else if (isEmpty(datos_indi.fec_naci)) {
        return M.toast({ html: 'Fecha de nacimiento de usuario vacío, por favor complete el campo', classes: 'rounded' });
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
    var id_familia = $('#ci_id_familia').val();
    $.ajax({
        type: "POST",
        url: "../Database/i_buscar.php",
        data: { buscar, id_familia },
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


