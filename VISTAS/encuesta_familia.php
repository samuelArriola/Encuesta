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
	<title>Encuesta Familia</title>
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
                                <h3 class="card-title">ENCUESTA FAMILIA </h3> 
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">Tipo de vivienda:</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_tipo_v" type="radio"  />
                                        <span>Apartamento</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_tipo_v" type="radio"  />
                                        <span>Cuarto(s)</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_tipo_v" type="radio"  />
                                        <span>Vivienda tradicional indigena</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_tipo_v" type="radio"  />
                                        <span>Otro (carpa, contenedor, vagón, embarcación, cueva, refugio natural, etc)</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="" style="color: #9e9e9e;">Material predominante de las paredes exteriores:</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Bloque, ladrillo, piedra, madera pulida</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Tapia pisada, adobe</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Bahareque revocado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Bahareque sin revocar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Madera burda, tabla, tablón</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Material prefabricado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Guadua</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Caña, esterilla, otro vegetal</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Zinc, tela, lona, cartón, latas, desechos, plástico</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_pares_ext" type="radio"  />
                                        <span>Sin paredes</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >Material predominante de los pisos:</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Alfombra o tapete de pared a pared</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Madera pulida y lacada, parqué</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Mármol</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Baldosa, vinilo, tableta, ladrillo, laminado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Madera burda, tabla, tablón, otro vegetal</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Cemento, gravilla</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_piso" type="radio"  />
                                        <span>Tierra, arena</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >¿Con cuáles servicios permanentes cuenta la vivienda?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Acueducto</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Alcantarillado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Basuras</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Energía eléctrica</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Gas</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Internet</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Todos</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_servicio" type="checkbox"  />
                                        <span>Ninguno</span>
                                    </label>
                                </p> 
  							</div>
                              <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >Estrato para tarifa:</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Bajo - bajo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Bajo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Medio - bajo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Medio</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Medio - alto</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Alto</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Planta eléctrica</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>No conoce el estrato o no cuenta con recibo de pago.</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_estrato" type="radio"  />
                                        <span>Recibos sin estrato o el servicio es pirata</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >¿Su vivienda presenta alguna de las siguientes caráterísticas?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Humedad</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Calor excesivo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Mala ventilación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Cocina con leña</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Mala iluminación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Cocinan donde duermen</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Taller o negocio adentro</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Goteras en el techo</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_caract_casa" type="checkbox"  />
                                        <span>Grietas en las paredes</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " style="">¿Hay animales en la vivienda?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Perros</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Gatos</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Aves</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Monos</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>De compañía</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Por negocio</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Por adopción</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>Otros</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_animales" type="checkbox"  />
                                        <span>No se mantienen de manera permanete animales en la vivienda</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class="EC_PREGUNTA " >¿En el ultimo mes se han presentado los siguientes problemas en el sector donde está ubicada su vivienda: </label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Ruidos molestos provenientes del exterior (tráfico de autos, aviones, maquinaria)?</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Malos olores procedentes del exterior?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Presencia de basuras en las calles, caminos, senderos y espacios públicos?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Contaminación del aire?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Contaminación en ríos, canales, lagos y embalses?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Invasión del espacio público (calles o andenes)?</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Presencia de animales que causan molestias?</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" type="checkbox"  />
                                        <span>Presencia de insectos, roedores, etc.?</span>
                                    </label>
                                </p> 
  							</div>
                              <div class="input-field col m12 s12 card-panel ENCUESTA_CASA" >
                                <input name="nombre" id="ef_grupo_hogar" value="" type="text" class="validate EC_RES" required>
                                <label for="ef_grupo_hogar" class="EC_PREGUNTA" >¿Cuántos grupos de personas (hogares) preparan los alimentos por separado en esta vivienda y atienden necesidades básicas con cargo a un presupuesto común?: </label>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
    <script src="../JS/plugin/virtual-select.min.js"></script>
    <script type="text/javascript" >
        VirtualSelect.init({ 
            ele: 'select' ,
          
        });
</script>
	<script src="../JS/app.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


