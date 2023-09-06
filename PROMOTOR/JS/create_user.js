console.log('conectado a crear_user.js');
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
