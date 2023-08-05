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
	<title>Encuesta Casa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/plugin/virtual-select.min.css" />
    <link href="../CSS/index.css" rel="stylesheet"> 
	<!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style>
	.hoverA:hover {
		background-color: #b9f6ca;
		}

    .vscomp-toggle-button {
        align-items: center;
        background-color: #fff;
        /* border:none !important; */
        /* border-bottom: 1px solid #9e9e9e !important; */
        cursor: pointer;
        display: table;
        padding: 7px 30px 7px 10px;
        position: relative;
        top: 10px;
    /* width: 100%; */
    }
    card-panel {
        border-radius: 5px !important;
        min-height: 30px;
    }

    .row .col {
        min-height: 61px;
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
                
              

                <div class="card-content "  >
                   
                    <form action="" method="post" id="ec_form">
                        <div class="row">
                            <div class="section card-image center card-panel" style=" border-top: #00c853 5px  solid;">
                                <h3 class="card-title">ENCUESTA VIVIENDA </h3> 
                            </div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                <input name="nombre" id="ec_dirccion" value="" type="text" class="validate EC_RES" required>
                                <label for="ec_dirccion" class="EC_PREGUNTA" >1. Dirección: </label>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <input name="apellido" id="ec_estrato" value="" type="text" class="validate EC_RES" required>
                                <label for="ec_estrato" class="EC_PREGUNTA" >2. Estrato del Servicio de Energia Electrica</label>
                            </div>
                            <br><br>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >3. ¿Con cuáles servicios permanentes cuenta?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Acueducto" name="group_servicio" type="checkbox"  />
                                        <span>Acueducto</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Alcantarillado" name="group_servicio" type="checkbox"  />
                                        <span>Alcantarillado</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Basuras" name="group_servicio" type="checkbox"  />
                                        <span>Basuras</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Luz" name="group_servicio" type="checkbox"  />
                                        <span>Luz</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Gas" name="group_servicio" type="checkbox"  />
                                        <span>Gas</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Ninguno" name="group_servicio" type="checkbox"  />
                                        <span>Ninguno</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Otro" name="group_servicio" type="checkbox"  />
                                        <span>Otro</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >4. ¿Su vivienda tiene alguna de estas situaciones?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Humedad" name="group_situaciones" type="checkbox"  />
                                        <span>Humedad</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Calor excesivo" name="group_situaciones" type="checkbox"  />
                                        <span>Calor excesivo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Mala ventilación" name="group_situaciones" type="checkbox"  />
                                        <span>Mala ventilación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Cocina con leña" name="group_situaciones" type="checkbox"  />
                                        <span>Cocina con leña</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Mala iluminación" name="group_situaciones" type="checkbox"  />
                                        <span>Mala iluminación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Cocinan donde duermen" name="group_situaciones" type="checkbox"  />
                                        <span>Cocinan donde duermen</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Taller o negocio adentro" name="group_situaciones" type="checkbox"  />
                                        <span>Taller o negocio adentro</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">5. ¿En alguna habitación duermen más de 3 personas?</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Si" name="group_duermen_mas_de_3" type="radio"  />
                                        <span>Si</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No" name="group_duermen_mas_de_3" type="radio"  />
                                        <span>No</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">6. El servicio sanitario que utiliza el hogar es:</span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES"  value="Inodoro conectado a alcantarillado" name="group_servicio_sanitario" type="radio"  />
                                        <span>Inodoro conectado a alcantarillado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Inodoro conectado a pozo séptico" name="group_servicio_sanitario" type="radio"  />
                                        <span>Inodoro conectado a pozo séptico</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Inodoro sin conexión" name="group_servicio_sanitario" type="radio"  />
                                        <span>Inodoro sin conexión</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Letrina" name="group_servicio_sanitario" type="radio"  />
                                        <span>Letrina</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Bajamar" name="group_servicio_sanitario" type="radio"  />
                                        <span>Bajamar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No tiene servicio sanitario" name="group_servicio_sanitario" type="radio"  />
                                        <span>No tiene servicio sanitario</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">7. La vivienda ocupada por este hogar es:</span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Propia, totalmente pagada" name="group_tipo_hogar" type="radio"  />
                                        <span>Propia, totalmente pagada</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="En arriendo o subarriendo" name="group_tipo_hogar" type="radio"  />
                                        <span>En arriendo o subarriendo</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="En usufructo" name="group_tipo_hogar" type="radio"  />
                                        <span>En usufructo</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Posesión sin título" name="group_tipo_hogar" type="radio"  />
                                        <span>Posesión sin título</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Propiedad colectiva" name="group_tipo_hogar" type="radio"  />
                                        <span>Propiedad colectiva</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Otra, ¿cuál?" name="group_tipo_hogar" type="radio"  />
                                        <span> Otra, ¿cuál?</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">6 ¿Cuánto es el ingreso mensual promedio del núcleo familiar considerando todas las fuentes? </span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Menos de $500.000" name="group_ingreso" type="radio"  />
                                        <span>Menos de $500.000</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="$500.000 - $1.000.000" name="group_ingreso" type="radio"  />
                                        <span>$500.000 - $1.000.000</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Mayores a $1.000.000" name="group_ingreso" type="radio"  />
                                        <span>Mayores a $1.000.000</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <div>
                                    <br>
                                    <span for="i9" class="EC_PREGUNTA"style="color: #9e9e9e;">7. ¿Cuál es el número de integrantes de su nucleo familiar….?</span>
                                </div>
                                    <div  class=" input-field col m6 s12 ENCUESTA_VIVIENDA">
                                        <input name="nombre" id="ec_total_intengrante" value="" type="text" class="validate EC_RES" required>
                                        <label for="ec_total_intengrante" class="EC_PREGUNTA">Total</label>
                                    </div>
                                    <div  class=" input-field col m6 s12 ENCUESTA_VIVIENDA">
                                        <input name="nombre" id="ec_n_adolecentes" value="" type="text" class="validate EC_RES" required>
                                        <label for="ec_n_adolecentes" class="EC_PREGUNTA">Adolescentes</label>
                                    </div>
                                    <div  class=" input-field col m6 s12 ENCUESTA_VIVIENDA">
                                        <input name="nombre" id="ec_n_adultoMayor" value="" type="text" class="validate EC_RES" required>
                                        <label for="ec_n_adultoMayor" class="EC_PREGUNTA">Adultos Mayores</label>
                                    </div>
                                    <div  class=" input-field col m6 s12 ENCUESTA_VIVIENDA">
                                        <input name="nombre" id="ec_n_gestante" value="" type="text" class="validate EC_RES" required>
                                        <label for="ec_n_gestante" class="EC_PREGUNTA"> Gestantes</label>
                                    </div>
                                    <div  class=" input-field col m6 s12 ENCUESTA_VIVIENDA">
                                        <input name="nombre" id="ec_n_discapacidad" value="" type="text" class="validate EC_RES" required>
                                        <label for="ec_n_discapacidad" class="EC_PREGUNTA">Personas con Discapacidad*</label>
                                    </div>
                            </div>
                        </div>
                        
                        <!-- BTN QUE ENVIA EL FORMULARIO -->
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar">GUARDAR </button>  
                        </div>    
                    </form>

                          
                        

                </div>
                
            </div>
        </div>
	</div>

  <!-- ENCUESTA VIVIENDA SESSIÓN 1 -->
    <!-- <div class="section" id="ec_en_2" style="display: none;">
        <div class="row container ">
            <div class="col s12 m12  offset-s1">
                
                <div class="section card-image center">
                    <h3 class="card-title">ENCUESTA VIVIENDA </h3> 
                </div>

                <div class="card-content " id="form" >
                    <div class="row">
                        <div class="input-field col m12 s12 ">
                            <input name="nombre" id="i1" value="" type="text" class="validate EC_RES" required>
                            <label for="i1">Nombre</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="apellido" id="i2" value="" type="text" class="validate EC_RES" required>
                            <label for="i2">Apellido</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="cedula" id="i9" value="" type="number" class="validate EC_RES"  required>
                            <label for="i9">Cedula</label>
                        </div>
                        <div class="input-field col m12 s12">
                            <input name="correo" id="i7" value="" type="email" class="validate EC_RES" required>
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
	</div> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
    <script src="../JS/plugin/virtual-select.min.js"></script>
    <script type="text/javascript" >
        VirtualSelect.init({ 
            ele: 'select' ,
          
        });
</script>
	<script src="../JS/Encuesta.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


