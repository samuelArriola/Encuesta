<?php
 include('../../CONFIG/conexion.php');  
 session_start();
 $id_user =  $_SESSION["id_user"];

    // BUSCAR PERSONA
    $tabla_u= "";
    $query="SELECT * FROM vivienda  ORDER BY created_at DESC LIMIT 60" ;

    if (isset($_POST['dato'])) {
     $buscar_u = mysqli_real_Escape_string ($con,$_POST['dato']);
     $query="SELECT * FROM vivienda WHERE (id_vivienda LIKE '%$buscar_u%' OR referencia  LIKE '%$buscar_u%' ) ORDER BY created_at DESC LIMIT 60"; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_v=mysqli_fetch_array($resul_u)) {
         $individuo = "<li title='Crear Hogar' class='material-icons '><a href='VISTAS/create_hogar.php?id_vivienda=".$row_v['id_vivienda']."' class='hoverable modal-trigger color-text'>group_add</a></li>";  
         $encuest = "<li title='Llenar Encuesta Vivienda' class='material-icons '><a href='VISTAS/Encuesta_vivienda.php?id_vivienda=".$row_v['id_vivienda']."' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
         $detalle= '';
         if ($row_v['E1Finalizado'] == 1) {
             $detalle = "<li title='Ver Encuesta' class='material-icons '><a href='VISTAS/Encuesta_vivienda.php?id_vivienda=".$row_v['id_vivienda']."' class='hoverable modal-trigger brown-text text-lighten-2'>more_horiz</a></li>";  
             $encuest = "<li title='Llenar Encuesta Vivienda' style='pointer-events:none; color:#999999; opacity:0.9;' class='material-icons '><a href='' class='hoverable modal-trigger brown-text text-lighten-2'>poll</a></li>";  
         }
         
         $tabla_u.="          
               <tr>
                   <td> ".$row_v['id_vivienda']." </td>
                   <td> ".$row_v['referencia']." </td>
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