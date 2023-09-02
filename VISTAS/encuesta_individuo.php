<?php
    include('../CONFIG/conexion.php'); 
	session_start(); 
	$_SESSION["IDEN"];
	$_SESSION["NOMB"];
	$_SESSION["MAIL"];
	if(isset($_SESSION["MAIL"])){
        $Nonpagina = "INDIVIDUO";
        $id_indi = $_GET['id_indi'];

          //Validar que no entre a la encuesta cuando este cerrada 
          $query="SELECT * FROM individuo  WHERE id_indi = '$id_indi'  LIMIT 1" ; //E1Finalizado
          $resul_u=mysqli_query($con,$query);
          if ($row = mysqli_fetch_array($resul_u) ) {
              if ($row["E3Finalizado"] == 1) {
                  header('location: index.php');
              }
          }

?> 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta Individuo</title>
    <link rel="stylesheet" href="../PUBLIC/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/plugin/virtual-select.min.css" />
    <link href="../CSS/index.css" rel="stylesheet"> 
	<!-- <link rel="icon" type="image/png" href="img/logo.png" /> -->
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
                    <form action="" method="post" id="ei_form">
                    <input name="" id="id_indi"  value="<?php echo $id_indi;?>"  type="hidden" class="validate" required>

                        <ul class="collapsible">
                            <li   id="ei_general"  class="active">
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
                                            <input type="date" class="  " id="ci_fec_naci" required >
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
                                                <input class="with-gap EC_RES" value="Si" name="eig_group_sisben" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" style="display: none;" id="div_eig_group_sisben_nivel">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">¿En que nivel se encuentra categorizado?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="A" name="eig_group_sisben_nivel" type="radio"  />
                                                            <span>A</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="B" name="eig_group_sisben_nivel" type="radio"  />
                                                            <span>B</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="C" name="eig_group_sisben_nivel" type="radio"  />
                                                            <span>C</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="D" name="eig_group_sisben_nivel" type="radio"  />
                                                            <span>D</span>
                                                        </label>
                                                    </p>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eig_group_sisben" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eig_group_sisben" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >9. ¿Tiene alguno de estos perfiles de protección internacional?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Mujer en riesgo" name="eig_group_afectacion" type="radio"  />
                                                <span>Mujer en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Niño/a en riesgo" name="eig_group_afectacion" type="radio"  />
                                                <span>Niño/a en riesgo</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Persona con condición de salud relevante" name="eig_group_afectacion" type="radio"  />
                                                <span>Persona con condición de salud relevante</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Personas con necesidades especificas de protección legal y/o física" name="eig_group_afectacion" type="radio"  />
                                                <span>Personas con necesidades especificas de protección legal y/o física</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Persona sola cabeza de familia (padre o madre)" name="eig_group_afectacion" type="radio"  />
                                                <span>Persona sola cabeza de familia (padre o madre)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Persona victima de violencia basada en género" name="eig_group_afectacion" type="radio"  />
                                                <span>Persona victima de violencia basada en género</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES"  value="Ninguno" name="eig_group_afectacion" type="radio"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >10. ¿Es usted Victima de Conflicto Interno?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="ei_group_conflicto_i" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eig_p10_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Que tipo de situación Sufrió:</span>
                                                    </p>
                                                   <ul style="position: relative; left: 3%">
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Amenza a la vida, integridad y seguridad personal</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_1" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_1" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Daño en bienes muebles e inmuebles (Terrorismo)</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_2" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_2" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Delitos contra la integridad y libertad sexual</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_3" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_3" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Desaparición Forzada</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_4" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_4" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Desplazamiento Forzado</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_5" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_5" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Despojo de Tierras</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_6" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_6" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Homicidio en persona protegida</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_7" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_7" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Lesiones personales (Permanentes o transitorias)</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_8" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_8" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Reclutamiento forzado de niños, niñas y adolescentes</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_9" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_9" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Secuestro</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_10" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_10" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Tortura o tratos crueles, inhumanos o degradantes</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_11" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_11" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span style="color: #9e9e9e;">Victima de minas antipersonales (MAP). Municiones sin explosionar (MUSE) y artefactos explosivos improvisados (AEI)</span>
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="Si" name="eig_p10_12" type="radio"  />
                                                                        <span>Si</span>
                                                                    </label>
                                                                </p>
                                                            
                                                                <p>
                                                                    <label>
                                                                        <input class="with-gap EC_RES" value="No" name="eig_p10_12" type="radio"  />
                                                                        <span>No</span>
                                                                    </label>
                                                                </p>
                                                            </p>
                                                        </li>
                                                   </ul>
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="ei_group_conflicto_i" type="radio"  />
                                                <span>No sabe, no informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >11. En general, qué tan satisfecho(a) se siente ...</span> 
                                        </p>    
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >Estas preguntan tratan sobre la satisfacción que usted siente, en unaescala de 1 a 10, donde 1 significa que se siente “totalmenteinsatisfecho/a” y 10 significa que se siente “totalmente satisfecho/a”..</span> 
                                        </p>    

                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;"> con su vida actualmente?</span>
                                                </p>
                                                    <p style="position: relative; top: -14px;">
                                                        <select id="E3P11_VID" >
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
                                                    <select id="E3P11_ING" >
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
                                                    <select id="E3P11_SAL" >
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
                                                    <select id="E3P11_SEG" >
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
                                                    <select id="E3P11_TRA" >
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
                                                    <select id="E3P11_TIE" >
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
                                            <input  id="E3P12" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" oninput="validarNumero(this, 10)"  class=" EC_RES" required>
                                    </div>                  
                                </div>        
                               
                            </li> 
                            <li id="ei_salud" >
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
                                                <input class="with-gap EC_RES" value="Si" name="eis_p1" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p1" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe" name="eis_p1" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eis_p2">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">2 ¿Por qué razón principal no está afiliado/a a una entidad de seguridad social en salud? (Entidad promotora de salud [EPS] o entidad promotora de salud subsidiada [EPS-S])</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por falta de dinero" name="eis_p2" type="radio"  />
                                                <span>Por falta de dinero</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Muchos trámites" name="eis_p2" type="radio"  />
                                                <span>Muchos trámites</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No le interesa o descuido" name="eis_p2" type="radio"  />
                                                <span>No le interesa o descuido</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe que debe afiliarse" name="eis_p2" type="radio"  />
                                                <span>No sabe que debe afiliarse</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No está vinculado/a laboralmente a una empresa o " name="eis_p2" type="radio"  />
                                                <span>entidad (Usted o la persona de la cual es beneficiario/a)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Está en trámite de afiliación" name="eis_p2" type="radio"  />
                                                <span>Está en trámite de afiliación</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Problemas con el Sisben" name="eis_p2" type="radio"  />
                                                <span>Problemas con el Sisben (no lo/a han visitado, afiliado/a en otro municipio, lo/a desvincularon, le asignaron puntaje alto)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Falta de documentación" name="eis_p2" type="radio"  />
                                                <span>Falta de documentación</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12" id="div_eis_p3">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">3. ¿a cual de los siguientes regímenes de seguridad social en salud está afiliado?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Contributivo (eps)?" name="eis_p3" value="COL" type="radio"  />
                                                <span>Contributivo (eps)?</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Especial" name="eis_p3" value="VEN" type="radio"  />
                                                <span>Especial ? (fuerzas armadas, ecopetrol, universidades públicas)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Subsidiado" name="eis_p3" value="VEN" type="radio"  />
                                                <span>Subsidiado? (eps-s)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe" name="eis_p3" value="Otro" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12" id="div_eis_p4">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">4. ¿quién paga mensualmente por la afiliación de ...?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="paga una parte y otra la empresa o patrón" name="eis_p4" type="radio"  />
                                                <span>... paga una parte y otra la empresa o patrón</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Le descuentan de la pensión" name="eis_p4" type="radio"  />
                                                <span>Le descuentan de la pensión</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="paga la totalidad de la afiliación" name="eis_p4" type="radio"  />
                                                <span>... paga la totalidad de la afiliación</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Paga completamente la empresa o patrón donde trabaja" name="eis_p4" type="radio"  />
                                                <span>Paga completamente la empresa o patrón donde trabaja </span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe\No Responde" name="eis_p4" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>                                 
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >5. ¿En caso de enfermedad cómo cubriría los costos médicos y los medicamentos? </span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con ahorros personales" name="eis_p5" type="radio"  />
                                                <span>Con ahorros personales</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con ayudas de los hijos o familiares" name="eis_p5" type="radio"  />
                                                <span>Con ayudas de los hijos o familiares</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Con otro tipo de seguro o cubrimiento" name="eis_p5" type="radio"  />
                                                <span>Con otro tipo de seguro o cubrimiento</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Pidiendo dinero prestado" name="eis_p5" type="radio"  />
                                                <span>Pidiendo dinero prestado</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Vendería su vivienda o bienes del hogar" name="eis_p5" type="radio"  />
                                                <span>Vendería su vivienda o bienes del hogar</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Empeñaría bienes del hogar" name="eis_p5" type="radio"  />
                                                <span>Empeñaría bienes del hogar</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No lo ha considerado" name="eis_p5" type="radio"  />
                                                <span>No lo ha considerado</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No tiene recursos" name="eis_p5" type="radio"  />
                                                <span>No tiene recursos</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Aplica" name="eis_p5" type="radio"  />
                                                <span>No Aplica</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >6. ¿Su estado de salud en general es?</span> 
                                        </p>   
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Muy bueno" name="eis_p6" type="radio"  />
                                                <span>Muy bueno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Bueno" name="eis_p6" type="radio"  />
                                                <span>Bueno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Regular" name="eis_p6" type="radio"  />
                                                <span>Regular</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Malo" name="eis_p6" type="radio"  />
                                                <span>Malo</span>
                                            </label>
                                        </p>
                                     
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eis_p7">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >7. ¿Le han diagnosticado/tiene alguna enfermedad crónica? (enfermedad de larga duración y prolongados tratamientos como: enfermedades cardiovasculares-hipertensión, asma, bronquitis crónica, gastritis, lupus, cáncer, gota, leucemia, diabetes, etc).</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eis_p7" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p7" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eis_p8">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >8. ¿Recibe o recibió tratamiento formulado por el médico?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eis_p8" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p8" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >9. Actualmente</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;"> Fuma (cigarrillo, tabaco, vapeador o cigarrillo electrónico)</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p9_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p9_1" type="radio"  />
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
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p9_2" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p9_2" type="radio"  />
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
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p9_3" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p9_3" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >10. Sin estar enfermo/a y por prevención, ¿... Consultó duarnte el ultimo año al médico o al odontologo?</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Al médico</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p10_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p10_1" type="radio"  />
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
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p10_2" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p10_2" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >11. En los últimos 30 días, … ¿tuvo alguna enfermedad, accidente, problema odontológico o algún otro problema de salud que no haya implicado hospitalización?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eis_p11" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p11" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eis_p12">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >12. Para tratar ese problema de salud, ¿qué hizo principalmente...?</span> 
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió a Ia entidad de seguridad social en salud de la cual es afiliado(a)" name="eis_p12" type="radio"  />
                                                <span>Acudió a Ia entidad de seguridad social en salud de la cual es afiliado(a)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió de forma particular a un médico general, especialista, odontólogo, terapeuta o profesional de la salud ( de forma particular)" name="eis_p12" type="radio"  />
                                                <span>Acudió de forma particular a un médico general, especialista, odontólogo, terapeuta o profesional de la salud ( de forma particular)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Acudió a un boticario, farmaceuta, droguista" name="eis_p12" type="radio"  />
                                                <span>Acudió a un boticario, farmaceuta, droguista</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Consultó a un empírico, curandero, yerbatero, comadrona" name="eis_p12" type="radio"  />
                                                <span>Consultó a un empírico, curandero, yerbatero, comadrona</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeópata etc.)" name="eis_p12" type="radio"  />
                                                <span>Asistió a terapias alternativas (acupuntura, esencias florales, musicoterapias, homeópata etc.)</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Usó remedios caseros" name="eis_p12" type="radio"  />
                                                <span>Usó remedios caseros</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Se autorecetó" name="eis_p12" type="radio"  />
                                                <span>Se autorecetó</span>
                                            </label>
                                        </p> 
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Nada" name="eis_p12" type="radio"  />
                                                <span>Nada</span>
                                            </label>
                                        </p> 
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eis_p13">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">13. Acudió al servicio de urgencias en la institución prestadora de servicios (hospital o clínica) pública o privada?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eis_p13" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" style="display: none;" id="div_eis_p13_1">
                                                <div   class=" input-field col m6 s10 card-panel   offset-s1 offset-m1" >
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p13_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p13_1" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p13" type="radio"  />
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
                                                <input class="with-gap EC_RES" value="Si" name="eis_p14" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p14" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe" name="eis_p14" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eis_p15">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >15. ¿Que tipo de discapacidad presenta el individuo?</span> 
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
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eis_p16">
                                        <p>
                                            <span style="color: #9e9e9e;" for="" class=" " >16. Dada su condición física y mental, en su vida diaria ... tiene dificultades para realizar las siguientes actividades</span> 
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
                                                        <select id="eis_p16_1" >
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
                                                        <select id="eis_p16_2" >
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
                                                        <select id="eis_p16_3" >
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
                                                        <select id="eis_p16_4" >
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
                                                        <select id="eis_p16_5" >
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
                                                        <select id="eis_p16_6" >
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
                                                        <select id="eis_p16_7" >
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
                                                        <select id="eis_p16_8" >
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
                                            <textarea  name="" id="E3SP_OBS1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type=""  class=" materialize-textarea  EC_RES" required>
                                            </textarea>
                                    </div> 
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">17. ¿ha estado embarazada alguna vez en su vida?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eis_p17" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" style="display: none;" id="div_eis_p17_1">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <div>
                                                        <div class="input-field card-panel ENCUESTA_VIVIENDA " >
                                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuántos hijos nacidos vivos ha tenido?</span>
                                                            </p> 
                                                            <input name="nombre" id="_eis_p17_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this,1)" class=" EC_RES" required>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="input-field card-panel ENCUESTA_VIVIENDA " >
                                                            <p style="margin-bottom: 0px; margin-top: 10px">
                                                                <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿A qué edad tuvo su primer hijo?</span>
                                                            </p> 
                                                            <input name="nombre" id="_eis_p17_2" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this,2)" class=" EC_RES" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p17" type="radio"  />
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
                                                <input class="with-gap EC_RES" value="Si" name="eis_p18" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" style="display: none;" id="div_eis_p18_1">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Asiste a control prenatal?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eis_p18_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eis_p18_1" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                   
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p18" type="radio"  />
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
                                                <input class="with-gap EC_RES" value="Si" name="eis_p19" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p19" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe" name="eis_p19" type="radio"  />
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
                                                <input class="with-gap EC_RES" value="Si" name="eis_p20" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eis_p20" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Observaciones:</span>
                                        </p> 
                                            <textarea  name="" id="E3SP_OBS2" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type=""  class=" materialize-textarea  EC_RES" required>
                                            </textarea>
                                    </div>                           
                                </div>
                            </li>
                            <li id="ei_educación" >
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">EDUCACIÓN </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">1. ¿sabe leer y escribir?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eie_p1" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eie_p1" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">2. ¿actualmente ... Asiste a la escuela, colegio o universidad?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eie_p2" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eie_p2_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Asiste a control prenatal?</span>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Preescolar" name="eie_p2_1" type="radio"  />
                                                            <span>Preescolar</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Básica primaria (1o - 5o)" name="eie_p2_1" type="radio"  />
                                                            <span>Básica primaria (1o - 5o)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Básica secundaria (6o - 9o)" name="eie_p2_1" type="radio"  />
                                                            <span>Básica secundaria (6o - 9o)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Media académica(Bachillerato clásico)" name="eie_p2_1" type="radio"  />
                                                            <span>Media académica(Bachillerato clásico)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Media técnica (Bachillerato técnico)" name="eie_p2_1" type="radio"  />
                                                            <span>Media técnica (Bachillerato técnico)</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Normalista" name="eie_p2_1" type="radio"  />
                                                            <span>Normalista</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Técnica profesional" name="eie_p2_1" type="radio"  />
                                                            <span>Técnica profesional</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Tecnológica" name="eie_p2_1" type="radio"  />
                                                            <span>Tecnológica</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Universitaria" name="eie_p2_1" type="radio"  />
                                                            <span>Universitaria</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Especialización" name="eie_p2_1" type="radio"  />
                                                            <span>Especialización</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Maestría" name="eie_p2_1" type="radio"  />
                                                            <span>Maestría</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Doctorado" name="eie_p2_1" type="radio"  />
                                                            <span>Doctorado</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No sabe" name="eie_p2_1" type="radio"  />
                                                            <span>No sabe, no informa </span>
                                                        </label>
                                                    </p>
                                                    
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eie_p2" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        </div>    
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="" style="color: #9e9e9e;">3. ¿Cuál es la razón principal para que... no estudie?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Considera que no está en edad escolar" name="eie_p3" type="radio"  />
                                                <span>Considera que no está en edad escolar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Considera que ya terminó" name="eie_p3" type="radio"  />
                                                <span>Considera que ya terminó</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Falta de dinero o costos educativos elevados" name="eie_p3" type="radio"  />
                                                <span>Falta de dinero o costos educativos elevados</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Debe encargarse de los oficios del hogar" name="eie_p3" type="radio"  />
                                                <span>Debe encargarse de los oficios del hogar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por embarazo" name="eie_p3" type="radio"  />
                                                <span>Por embarazo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por inseguridad o malos tratos en el establecimiento " name="eie_p3" type="radio"  />
                                                <span>Por inseguridad o malos tratos en el establecimiento </span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="educativo" name="eie_p3" type="radio"  />
                                                <span>educativo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Falta de cupo" name="eie_p3" type="radio"  />
                                                <span>Falta de cupo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No existe un centro educativo cercano" name="eie_p3" type="radio"  />
                                                <span>No existe un centro educativo cercano</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Necesita trabajar" name="eie_p3" type="radio"  />
                                                <span>Necesita trabajar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por enfermedad" name="eie_p3" type="radio"  />
                                                <span>Por enfermedad</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Necesita educación especial" name="eie_p3" type="radio"  />
                                                <span>Necesita educación especial</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Tuvieron que abandonar el lugar de residencia habitual" name="eie_p3" type="radio"  />
                                                <span>Tuvieron que abandonar el lugar de residencia habitual</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Sus padres o la persona encargada de su cuidado no lo " name="eie_p3" type="radio"  />
                                                <span>consideran importante</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Por situaciones académicas" name="eie_p3" type="radio"  />
                                                <span>Por situaciones académicas</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">4. ¿Cuál es el mayor nivel educativo alcanzado y el último grado o semestre aprobado por …...?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eie_p4" value="Ninguno" type="radio"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Preescolar" name="eie_p4" type="radio"  />
                                                <span>Preescolar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Básica primaria (1o - 5o)" name="eie_p4" type="radio"  />
                                                <span>Básica primaria (1o - 5o)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Básica secundaria (6o - 9o)" name="eie_p4" type="radio"  />
                                                <span>Básica secundaria (6o - 9o)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Media académica(Bachillerato clásico)" name="eie_p4" type="radio"  />
                                                <span>Media académica(Bachillerato clásico)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Media técnica (Bachillerato técnico)" name="eie_p4" type="radio"  />
                                                <span>Media técnica (Bachillerato técnico)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Normalista" name="eie_p4" type="radio"  />
                                                <span>Normalista</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Técnica profesional" name="eie_p4" type="radio"  />
                                                <span>Técnica profesional</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Tecnológica" name="eie_p4" type="radio"  />
                                                <span>Tecnológica</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Universitaria" name="eie_p4" type="radio"  />
                                                <span>Universitaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Especialización" name="eie_p4" type="radio"  />
                                                <span>Especialización</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Maestría" name="eie_p4" type="radio"  />
                                                <span>Maestría</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Doctorado" name="eie_p4" type="radio"  />
                                                <span>Doctorado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eie_p4" type="radio"  />
                                                <span>No sabe, no informa </span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eie_p5">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">5. ¿Cuál es el título o diploma de mayor nivel educativo que ha recibido..? </span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" name="eie_p5" value="Ninguno" type="radio"  />
                                                <span>Ninguno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Preescolar" name="eie_p5" type="radio"  />
                                                <span>Preescolar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Básica primaria (1o - 5o)" name="eie_p5" type="radio"  />
                                                <span>Básica primaria (1o - 5o)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Básica secundaria (6o - 9o)" name="eie_p5" type="radio"  />
                                                <span>Básica secundaria (6o - 9o)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Media académica(Bachillerato clásico)" name="eie_p5" type="radio"  />
                                                <span>Media académica(Bachillerato clásico)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Media técnica (Bachillerato técnico)" name="eie_p5" type="radio"  />
                                                <span>Media técnica (Bachillerato técnico)</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Normalista" name="eie_p5" type="radio"  />
                                                <span>Normalista</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Técnica profesional" name="eie_p5" type="radio"  />
                                                <span>Técnica profesional</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Tecnológica" name="eie_p5" type="radio"  />
                                                <span>Tecnológica</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Universitaria" name="eie_p5" type="radio"  />
                                                <span>Universitaria</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Especialización" name="eie_p5" type="radio"  />
                                                <span>Especialización</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Maestría" name="eie_p5" type="radio"  />
                                                <span>Maestría</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Doctorado" name="eie_p5" type="radio"  />
                                                <span>Doctorado</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eie_p5" type="radio"  />
                                                <span>No sabe, no informa </span>
                                            </label>
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eie_p6">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">6. ¿Este Título se encuentra convalidado?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eie_p6" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eie_p6" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No Sabe" name="eie_p6" type="radio"  />
                                                <span>No Sabe\No Responde</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" id="div_eie_p7">
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >7. ¿A que profesión hace referencia este titulo?</span>
                                        </p> 
                                            <input name="" id="eie_p7" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="text"  oninput="" class=" EC_RES" required>
                                    </div>                  
                                </div>
                            </li>
                            <li id="ei_trabajo" >
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">FUERZA DE TRABAJO </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;" id="div_eit_p1">1. ¿En qué actividad ocupó ... la mayor parte del tiempo la semana pasada?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Trabajando" name="eit_p1" type="radio"  />
                                                <span>Trabajando</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Buscando Trabajo" name="eit_p1" type="radio"  />
                                                <span>Buscando Trabajo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Estudiando" name="eit_p1" type="radio"  />
                                                <span>Estudiando</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Oficios del hogar" name="eit_p1" type="radio"  />
                                                <span>Oficios del hogar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Incapacitado Permanente para Trabajar" name="eit_p1" type="radio"  />
                                                <span>Incapacitado Permanente para Trabajar</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="En servicio comunitario/social" name="eit_p1" type="radio"  />
                                                <span>En servicio comunitario/social</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otra Actividad" name="eit_p1" type="radio"  />
                                                <span>Otra Actividad</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p2">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">2. ¿...recibió remuneración en dinero o en especie a cambio de este trabajo?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p2" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p2" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p3">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">3. Además de lo anterior, ¿.....realizó la semana pasada alguna actividad paga en dinero o en especie por una hora o más? </span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p3" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p3" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p4">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">4. Aunque no trabajó la semana pasada, por una hora o más en forma remunerada, ¿tenía durante esa semana algún trabajo o negocio por el que recibe ingresos en dinero o en especie?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p4" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p4" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p5">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">5. ¿Por qué razón no trabajó la semana pasada?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Enfermedad, permiso o licencia" name="eit_p5" type="radio"  />
                                                <span>Enfermedad, permiso o licencia</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Festivos" name="eit_p5" type="radio"  />
                                                <span>Festivos</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Vacaciones" name="eit_p5" type="radio"  />
                                                <span>Vacaciones</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Capacitación" name="eit_p5" type="radio"  />
                                                <span>Capacitación</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Suspensión temporal del trabajo" name="eit_p5" type="radio"  />
                                                <span>Suspensión temporal del trabajo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Razones climáticas o catástrofes naturales" name="eit_p5" type="radio"  />
                                                <span>Razones climáticas o catástrofes naturales</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="eit_p5" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p6">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;" >6. ¿....trabajó o ayudó la semana pasada por UNA HORA O MÁS sin que le pagaran en la empresa o negocio de algún miembro de su familia u hogar?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p6" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p6" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>   
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p7">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">7. En las ÚLTIMAS 4 SEMANAS ¿… hizo alguna diligencia para conseguir un trabajo o instalar un negocio?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p7" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p7" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eit_p8">
                                        <p>
                                            <span for="" style="color: #9e9e9e;" class=" " >8. ¿Qué hizo ... en las ÚLTIMAS CUATRO SEMANAS para conseguir un trabajo o instalar un negocio?</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Pidió ayuda a familiares, amigos, colegas</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_1" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p> 
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Visitó, llevó o envió hojas de vida a empresas o empleadores</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_2" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_2" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Hizo uso de los servicios de agencias o bolsas de empleo, Cajas de Compensación Familiar, SENA, Entes Territoriales (Servicio Público de Empleo)</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_3" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_3" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Puso o consultó avisos clasificados</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_4" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_4" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Se presentó a convocatorias</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_5" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_5" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Hizo preparativos para iniciar un negocio</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_6" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_6" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">Otro</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p8_7" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p8_7" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA" id="div_eit_p9">
                                        <p>
                                            <span for="" style="color: #9e9e9e;" class=" " >9. ¿desea conseguir un trabajo remunerado o instalar un negocio?</span> 
                                        </p> 
                                        <ul style="position: relative; left: 3%">
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">un trabajo remunerado?</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p9_1" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p9_1" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span style="color: #9e9e9e;">instalar un negocio?</span>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="Si" name="eit_p9_2" type="radio"  />
                                                            <span>Si</span>
                                                        </label>
                                                    </p>
                                                    <p>
                                                        <label>
                                                            <input class="with-gap EC_RES" value="No" name="eit_p9_2" type="radio"  />
                                                            <span>No</span>
                                                        </label>
                                                    </p>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p10">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">10. Si le hubiera resultado algún trabajo a..., ¿estaba disponible la semana pasada para empezar a trabajar?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p10" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p10" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p11">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">11. ¿Para realizar este trabajo tiene ... algún tipo de contrato? (verbal o escrito)</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p11" type="radio"  />
                                                <span>Si</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p11" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p12">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">12. ¿El contrato es verbal o escrito?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Verbal" name="eit_p12" type="radio"  />
                                                <span>Verbal</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Escrito" name="eit_p12" type="radio"  />
                                                <span>Escrito</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p12" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p13">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">13. ¿El contrato de trabajo es a término indefinido o a término fijo?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="A término indefinido" name="eit_p13" type="radio"  />
                                                <span>A término indefinido</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="A término fijo" name="eit_p13" type="radio"  />
                                                <span>A término fijo</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p13" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" id="div_eit_p14">
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >14. ¿Cuánto tiempo lleva... trabajando en esta empresa, negocio, industria, oficina, firma o finca de manera continua? (Meses)</span>
                                        </p> 
                                            <input name="nombre" id="eit_p14" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0" max="99" oninput="validarNumero(this,2)" class="validate EC_RES" required>
                                    </div>
                                     <div  class="input-field col m12 card-panel  s12 " id="div_eit_p15">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">15. En este trabajo es ….</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Obrero o empleado de empresa particular" name="eit_p15" type="radio"  />
                                                <span>Obrero o empleado de empresa particular</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Obrero o empleado del gobierno" name="eit_p15" type="radio"  />
                                                <span>Obrero o empleado del gobierno</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Empleado doméstico" name="eit_p15" type="radio"  />
                                                <span>Empleado doméstico</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Trabajador por cuenta propia" name="eit_p15" type="radio"  />
                                                <span>Trabajador por cuenta propia</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Patrón o empleador" name="eit_p15" type="radio"  />
                                                <span>Patrón o empleador</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Trabajador familiar sin remuneración" name="eit_p15" type="radio"  />
                                                <span>Trabajador familiar sin remuneración</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Trabajador sin remuneración en empresas o negocios de otros hogares" name="eit_p15" type="radio"  />
                                                <span>Trabajador sin remuneración en empresas o negocios de otros hogares</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Jornalero o peón" name="eit_p15" type="radio"  />
                                                <span>Jornalero o peón</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Otro" name="eit_p15" type="radio"  />
                                                <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>  
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" id="div_eit_p16">
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >16. Antes de descuentos, ¿cuánto gana...en este empleo? (Incluya propinas y comisiones, y excluya viáticos y pagos en especie)</span>
                                        </p> 
                                            <input name="nombre" id="eit_p16" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12" id="div_eit_p17">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">17. El mes pasado recibió a. Primas (técnica, de antigüedad, clima,orden publico, otras, etc) o ¿b. Bonificaciones?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p17" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eit_p17_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" id="" >
                                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuánto recibió por estos conceptos?</span>
                                                        </p> 
                                                            <input name="nombre" id="eit_p17_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p17" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p17" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p18">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">18. El mes pasado recibió a. Auxilio o subsidio de alimentación, b. Auxilio subsidio de transporte, c. Subsidio familiar, d. Subsidio educativo</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p18" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eit_p18_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuánto recibió por estos conceptos?</span>
                                                        </p> 
                                                            <input name="nombre" id="eit_p18_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p18" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p18" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p19">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">19.  mes pasado recibió alimentos o vivienda como parte de pago por su trabajo?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p19" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eit_p19_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuánto recibió por estos conceptos?</span>
                                                        </p> 
                                                            <input name="nombre" id="eit_p19_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p19" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p19" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p20">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">20.  Además del salario en dinero, ¿el mes pasado... recibió otros ingresos en especie por su trabajo (electrodomésticos, ropa, productos diferentes a alimentos o bonos tipo Sodexo)?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p20" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" id="div_eit_p20_1" style="display: none;">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1 ">
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuánto recibió por estos conceptos?</span>
                                                        </p> 
                                                            <input name="nombre" id="eit_p20_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p20" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p20" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>    
                                    <div  class="input-field col m12 card-panel  s12 " id="div_eit_p21">
                                        <p>
                                            <span for="i9" style="color: #9e9e9e;">21. ¿Actualmente recibe subsidio de desempleo?</span>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="Si" name="eit_p21" type="radio"  />
                                                <span>Sí</span>
                                            </label>
                                            <div class="row" style="display:none;" id="div_eit_p21_1">
                                                <div  class=" input-field col m6 s10 card-panel   offset-s1 offset-m1" >
                                                    <p>
                                                        <span for="" style="color: #9e9e9e;">Le brindaron asistencia médica para solucionar el problema de salud?</span>
                                                    </p>
                                                    <div class="input-field col m12 s12 card-panel ENCUESTA_HOGAR" >
                                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >¿Cuánto recibió por estos conceptos?</span>
                                                        </p> 
                                                            <input name="nombre" id="eit_p21_1" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type="number" min="0"  oninput="validarNumero(this,8)" class="validate EC_RES" required>
                                                    </div>
                                                </div>
                                            </div>    
                                        </p>    
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No" name="eit_p21" type="radio"  />
                                                <span>No</span>
                                            </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input class="with-gap EC_RES" value="No sabe" name="eit_p21" type="radio"  />
                                                <span>No sabe, No informa</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="input-field col m12 s12 card-panel ENCUESTA_VIVIENDA" >
                                        <p style="margin-bottom: 0px; margin-top: 10px">
                                            <span for="" style="color: #9e9e9e;" class="EC_PREGUNTA" >Observaciones:</span>
                                        </p> 
                                            <textarea  name="" id="EIT_PObs" style ="height: 2.5rem ;margin: 0 0 18px 0;" value="" type=""  class=" materialize-textarea  EC_RES" required>
                                            </textarea>
                                    </div>     
                                </div>
                            </li>
                            <li id="ei_migrante" >
                                <div class="section card-image  card-panel collapsible-header" style=" border-top: #00c853 5px  solid;">
                                    <h3 class="card-title ">INTEGRACIÓN DE MIGRANTES  </h3> 
                                </div>
                                <div class="row collapsible-body">
                                    <div  class="input-field col m12 card-panel  s12 ">
                                        <p>
                                            <span style="color: #9e9e9e;" for="EIM_P1">1. ¿Desde cuando se encuentra usted viviendo en Barranquilla?</span>
                                        </p>
                                        <p>
                                            <input type="date" class="  " id="EIM_P1" required >
                                        </p>
                                    </div>
                                    <div  class="input-field col m12 card-panel  s12 ">
                                    <p>
                                        <span for="i9" style="color: #9e9e9e;">2. ¿Qué tan conectado te sientes con Barranquilla?</span>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Nunca"  name="EIM_P2" type="radio"  />
                                            <span>Nunca</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Pocas veces"  name="EIM_P2" type="radio"  />
                                            <span>Pocas veces</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Algunas veces"  name="EIM_P2" type="radio"  />
                                            <span>Algunas veces</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Usualmente"  name="EIM_P2" type="radio"  />
                                            <span>Usualmente</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Siempre"  name="EIM_P2" type="radio"  />
                                            <span>Siempre</span>
                                        </label>
                                    </p>
                                    </div>
                                <div  class="input-field col m12 card-panel  s12 ">
                                    <p>
                                        <span for="" style="color: #9e9e9e;">3. ¿Con que frecuencia te sientes diferente a tus vecinos Barranquilleros?</span>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="No siento conexión alguna" name="EIM_P3" type="radio"  />
                                            <span>No siento conexión alguna</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Me siento poco conectado" name="EIM_P3" type="radio"  />
                                            <span>Me siento poco conectado</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Me siento moderadamente conectado" name="EIM_P3" type="radio"  />
                                            <span>Me siento moderadamente conectado</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Me siento bien conectado " name="EIM_P3" type="radio"  />
                                            <span>Me siento bien conectado </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Me siento extremadamente conectado" name="EIM_P3" type="radio"  />
                                            <span>Me siento extremadamente conectado</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >4. Pensando en el futuro ¿Dónde te gustaría vivir el resto de tu vida?</span> 
                                    </p>   
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Definitivamente me mudaría a otro territorio"  name="EIM_P4" type="radio"  />
                                            <span>Definitivamente me mudaría a otro territorio</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Probablemente me mudaría a otro territorio"  name="EIM_P4" type="radio"  />
                                            <span>Probablemente me mudaría a otro territorio</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Es incierto si quedarme en Barranquilla o moverme a otro territorio"  name="EIM_P4" type="radio"  />
                                            <span>Es incierto si quedarme en Barranquilla o moverme a otro territorio</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="otro territorio"  name="EIM_P4" type="radio"  />
                                            <span>otro territorio</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Probablemente me quedaría en Barranquilla"  name="EIM_P4" type="radio"  />
                                            <span>Probablemente me quedaría en Barranquilla</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Definitivamente me gustaría quedarme en Barranquilla"  name="EIM_P4" type="radio"  />
                                            <span>Definitivamente me gustaría quedarme en Barranquilla </span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >5. ¿Qué tan seguido te sientes aislado por la sociedad Barranquillera?</span> 
                                    </p>   
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Siempre" name="EIM_P5" type="radio"  />
                                            <span>Siempre</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Usualmente" name="EIM_P5" type="radio"  />
                                            <span>Usualmente</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Algunas veces" name="EIM_P5" type="radio"  />
                                            <span>Algunas veces</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Pocas veces" name="EIM_P5" type="radio"  />
                                            <span>Pocas veces</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Nunca" name="EIM_P5" type="radio"  />
                                            <span>Nunca</span>
                                        </label>
                                    </p>
                                </div>
                                
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >6. ¿Qué tanto comprende la problemática política que enfrenta Barranquilla?</span> 
                                    </p>  
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy poco" name="EIM_P6" type="radio"  />
                                            <span>Muy poco</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Poco" name="EIM_P6" type="radio"  />
                                            <span>Poco</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Moderado" name="EIM_P6" type="radio"  />
                                            <span>Moderado</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Bien" name="EIM_P6" type="radio"  />
                                            <span>Bien</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy bien" name="EIM_P6" type="radio"  />
                                            <span>Muy bien</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >7. En los últimos 12 meses ¿Con qué frecuencia has discutido problemas o situaciones políticas de Barranquilla con otras personas?</span> 
                                    </p>   
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Nunca" name="EIM_P7" type="radio"  />
                                            <span>Nunca</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al año" name="EIM_P7" type="radio"  />
                                            <span>Una vez al año</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al mes" name="EIM_P7" type="radio"  />
                                            <span>Una vez al mes</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez a la semana" name="EIM_P7" type="radio"  />
                                            <span>Una vez a la semana</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Casi todos los días" name="EIM_P7" type="radio"  />
                                            <span>Casi todos los días</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >8. Existen diferentes maneras de mejorar el estado de un territorio o ayudar a prevenir para que se vayan mal las cosas. Durante los últimos 12 meses ¿Ha usted realizado alguna de las siguientes? Responda SI (1) o NO (0)</span> 
                                    </p>   
                                    <ul>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Tratar de convencer a alguien de cambiar su opinión política</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_1" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_1" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Tratar de influenciar a otros en como votar</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_2" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_2" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Realizar declaraciones políticas en público o en línea sobre el territorio</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_3" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_3" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Comprometerse en discusiones políticas sobre el territorio</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_4" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_4" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Contactar al algún dirigente o representante político</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_5" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_5" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Trabajar en algún partido político o grupo de acción</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_6" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_6" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Portar alguna insignia, emblema, imagen o producto de algún partido político</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_7" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_7" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Firmar una petición o solicitud</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_8" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_8" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Ser parte de una manifestación pública</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_9" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_9" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Boicotear sobre algunos productos</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_10" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_10" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <span style="color: #9e9e9e;">Recoger firmas para peticiones o solicitudes</span>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="Si" name="EIM_P8_11" type="radio"  />
                                                        <span>Si</span>
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input class="with-gap EC_RES" value="No" name="EIM_P8_11" type="radio"  />
                                                        <span>No</span>
                                                    </label>
                                                </p>
                                            </p>
                                        </li>
                                    </ul>                                  
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >9. En los último 12 meses ¿Qué tan seguido has cenado con algún Barranquillero que no es parte de tu familia?</span> 
                                    </p>   
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Nunca" name="EIM_P9" type="radio"  />
                                            <span>Nunca</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al año" name="EIM_P9" type="radio"  />
                                            <span>Una vez al año</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al mes" name="EIM_P9" type="radio"  />
                                            <span>Una vez al mes</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez a la semana" name="EIM_P9" type="radio"  />
                                            <span>Una vez a la semana</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Casi todos los días" name="EIM_P9" type="radio"  />
                                            <span>Casi todos los días</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >10. Piense en los Barranquilleros que conoce ¿Con cuántos ha tenido una conversación en persona, por teléfono o mensajes?</span style="color: #9e9e9e;"> 
                                    </p>    
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="0" name="EIM_P10" type="radio"  />
                                            <span>0</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="1 a 2" name="EIM_P10" type="radio"  />
                                            <span>1 a 2 </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="3 a 6" name="EIM_P10" type="radio"  />
                                            <span>3 a 6 </span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="7 a 14" name="EIM_P10" type="radio"  />
                                            <span>7 a 14</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="15 o mas" name="ei_group_afectacion" type="radio"  />
                                            <span>15 o más</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >11. Muchas personas suelen ayudar a los otros a través de favores tales como un chance, cuidar a los niños, prestar algún de dinero, entre otros. En los últimos 12 meses ¿Con que frecuencia ha ayudado a alguien Barranquillero con favores?</span> 
                                    </p>   
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Nunca" name="EIM_P11" type="radio"  />
                                            <span>Nunca</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al año" name="EIM_P11" type="radio"  />
                                            <span>Una vez al año</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez al mes" name="EIM_P11" type="radio"  />
                                            <span>Una vez al mes</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Una vez a la semana" name="EIM_P11" type="radio"  />
                                            <span>Una vez a la semana</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Casi todos los días" name="EIM_P11" type="radio"  />
                                            <span>Casi todos los días</span>
                                        </label>
                                    </p>
                                </div>
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span  style="color: #9e9e9e;" for="" class=" " >12. ¿Cómo evaluaría la dificultad para acceder o ver a un doctor?</span  style="color: #9e9e9e;"> 
                                    </p>    
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy difícil" name="EIM_P12" type="radio"  />
                                            <span>Muy difícil</span>
                                        </label>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Difícil" name="EIM_P12" type="radio"  />
                                            <span>Difícil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Moderada" name="EIM_P12" type="radio"  />
                                            <span>Moderada</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Fácil" name="EIM_P12" type="radio"  />
                                            <span>Fácil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy fácil" name="EIM_P12" type="radio"  />
                                            <span>Muy fácil</span>
                                        </label>
                                    </p>
                                </div>      
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span  style="color: #9e9e9e;" for="" class=" " >13. ¿Cómo evaluaría  la dificultad para buscar un trabajo?</span  style="color: #9e9e9e;"> 
                                    </p>    
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy difícil" name="EIM_P13" type="radio"  />
                                            <span>Muy difícil</span>
                                        </label>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Difícil" name="EIM_P13" type="radio"  />
                                            <span>Difícil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Moderada" name="EIM_P13" type="radio"  />
                                            <span>Moderada</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Fácil" name="EIM_P13" type="radio"  />
                                            <span>Fácil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy fácil" name="EIM_P13" type="radio"  />
                                            <span>Muy fácil</span>
                                        </label>
                                    </p>
                                </div>      
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span  style="color: #9e9e9e;" for="" class=" " >14. ¿Cómo evaluaría  la dificultad para obtener ayuda con problemas legales?</span  style="color: #9e9e9e;"> 
                                    </p>    
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy difícil" name="EIM_P14" type="radio"  />
                                            <span>Muy difícil</span>
                                        </label>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Difícil" name="EIM_P14" type="radio"  />
                                            <span>Difícil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Moderada" name="EIM_P14" type="radio"  />
                                            <span>Moderada</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Fácil" name="EIM_P14" type="radio"  />
                                            <span>Fácil</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Muy fácil" name="EIM_P14" type="radio"  />
                                            <span>Muy fácil</span>
                                        </label>
                                    </p>
                                </div>   
                                <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                    <p>
                                        <span style="color: #9e9e9e;" for="" class=" " >15. En Barranquilla ¿Cómo accedería a servicio médico por un dolor crónico de espalda?</span style="color: #9e9e9e;"> 
                                    </p>    
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="No sabe" name="EIM_P15" type="radio"  />
                                            <span>No sabe</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Preguntar a un conocido" name="EIM_P15" type="radio"  />
                                            <span>Preguntar a un conocido</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Visitar un médico general" name="EIM_P15" type="radio"  />
                                            <span>Visitar un médico general</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Dirigiéndose a atención por urgencia" name="EIM_P15" type="radio"  />
                                            <span>Dirigiéndose a atención por urgencia</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input class="with-gap EC_RES" value="Llamando a una ambulancia" name="EIM_P15" type="radio"  />
                                            <span>Llamando a una ambulancia</span>
                                        </label>
                                    </p>                               
                                </div>         
                                
                            </li>
                        </ul>
                         <!-- BTN QUE ENVIA EL FORMULARIO -->
                        <div class="center section">
                            <button  class=" btn  waves-effect waves-light color-background" type="" id="ei_guardar">GUARDAR </button>  
                        </div> 


                    </form>

                          
                </div>
                
            </div>
        </div>
	</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../PUBLIC/materialize/js/materialize.min.js"></script>
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


