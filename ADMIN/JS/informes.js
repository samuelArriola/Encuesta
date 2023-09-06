console.log('informes.js');

//VIVIENDAS
$(document).ready(function (fechaI, fechaF) {

    $('#tb_info_vi').DataTable().destroy();
    var tb_info_vi = $('#tb_info_vi').DataTable({
        "ajax": {
            "url": "../Database/inf_individuo.php",
            "method": "POST",
            "datatype": "json",
            "contentType" :"application/json; charset=utf-8",
           "data": function (d) {
               return JSON.stringify({
                   d, 
                   fechaI,
                   fechaF
               })
           },
            "dataSrc": '', //obtiene los datos de la propiedad res del objeto
            "error": function (result) {
                console.log("ERROR " + result);
            }
        },

        "columns": [
            { "data": "id_vivienda" },
            { "data": "referencia" },
            { "data": "created_at" }
            //{ "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>" },
       ],

       "language": {
           url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
       }, 

       dom: 'Bfrtip',
       buttons: [
          'csv', 'excel', 'pdf', 'print'
       ],
 
    
    
   });

});
