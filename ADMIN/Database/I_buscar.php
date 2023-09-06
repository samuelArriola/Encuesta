<?php
    include('../../CONFIG/conexion.php');  
    // BUSCAR PERSONA
    $tabla_u= "";
    $id_hogar = $_POST['id_hogar'] ? mysqli_real_Escape_string( $con, $_POST['id_hogar']) :''   ;
    $query="SELECT id_indi, CONCAT(nombre1, ' ' ,nombre2, ' ',apellido1, ' ', apellido2) AS full_name ,num_doc, E3Finalizado FROM individuo WHERE  id_familia = '$id_hogar' ORDER BY created_at DESC LIMIT 60" ;

    if (isset($_POST['buscar'])) {
     $buscar_i = mysqli_real_Escape_string ($con,$_POST['buscar']);
     $query="SELECT id_indi, CONCAT(nombre1, ' ' ,nombre2, ' ',apellido1, ' ', apellido2) AS full_name ,num_doc, E3Finalizado FROM individuo WHERE id_familia = '$id_hogar' and (num_doc LIKE '%$buscar_i%' OR CONCAT(nombre1, ' ' ,nombre2, ' ',apellido1, ' ', apellido2)  LIKE '%$buscar_i%' ) ORDER BY created_at DESC LIMIT 60"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
        $encuest = "<li title='Llenar encuesta Individuo' class='material-icons '><a href='encuesta_individuo.php?id_indi=".$row_u['id_indi']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
        if ($row_u['E3Finalizado'] == 1) {
            $encuest = "<li title='Llenar encuesta Individuo' style='pointer-events:none; color:#999999; opacity:0.9;' class='material-icons '><a href='' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
        }   
        $tabla_u.="          
               <tr>
                   <td> ".$row_u['id_indi']." </td>
                   <td> ".$row_u['full_name']." </td>
                   <td> ".$row_u['num_doc']." </td>
                   <td>
                        ". $encuest ."                                
                                                   
                    </td>
               </tr>     
       ";
        }
       
    } else {
       $tabla_u.="NO HAY RESULTADO DE BUSQUEDA...";
    }
    
    echo $tabla_u;

  
// cerra conexion 
mysqli_close($con);


?>