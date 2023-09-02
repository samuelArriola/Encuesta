
<?php 
 include('../CONFIG/conexion.php');  

 $nombre1 = mysqli_real_Escape_string($con, $_POST['nombre1']);
 $nombre2 = mysqli_real_Escape_string($con, $_POST['nombre2']);
 $apellido1 = mysqli_real_Escape_string($con, $_POST['apellido1']);
 $apellido2 = mysqli_real_Escape_string($con, $_POST['apellido2']);
 
 $tip_doc = mysqli_real_Escape_string($con, $_POST['tip_doc']);
 $num_doc = mysqli_real_Escape_string($con, $_POST['num_doc']);
 $id_familia = mysqli_real_Escape_string($con, $_POST['id_hogar']);

//  echo $fec_naci;
  $query_validate = "SELECT * FROM individuo WHERE num_doc = '$num_doc' ";
  $resul_query_validate = mysqli_query($con, $query_validate);
  $fila =mysqli_num_rows($resul_query_validate);

  if(!$resul_query_validate){
    echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
  }else{  

    if($fila > 0){
      echo('Individuo ya registrada');
    }else{
      
      $query="INSERT INTO individuo( id_familia, nombre1, nombre2, apellido1, apellido2, tip_doc, num_doc )
      VALUES ('$id_familia','$nombre1', '$nombre2','$apellido1','$apellido2', '$tip_doc','$num_doc')";
      $resul=mysqli_query($con,$query); 
      
      if(!$resul){
        echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
      }else{
        echo("Individuo Creado Exitosamente {{ $fila}}");
      }

    }
  }
  mysqli_close($con);

?>