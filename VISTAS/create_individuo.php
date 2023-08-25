<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
		$id_hogar = $_GET['id_hogar'];
		$Nonpagina = "INDIVIDUOS";
?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Individuos</title>
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
	.bigModal{
		width: 80% !important ; min-height: 94% !important; top: 3% !important;
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
							<input name="buscador" id="buscar_individuo" type="text" class="validate" placeholder="Numero, Ref, Dirección" >
							<label for="buscar_individuo">Buscar</label>
						</div>
					</div>
				</form> 
			</div>
			
			<div class="contenedor_tabla responsive-table">
				<table class="" >
					<thead>
						<tr class="card-panel color-background">
							<th>Id</th>		
							<th>Nombre</th>
							<th>N. Documento</th>		
							<th>Encuestas</th>
						</tr>
					</thead>
					<tbody id="mostrar_individuo">
					</tbody>
				</table>
			</div>
		</div>	
	</div>

	
	
	<div class="fixed-action-btn" > 
		<a  href="#modalCrearIndividuo" class='btn-floating btn-large waves-effect waves-light color-background  tooltipped modal-trigger' data-position='left'  data-tooltip='CREAR INDIVIDUO'  id='' ><i class='material-icons'>add</i></a>
	</div>

	<!-- MODAL INDIVIDUOS -->
	<div id="modalCrearIndividuo" class="modal bigModal"  style="">
		<div class="section">
		<div class="row container ">
			<div class="col s12 m12  ">
				
				<div class="section card-image center">
					<i class="color-text large material-icons">person_add</i> <br>
					<span class="card-title center">Crear Individuos </span> 
				</div>

				<div class="card-content " id="form" >
					
					<form action="" method="post"  id="ci_md_form">

						<div class="row">
							<div class="input-field col m6 s12">
								<input name="" id="ci_nombre1"  type="text" class="validate" required>
								<label for="ci_nombre1">Primer nombre</label>
							</div>
							<div class="input-field col m6 s12">
								<input name="" id="ci_nombre2"  type="text" class="validate" required>
								<label for="ci_nombre2">Segundo nombre</label>
							</div>
							<div class="input-field col m6 s12">
								<input name="" id="ci_apellido1"  type="text" class="validate" required>
								<label for="ci_apellido1">Primer Apellido</label>
							</div>
							<div class="input-field col m6 s12">
								<input name="" id="ci_apellido2"  type="text" class="validate" required>
								<label for="ci_apellido2">Segundo Apellido</label>
							</div>
							<div class="input-field col m4 s12" >
								<select id="ci_t_doc">
								<option value="" selected>Seleccionar...</option>
								<option value="CC">Cedula de Ciudadanía</option>
								<option value="TI">Tarjeta de Identidad</option>
								<option value="CE">Cedula de Extranjería</option>
								<option value="PT">Pasaporte</option>
								<option value="RC">Registro Civil</option>
								<option value="NU">No. Único de Id. Personal</option>
								<option value="AI">Adulto sin identificación</option>
								<option value="MI">Menor sin Identificación</option>
								<option value="CD">Carnet diplomático</option>
								<option value="NV">Certificado Nacido Vivo</option>
								<option value="SC">Salvo Conducto</option>
								<option value="PE">Per Especial Permanencia</option>
								<option value="PT">Permiso por Protección Temporal</option>
								<option value="VS">Visa</option>
								</select>
								<label>Tipo de documento</label>
  							</div>
							<div class="input-field col m8 s12">
								<input name="" id="ci_num_doc" type="text" class="validate caracteresEpesiales"  required>
								<label for="ci_num_doc">Número de identificación, sin comas ni puntos.</label>
							</div>
						</div>
						
						<div class="center section">
							<button  class=" btn  waves-effect waves-light color-background" type="button" id="ci_crearIndividuos">Guardar </button>  
						</div>    
					</form>
				</div>
				
			</div>
		</div>
		</div>

    </div>
	<input name="" id="ci_id_familia"  value="<?php echo $id_hogar;?>"  type="hidden" class="validate" required>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
	<script src="../JS/create_individuo.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


