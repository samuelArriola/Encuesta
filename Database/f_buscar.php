<?php
 include('../CONFIG/conexion.php');  


    // BUSCAR PERSONA
    $tabla_u= "";
    $id_casa = $_POST['id_casa'] ? $_POST['id_casa'] :''   ;
    $query="SELECT * FROM familia WHERE  id_casa = '$id_casa' LIMIT 20" ;

    if (isset($_POST['buscar'])) {
     $buscar_u = mysqli_real_Escape_string ($con,$_POST['buscar']);
     $query="SELECT * FROM familia WHERE id_casa = '$id_casa' and (id_familia LIKE '%$buscar_u%' OR referencia  LIKE '%$buscar_u%') LIMIT 20"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
         $individuo = "<li title='Crear Individuo' class='material-icons '><a href='create_individuo.php?id_f=".$row_u['id_familia']."' class='hoverable modal-trigger color-text'>group_add</a></li>";  
         $encuest = "<li title='Llenar encuesta familia' class='material-icons '><a href='encuesta_familia.php?id_f=".$row_u['id_familia']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
           $tabla_u.="          
               <tr>
                   <td> ".$row_u['id_familia']." </td>
                   <td> ".$row_u['referencia']." </td>
                   <td> ".$row_u['create_at']." </td>
                   <td>
                        ". $individuo ."                                
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