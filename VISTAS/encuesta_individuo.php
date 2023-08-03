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
                
              

                <div class="card-content "  >
                   
                    <form action="" method="post" id="ec_form">
                        <div class="row">
                            <div class="section card-image center card-panel" style=" border-top: #00c853 5px  solid;">
                                <h3 class="card-title">ENCUESTA INDIVIDUO </h3> 
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
                            <div  class="input-field col m12 card-panel  s12 ">
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
                            <div  class="input-field col m12 card-panel  s12 ENCUESTA_CASA">
                                <p>
                                    <label for="" class=" " >¿Es usted Victima de Conflicto Interno?</label> 
                                </p>   
                                <p>
                                    <label>
                                        <input class="with-gap EC_RES" name="ei_group_conflicto_i" type="radio"  />
                                        <span>Sí</span>
                                    </label>
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
                                    <label for="" class=" " >¿Qué tipo de afectación tuvo?</label> 
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
                                        <span>Persona victima de violencia basada en género (VBG)</span>
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
                                    <label for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su vida actualmente?:</label> 
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
                                    <label for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su ingreso actualmente?</label> 
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
                                    <label for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su salud actualmente?</label> 
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
                                    <label for="" class=" " >En general, qué tan satisfecho(a) se siente ... con su nivel de seguridad actualmente?</label> 
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
                                    <label for="" class=" " >En En general, qué tan satisfecho(a) se siente ... con su trabajo/actividad actualmente?</label> 
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
                                    <label for="" class=" " >En general, ¿qué tan satisfecho/a se siente _____ con su tiempo libre?</label> 
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


