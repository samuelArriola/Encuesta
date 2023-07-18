<?php

    session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"]) && $_SESSION["Tipo_u"] == "Admin"){
?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear User</title>
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

 
    <div class="nav-content white">
      <ul class="tabs tabs-transparent" >
        <li class="tab hoverA"><a href="#creaUsuario" class="green-text hoverable  ">Crear usuario</a></li>
        <li class="tab hoverA" id="cu_mostrarUsuario"><a href="#mostrarUsuario" class="green-text hoverable ">Mostrar usuarios</a></li>
      </ul>
    </div>


  <!-- CREAR USUARIO -->
  <div id="creaUsuario" class="col s12">  <br> 

    <div class="">
		<div class="row">
			<div class="col s12 m8 l6 offset-l3 offset-m2">
				<div class="card center-align">
				<div class="section card-image">
				<i class="color-text large material-icons">person_add</i>
				</div>
				<div class="card-content" id="form" >
					<span class="card-title" style="position:relative; top: -18px">Registrar Usuario </span> 
					<form action="" method="post" id="registra_u"> <br>
					<span style="opacity: 0.5; position:relative; top: -13px" class="left">Los campos señalados con "*" son campos obligatorios</span>  
					 <div class="row">
					    <input type="hidden" id="dep_u" value="<?php ?>">
						<div class="input-field col m12 s12 ">
							<input name="nombre" id="cu_name" type="text" class="validate caracteresEpesiales" >
							<label for="cu_name">*Nombre</label>
						</div>
						<div class="input-field col m12 s12">
							<input name="cu_last_name" id="cu_last_name" type="text" class="validate caracteresEpesiales" required>
							<label for="cu_last_name">*Apellido</label>
						</div>
						<div class="input-field col m12 s12">
							<input name="cedula" id="cn_iden" type="number" class="validate caracteresEpesiales" min="" max="" required>
							<label for="cn_iden">*Cedula</label>
						</div>
						<div class="input-field col m12 s12">
							<input name="correo" id="cn_mail" type="email" class="validate caracteresEpesiales" required>
							<label for="cn_mail">*Correo</label>
						</div>
						<div class="input-field col m12 s12">
							<input name="correo" id="cn_pass" type="password" class="validate caracteresEpesiales" required>
							<label for="cn_pass">*Contraseña</label>
						</div>
						<div  class="input-field col m12  s12 ">
							<p>
								<label for="" class="EC_PREGUNTA " style="">Tipo de Usuario *</label> 
							</p>    <br>
							<div class="row">
								<div class="col m6 s12">
									<p>
										<label>
											<input class="with-gap EC_RES" value="Promotor" name="cu_group_tipo_u" type="radio" checked  />
											<span>Promotor</span>
										</label>
									</p>
								</div>
								<div class="col m6 s12">
									<p>
										<label>
											<input class="with-gap EC_RES" value="Admin" name="cu_group_tipo_u" type="radio"  />
											<span>Admin</span>
										</label>
									</p>   
								</div>
							</div>
								
								
						</div>
					 </div>
						
						<div class="center section">
							<button  class=" btn  waves-effect color-background" type="button" id="guardar_usuario">Registrar</button> 
						</div>    
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>

   </div>

  <!-- APROBADOS -->
  <div id="mostrarUsuario" class="col s12">
   <div class="container section ">

    <!-- // buscador  -->
    <div class=" section">
        <div class="row ">
        <form action="" method="POST">
        <div class="col m6">
            <div class="input-field col m7 offset-m8">
            <i class="material-icons prefix">search</i> 
            <input name="buscador" id="buscar_u" type="text" class="validate" placeholder="Cedula,nombre,apellido" >
            <label for="buscar">Buscar</label>
            </div>
            </div>
        </form> 
        </div>
    </div>

		<div class="contenedor_tabla responsive-table">
		<table class="" >
			<thead>
			<tr class="card-panel color-background">
				<th>Cedula</th>		
				<th>Nombre</th>
				<th>Apellido</th>		
				<th>Correo</th>
				<!-- <th>Roles</th> -->
				<th>Tipo u</th>
				<th>Estado</th>
				<th>Opciones</th>
			</tr>
			</thead>
			<tbody id="mostrar_usu">
			</tbody>
		</table>
		</div>
	</div>

  </div>

  <!-- Modal EDITAR USUARIO -->
	<div id="modalEdita" class="modal">

	<div class="section">
	<div class="row container ">
		<div class="col s12 m12  offset-s1">
			
			<div class="section card-image">
			<i class="teal-text lighten-2 large material-icons">edit</i>
			</div>

			<div class="card-content " id="form" >
				<span class="card-title">Editar Usuario </span> 
				<form action="" method="post" >

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
					</div>

					</div>
					
					<div class="center section">
						<button  class=" btn  waves-effect waves-light" type="submit">Guardar </button>  
					</div>    
				</form>
			</div>
			
		</div>
	</div>
	</div>

    </div>

	<!--  confirmacion eliminar usuario -->
	<div id="eliminaU" class="modal">
		<div class="modal-content">
		<input  id="obtieneID" type="hidden">
		<h5 class="center" >¿Estás seguro de eliminar este usuario?</h5>
			<div class="center">
			<button   id="eliminarUsuarios" type="button" class="btn-small red modal-close">Si</button>
			<a href="#!" class="modal-close waves-effect waves-green btn-flat btn-small orange">No</a>
			</div> 
		</div>
	</div>
	
	<!--  confirmacion eliminado logico de  usuario -->
	<div id="eliminaULogico" class="modal">
		<div class="modal-content">
		<input  id="obtieneIDLogico" type="hidden">
		<h5 class="center" >¿Estás seguro de eliminar este usuario?</h5>
			<div class="center">
			<button   onclick="eliminarUsuariosLogicos('INACTIVO')" type="button" class="btn-small red modal-close">Si</button>
			<a href="#!" class="modal-close waves-effect waves-green btn-flat btn-small orange">No</a>
			</div> 
		</div>
	</div>

	<!--  confirmacion restaurarULogico logico de  usuario -->
	<div id="restaurarULogico" class="modal">
		<div class="modal-content">
		<input  id="obtieneIDLogicoRestau" type="hidden">
		<h5 class="center" >¿Estás seguro de restaurar este usuario?</h5>
			<div class="center">
			<button   onclick="rstaurarUsuariosLogicos('ACTIVO')" type="button" class="btn-small red modal-close">Si</button>
			<a href="#!" class="modal-close waves-effect waves-green btn-flat btn-small orange">No</a>
			</div> 
		</div>
	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
	<script src="../JS/app.js"></script>
	
	</body>
</html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


