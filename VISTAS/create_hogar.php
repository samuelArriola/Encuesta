<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
    $id_casa = $_GET['id_c'];

?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Familia</title>
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
  <?php $Nonpagina = "FAMILIAS"; include("../LAYOUT/menu.php"); ?>
  <div class="hide-on-med-and-down" style="margin-top: 65px;"></div>

	<div class="container section">

		<!-- // buscador  -->
		<div class=" section">

			<div class="row ">
				<form action="" method="POST">
					<div class="col m6">
						<div class="input-field col m7 offset-m8">
							<i class="material-icons prefix">search</i> 
							<input name="buscador" id="cf_buscar_familia" type="text" class="validate" placeholder="Numero, Ref, Dirección" >
							<label for="cf_buscar_familia">Buscar</label>
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
							<th>Creado</th>		
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody id="cf_mostrar_familia">
					</tbody>
				</table>
			</div>
		</div>	
	</div>

	</div>
	
	<div class="fixed-action-btn" > 
		<a  href="#modalCrearFamilias" class='btn-floating btn-large waves-effect waves-light color-background  tooltipped modal-trigger' data-position='left'  data-tooltip='CREAR FAMILIA'  id='' ><i class='material-icons'>add</i></a>
	</div>

	<!-- MODAL FAMILIAS -->
	<div id="modalCrearFamilias" class="modal" >
		<div class="section">
		<div class="row container ">
			<div class="col s12 m12  offset-s1">
				
				<div class="section card-image center">
					<i class="color-text large material-icons">person_add</i> <br>
					<span class="card-title center">Crear Familias </span> 
				</div>

				<div class="card-content "  >
					
					<form action="" method="post" id="cf_form">

						<div class="row">
							<div class="input-field col m12 s12">
								<input name="" id="cf_referencia"  type="text" class="validate" required>
								<label for="cf_referencia">Referencia</label>
							</div>												
						</div>
						
						<div class="center section">
							<button  class=" btn  waves-effect waves-light color-background" type="button" id="cf_guardar">Guardar </button>  
						</div>    
					</form>
				</div>
				
			</div>
		</div>
		</div>

    </div>
	<input name="" id="cf_id_casa"  value="<?php echo $id_casa;?>"  type="hidden" class="validate" required>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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


