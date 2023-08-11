<?php

    include('../CONFIG/conexion.php');  
    
    $id_vivienda = mysqli_real_Escape_string($con, $_POST['id_vivienda']);
    $E1P1 = mysqli_real_Escape_string($con, $_POST['E1P1']);
    $E1P2 = mysqli_real_Escape_string($con, $_POST['E1P2']);
    $E1P3 = mysqli_real_Escape_string($con, $_POST['E1P3']);
    
    $E1P4_ACU = mysqli_real_Escape_string($con, $_POST['E1P4_ACU']);
    $E1P4_ACU_EST = mysqli_real_Escape_string($con, $_POST['E1P4_ACU_EST']);
    $E1P4_ALC = mysqli_real_Escape_string($con, $_POST['E1P4_ALC']);
    $E1P4_BAS = mysqli_real_Escape_string($con, $_POST['E1P4_BAS']);
    $E1P4_BAS_VEC = mysqli_real_Escape_string($con, $_POST['E1P4_BAS_VEC']);
    $E1P4_ENE = mysqli_real_Escape_string($con, $_POST['E1P4_ENE']);
    $E1P4_ENE_EST = mysqli_real_Escape_string($con, $_POST['E1P4_ENE_EST']);
    $E1P4_GAS = mysqli_real_Escape_string($con, $_POST['E1P4_GAS']);
    $E1P4_INT = mysqli_real_Escape_string($con, $_POST['E1P4_INT']);
    $E1P4_NIN = mysqli_real_Escape_string($con, $_POST['E1P4_NIN']);

    $E1P5_HUM = mysqli_real_Escape_string($con, $_POST['E1P5_HUM']);
    $E1P5_CAL_E = mysqli_real_Escape_string($con, $_POST['E1P5_CAL_E']);
    $E1P5_MAL_V = mysqli_real_Escape_string($con, $_POST['E1P5_MAL_V']);
    $E1P5_COC_L = mysqli_real_Escape_string($con, $_POST['E1P5_COC_L']);
    $E1P5_MAL_I = mysqli_real_Escape_string($con, $_POST['E1P5_MAL_I']);
    $E1P5_COD_D = mysqli_real_Escape_string($con, $_POST['E1P5_COD_D']);
    $E1P5_TAL_NE = mysqli_real_Escape_string($con, $_POST['E1P5_TAL_NE']);
    $E1P5_GOT_T = mysqli_real_Escape_string($con, $_POST['E1P5_GOT_T']);
    $E1P5_GRI_P = mysqli_real_Escape_string($con, $_POST['E1P5_GRI_P']);

    $E1P6_NIN = mysqli_real_Escape_string($con, $_POST['E1P6_NIN']);
    $E1P6_OTR = mysqli_real_Escape_string($con, $_POST['E1P6_OTR']);
    $E1P6_MON = mysqli_real_Escape_string($con, $_POST['E1P6_MON']);
    $E1P6_AVE = mysqli_real_Escape_string($con, $_POST['E1P6_AVE']);
    $E1P6_GAT = mysqli_real_Escape_string($con, $_POST['E1P6_GAT']);
    $E1P6_PER = mysqli_real_Escape_string($con, $_POST['E1P6_PER']);

    $E1P7_ADO = mysqli_real_Escape_string($con, $_POST['E1P7_ADO']);
    $E1P7_NEG = mysqli_real_Escape_string($con, $_POST['E1P7_NEG']);
    $E1P7_COM = mysqli_real_Escape_string($con, $_POST['E1P7_COM']);


    $E1P8_RUI = mysqli_real_Escape_string($con, $_POST['E1P8_RUI']);
    $E1P8_OLO = mysqli_real_Escape_string($con, $_POST['E1P8_OLO']);
    $E1P8_BAS = mysqli_real_Escape_string($con, $_POST['E1P8_BAS']);
    $E1P8_CON_A = mysqli_real_Escape_string($con, $_POST['E1P8_CON_A']);
    $E1P8_CON_RIO = mysqli_real_Escape_string($con, $_POST['E1P8_CON_RIO']);
    $E1P8_INV = mysqli_real_Escape_string($con, $_POST['E1P8_INV']);
    $E1P8_ANI = mysqli_real_Escape_string($con, $_POST['E1P8_ANI']);
    $E1P8_INC = mysqli_real_Escape_string($con, $_POST['E1P8_INC']);

    $E1P9 = mysqli_real_Escape_string($con, $_POST['E1P9']);
   
    $query = "UPDATE vivienda SET E1P1='$E1P1',E1P2='$E1P2',E1P3='$E1P3'
    ,E1P4_ACU='$E1P4_ACU'
    ,E1P4_ACU_EST='$E1P4_ACU_EST'
    ,E1P4_ALC='$E1P4_ALC'
    ,E1P4_BAS='$E1P4_BAS'
    ,E1P4_BAS_VEC='$E1P4_BAS_VEC'
    ,E1P4_ENE='$E1P4_ENE'
    ,E1P4_ENE_EST='$E1P4_ENE_EST'
    ,E1P4_GAS='$E1P4_GAS'
    ,E1P4_INT='$E1P4_INT'
    ,E1P4_NIN='$E1P4_NIN'

    ,E1P5_HUM='$E1P5_HUM'
    ,E1P5_CAL_E='$E1P5_CAL_E'
    ,E1P5_MAL_V='$E1P5_MAL_V'
    ,E1P5_COC_L='$E1P5_COC_L'
    ,E1P5_MAL_I='$E1P5_MAL_I'
    ,E1P5_COD_D='$E1P5_COD_D'
    ,E1P5_TAL_NE='$E1P5_TAL_NE'
    ,E1P5_GOT_T='$E1P5_GOT_T'
    ,E1P5_GRI_P='$E1P5_GRI_P'
    
    ,E1P6_PER='$E1P6_PER'
    ,E1P6_GAT='$E1P6_GAT'
    ,E1P6_AVE='$E1P6_AVE'
    ,E1P6_MON='$E1P6_MON'
    ,E1P6_OTR='$E1P6_OTR'
    ,E1P6_NIN='$E1P6_NIN'
    
    ,E1P7_ADO='$E1P7_ADO'
    ,E1P7_NEG='$E1P7_NEG'
    ,E1P7_COM='$E1P7_COM'
    
    ,E1P8_RUI='$E1P8_RUI'
    ,E1P8_OLO='$E1P8_OLO'
    ,E1P8_BAS='$E1P8_BAS'
    ,E1P8_CON_A='$E1P8_CON_A'
    ,E1P8_CON_RIO='$E1P8_CON_RIO'
    ,E1P8_INV='$E1P8_INV'
    ,E1P8_ANI='$E1P8_ANI'
    ,E1P8_INC='$E1P8_INC'

    ,E1P9='$E1P9', create_ev_at = now() ,E1Finalizado= 1 WHERE id_vivienda = '$id_vivienda'";
    $resul_query = mysqli_query($con, $query);
     
    if(!$resul_query){
        echo 'Error: Numero de identificación ya existente, vuelva a intentar';
    }else{
      echo('Encuesta registrado exitosamente');
    }

    mysqli_close($con);
   


?>