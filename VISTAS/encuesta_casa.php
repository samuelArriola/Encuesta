<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
        $Nonpagina = "CASA";
?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../CSS/index.css" rel="stylesheet"> 
	<!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style>
	.hoverA:hover {
		background-color: #b9f6ca;
		}
	</style>
</head>
<body>
  <?php  include("../LAYOUT/menu.php"); ?>
  <div class="hide-on-med-and-down" style="margin-top: 65px;"></div>

    
  <!-- ENCUESTA CASA SESSIÓN 1 -->
	<div class="section" id="ec_en_1" >
        <div class="row container ">
            <div class="col s12 m12  offset-s1">
                
                <div class="section card-image center">
                    <h3 class="card-title">ENCUESTA CASA </h3> 
                </div>

                <div class="card-content " id="form" >
                   

                        <div class="row">
                            <div class="input-field col m12 s12 ">
                                <input name="nombre" id="ec_s1_nombre" value="" type="text" class="validate" required>
                                <label for="ec_s1_nombre">1. Dirección: </label>
                            </div>
                            <div class="input-field col m12 s12">
                                <input name="apellido" id="ec_s1_estrato" value="" type="text" class="validate" required>
                                <label for="ec_s1_estrato">2. Estrato del Servicio de Energia Electrica</label>
                            </div>
                            <div class="input-field col m6 s12">
								<select multiple id="ec_s1_servicio">
								<option value="" disabled selected>Seleccionar...</option>
								<option value="1">Acueducto</option>
								<option value="2">Alcantarillado</option>
								<option value="2">Basuras</option>
								<option value="2">Luz</option>
								<option value="2">Gas</option>
								<option value="2">Todos</option>
								<option value="2">Ninguno</option>
								<option value="Otro">Otro</option>
								</select>
								<label>¿Con cuáles servicios permanentes cuenta?: *</label>
  							</div>
                            <div class="input-field col m12 s12">
                                <input name="cedula" id="i9" value="" type="number" class="validate"  required>
                                <label for="i9">Cedula</label>
                            </div>
                            <div class="input-field col m12 s12">
                                <input name="correo" id="i7" value="" type="email" class="validate" required>
                                <label for="i7">Correo</label>
                            </div>
                        </div>
                        
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light" type="" id="ec_sig_1">SIGUIENETE </button>  
                        </div>    
                </div>
                
            </div>
        </div>
	</div>

  <!-- ENCUESTA CASA SESSIÓN 1 -->
    <div class="section" id="ec_en_2" style="display: none;">
        <div class="row container ">
            <div class="col s12 m12  offset-s1">
                
                <div class="section card-image center">
                    <h3 class="card-title">ENCUESTA CASA </h3> 
                </div>

                <div class="card-content " id="form" >
                    <div class="row">
                        <div class="input-field col m12 s12 ">
                            <input name="nombre" id="i1" value="" type="text" class="validate" required>
                            <label for="i1">Nombre</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="apellido" id="i2" value="" type="text" class="validate" required>
                            <label for="i2">Apellido</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="cedula" id="i9" value="" type="number" class="validate"  required>
                            <label for="i9">Cedula</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="correo" id="i7" value="" type="email" class="validate" required>
                            <label for="i7">Correo</label>
                        </div> <br>
                        </div>
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light" type="" id="ec_atras_1">ATRAS </button>  
                            <button  class=" btn  waves-effect waves-light" type="" id="ec_sig_2">SIGUIENETE </button>  
                        </div>    
                    </div>
                </div>
                
            </div>
        </div>
	</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
	<script src="../JS/app.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


