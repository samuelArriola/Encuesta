<?php 
 include('../CONFIG/conexion.php');  
 session_start();
 $id_user =  $_SESSION["id_user"];
 $referencia = mysqli_real_Escape_string($con, $_POST['referencia']);
 
  $query="INSERT INTO vivienda(referencia, Creado_por)
  VALUES ('$referencia', '$id_user')";
  $resul=mysqli_query($con,$query); 

  if(!$resul){
      echo 'Error: Numero de identificación ya existente, vuelva a intentar';
  }else{
    echo('Vivienda Creada Exitosamente');
  }

  mysqli_close($con);

?>