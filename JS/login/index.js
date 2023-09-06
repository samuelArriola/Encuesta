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

            $.ajax({
                url: 'CONFIG/crear_sessiones.php',
                dataType: "json",
                type: 'POST',
                data: {
                    mail: usuPass,
                    password: pass
                }, 
                success: function(response) {
                    if (response.error === true) {
                        $('#msgErrorpss').html(response.msg);
                        $('#loarU').hide()
                    } else {
                        $('#loarU').hide()
                        if( response.tipo_u === 'Admin'){
                            location.href = 'ADMIN/index.php';
                        }else{
                            location.href = 'PROMOTOR/index.php';
                            
                        }
                    }
                }
            }) 
                
           
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