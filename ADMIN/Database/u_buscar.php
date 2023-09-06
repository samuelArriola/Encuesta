<?php
    include('../../CONFIG/conexion.php');  
    // BUSCAR PERSONA
    $tabla_u= "";
    $query="SELECT * FROM user LIMIT 60" ;

    if (isset($_POST['dato'])) {
     $buscar_u = mysqli_real_Escape_string ($con,$_POST['dato']);
     $query="SELECT * FROM user WHERE (iden LIKE '%$buscar_u%' OR name_u  LIKE '%$buscar_u%' OR last_name LIKE'%$buscar_u%' OR mail LIKE '%$buscar_u%') LIMIT 60 "; 
    }    
   $resul_u=mysqli_query($con,$query);
   $fila =mysqli_num_rows($resul_u); //cuenta los resultados 
   
   if ($fila ) {
      while ($row_u=mysqli_fetch_array($resul_u)) {
         $id_u = $row_u['iden'];
         $eliminar ="<li title='Desactivar Usuario' class='material-icons '><a href='#eliminaULogico' type='button'  onclick='recibeIDLogico(".$row_u['id_user'].")' class='hoverable red-text modal-trigger'>delete</a></li>";
         $restaurar =" <li title='Restaurar' class='material-icons '><a href='#restaurarULogico' type='button'  onclick='recibeIDLogicoREST(".$row_u['id_user'].")' class='hoverable orange-text modal-trigger'>restore</a></li>";
         $editar = "<li title='Editar' class='material-icons'><a href='u_editar.php?id_u=".$row_u['id_user']."' class='hoverable modal-trigger'>edit</a></li>";  
         $herencia = "<li title='Resetear Contraseña' class='material-icons'><a href='herencia.php?id_u=".$row_u['id_user']."' class='hoverable modal-trigger green-text'>swap_horiz</a></li>";  
         
           if($row_u['estado']){
               $restaurar="";
           }else{
               $eliminar="";
               $editar="";
               $herencia="";

           }

        /*  //trae item_roll
         $queryRol = "SELECT r.item_rol, r.iden_usua FROM inex_usuarios u, inex_usuarios_roles r WHERE u.iden_usua = r.iden_usua AND r.iden_usua = '$id_u' order by r.item_rol ";
         $resultadoRol = mysqli_query($con, $queryRol);
         $rol= "";
         while($rowRol = mysqli_fetch_array($resultadoRol)) { 	
            $rol.=' '.$rowRol['item_rol'];	
              <td> ".$rol." </td> //colocar rol en la tabla para resturar los cambios
            <li title='Borrar' class='material-icons '><a href='#eliminaU' type='button'  onclick='recibeID(".$row_u['iden_usua'].")' class='hoverable red-text modal-trigger'>delete</a></li>     //eliminar

         } */
           $tabla_u.="          
               <tr>
                   <td> ".$row_u['iden']." </td>
                   <td> ".$row_u['name_u']." </td>
                   <td> ".$row_u['last_name']." </td>
                   <td> ".$row_u['mail']." </td>
                   <td> ".$row_u['Tipo_u']." </td>
                   <td> ".$row_u['estado']." </td>
                   <td>
                        ". $editar ."  
                        ".$herencia."
                        ".$restaurar."
                        ".$eliminar."                
                                         
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