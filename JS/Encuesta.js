console.log('conctado a encuesta_casa.js');

$(document).ready(function() {
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.dropdown-trigger').dropdown();
    mostrar_localstorage();   
});
  

//Persistencia de datos
let Pregunta = document.querySelectorAll(".EC_RES");
for (let i = 0; i < Pregunta.length; i++) {
    Pregunta[i].addEventListener('focusout', function(a) {  

        var group_servicio = [];
        $("input[name='group_servicio']:checked").each(function() {
            group_servicio.push(($(this).attr("value")));
        });

        var group_situaciones = [];
        $("input[name='group_situaciones']:checked").each(function() {
            group_situaciones.push(($(this).attr("value")));
        });

        localStorage.setItem("ec_dirccion", $('#ec_dirccion').val() );
        localStorage.setItem("ec_estrato", $('#ec_estrato').val() );
        localStorage.setItem("group_servicio",  JSON.stringify(group_servicio)   );
        localStorage.setItem("group_situaciones", JSON.stringify(group_situaciones) );
        localStorage.setItem("group_servicio_sanitario", $('input[name=group_servicio_sanitario]:checked').val());
        localStorage.setItem("group_duermen_mas_de_3", $('input[name=group_duermen_mas_de_3]:checked').val() );
        localStorage.setItem("group_tipo_hogar", $('input[name=group_tipo_hogar]:checked').val() );
        localStorage.setItem("group_ingreso", $('input[name=group_ingreso]:checked').val() );
        localStorage.setItem("ec_total_intengrante", $('#ec_total_intengrante').val() );
        localStorage.setItem("ec_n_adolecentes", $('#ec_n_adolecentes').val() );
        localStorage.setItem("ec_n_adultoMayor", $('#ec_n_adultoMayor').val() );
        localStorage.setItem("ec_n_gestante", $('#ec_n_gestante').val() );
        localStorage.setItem("ec_n_discapacidad", $('#ec_n_discapacidad').val() );
        // mostrar_localstorage();
    });
}

let mostrar_localstorage = ()=>{

   if(localStorage.getItem('ec_total_intengrante') !== null || localStorage.getItem('ec_total_intengrante') !== undefined ){

       $('#ec_estrato').val(localStorage.getItem('ec_estrato'));
       establecerValoresSeleccionados(localStorage.getItem('group_situaciones'));
       establecerValoresSeleccionados2(localStorage.getItem('group_servicio'));
       $('input[name="group_duermen_mas_de_3"]').each(function() {
           $(this).prop('checked', $(this).val() === localStorage.getItem('group_duermen_mas_de_3')  ? true : false);
        });
        $('input[name="group_servicio_sanitario"]').each(function() {
            $(this).prop('checked', $(this).val() === localStorage.getItem('group_servicio_sanitario')  ? true : false);
        });
        $('input[name="group_tipo_hogar"]').each(function() {
            $(this).prop('checked', $(this).val() === localStorage.getItem('group_tipo_hogar')  ? true : false);
        });
        $('input[name="group_ingreso"]').each(function() {
            $(this).prop('checked', $(this).val() === localStorage.getItem('group_ingreso')  ? true : false);
        });
        $('#ec_total_intengrante').val( localStorage.getItem('ec_total_intengrante') );
        $('#ec_n_adolecentes').val( localStorage.getItem('ec_n_adolecentes')); 
        $('#ec_n_adultoMayor').val( localStorage.getItem('ec_n_adultoMayor') ); 
        $('#ec_n_gestante').val( localStorage.getItem('ec_n_gestante') );
        $('#ec_n_discapacidad').val( localStorage.getItem('ec_n_discapacidad') ); 
        $('#ec_dirccion').val(localStorage.getItem('ec_dirccion'));

        console.log(localStorage.getItem('ec_dirccion'));
        console.log(localStorage.getItem('ec_estrato'));
        console.log(localStorage.getItem('group_servicio'));
        console.log(localStorage.getItem('group_situaciones'));
        console.log(localStorage.getItem('group_duermen_mas_de_3'));
        console.log(localStorage.getItem('group_servicio_sanitario'));
        console.log(localStorage.getItem('group_tipo_hogar'));
        console.log(localStorage.getItem('group_ingreso'));
        console.log(localStorage.getItem('ec_total_intengrante'));
        console.log(localStorage.getItem('ec_n_adolecentes'));
        console.log(localStorage.getItem('ec_n_adultoMayor'));
        console.log(localStorage.getItem('ec_n_gestante'));
        console.log(localStorage.getItem('ec_n_discapacidad'));
    }else{
        console.log('LocalStorage vacío');
    }
    

}

const checkboxes = document.querySelectorAll("input[name='group_situaciones']");
function establecerValoresSeleccionados(valoresSeleccionados) {
    valoresSeleccionados = JSON.parse(valoresSeleccionados || []);
    checkboxes.forEach(checkbox => {
      checkbox.checked = valoresSeleccionados.includes(checkbox.value);
    });
  }

  const checkboxes2 = document.querySelectorAll("input[name='group_servicio']");
  function establecerValoresSeleccionados2(valoresSeleccionados) {
    valoresSeleccionados = JSON.parse(valoresSeleccionados || []);
    checkboxes2.forEach(checkbox => {
      checkbox.checked = valoresSeleccionados.includes(checkbox.value);
    });
  }

//caracteres vacíos 
function isEmpty(str) {
    return (!str || 0 === str.length );
}

