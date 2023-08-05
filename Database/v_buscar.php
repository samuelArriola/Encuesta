<?php
 include('../CONFIG/conexion.php');  
 session_start();
 $id_user =  $_SESSION["id_user"];

    // BUSCAR PERSONA
    $tabla_u= "";
    $query="SELECT * FROM casa  WHERE Creado_por = '$id_user' ORDER BY created_at DESC LIMIT 20" ;

    if (isset($_POST['dato'])) {
     $buscar_u = mysqli_real_Escape_string ($con,$_POST['dato']);
     $query="SELECT * FROM casa WHERE (id_casa LIKE '%$buscar_u%' OR referencia  LIKE '%$buscar_u%' OR direcion LIKE'%$buscar_u%') AND Creado_por = '$id_user' ORDER BY created_at DESC LIMIT 20"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
         $individuo = "<li title='Crear Hogar' class='material-icons '><a href='create_hogar.php?id_c=".$row_u['id_casa']."' class='hoverable modal-trigger color-text'>group_add</a></li>";  
         $encuest = "<li title='Llenar Encuesta Vivienda' class='material-icons '><a href='Encuesta_vivienda.php?id_c=".$row_u['id_casa']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
           $tabla_u.="          
               <tr>
                   <td> ".$row_u['id_casa']." </td>
                   <td> ".$row_u['referencia']." </td>
                   <td> ".$row_u['direcion']." </td>
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