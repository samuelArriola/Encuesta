<?php

include("conexion.php");
$mail = mysqli_real_Escape_string( $con, $_POST['mail'] );
$password = mysqli_real_Escape_string( $con, $_POST['password'] ); 


$sql_mail = "SELECT * FROM user WHERE estado = 1 AND mail = '$mail' ";
$rs_login = mysqli_query($con,$sql_mail);

	if($fila = mysqli_fetch_array($rs_login)){

		if(password_verify($password, $fila['password_u']))
			{
			session_start();
			$_SESSION["id_user"] = $fila["id_user"]; 
			$_SESSION["IDEN"]=$fila["iden"];
			$_SESSION["NOMB"]=$fila["name_u"].' '.$fila["last_name"];
			$_SESSION["MAIL"]=$fila["mail"];
			$_SESSION["Tipo_u"]=$fila["Tipo_u"];

			$resul = array("error" => false,"nomb" => $_SESSION["NOMB"]);
			}
		else{
			$resul = array("error" => true, "msg" => "Contraseña incorrectas ");
			}
	}else{
		$resul = array("error" => true, "msg" => "Credenciales incorrectas");
	}



	echo json_encode($resul);
mysqli_close($con);
?>