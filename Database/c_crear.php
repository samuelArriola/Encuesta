<?php 
 include('../CONFIG/conexion.php');  
 session_start();
 $id_user =  $_SESSION["id_user"];
 $referencia = mysqli_real_Escape_string($con, $_POST['referencia']);
 $direcion = mysqli_real_Escape_string($con, $_POST['direcion']);
 
  $query="INSERT INTO casa(referencia, direcion, Creado_por)
  VALUES ('$referencia','$direcion', '$id_user')";
  $resul=mysqli_query($con,$query); 

  if(!$resul){
      echo 'Error: Numero de identificación ya existente, vuelva a intentar';
  }else{
    echo('Usuario registrado exitosamente');
  }

  mysqli_close($con);

?>