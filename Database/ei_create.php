<?php

    include('../CONFIG/conexion.php');  
    
    $id_indi = mysqli_real_Escape_string($con, $_POST['id_indi']);
    $E3P4 = mysqli_real_Escape_string($con, $_POST['E3P4']);
    $fec_naci = mysqli_real_Escape_string($con, $_POST['fec_naci']);

    $E3P6 = mysqli_real_Escape_string($con, $_POST['E3P6']);
    $E3P6_1 = mysqli_real_Escape_string($con, $_POST['E3P6_1']);
    $E3P6_2 = mysqli_real_Escape_string($con, $_POST['E3P6_2']);

    $E3P7 = mysqli_real_Escape_string($con, $_POST['E3P7']);

    $E3P8 = mysqli_real_Escape_string($con, $_POST['E3P8']);
    $E3P8_PUN = mysqli_real_Escape_string($con, $_POST['E3P8_PUN']);

    $E3P9 = mysqli_real_Escape_string($con, $_POST['E3P9']);
    $E3P10 = mysqli_real_Escape_string($con, $_POST['E3P10']);
    $E3P10_1 = mysqli_real_Escape_string($con, $_POST['E3P10_1']);
    $E3P10_2 = mysqli_real_Escape_string($con, $_POST['E3P10_2']);
    $E3P10_3 = mysqli_real_Escape_string($con, $_POST['E3P10_3']);
    $E3P10_4 = mysqli_real_Escape_string($con, $_POST['E3P10_4']);
    $E3P10_5 = mysqli_real_Escape_string($con, $_POST['E3P10_5']);
    $E3P10_6 = mysqli_real_Escape_string($con, $_POST['E3P10_6']);
    $E3P10_7 = mysqli_real_Escape_string($con, $_POST['E3P10_7']);
    $E3P10_8 = mysqli_real_Escape_string($con, $_POST['E3P10_8']);
    $E3P10_9 = mysqli_real_Escape_string($con, $_POST['E3P10_9']);
    $E3P10_10 = mysqli_real_Escape_string($con, $_POST['E3P10_10']);
    $E3P10_11 = mysqli_real_Escape_string($con, $_POST['E3P10_11']);
    $E3P10_12 = mysqli_real_Escape_string($con, $_POST['E3P10_12']);

    $E3P11_VID = mysqli_real_Escape_string($con, $_POST['E3P11_VID']);
    $E3P11_ING = mysqli_real_Escape_string($con, $_POST['E3P11_ING']);
    $E3P11_SAL = mysqli_real_Escape_string($con, $_POST['E3P11_SAL']);
    $E3P11_SEG = mysqli_real_Escape_string($con, $_POST['E3P11_SEG']);
    $E3P11_TRA = mysqli_real_Escape_string($con, $_POST['E3P11_TRA']);
    $E3P11_TIE = mysqli_real_Escape_string($con, $_POST['E3P11_TIE']);
    $E3P12 = mysqli_real_Escape_string($con, $_POST['E3P12']);
    
    
    
    $query = "UPDATE individuo SET 
    E3P4='$E3P4',
    fec_naci='$fec_naci',
    E3P6='$E3P6',
    E3P6_1='$E3P6_1',
    E3P6_2='$E3P6_2',
    E3P7='$E3P7',
    E3P8='$E3P8',
    E3P8_PUN='$E3P8_PUN',
    E3P9='$E3P9',
    E3P10='$E3P10',
    E3P10_1='$E3P10_1',
    E3P10_2='$E3P10_2',
    E3P10_3='$E3P10_3',
    E3P10_4='$E3P10_4',
    E3P10_5='$E3P10_5',
    E3P10_6='$E3P10_6',
    E3P10_7='$E3P10_7',
    E3P10_8='$E3P10_8',
    E3P10_9='$E3P10_9',
    E3P10_10='$E3P10_10',
    E3P10_11='$E3P10_11',
    E3P10_12='$E3P10_12',
    E3P11_VID='$E3P11_VID',
    E3P11_ING='$E3P11_ING',
    E3P11_SAL='$E3P11_SAL',
    E3P11_SEG='$E3P11_SEG',
    E3P11_TRA='$E3P11_TRA',
    E3P11_TIE='$E3P11_TIE',
    E3P12='$E3P12'
     WHERE id_indi = '$id_indi'
    ";
    $resul_query = mysqli_query($con, $query);
     
    if(!$resul_query){
        echo 'Error: Numero de identificación ya existente, vuelva a intentar';
    }else{
      echo('Encuesta registrada exitosamente');
    }

    mysqli_close($con);
   


?>