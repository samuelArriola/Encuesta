
<?php 
 include('../CONFIG/conexion.php');  

 $referencia = mysqli_real_Escape_string($con, $_POST['referencia']);
 $id_casa = mysqli_real_Escape_string($con, $_POST['id_casa']);

  $query_validate = "Select * from familia  WHERE (id_casa = '$id_casa' AND  referencia ='$referencia') ";
  $resul_query_validate = mysqli_query($con, $query_validate);
  $fila =mysqli_num_rows($resul_query_validate);
  if(!$resul_query_validate){
    echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
  }else{  

    if($fila){
      echo('Familia ya registrada');
    }else{
      
      $query="INSERT INTO familia(id_casa, referencia)
      VALUES ('$id_casa','$referencia')";
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