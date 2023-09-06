
<?php 
 include('../../CONFIG/conexion.php');  
 $referencia = mysqli_real_Escape_string($con, $_POST['referencia']);
 $id_vivienda = mysqli_real_Escape_string($con, $_POST['id_vivienda']);

  $query_validate = "Select * from hogar  WHERE (id_vivienda = '$id_vivienda' AND  referencia ='$referencia') ";
  $resul_query_validate = mysqli_query($con, $query_validate);
  $fila =mysqli_num_rows($resul_query_validate);
  if(!$resul_query_validate){
    echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
  }else{  

    if($fila){
      echo('hogar ya registrada');
    }else{
      
      $query="INSERT INTO hogar(id_vivienda, referencia)
      VALUES ('$id_vivienda','$referencia')";
      $resul=mysqli_query($con,$query); 
      
      if(!$resul){
        echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
      }else{
        echo('Usuario registrado exitosamente');
      }

    }
  }
  mysqli_close($con);

?>