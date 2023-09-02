
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <link rel="stylesheet" href="PUBLIC/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="CSS/index.css" rel="stylesheet"> 
	<!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>

	<div class="container section">

		<div class="row">
			<div class="col s12 m6 l6 offset-l3 offset-m3">
				<div class="card center-align">
                    <!-- Barra de progreso -->
                    <div class="cont-progress" id="loarU">
                        <div class="progress grey lighten-2 ">
                            <div class="indeterminate green accent-4"></div>
                        </div>
                    </div>
				<div class="section card-image">
				<i class="color-text lighten-2 large material-icons">account_circle</i>
				</div>
				<div class="card-content" id="form" >
					<span class="card-title" style="position:relative; top: -18px">Iniciar Sessión </span> 
					<form action="" method="post" id="form_login"> <br>
                        <div class="row">
                            <div id="divnameuser">
                                <div class="col s12 input-field" >
                                    <input type="text" name="" id="nameuser" class="validate" autofocus required>
                                    <label for="nameuser">Nombre de usuario</label>
                                </div>
                                <div id="msgError1" class="col error s12 red-text">
                                </div>
                            </div>	
                            <div id="divpassU">
                                <div class="col s12 input-field " >
                                    <input type="password" name="" id="passU" >
                                    <label for="passU">Contraseña</label>
                                </div>
                                <div id="msgErrorpss" class="col error s12 red-text">
                                </div>
                            </div>	
                        </div>
                            
                        <div class="center section">
                            <button  class=" btn  waves-effect color-background" type="button" id="login">Login</button> 
                        </div>    
					</form>
				</div>
				</div>
			</div>
		</div>


	</div>
	<!--JavaScript at end of body for optimized loading-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="PUBLIC/materialize/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
    <script src="JS/login/index.js"></script>
  <script>

  </script>
</body> 
</html>
