console.log('conectado a Crear_hogar.js');
//advanced branching
//skip logic
$(document).ready(function() {
    $('.tooltipped').tooltip();

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
