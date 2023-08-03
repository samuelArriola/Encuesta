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
	<title>Encuesta Integración</title>
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
                                <h3 class="card-title">ENCUESTA INTEGRACIÓN </h3> 
                            </div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_CASA" >
                                <input name="nombre" id="eit_estadia_bquilla" value="" type="text" class="validate EC_RES" required>
                                <label for="eit_estadia_bquilla" class="EC_PREGUNTA" >¿Desde cuando se encuentra usted viviendo en Barranquilla?</label>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">¿Qué tan conectado te sientes con Barranquilla?</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_sentir_bquilla" type="radio"  />
                                        <span>Me siento extremadamente conectado </span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_sentir_bquilla" type="radio"  />
                                        <span>Me siento bien conectado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_sentir_bquilla" type="radio"  />
                                        <span>Me siento moderadamente conectado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_sentir_bquilla" type="radio"  />
                                        <span>Me siento poco conectado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_sentir_bquilla" type="radio"  />
                                        <span>No siento conexión alguna</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="" style="color: #9e9e9e;">¿Con que frecuencia te sientes diferente a tus vecinos Barranquilleros?</span>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_dif_vecinos" type="radio"  />
                                        <span>Nunca</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_dif_vecinos" type="radio"  />
                                        <span>Pocas veces</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_dif_vecinos" type="radio"  />
                                        <span>Algunas veces</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_dif_vecinos" type="radio"  />
                                        <span>Usualmente</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_dif_vecinos" type="radio"  />
                                        <span>Siempre</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >Pensando en el futuro ¿Dónde te gustaría vivir el resto de tu vida?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_fut_bquilla" type="radio"  />
                                        <span>Definitivamente me gustaría quedarme en Barranquilla </span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_fut_bquilla" type="radio"  />
                                        <span>Probablemente me quedaría en Barranquilla</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_fut_bquilla" type="radio"  />
                                        <span>Es incierto si quedarme en Barranquilla o moverme a otro territorio</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_fut_bquilla" type="radio"  />
                                        <span>Probablemente me mudaría a otro territorio</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_fut_bquilla" type="radio"  />
                                        <span>Definitivamente me mudaría a otro territorio</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Qué tan seguido te sientes aislado por la sociedad Barranquillera?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_aislado_bquilla" type="radio"  />
                                        <span>Nunca</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_aislado_bquilla" type="radio"  />
                                        <span>Pocas veces</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_aislado_bquilla" type="radio"  />
                                        <span>Algunas veces</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_aislado_bquilla" type="radio"  />
                                        <span>Usualmente</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_aislado_bquilla" type="radio"  />
                                        <span>Siempre</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Qué tanto comprende la problemática política que enfrenta Barranquilla?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_politica_bquilla" type="radio"  />
                                        <span>Muy bien</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_politica_bquilla" type="radio"  />
                                        <span>Bien</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_politica_bquilla" type="radio"  />
                                        <span>Moderado</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_politica_bquilla" type="radio"  />
                                        <span>Poco</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_politica_bquilla" type="radio"  />
                                        <span>Muy poco</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >Existen diferentes maneras de mejorar el estado de un territorio o ayudar a prevenir para que se vayan mal las cosas. Durante los últimos 12 meses ¿Ha usted realizado alguna de las siguientes? Responda SI (1) o NO (0)</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Tratar de convencer a alguien de cambiar su opinión política</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Tratar de influenciar a otros en como votar</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Realizar declaraciones políticas en público o en línea sobre el territorio</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Comprometerse en discusiones políticas sobre el territorio</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Contactar al algún dirigente o representante político</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Trabajar en algún partido político o grupo de acción</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Portar alguna insignia, emblema, imagen o producto de algún partido político</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Firmar una petición o solicitud</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Ser parte de una manifestación pública</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Boicotear sobre algunos productos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_mejora_terrirtorial_bquilla" type="checkbox"  />
                                        <span>Recoger firmas para peticiones o solicitudes</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >En los últimos 12 meses ¿Con qué frecuencia has discutido problemas o situaciones políticas de Barranquilla con otras personas?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_fut_bquilla" type="radio"  />
                                        <span>Nunca</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_fut_bquilla" type="radio"  />
                                        <span>Una vez al año</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_fut_bquilla" type="radio"  />
                                        <span>Una vez al mes</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_fut_bquilla" type="radio"  />
                                        <span>Una vez a la semana</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_fut_bquilla" type="radio"  />
                                        <span>Casi todos los días</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >Piense en los Barranquilleros que conoce ¿Con cuántos ha tenido una conversación en persona, por teléfono o mensajes?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_conversa_bquilla" type="radio"  />
                                        <span>0</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_conversa_bquilla" type="radio"  />
                                        <span>1 a 2 </span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_conversa_bquilla" type="radio"  />
                                        <span>3 a 6 </span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_conversa_bquilla" type="radio"  />
                                        <span>7 a 14</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_afectacion" type="radio"  />
                                        <span>15 o más</span>
                                    </label>
                                </p>
                               
  							</div>
                              <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >Muchas personas suelen ayudar a los otros a través de favores tales como un chance, cuidar a los niños, prestar algún de dinero, entre otros. En los últimos 12 meses ¿Con que frecuencia ha ayudado a alguien Barranquillero con favores?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ayuda_bquilla" type="radio"  />
                                        <span>Nunca</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ayuda_bquilla" type="radio"  />
                                        <span>Una vez al año</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ayuda_bquilla" type="radio"  />
                                        <span>Una vez al mes</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ayuda_bquilla" type="radio"  />
                                        <span>Una vez a la semana</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ayuda_bquilla" type="radio"  />
                                        <span>Casi todos los días</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Cómo evaluaría la dificultad para acceder o ver a un doctor?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ir_doc_bquilla" type="radio"  />
                                        <span>Muy difícil</span>
                                    </label>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ir_doc_bquilla" type="radio"  />
                                        <span>Difícil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ir_doc_bquilla" type="radio"  />
                                        <span>Moderada</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ir_doc_bquilla" type="radio"  />
                                        <span>Fácil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eit_group_ir_doc_bquilla" type="radio"  />
                                        <span>Muy fácil</span>
                                    </label>
                                </p>
  							</div>                              
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Cómo evaluaría  la dificultad para buscar un trabajo?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_buscar_trab" type="radio"  />
                                        <span>Muy difícil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_buscar_trab" type="radio"  />
                                        <span>Difícil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_buscar_trab" type="radio"  />
                                        <span>Moderada</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_buscar_trab" type="radio"  />
                                        <span>Fácil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_buscar_trab" type="radio"  />
                                        <span>Muy fácil</span>
                                    </label>
                                </p>
  							</div>                              
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Cómo evaluaría  la dificultad para obtener ayuda con problemas legales?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_ayuda_legal" type="radio"  />
                                        <span>Muy difícil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_ayuda_legal" type="radio"  />
                                        <span>Difícil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_ayuda_legal" type="radio"  />
                                        <span>Moderada</span>
                                    </label>
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_ayuda_legal" type="radio"  />
                                        <span>Fácil</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_ayuda_legal" type="radio"  />
                                        <span>Muy fácil</span>
                                    </label>
                                </p>
  							</div>                              
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >Si necesita indicar su dirección para una encomienda ¿Cómo escribiría su dirección? Escoger uno de los siguientes formatos (suponga que esa dirección corresponde a la suya)</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_esribe_barrio" type="radio"  />
                                        <span>Carrera 23 # 45 - 31; Barrio la Loma, Barranquilla, Colombia</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_esribe_barrio" type="radio"  />
                                        <span>Barrio La Loma, Carrera 23 # 45 - 31, Barranquilla, Colombia</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_esribe_barrio" type="radio"  />
                                        <span>Colombia, Barranquilla, Barrio La Loma, Carrera 23 # 45 - 31</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_esribe_barrio" type="radio"  />
                                        <span>No sabe</span>
                                    </label>
                                </p> 
  							</div>                              
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >En Barranquilla ¿Cómo accedería a servicio médico por un dolor crónico de espalda?</label> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_acede_medico" type="radio"  />
                                        <span>Llamando a una ambulancia</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_acede_medico" type="radio"  />
                                        <span>Dirigiéndose a atención por urgencia</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_acede_medico" type="radio"  />
                                        <span>Visitar un médico general</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_acede_medico" type="radio"  />
                                        <span>Preguntar a algún supervisor laboral</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="eif_group_acede_medico" type="radio"  />
                                        <span>No sabe</span>
                                    </label>
                                </p>
                                </p> 
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


