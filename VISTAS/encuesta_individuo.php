<?php

	session_start(); 

	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];

	if(isset($_SESSION["MAIL"])){
        $Nonpagina = "INDIVIDUO";
?> 


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta Individuo</title>
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
                
                <div class="card-content"  >
                    <form action="" method="post" id="ec_form">
                        <ul class="collapsible">
                            <li >
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title "> CARACTERÍSTICAS GENERALES </h3> 
                                </div>
                                <div class="row collapsible-body">
                                   <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">4. ¿Cuál es su parentesco con el jefe o la jefa de este hogar?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Jefe (a) del hogar" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Jefe (a) del hogar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Pareja, esposo/a, cónyuge, compañero/a" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Pareja, esposo/a, cónyuge, compañero/a</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hijo/a Hijastro/a" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Hijo/a Hijastro/a</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Nieto/a" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Nieto/a</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Padre, madre, Padrastro, madrastra" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Padre, madre, Padrastro, madrastra</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Suegro o suegra" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Suegro o suegra</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hermano/a, hermanastro/a" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Hermano/a, hermanastro/a</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro/a pariente del/a jefe/a" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Otro/a pariente del/a jefe/a</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Pensionista" name="ci_p_jefe_hogar" type="radio"  />
                                                <span>Pensionista</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span style="color: #9e9e9e;" for="ci_fec_naci">5. Fecha de Nacimiento</span>
                                        </p>
                                        <p>
                                            <input type="date" class=" validate " id="ci_fec_naci" required >
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">6. ¿Cuál fue su sexo al nacer?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="M" name="ci_sexo" type="radio"  />
                                                <span>Masculino</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="F" name="ci_sexo" type="radio"  />
                                                <span>Femenino</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">6.1 ¿Usted siente atracción sexual o romántica por?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_pref_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_pref_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Ambos sexos" name="ed_pref_sexo" type="radio"  />
                                                <span>Ambos sexos</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_pref_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_pref_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">6.2 ¿Usted se reconoce como?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_reco_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_reco_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Persona no binaria" name="ed_reco_sexo" type="radio"  />
                                                <span>Persona no binaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_reco_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_reco_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">7. ¿Cuál es su Nacionalidad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="COL" type="radio"  />
                                                <span>Colombiana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Venezolana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="Otro" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">8. ¿Se encuetra Incluido en el SISBEN?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">¿En que nivel se encuentra categorizado?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>A</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>B</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>C</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>D</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >9. ¿Tiene alguno de estos perfiles de protección internacional?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Mujer en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Niño/a en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona con condición de salud relevante</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Personas con necesidades especificas de protección legal y/o física</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona sola cabeza de familia (padre o madre)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona victima de violencia basada en género</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >10. ¿Es usted Victima de Conflicto Interno?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Que tipo de situación Sufrió:</span>
                                                    </p>
                                                    <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Amenza a la vida, integridad y seguridad personal</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Daño en bienes muebles e inmuebles (Terrorismo)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Delitos contra la integridad y libertad sexual</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desaparición Forzada</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desplazamiento Forzado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Despojo de Tierras</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Homicidio en persona protegida</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Lesiones personales (Permanentes o transitorias)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Reclutamiento forzado de niños, niñas y adolescentes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Secuestro</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Tortura o tratos crueles, inhumanos o degradantes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Victima de minas antipersonales (MAP). Municiones sin explosionar (MUSE) y artefactos explosivos improvisados (AEI)</span>
                                            </label>
                                        </p> 
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >11. En general, qué tan satisfecho(a) se siente ...</span> 
                                        </p>    
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;"> con su vida actualmente?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">
                                                        <span>con su ingreso actualmente?</span>
                                                    </span style="color: #9e9e9e;">
                                                </p>
                                                <p style="position: relative; top: -14px;">
                                                    <select id="" >
                                                        <option value="" selected>Seleccionar...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">
                                                        <span>con su salud actualmente?</span>
                                                    </span style="color: #9e9e9e;">
                                                </p>
                                                <p style="position: relative; top: -14px;">
                                                    <select id="" >
                                                        <option value="" selected>Seleccionar...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">
                                                        <span>con su nivel de seguridad actualmente?</span>
                                                    </span style="color: #9e9e9e;">
                                                </p>
                                                <p style="position: relative; top: -14px;">
                                                    <select id="" >
                                                        <option value="" selected>Seleccionar...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">
                                                        <span>con su trabajo/actividad actualmente?</span>
                                                    </span style="color: #9e9e9e;">
                                                </p>
                                                <p style="position: relative; top: -14px;">
                                                    <select id="" >
                                                        <option value="" selected>Seleccionar...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">
                                                        <span>con su tiempo libre?</span>
                                                    </span style="color: #9e9e9e;">
                                                </p> 
                                                <p style="position: relative; top: -14px;">
                                                    <select id="" >
                                                        <option value="" selected>Seleccionar...</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </p>
                                            </li>
                                        </ul> <br>
                                    </div>   
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >12. Número de celular </span>
                                        </p> 
                                            <input name="nombre" id="" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" oninput="validarNumero(this, 10)"  class="validate EC_RES" required>
                                    </div>                  
                                    
                                    <!-- BTN QUE ENVIA EL FORMULARIO -->
                                    <div class="center section">
                                        <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar" >GUARDAR </button>  
                                    </div>  
                                </div>                            
                            </li> 
                            <li class="active">
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title "> SALUD </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">1. ¿Cuál es su parentesco con el jefe o la jefa de este hogar?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="ed_pref_sexo" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="ed_pref_sexo" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="ed_pref_sexo" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">2 ¿Por qué razón principal no está afiliado/a a una entidad de seguridad social en salud? (Entidad promotora de salud [EPS] o entidad promotora de salud subsidiada [EPS-S])</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por falta de dinero" name="ed_reco_sexo" type="radio"  />
                                                <span>Por falta de dinero</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Muchos trámites" name="ed_reco_sexo" type="radio"  />
                                                <span>Muchos trámites</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No le interesa o descuido" name="ed_reco_sexo" type="radio"  />
                                                <span>No le interesa o descuido</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe que debe afiliarse" name="ed_reco_sexo" type="radio"  />
                                                <span>No sabe que debe afiliarse</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No está vinculado/a laboralmente a una empresa o " name="ed_reco_sexo" type="radio"  />
                                                <span>entidad (Usted o la persona de la cual es beneficiario/a)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Está en trámite de afiliación" name="ed_reco_sexo" type="radio"  />
                                                <span>Está en trámite de afiliación</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Problemas con el Sisben" name="ed_reco_sexo" type="radio"  />
                                                <span>Problemas con el Sisben (no lo/a han visitado, afiliado/a en otro municipio, lo/a desvincularon, le asignaron puntaje alto)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Falta de documentación" name="ed_reco_sexo" type="radio"  />
                                                <span>Falta de documentación</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">3. ¿a cual de los siguientes regímenes de seguridad social en salud está afiliado?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Contributivo (eps)?" name="eg_nacionalidad" value="COL" type="radio"  />
                                                <span>Contributivo (eps)?</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Especial" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Especial ? (fuerzas armadas, ecopetrol, universidades públicas)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Subsidiado? (eps-s)" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Subsidiado? (eps-s)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="eg_nacionalidad" value="Otro" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">4. ¿quién paga mensualmente por la afiliación de ...?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="paga una parte y otra la empresa o patrón" name="e_group_sisben" type="radio"  />
                                                <span>... paga una parte y otra la empresa o patrón</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Le descuentan de la pensión" name="e_group_sisben" type="radio"  />
                                                <span>Le descuentan de la pensión</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="paga la totalidad de la afiliación" name="e_group_sisben" type="radio"  />
                                                <span>... paga la totalidad de la afiliación</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Paga completamente la empresa o patrón donde trabaja" name="e_group_sisben" type="radio"  />
                                                <span>Paga completamente la empresa o patrón donde trabaja </span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="e_group_sisben" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >5. ¿En caso de enfermedad cómo cubriría los costos médicos y los medicamentos? </span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con ahorros personales" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Con ahorros personales</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con ayudas de los hijos o familiares" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Con ayudas de los hijos o familiares</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con otro tipo de seguro o cubrimiento" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Con otro tipo de seguro o cubrimiento</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Pidiendo dinero prestado" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Pidiendo dinero prestado</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Vendería su vivienda o bienes del hogar" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Vendería su vivienda o bienes del hogar</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Empeñaría bienes del hogar" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Empeñaría bienes del hogar</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No lo ha considerado" name="ei_group_afectacion" type="checkbox"  />
                                                <span>No lo ha considerado</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No tiene recursos" name="ei_group_afectacion" type="checkbox"  />
                                                <span>No tiene recursos</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Aplica" name="ei_group_afectacion" type="checkbox"  />
                                                <span>No Aplica</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >6. ¿Su estado de salud en general es?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Muy bueno" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Muy bueno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Bueno" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Bueno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Regular" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Regular</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Malo" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Malo</span>
                                            </label>
                                        </p>
                                     
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >7. ¿Le han diagnosticado/tiene alguna enfermedad crónica? (enfermedad de larga duración y prolongados tratamientos como: enfermedades cardiovasculares-hipertensión, asma, bronquitis crónica, gastritis, lupus, cáncer, gota, leucemia, diabetes, etc).</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="ei_group_satisf_vida" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >8. ¿Recibe o recibió tratamiento formulado por el médico?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="ei_group_sati4sf_vida" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="ei_group_sati4sf_vida" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >9. Actualmente</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;"> Fuma (cigarrillo, tabaco, vapeador o cigarrillo electrónico)</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="1ei_group_sati4sf_vida" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="1ei_group_sati4sf_vida" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;"> ¿... consume bebidas azucaradas (gaseosas, refrescos, bebidas de jugos de frutas procesadas, té endulzado, refrescos)? </span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="2ei_group_sati4sf_vida" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="2ei_group_sati4sf_vida" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">¿... consume alimentos de paquete (papas, plátanos, chitos, paquete mixto, rosquitas, chicharrones o similares)?</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="2ei_group_sati4sf_vida" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="2ei_group_sati4sf_vida" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >10. Sin estar enfermo/a y por prevención, ¿... Consultó duarnte el ultimo año al médico o al odontologo?</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Al médico</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="11ei_group_sati4sf_vida" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="11ei_group_sati4sf_vida" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Al odontólogo</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="1i_group_sati4sf_vida" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="1i_group_sati4sf_vida" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >11. En los últimos 30 días, … ¿tuvo alguna enfermedad, accidente, problema odontológico o algún otro problema de salud que no haya implicado hospitalización?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="1ei_group_sati4sf_vida" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="1ei_group_sati4sf_vida" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >12. Para tratar ese problema de salud, ¿qué hizo principalmente...?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió a Ia entidad de seguridad " name="ei_group_afectacion22" type="checkbox"  />
                                                <span>social en salud de la cual es afiliado(a)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió de forma particular a un médico general, especialista, odontólogo, terapeuta o profesional de la salud ( de forma particular)" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Acudió de forma particular a un médico general, especialista, odontólogo, terapeuta o profesional de la salud ( de forma particular)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió a un boticario, farmaceuta, droguista" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Acudió a un boticario, farmaceuta, droguista</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Consultó a un empírico, curandero, yerbatero, comadrona" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Consultó a un empírico, curandero, yerbatero, comadrona</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeópata etc.)" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeópata etc.)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Usó remedios caseros" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Usó remedios caseros</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Se autorecetó" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Se autorecetó</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Nada" name="ei_group_afectacion22" type="checkbox"  />
                                                <span>Nada</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">13. Acudió al servicio de urgencias en la institución prestadora de servicios (hospital o clínica) pública o privada?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="2ei_group_sisben_nivel" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="2ei_group_sisben_nivel" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">14. El encuestado se encuentra en alguna condición de discapacidad</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="2ed_pref_sexo" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="2ed_pref_sexo" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="2ed_pref_sexo" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >15. ¿Que tipo de discapacidad presenta el individuo?</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Física</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="FISICA" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="FISICA" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Auditiva</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="AUD" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="AUD" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Visual</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="Visual" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="Visual" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Cognitiva o intelectual </span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="COG" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="COG" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Psicosocial</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="Psicosocial" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="Psicosocial" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Múltiple</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="MUL" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="MUL" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Sordoceguera</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="Sordoceguera" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="Sordoceguera" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                          
                                        </ul>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >16. Dada su condición física y mental, en su vida diaria ... tiene dificultades para realizar las siguientes actividades</span> 
                                        </p>   
                                        <p>
                                            <span for=""  style="color: #9e9e9e;" class=" " >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Debe valorizar las dificultades en una escala de 1 a 5, donde 1 significa que "No puede hacer" la actividad y 5 significa que puede hacer la actividad "Sin dificultad"</span> 
                                        </p>   
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Oír, aun usando audífonos medicados?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Hablar o conversar?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Ver, aun usando lentes o gafas?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Mover el cuerpo, caminar o subir y bajar escaleras?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Agarrar o mover objetos con las manos?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Entender, aprender, recordar o tomar decisiones por sí mismo/a?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Comer, vestirse o bañarse por sí mismo/a?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Relacionarse o interactuar con las demás personas?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="" >
                                                            <option value="" selected>Seleccionar...</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </p>
                                            </li>
                                        </ul> 
                                        <br>
                                    </div>
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Observaciones:</span>
                                        </p> 
                                            <textarea  name="" id="" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type=""  class=" materialize-textarea  EC_RES" required>
                                            </textarea>
                                    </div> 
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">17. ¿ha estado embarazada alguna vez en su vida?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="12e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <div>
                                                        <div class="input-field card-panel ENCUESTA_VIVIENDA " >
                                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuántos hijos nacidos vivos ha tenido?</span>
                                                            </p> 
                                                            <input name="nombre" id="ev_veces_Bas" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this,1)" class="validate EC_RES" required>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="input-field card-panel ENCUESTA_VIVIENDA " >
                                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿A qué edad tuvo su primer hijo?</span>
                                                            </p> 
                                                            <input name="nombre" id="ev_veces_Bas" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this,2)" class="validate EC_RES" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="12e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">18. ¿está embarazada actualmente?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="18e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Asiste a control prenatal?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="22ei_group_sisben_nivel" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="22ei_group_sisben_nivel" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="18e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">19. ¿ ... tiene el esquema completo de vacunación, según su edad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="19ed_pref_sexo" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="19ed_pref_sexo" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="19ed_pref_sexo" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">20. ¿Llevan a… a control de crecimiento y desarrollo?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="20ed_pref_sexo" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="20ed_pref_sexo" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Observaciones:</span>
                                        </p> 
                                            <textarea  name="" id="" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type=""  class=" materialize-textarea  EC_RES" required>
                                            </textarea>
                                    </div>                           
                                                    
                                                                                                       
                                    
                                    <!-- BTN QUE ENVIA EL FORMULARIO -->
                                    <div class="center section">
                                        <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar">GUARDAR </button>  
                                    </div>  
                                </div>
                            </li>
                            <li>
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">EDUCACIÓN </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Usted siente atracción sexual o romántica por?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_pref_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_pref_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Ambos sexos" name="ed_pref_sexo" type="radio"  />
                                                <span>Ambos sexos</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_pref_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_pref_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">¿Usted se reconoce como?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_reco_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_reco_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Persona no binaria" name="ed_reco_sexo" type="radio"  />
                                                <span>Persona no binaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_reco_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_reco_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Cuál es su Nacionalidad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="COL" type="radio"  />
                                                <span>Colombiana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Venezolana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="Otro" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Se encuetra Incluido en el SISBEN?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">¿En que nivel se encuentra categorizado?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>A</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>B</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>C</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>D</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Tiene alguno de estos perfiles de protección internacional?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Mujer en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Niño/a en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona con condición de salud relevante</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Personas con necesidades especificas de protección legal y/o física</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona sola cabeza de familia (padre o madre)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona victima de violencia basada en género</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Es usted Victima de Conflicto Interno?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Que tipo de situación Sufrió:</span>
                                                    </p>
                                                    <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Amenza a la vida, integridad y seguridad personal</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Daño en bienes muebles e inmuebles (Terrorismo)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Delitos contra la integridad y libertad sexual</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desaparición Forzada</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desplazamiento Forzado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Despojo de Tierras</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Homicidio en persona protegida</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Lesiones personales (Permanentes o transitorias)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Reclutamiento forzado de niños, niñas y adolescentes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Secuestro</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Tortura o tratos crueles, inhumanos o degradantes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Victima de minas antipersonales (MAP). Municiones sin explosionar (MUSE) y artefactos explosivos improvisados (AEI)</span>
                                            </label>
                                        </p> 
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su vida actualmente?:</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su ingreso actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su salud actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su nivel de seguridad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En En general, qué tan satisfecho(a) se siente ... con su trabajo/actividad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, ¿qué tan satisfecho/a se siente _____ con su tiempo libre?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>  
                                    
                                    <!-- BTN QUE ENVIA EL FORMULARIO -->
                                    <div class="center section">
                                        <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar">GUARDAR </button>  
                                    </div>  
                                </div>
                            </li>
                            <li>
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">FUERZA DE TRABAJO </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Usted siente atracción sexual o romántica por?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_pref_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_pref_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Ambos sexos" name="ed_pref_sexo" type="radio"  />
                                                <span>Ambos sexos</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_pref_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_pref_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">¿Usted se reconoce como?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_reco_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_reco_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Persona no binaria" name="ed_reco_sexo" type="radio"  />
                                                <span>Persona no binaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_reco_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_reco_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Cuál es su Nacionalidad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="COL" type="radio"  />
                                                <span>Colombiana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Venezolana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="Otro" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Se encuetra Incluido en el SISBEN?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">¿En que nivel se encuentra categorizado?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>A</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>B</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>C</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>D</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Tiene alguno de estos perfiles de protección internacional?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Mujer en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Niño/a en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona con condición de salud relevante</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Personas con necesidades especificas de protección legal y/o física</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona sola cabeza de familia (padre o madre)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona victima de violencia basada en género</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Es usted Victima de Conflicto Interno?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Que tipo de situación Sufrió:</span>
                                                    </p>
                                                    <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Amenza a la vida, integridad y seguridad personal</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Daño en bienes muebles e inmuebles (Terrorismo)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Delitos contra la integridad y libertad sexual</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desaparición Forzada</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desplazamiento Forzado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Despojo de Tierras</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Homicidio en persona protegida</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Lesiones personales (Permanentes o transitorias)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Reclutamiento forzado de niños, niñas y adolescentes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Secuestro</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Tortura o tratos crueles, inhumanos o degradantes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Victima de minas antipersonales (MAP). Municiones sin explosionar (MUSE) y artefactos explosivos improvisados (AEI)</span>
                                            </label>
                                        </p> 
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su vida actualmente?:</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su ingreso actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su salud actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su nivel de seguridad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En En general, qué tan satisfecho(a) se siente ... con su trabajo/actividad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, ¿qué tan satisfecho/a se siente _____ con su tiempo libre?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>  
                                    
                                    <!-- BTN QUE ENVIA EL FORMULARIO -->
                                    <div class="center section">
                                        <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar">GUARDAR </button>  
                                    </div>  
                                </div>
                            </li>
                            <li>
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">INTEGRACIÓN DE MIGRANTES  </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Usted siente atracción sexual o romántica por?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_pref_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_pref_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Ambos sexos" name="ed_pref_sexo" type="radio"  />
                                                <span>Ambos sexos</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_pref_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_pref_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">¿Usted se reconoce como?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Hombres" name="ed_reco_sexo" type="radio"  />
                                                <span>Hombres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Mujeres" name="ed_reco_sexo" type="radio"  />
                                                <span>Mujeres</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Persona no binaria" name="ed_reco_sexo" type="radio"  />
                                                <span>Persona no binaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="ed_reco_sexo" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Prefiere no responder" name="ed_reco_sexo" type="radio"  />
                                                <span>Prefiere no responder</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Cuál es su Nacionalidad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="COL" type="radio"  />
                                                <span>Colombiana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="VEN" type="radio"  />
                                                <span>Venezolana</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eg_nacionalidad" value="Otro" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">¿Se encuetra Incluido en el SISBEN?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">¿En que nivel se encuentra categorizado?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>A</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>B</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>C</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" name="ei_group_sisben_nivel" type="radio"  />
                                                            <span>D</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="e_group_sisben" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Tiene alguno de estos perfiles de protección internacional?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Mujer en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Niño/a en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona con condición de salud relevante</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Personas con necesidades especificas de protección legal y/o física</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona sola cabeza de familia (padre o madre)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Persona victima de violencia basada en género</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >¿Es usted Victima de Conflicto Interno?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row">
                                                <div  class=" input-field col m6 s10 card-panel  s12 offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Que tipo de situación Sufrió:</span>
                                                    </p>
                                                    <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Amenza a la vida, integridad y seguridad personal</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Daño en bienes muebles e inmuebles (Terrorismo)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Delitos contra la integridad y libertad sexual</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desaparición Forzada</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Desplazamiento Forzado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Despojo de Tierras</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Homicidio en persona protegida</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Lesiones personales (Permanentes o transitorias)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Reclutamiento forzado de niños, niñas y adolescentes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Secuestro</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Tortura o tratos crueles, inhumanos o degradantes</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_afectacion" type="checkbox"  />
                                                <span>Victima de minas antipersonales (MAP). Municiones sin explosionar (MUSE) y artefactos explosivos improvisados (AEI)</span>
                                            </label>
                                        </p> 
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su vida actualmente?:</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satisf_vida" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su ingreso actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eI_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su salud actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_ingre" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su nivel de seguridad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_seguridad" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En En general, qué tan satisfecho(a) se siente ... con su trabajo/actividad actualmente?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_trabajo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>                              
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span for="" class=" " >En general, ¿qué tan satisfecho/a se siente _____ con su tiempo libre?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - bajo</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Medio - alto</span>
                                            </label>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="ei_group_satif_timepo" type="radio"  />
                                                <span>Alto</span>
                                            </label>
                                        </p> 
                                    </div>  
                                    
                                    <!-- BTN QUE ENVIA EL FORMULARIO -->
                                    <div class="center section">
                                        <button  class=" btn  waves-effect waves-light color-background" type="submit" id="ec_guardar">GUARDAR </button>  
                                    </div>  
                                </div>
                            </li>
                        </ul>
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
	<script src="../JS/encuesta_individuo.js"></script>

  </html>

<?php 

}else{
	session_destroy();
	header('location: ../');
}


?>


