<?php
 include('../CONFIG/conexion.php');  


    // BUSCAR PERSONA
    $tabla_u= "";
    $id_vivienda = $_POST['id_vivienda'] ? $_POST['id_vivienda'] :''   ;
    $query="SELECT * FROM hogar WHERE  id_vivienda = '$id_vivienda' LIMIT 20" ;

    if (isset($_POST['buscar'])) {
     $buscar_u = mysqli_real_Escape_string ($con,$_POST['buscar']);
     $query="SELECT * FROM hogar WHERE id_vivienda = '$id_vivienda' and (id_familia LIKE '%$buscar_u%' OR referencia  LIKE '%$buscar_u%') LIMIT 20"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
         $individuo = "<li title='Crear Individuo' class='material-icons '><a href='create_individuo.php?id_hogar=".$row_u['id_familia']."' class='hoverable modal-trigger color-text'>group_add</a></li>";  
         $encuest = "<li title='Llenar encuesta Hogar' class='material-icons '><a href='encuesta_hogar.php?id_hogar=".$row_u['id_familia']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
         if ($row_u['E2Finalizado'] == 1) {
            $individuo = "<li title='Crear Individuo' class='material-icons '><a href='create_individuo.php?id_hogar=".$row_u['id_familia']."' class='hoverable modal-trigger color-text'>group_add</a></li>";  
            $encuest = "<li title='Llenar encuesta Hogar' style='pointer-events:none; color:#999999; opacity:0.9;' class='material-icons '><a href='' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
        }
         
         $tabla_u.="          
               <tr>
                   <td> ".$row_u['id_familia']." </td>
                   <td> ".$row_u['referencia']." </td>
                   <td> ".$row_u['create_at']." </td>
                   <td>
                        ". $encuest ."                                
                        ". $individuo ."                                
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