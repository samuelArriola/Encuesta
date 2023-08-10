<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
        $Nonpagina = "VIVIENDA";
        $id_vivienda = $_GET['id_vivienda'];

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
            <div class="col s12 m12  ">
                
              

                <div class="card-content "  >
                   
                    <form action="" method="post" id="ev_form">
                    <input name="" id="id_vivienda"  value="<?php echo $id_vivienda;?>"  type="hidden" class="validate" required>

                        <div class="row">
                            <div class="section card-image center card-panel" style=" border-top: #00c853 5px  solid;">
                                <h3 class="card-title">ENCUESTA VIVIENDA </h3> 
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">1. Tipo de vivienda:</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_tipo_v" value="Casa" type="radio"  />
                                        <span>Casa</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_tipo_v" value="Apartamento" type="radio"  />
                                        <span>Apartamento</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_tipo_v" value="Cuarto(s)" type="radio"  />
                                        <span>Cuarto(s)</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_tipo_v" value="Vivienda tradicional indigena" type="radio"  />
                                        <span>Vivienda tradicional indigena</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_tipo_v" value="Otro" type="radio"  />
                                        <span>Otro (carpa, contenedor, vagón, embarcación, cueva, refugio natural, etc)</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="" style="color: #9e9e9e;">2. Material predominante de las paredes exteriores:</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Bloque, ladrillo, piedra, madera pulida" type="radio"  />
                                        <span>Bloque, ladrillo, piedra, madera pulida</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Tapia pisada, adobe" type="radio"  />
                                        <span>Tapia pisada, adobe</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Bahareque revocado" type="radio"  />
                                        <span>Bahareque revocado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Bahareque sin revocar" type="radio"  />
                                        <span>Bahareque sin revocar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Madera burda, tabla, tablón" type="radio"  />
                                        <span>Madera burda, tabla, tablón</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Material prefabricado" type="radio"  />
                                        <span>Material prefabricado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Guadua" type="radio"  />
                                        <span>Guadua</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Caña, esterilla, otro vegetal" type="radio"  />
                                        <span>Caña, esterilla, otro vegetal</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Zinc, tela, lona, cartón, latas, desechos, plástico" type="radio"  />
                                        <span>Zinc, tela, lona, cartón, latas, desechos, plástico</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_pares_ext" value="Sin paredes" type="radio"  />
                                        <span>Sin paredes</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >3. Material predominante de los pisos:</span> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Alfombra o tapete de pared a pared" type="radio"  />
                                        <span>Alfombra o tapete de pared a pared</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Madera pulida y lacada, parqué" type="radio"  />
                                        <span>Madera pulida y lacada, parqué</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Mármol" type="radio"  />
                                        <span>Mármol</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Baldosa, vinilo, tableta, ladrillo, laminado" type="radio"  />
                                        <span>Baldosa, vinilo, tableta, ladrillo, laminado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Madera burda, tabla, tablón, otro vegetal" type="radio"  />
                                        <span>Madera burda, tabla, tablón, otro vegetal</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Cemento, gravilla" type="radio"  />
                                        <span>Cemento, gravilla</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_piso" value="Tierra, arena" type="radio"  />
                                        <span>Tierra, arena</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >4. ¿Con cuáles servicios permanentes cuenta la vivienda?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="ev_inp_estrato_Acu" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Acueducto</span>
                                    </label>
                                    <div class="row" style="display:none" id="ev_div_estrato_Acu">
                                        <div class="input-field col m6 s10 card-panel ENCUESTA_VIVIENDA offset-s1 offset-m1" >
                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Estrato para tarifa</span>
                                            </p> 
                                            <input name="nombre" id="ev_estrato_Acu" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="Si" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="ev_inp_alca" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Alcantarillado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="ev_inp_veces_Bas" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Basuras</span>
                                    </label>
                                    <div class="row" style="display:none" id="ev_div_veces_Bas">
                                        <div class="input-field col m6 s10 card-panel ENCUESTA_VIVIENDA offset-s1 offset-m1" >
                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Veces por semana</span>
                                            </p> 
                                            <input name="nombre" id="ev_veces_Bas" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="ev_inp_estarto_ene" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Energía eléctrica</span>
                                    </label>
                                    <div class="row" style="display:none" id="ev_div_estarto_ene" >
                                        <div class="input-field col m6 s10 card-panel ENCUESTA_VIVIENDA offset-s1 offset-m1" >
                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Estrato para tarifa</span>
                                            </p> 
                                            <input name="nombre" id="ev_estarto_ene" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES"  id="ev_inp_gas" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Gas</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES"  id="ev_inp_int" name="ev_group_servicio" value="Si" type="checkbox"  />
                                        <span>Internet</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_servicio" value="Todos" type="checkbox"  />
                                        <span>Todos</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES unselectall" id="ev_group_servicio_ningu" name="ev_group_servicio" value="Ninguno" type="checkbox"  />
                                        <span>Ninguno</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >5. ¿Su vivienda presenta alguna de las siguientes caráterísticas?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_HUM" value="Si" type="checkbox"  />
                                        <span>Humedad</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_CAL_E" value="Si" type="checkbox"  />
                                        <span>Calor excesivo</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_MAL_V" value="Si" type="checkbox"  />
                                        <span>Mala ventilación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_COC_L" value="Si" type="checkbox"  />
                                        <span>Cocina con leña</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_MAL_I" value="Si" type="checkbox"  />
                                        <span>Mala iluminación</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_COD_D" value="Si" type="checkbox"  />
                                        <span>Cocinan donde duermen</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_TAL_NE" value="Si" type="checkbox"  />
                                        <span>Taller o negocio adentro</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_GOT_T" value="Si" type="checkbox"  />
                                        <span>Goteras en el techo</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_caract_casa" id="E1P5_GRI_P" value="Si" type="checkbox"  />
                                        <span>Grietas en las paredes</span>
                                    </label>
                                </p> 
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >6. ¿Hay animales en la vivienda?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES unselectall"  id="E1P6_NIN" name="ev_group_animales" value="Ninguno" type="checkbox"  />
                                        <span>Ninguno</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E1P6_PER" name="ev_group_animales" value="Si" type="checkbox"  />
                                        <span>Perros</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E1P6_GAT" name="ev_group_animales" value="Si" type="checkbox"  />
                                        <span>Gatos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E1P6_AVE" name="ev_group_animales" value="Si" type="checkbox"  />
                                        <span>Aves</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E1P6_MON" name="ev_group_animales" value="Si" type="checkbox"  />
                                        <span>Monos</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E1P6_OTR" name="ev_group_animales" value="Si" type="checkbox"  />
                                        <span>Otros</span>
                                    </label>
                                </p> 
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA" id="ev_group_razon_animales" >
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >7. ¿Por cual de estas razones mantiene animales en la vivienda?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_razon_animales" value="De compañía" type="checkbox"  />
                                        <span>De compañía</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_razon_animales" value="Por negocio" type="checkbox"  />
                                        <span>Por negocio</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ev_group_razon_animales" value="Por adopción" type="checkbox"  />
                                        <span>Por adopción</span>
                                    </label>
                                </p> 
                               
                              
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >8. ¿En el ultimo mes se han presentado los siguientes problemas en el sector donde está ubicada su vivienda? </span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Ruidos molestos provenientes del exterior" type="checkbox"  />
                                        <span>Ruidos molestos provenientes del exterior (tráfico de autos, aviones, maquinaria)?</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Malos olores procedentes del exterior" type="checkbox"  />
                                        <span>Malos olores procedentes del exterior?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Presencia de basuras en las calles, caminos, senderos y espacios públicos" type="checkbox"  />
                                        <span>Presencia de basuras en las calles, caminos, senderos y espacios públicos?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Contaminación del aire" type="checkbox"  />
                                        <span>Contaminación del aire?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Contaminación en ríos, canales, lagos y embalses" type="checkbox"  />
                                        <span>Contaminación en ríos, canales, lagos y embalses?</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Invasión del espacio público" type="checkbox"  />
                                        <span>Invasión del espacio público (calles o andenes)?</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Presencia de animales que causan molestias" type="checkbox"  />
                                        <span>Presencia de animales que causan molestias?</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ef_group_problema_sector" value="Presencia de insectos, roedores" type="checkbox"  />
                                        <span>Presencia de insectos, roedores, etc.?</span>
                                    </label>
                                </p> 
  							</div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                              <p style="margin-bottom: 0px; margin-top: 10px">
                                  <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >9. ¿Cuántos grupos de personas (hogares) preparan los alimentos por separado en esta vivienda y atienden necesidades básicas con cargo a un presupuesto común? </span>
                              </p> 
                                <input name="nombre" id="ev_grupo_persona" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                            </div>
                           
                        </div>
                        
                        <!-- BTN QUE ENVIA EL FORMULARIO -->
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light color-background" type="button" id="ev_guardar">GUARDAR </button>  
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
	<script src="../JS/encuesta_vivienda.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


