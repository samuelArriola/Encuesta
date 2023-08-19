<?php

    include('../CONFIG/conexion.php'); 
	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
        $Nonpagina = "HOGAR";
        $id_hogar = $_GET['id_hogar'];

        $query="SELECT * FROM hogar  WHERE id_familia  = '$id_hogar'  LIMIT 1" ; //E1Finalizado
        $resul_u=mysqli_query($con,$query);
        if ($row = mysqli_fetch_array($resul_u) ) {
            if ($row["E2Finalizado"] == 1) {
                header('location: index.php');
            }
        }

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
            <div class="col s12 m12">
                
              

                <div class="card-content "  >
                   
                    <form action="" method="post" id="eh_form">
                    <input name="" id="id_hogar"  value="<?php echo $id_hogar;?>"  type="hidden" class="validate" required>

                        <div class="row">
                            <div class="section card-image center card-panel" style=" border-top: #00c853 5px  solid;">
                                <h3 class="card-title">ENCUESTA HOGAR </h3> 
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">1. La vivienda ocupada por este hogar es:</span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Propia, totalmente pagada" name="group_tipo_hogar" type="radio"  />
                                        <span>Propia, totalmente pagada</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Propia, la están pagando" name="group_tipo_hogar" type="radio"  />
                                        <span>Propia, la están pagando </span>
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
                            </div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                              <p style="margin-bottom: 0px; margin-top: 10px">
                                  <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >2. ¿Incluyendo sala y comedor, ¿de cuántos cuartos o piezas dispone este hogar?</span>
                              </p> 
                                <input name="nombre" id="eh_n_cuarto" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                            </div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                              <p style="margin-bottom: 0px; margin-top: 10px">
                                  <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >3. ¿En cuántos de esos cuartos duermen las personas de este hogar?</span>
                              </p> 
                                <input name="nombre" id="eh_n_persona_cuarto" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">4. ¿Algunos/as de los niños, niñas o adolescentes del hogar entre 0 y 17 años comparten el cuarto con un adulto? </span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Si" name="eh_comparte_cuarto" type="radio"  />
                                        <span>Si</span>
                                    </label>
                                    <div class="row" style="display: none;" id="div_eh_conquien_comp_cuarto">
                                        <div class="input-field col m6 s10 card-panel ENCUESTA_VIVIENDA offset-s1 offset-m1" >
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Con quiénes comparten el cuarto?</span>

                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_PDRE" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Padre y/o madre del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_PTRO" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Padrastro y/o madrastra del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_ABU" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Abuelo y/o abuela del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_TIO" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Tío y/o tía del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_HER" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Hermano y/o hermana del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_PRI" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Primo y/o prima del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_OTR" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Otro/a pariente del niño/a o adolescente</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" id="E2P4_NO_P_HOG" name="eh_conquien_comp_cuarto" type="checkbox"  />
                                                <span>Un adulto que no pertenece al hogar</span>
                                            </label>
                                        </p>

                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No" name="eh_comparte_cuarto" type="radio" />
                                        <span>No</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No hay niños, niñas o adolescentes de esas edades en el hogar" name="eh_comparte_cuarto" type="radio" />
                                        <span>No hay niños, niñas o adolescentes de esas edades en el hogar</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">5. El servicio sanitario que utiliza el hogar es:</span>

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
                                        <input class="with-gap EC_RES" value="Inodoro con descarga directa a fuentes de agua (bajamar)" name="group_servicio_sanitario" type="radio"  />
                                        <span>Inodoro con descarga directa a fuentes de agua (bajamar)</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No tiene servicio sanitario" name="group_servicio_sanitario" type="radio"  />
                                        <span>No tiene servicio sanitario</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR" id="div_eh_ubi_sanitaria">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >6. El servicio sanitario esta ubicado:</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Dentro de la vivienda" name="eh_ubi_sanitaria" type="radio"  />
                                        <span>Dentro de la vivienda</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Fuera de la vivienda, pero en el lote o terreno" name="eh_ubi_sanitaria" type="radio"  />
                                        <span>Fuera de la vivienda, pero en el lote o terreno</span>
                                    </label>
                                </p>
  							</div>
                            <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" id="div_eh_n_inodoro">
                              <p style="margin-bottom: 0px; margin-top: 10px">
                                  <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >7. ¿De cuántos servicios sanitarios o inodoros dispone este hogar?</span>
                              </p> 
                                <input name="nombre" id="eh_n_inodoro" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this)" class="validate EC_RES" required>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR" id="div_eh_exclu_sanitaria">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >8. El servicio sanitario del hogar es:</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="De uso exclusivo de las personas del hogar" name="eh_exclu_sanitaria" type="radio"  />
                                        <span>De uso exclusivo de las personas del hogar</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Compartido con personas de otros hogares" name="eh_exclu_sanitaria" type="radio"  />
                                        <span>Compartido con personas de otros hogares</span>
                                    </label>
                                </p>
  							</div>
                              <div  class="input-field col m12 card-panel  s12 ENCUESTA_VIVIENDA" id="div_eh_group_lavadero">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >9. El hogar cuenta con:</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES unselectall"  id="E2P9_NIN" name="eh_group_lavadero" value="Ninguno" type="checkbox"  />
                                        <span>Ninguno de los anteriores</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E2P9_LMANO" name="eh_group_lavadero" value="Si" type="checkbox"  />
                                        <span>Lavamanos</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E2P9_LDEO" name="eh_group_lavadero" value="Si" type="checkbox"  />
                                        <span>Lavadero</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" id="E2P9_LPLTO" name="eh_group_lavadero" value="Si" type="checkbox"  />
                                        <span>Lavaplatos</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">10. Cómo eliminan principalmente la basura en este hogar?</span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La recogen los servicios del aseo" name="eh_elimina_basura" type="radio"  />
                                        <span>La recogen los servicios del aseo</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La tiran a un río, quebrada, caño o laguna" name="eh_elimina_basura" type="radio"  />
                                        <span>La tiran a un río, quebrada, caño o laguna</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La tiran a un patio, lote, zanja o baldío" name="eh_elimina_basura" type="radio"  />
                                        <span>La tiran a un patio, lote, zanja o baldío</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La queman" name="eh_elimina_basura" type="radio"  />
                                        <span>La queman</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La entierran" name="eh_elimina_basura" type="radio"  />
                                        <span>La entierran</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La recoge un servicio informal (zorra, carreta, etc.)" name="eh_elimina_basura" type="radio"  />
                                        <span>La recoge un servicio informal (zorra, carreta, etc.)</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ">
                                <p>
                                    <span for="i9" style="color: #9e9e9e;">11. El agua para preparar los alimentos, la obtienen principalmente de:</span>

                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Acueducto público" name="eh_obt_agua" type="radio"  />
                                        <span>Acueducto público</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Acueducto comunal o veredal" name="eh_obt_agua" type="radio"  />
                                        <span>Acueducto comunal o veredal</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Pozo con bomba" name="eh_obt_agua" type="radio"  />
                                        <span>Pozo con bomba</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Pozo sin bomba,aljibe,jagüey o barreno" name="eh_obt_agua" type="radio"  />
                                        <span>Pozo sin bomba,aljibe,jagüey o barreno</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Agua lluvia" name="eh_obt_agua" type="radio"  />
                                        <span>Agua lluvia</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Rio, quebrada, manantial o nacimiento" name="eh_obt_agua" type="radio"  />
                                        <span>Rio, quebrada, manantial o nacimiento</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Pila pública" name="eh_obt_agua" type="radio"  />
                                        <span>Pila pública</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Carrotanque" name="eh_obt_agua" type="radio"  />
                                        <span>Carrotanque</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Aguatero" name="eh_obt_agua" type="radio"  />
                                        <span>Aguatero</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Agua embotellada o en bolsa" name="eh_obt_agua" type="radio"  />
                                        <span>Agua embotellada o en bolsa</span>
                                    </label>
                                </p>
                            </div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >12. ¿El agua llega al hogar las 24 horas del día, durante los siete días de la semana?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Si" name="eh_persistencia_agua" type="radio"  />
                                        <span>Si</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No" name="eh_persistencia_agua" type="radio"  />
                                        <span>No</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >13. ¿Considera que el agua disponible es suficiente?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Si" name="eh_suficiente_agua" type="radio"  />
                                        <span>Si</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="No" name="eh_suficiente_agua" type="radio"  />
                                        <span>No</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >14. ¿Dónde está ubicado el suministro (llave, grifo, pozo, etc.) de agua?</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Dentro de la vivienda" name="eh_suministro_agua" type="radio"  />
                                        <span>Dentro de la vivienda</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Fuera de la vivienda, pero en el lote" name="eh_suministro_agua" type="radio"  />
                                        <span>Fuera de la vivienda, pero en el lote</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Fuera de la vivienda y del lote o terreno" name="eh_suministro_agua" type="radio"  />
                                        <span>Fuera de la vivienda y del lote o terreno</span>
                                    </label>
                                </p>
  							</div>
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_HOGAR">
                                <p>
                                    <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA " >15. El agua para beber principalmente:</span> 
                                </p>    
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La usan tal como la obtienen" name="eh_purificación_agua" type="radio"  />
                                        <span>La usan tal como la obtienen</span>
                                    </label>
                                </p> 
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La hierven" name="eh_purificación_agua" type="radio"  />
                                        <span>La hierven</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Le echan cloro" name="eh_purificación_agua" type="radio"  />
                                        <span>Le echan cloro</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Utilizan filtros" name="eh_purificación_agua" type="radio"  />
                                        <span>Utilizan filtros</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="La decantan o usan filtros naturales" name="eh_purificación_agua" type="radio"  />
                                        <span>La decantan o usan filtros naturales</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" value="Compran agua embotellada o en bolsa" name="eh_purificación_agua" type="radio"  />
                                        <span>Compran agua embotellada o en bolsa</span>
                                    </label>
                                </p>
  							</div>
                      
                        </div>
                        
                        <!-- BTN QUE ENVIA EL FORMULARIO -->
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light color-background" type="submit" id="eh_guardar">GUARDAR </button>  
                        </div>    
                    </form>

                          
                        

                </div>
                
            </div>
        </div>
	</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>document.addEventListener('DOMContentLoaded', function() { M.AutoInit();});</script>
	<script src="../JS/encuesta_hogar.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


