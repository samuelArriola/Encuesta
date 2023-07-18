<?php
 include('../CONFIG/conexion.php');  

    // BUSCAR PERSONA
    $tabla_u= "";
    $id_familia = $_POST['id_familia'] ? mysqli_real_Escape_string( $con, $_POST['id_familia']) :''   ;
    $query="SELECT * FROM individuo WHERE  id_familia = '$id_familia' ORDER BY created_at DESC LIMIT 20" ;

    if (isset($_POST['buscar'])) {
     $buscar_i = mysqli_real_Escape_string ($con,$_POST['buscar']);
     $query="SELECT * FROM individuo WHERE id_familia = '$id_familia' and (num_doc LIKE '%$buscar_i%' OR full_name  LIKE '%$buscar_i%' OR nacionalidad  LIKE '%$buscar_i%') ORDER BY created_at DESC LIMIT 20"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
         $encuest = "<li title='Llenar encuesta' class='material-icons '><a href='Encuesta_casa.php?id_indi=".$row_u['id_indi']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
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