<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
		$Nonpagina = "VIVIENDA";
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
  <?php include("../LAYOUT/menu.php"); ?>
  <div class="hide-on-med-and-down" style="margin-top: 65px;"></div>

	<div class="container section">

		<!-- // buscador  -->
		<div class=" section">

			<div class="row ">
				<form action="" method="POST">
					<div class="col m6">
						<div class="input-field col m7 offset-m8">
							<i class="material-icons prefix">search</i> 
							<input name="buscador" autofocus 	id="buscar_vivienda" type="text" class="validate" placeholder="Numero, Ref, Dirección" >
							<label for="buscar_vivienda">Buscar</label>
						</div>
					</div>
				</form> 
			</div>
			
			<div class="contenedor_tabla responsive-table">
				<table class="" >
					<thead>
						<tr class="card-panel color-background">
							<th>Id</th>		
							<th>Referencia</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody id="mostrar_vivienda">
					</tbody>
				</table>
			</div>
		</div>	
	</div>

	</div>
	
	<div class="fixed-action-btn" > 
		<a  href="#modalCrearVivienda" class='btn-floating btn-large waves-effect waves-light color-background  tooltipped modal-trigger' data-position='left'  data-tooltip='CREAR VIVIENDA'  id='' ><i class='material-icons'>add</i></a>
	</div>

	<!-- MODAL CRER VIVIENDA -->
	<div id="modalCrearVivienda" class="modal">
		<div class="section">
		<div class="row container ">
			<div class="col s12 m12  offset-s1">
				
				<div class="section card-image center">
					<i class="color-text large material-icons">add</i> <br>
					<span class="card-title center">Crear Vivienda</span> 
				</div>

				<div class="card-content " id="form" >
					
					<form action="" method="post" >

						<div class="row">
							<div class="input-field col m12 s12">
								<input name="" id="ix_ref"  type="text" class="validate" required>
								<label for="ix_ref">Referencia</label>
							</div>
						</div>
						
						<div class="center section">
							<button  class=" btn  waves-effect waves-light color-background" type="button" id="ix_crearCasa">Guardar </button>  
						</div>    
					</form>
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


