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
         $encuest = "<li title='Llenar encuesta Individuo' class='material-icons '><a href='encuesta_individuo.php?id_indi=".$row_u['id_indi']."' class='hoverable modal-trigger brown-text text-lighten-2'>portrait</a></li>";  
         $encuest_integracion  = "<li title='Llenar encuesta Intrgración' class='material-icons '><a href='encuesta_integracion.php?id_indi=".$row_u['id_indi']."&nun_doc=".$row_u['num_doc']." ' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
         $encuest_salud  = "<li title='Llenar encuesta Salud' class='material-icons '><a href='encuesta_salud.php?id_indi=".$row_u['id_indi']."&nun_doc=".$row_u['num_doc']." ' class='hoverable modal-trigger brown-text text-lighten-2'>volunteer_activism</a></li>";  
         $encuest_educacion  = "<li title='Llenar encuesta Educación' class='material-icons '><a href='encuesta_salud.php?id_indi=".$row_u['id_indi']."&nun_doc=".$row_u['num_doc']." ' class='hoverable modal-trigger brown-text text-lighten-2'>school</a></li>";  
         $encuest_ingreso  = "<li title='Llenar encuesta Ingreso' class='material-icons '><a href='encuesta_salud.php?id_indi=".$row_u['id_indi']."&nun_doc=".$row_u['num_doc']." ' class='hoverable modal-trigger brown-text text-lighten-2'>attach_money</a></li>";  
           $tabla_u.="          
               <tr>
                   <td> ".$row_u['id_indi']." </td>
                   <td> ".$row_u['full_name']." </td>
                   <td> ".$row_u['num_doc']." </td>
                   <td>
                        ". $encuest ."                                
                        ". $encuest_educacion ."                                
                        ". $encuest_salud ."                                
                        ". $encuest_integracion ."                                
                        ". $encuest_ingreso ."                                
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