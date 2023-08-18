<?php

    include('../CONFIG/conexion.php');  
    
    $id_hogar = mysqli_real_Escape_string($con, $_POST['id_hogar']);
    $E2P1 = mysqli_real_Escape_string($con, $_POST['E2P1']);
    $E2P2 = mysqli_real_Escape_string($con, $_POST['E2P2']);
    $E2P3 = mysqli_real_Escape_string($con, $_POST['E2P3']);

    $E2P4 = mysqli_real_Escape_string($con, $_POST['E2P4']);
    $E2P4_PDRE = mysqli_real_Escape_string($con, $_POST['E2P4_PDRE']);
    $E2P4_PTRO = mysqli_real_Escape_string($con, $_POST['E2P4_PTRO']);
    $E2P4_ABU = mysqli_real_Escape_string($con, $_POST['E2P4_ABU']);
    $E2P4_TIO = mysqli_real_Escape_string($con, $_POST['E2P4_TIO']);
    $E2P4_HER = mysqli_real_Escape_string($con, $_POST['E2P4_HER']);
    $E2P4_PRI = mysqli_real_Escape_string($con, $_POST['E2P4_PRI']);
    $E2P4_OTR = mysqli_real_Escape_string($con, $_POST['E2P4_OTR']);
    $E2P4_NO_P_HOG = mysqli_real_Escape_string($con, $_POST['E2P4_NO_P_HOG']);
    
    $E2P5 = mysqli_real_Escape_string($con, $_POST['E2P5']);
    $E2P6 = mysqli_real_Escape_string($con, $_POST['E2P6']);
    $E2P7 = mysqli_real_Escape_string($con, $_POST['E2P7']);
    $E2P8 = mysqli_real_Escape_string($con, $_POST['E2P8']);
    
    $E2P9_NIN = mysqli_real_Escape_string($con, $_POST['E2P9_NIN']);
    $E2P9_LMANO = mysqli_real_Escape_string($con, $_POST['E2P9_LMANO']);
    $E2P9_LDEO = mysqli_real_Escape_string($con, $_POST['E2P9_LDEO']);
    $E2P9_LPLTO = mysqli_real_Escape_string($con, $_POST['E2P9_LPLTO']);

    $E2P10 = mysqli_real_Escape_string($con, $_POST['E2P10']);
    $E2P11 = mysqli_real_Escape_string($con, $_POST['E2P11']);
    $E2P12 = mysqli_real_Escape_string($con, $_POST['E2P12']);
    $E2P13 = mysqli_real_Escape_string($con, $_POST['E2P13']);
    $E2P14 = mysqli_real_Escape_string($con, $_POST['E2P14']);
    $E2P15 = mysqli_real_Escape_string($con, $_POST['E2P15']);

   
    $query = "UPDATE hogar SET E2P1='$E2P1'
    ,E2P2='$E2P2'
    ,E2P3='$E2P3'

    ,E2P4='$E2P4'
    ,E2P4_PDRE='$E2P4_PDRE'
    ,E2P4_PTRO='$E2P4_PTRO'
    ,E2P4_ABU='$E2P4_ABU'
    ,E2P4_TIO='$E2P4_TIO'
    ,E2P4_HER='$E2P4_HER'
    ,E2P4_PRI='$E2P4_PRI'
    ,E2P4_OTR='$E2P4_OTR'
    ,E2P4_NO_P_HOG='$E2P4_NO_P_HOG'
    
    ,E2P5='$E2P5'
    ,E2P6='$E2P6'
    ,E2P7='$E2P7'
    ,E2P8='$E2P8'

    ,E2P9_NIN='$E2P9_NIN'
    ,E2P9_LMANO='$E2P9_LMANO'
    ,E2P9_LDEO='$E2P9_LDEO'
    ,E2P9_LPLTO='$E2P9_LPLTO'

    ,E2P10='$E2P10'
    ,E2P11='$E2P11'
    ,E2P12='$E2P12'
    ,E2P13='$E2P13'
    ,E2P14='$E2P14'
    ,E2P15='$E2P15'
    ,create_ev_at= now(),
    E2Finalizado= 1  WHERE id_familia = '$id_hogar'

    ";
    $resul_query = mysqli_query($con, $query);
     
    if(!$resul_query){
        echo 'Error: Numero de identificación ya existente, vuelva a intentar';
    }else{
      echo('Encuesta registrado exitosamente');
    }

    mysqli_close($con);
   


?>