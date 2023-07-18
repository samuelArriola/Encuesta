<?php 
 include('../CONFIG/conexion.php');  

 $cedula = mysqli_real_Escape_string($con, $_POST['cedula_u']); 
 $nombre = mysqli_real_Escape_string($con, $_POST['nombre_u']);
 $apellido = mysqli_real_Escape_string($con, $_POST['apellido_u']);
 $correo = mysqli_real_Escape_string($con, $_POST['correo_u']);
 $password = mysqli_real_Escape_string($con, $_POST['pass']);
 $tipo_u = mysqli_real_Escape_string($con, $_POST['tipo_u']);
 $hash = password_hash($password, PASSWORD_DEFAULT);
 
  $query="INSERT INTO user(iden, name_u, last_name, mail, password_u, Tipo_u ) 
  VALUES ('$cedula','$nombre','$apellido','$correo','$hash', '$tipo_u')";
  $resul=mysqli_query($con,$query); 

  if(!$resul){
      echo 'Error: Numero de identificación ya existente, vuelva a intentar';
  }else{
    echo('Usuario registrado exitosamente');
  }

  mysqli_close($con);

?>