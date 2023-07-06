
<?php 
 include('../CONFIG/conexion.php');  

 $full_name = mysqli_real_Escape_string($con, $_POST['full_name']);
 $tip_doc = mysqli_real_Escape_string($con, $_POST['tip_doc']);
 $num_doc = mysqli_real_Escape_string($con, $_POST['num_doc']);
 $nacionalidad = mysqli_real_Escape_string($con, $_POST['nacionalidad']);
 $otra_naci = mysqli_real_Escape_string($con, $_POST['otra_naci']);
 $sexo = mysqli_real_Escape_string($con, $_POST['sexo']);
 $otro_sexo = mysqli_real_Escape_string($con, $_POST['otro_sexo']);
 $fec_naci = mysqli_real_Escape_string($con, $_POST['fec_naci']);
 $id_familia = mysqli_real_Escape_string($con, $_POST['id_familia']);

  $query_validate = "SELECT * FROM individuo WHERE id_familia = '$id_familia' AND  num_doc = ' $num_doc' ";
  $resul_query_validate = mysqli_query($con, $query_validate);
  $fila =mysqli_num_rows($resul_query_validate);
  if(!$resul_query_validate){
    echo 'Error al insetra datos : Comuniquese con su ingeniero de sistemas';
  }else{  

    if($fila){
      echo('Individuo ya registrada');
    }else{
      
      $query="INSERT INTO individuo( id_familia, full_name, tip_doc, num_doc, nacionalidad, sexo, otra_nac, otro_sex, fec_naci)
      VALUES ('$id_familia','$full_name','$tip_doc','$num_doc','$nacionalidad','$sexo','$otra_naci','$otro_sexo','$fec_naci')";
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