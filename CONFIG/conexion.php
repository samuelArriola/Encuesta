<?php
//$con = mysqli_connect("axis.curn.edu.co", "joaquin.silva","mysql780610", "curn");
$con = mysqli_connect("localhost", "root","", "encuesta");
mysqli_set_charset($con,"utf8");
// $servername = "localhost";
// $database = "gproyectos_inex";
// $username = "gproyectos_gproyectos";
// $password = "CrbIP4^-Y*pQ";
// Create connection
// $con = mysqli_connect($servername, $username, $password, $database);
// mysqli_set_charset($con,"utf8");
if (!$con) {
     echo "Perdimos conexión a la base de datos";
 }
//  else {
//     echo "Connected successfully a encuesta ";
// }
?>