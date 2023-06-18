console.log('conectado a index.js');

$('#confirPass').html('');
$('#loarU').hide()
$(document).ready(function() {

    // Iniciar sessión
    $('#login').click(function() {
        $('#loarU').show();
        
        let usuPass = $('#nameuser').val();
        let pass = $('#passU').val();


        if (isEmpty(usuPass) || isEmpty(pass)) {
            $('#msgErrorpss').html('Complete todos los campos');
        } else {

       console.log(     $.ajax({
                url: 'CONFIG/crear_sessiones.php',
                dataType: "json",
                type: 'POST',
                data: {
                    mail: usuPass,
                    password: pass
                }, //Aqui se especifica el parametro a enviar
                success: function(response) {
                    console.log(response);
                    // Aqui muestra los resultados
                    if (response.error === true) {
                        $('#msgErrorpss').html(response.msg);
                        $('#loarU').hide()
                    } else {
                        $('#loarU').hide()
                        location.href = 'VISTAS/index.php';
                    }
                }
            }) );
                
           
        }
    })

    $("#form_login").keyup(function(event) {
        if (event.keyCode == 13) {
            $("#login").click();
        }
    });


});
//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length);
}