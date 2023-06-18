console.log('conectado a app.js');

 //GUARDAR USUARIO CON AJAX
 $('#guardar_usuario').click(function(e) {
    e.preventDefault();

    const datos_u = {
            nombre_u: $('#cu_name').val(),
            apellido_u: $('#cu_last_name').val(),
            cedula_u: $('#cn_iden').val(),
            correo_u: $('#cn_mail').val(),
            pass: $('#cn_pass').val()

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
        return M.toast({ html: 'Tipo de usuario vacío, por favor complete el campo', classes: 'rounded' });
    } else {
        $.ajax({
            type: "POST",
            url: "../Database/u_create.php",
            data: datos_u,
            success: function(response) {
                console.log(response);
                M.toast({ html: response });
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


//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}