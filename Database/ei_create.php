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
    
    
    $E3SP1 = mysqli_real_Escape_string($con, $_POST['E3SP1']);
    $E3SP2 = mysqli_real_Escape_string($con, $_POST['E3SP2']);
    $E3SP3 = mysqli_real_Escape_string($con, $_POST['E3SP3']);
    $E3SP4 = mysqli_real_Escape_string($con, $_POST['E3SP4']);
    $E3SP5 = mysqli_real_Escape_string($con, $_POST['E3SP5']);
    $E3SP6 = mysqli_real_Escape_string($con, $_POST['E3SP6']);
    $E3SP7 = mysqli_real_Escape_string($con, $_POST['E3SP7']);
    $E3SP8 = mysqli_real_Escape_string($con, $_POST['E3SP8']);
  
    $E3SP9_1 = mysqli_real_Escape_string($con, $_POST['E3SP9_1']);
    $E3SP9_2 = mysqli_real_Escape_string($con, $_POST['E3SP9_2']);
    $E3SP9_3 = mysqli_real_Escape_string($con, $_POST['E3SP9_3']);
   
    $E3SP10_1 = mysqli_real_Escape_string($con, $_POST['E3SP10_1']);
    $E3SP10_2 = mysqli_real_Escape_string($con, $_POST['E3SP10_2']);
   
    $E3SP11 = mysqli_real_Escape_string($con, $_POST['E3SP11']);
    $E3SP12 = mysqli_real_Escape_string($con, $_POST['E3SP12']);
   
    $E3SP13 = mysqli_real_Escape_string($con, $_POST['E3SP13']);
    $E3SP13_1 = mysqli_real_Escape_string($con, $_POST['E3SP13_1']);
    
    $E3SP14 = mysqli_real_Escape_string($con, $_POST['E3SP14']);
    
    $E3SP15_FIS = mysqli_real_Escape_string($con, $_POST['E3SP15_FIS']);
    $E3SP15_AUD = mysqli_real_Escape_string($con, $_POST['E3SP15_AUD']);
    $E3SP15_VIS = mysqli_real_Escape_string($con, $_POST['E3SP15_VIS']);
    $E3SP15_COG = mysqli_real_Escape_string($con, $_POST['E3SP15_COG']);
    $E3SP15_PSI = mysqli_real_Escape_string($con, $_POST['E3SP15_PSI']);
    $E3SP15_MUL = mysqli_real_Escape_string($con, $_POST['E3SP15_MUL']);
    $E3SP15_SOR = mysqli_real_Escape_string($con, $_POST['E3SP15_SOR']);

    $E3SP16_1 = mysqli_real_Escape_string($con, $_POST['E3SP16_1']);
    $E3SP16_2 = mysqli_real_Escape_string($con, $_POST['E3SP16_2']);
    $E3SP16_3 = mysqli_real_Escape_string($con, $_POST['E3SP16_3']);
    $E3SP16_4 = mysqli_real_Escape_string($con, $_POST['E3SP16_4']);
    $E3SP16_5 = mysqli_real_Escape_string($con, $_POST['E3SP16_5']);
    $E3SP16_6 = mysqli_real_Escape_string($con, $_POST['E3SP16_6']);
    $E3SP16_7 = mysqli_real_Escape_string($con, $_POST['E3SP16_7']);
    $E3SP16_8 = mysqli_real_Escape_string($con, $_POST['E3SP16_8']);

    $E3SP17 = mysqli_real_Escape_string($con, $_POST['E3SP17']);
    $E3SP17_1 = mysqli_real_Escape_string($con, $_POST['E3SP17_1']);
    $E3SP17_2 = mysqli_real_Escape_string($con, $_POST['E3SP17_2']);
    
    $E3SP18 = mysqli_real_Escape_string($con, $_POST['E3SP18']);
    $E3SP18_1 = mysqli_real_Escape_string($con, $_POST['E3SP18_1']);
    
    $E3SP19 = mysqli_real_Escape_string($con, $_POST['E3SP19']);
    $E3SP20 = mysqli_real_Escape_string($con, $_POST['E3SP20']);

    $eie_p1 = mysqli_real_Escape_string($con, $_POST['eie_p1']);
    $eie_p2 = mysqli_real_Escape_string($con, $_POST['eie_p2']);
    $eie_p2_1 = mysqli_real_Escape_string($con, $_POST['eie_p2_1']);
    $eie_p3 = mysqli_real_Escape_string($con, $_POST['eie_p3']);
    $eie_p4 = mysqli_real_Escape_string($con, $_POST['eie_p4']);
    $eie_p5 = mysqli_real_Escape_string($con, $_POST['eie_p5']);
    $eie_p6 = mysqli_real_Escape_string($con, $_POST['eie_p6']);
    $eie_p7 = mysqli_real_Escape_string($con, $_POST['eie_p7']);

    $EIT_P1 = mysqli_real_Escape_string($con, $_POST['EIT_P1']);
    $EIT_P2 = mysqli_real_Escape_string($con, $_POST['EIT_P2']);
    $EIT_P3 = mysqli_real_Escape_string($con, $_POST['EIT_P3']);
    $EIT_P4 = mysqli_real_Escape_string($con, $_POST['EIT_P4']);
    $EIT_P5 = mysqli_real_Escape_string($con, $_POST['EIT_P5']);
    $EIT_P6 = mysqli_real_Escape_string($con, $_POST['EIT_P6']);
    $EIT_P7 = mysqli_real_Escape_string($con, $_POST['EIT_P7']);

    $EIT_P8_1 = mysqli_real_Escape_string($con, $_POST['EIT_P8_1']);
    $EIT_P8_2 = mysqli_real_Escape_string($con, $_POST['EIT_P8_2']);
    $EIT_P8_3 = mysqli_real_Escape_string($con, $_POST['EIT_P8_3']);
    $EIT_P8_4 = mysqli_real_Escape_string($con, $_POST['EIT_P8_4']);
    $EIT_P8_5 = mysqli_real_Escape_string($con, $_POST['EIT_P8_5']);
    $EIT_P8_6 = mysqli_real_Escape_string($con, $_POST['EIT_P8_6']);
    $EIT_P8_7 = mysqli_real_Escape_string($con, $_POST['EIT_P8_7']);

    $EIT_P9_1 = mysqli_real_Escape_string($con, $_POST['EIT_P9_1']);
    $EIT_P9_2 = mysqli_real_Escape_string($con, $_POST['EIT_P9_2']);

    $EIT_P10 = mysqli_real_Escape_string($con, $_POST['EIT_P10']);
    $EIT_P11 = mysqli_real_Escape_string($con, $_POST['EIT_P11']);
    $EIT_P12 = mysqli_real_Escape_string($con, $_POST['EIT_P12']);
    $EIT_P13 = mysqli_real_Escape_string($con, $_POST['EIT_P13']);
    $EIT_P14 = mysqli_real_Escape_string($con, $_POST['EIT_P14']);
    $EIT_P15 = mysqli_real_Escape_string($con, $_POST['EIT_P15']);
    $EIT_P16 = mysqli_real_Escape_string($con, $_POST['EIT_P16']);

    $EIT_P17 = mysqli_real_Escape_string($con, $_POST['EIT_P17']);
    $EIT_P17_1 = mysqli_real_Escape_string($con, $_POST['EIT_P17_1']);
    $EIT_P18 = mysqli_real_Escape_string($con, $_POST['EIT_P18']);
    $EIT_P18_1 = mysqli_real_Escape_string($con, $_POST['EIT_P18_1']);
    $EIT_P19 = mysqli_real_Escape_string($con, $_POST['EIT_P19']);
    $EIT_P19_1 = mysqli_real_Escape_string($con, $_POST['EIT_P19_1']);
    $EIT_P20 = mysqli_real_Escape_string($con, $_POST['EIT_P20']);
    $EIT_P20_1 = mysqli_real_Escape_string($con, $_POST['EIT_P20_1']);
    $EIT_P21 = mysqli_real_Escape_string($con, $_POST['EIT_P21']);
    $EIT_P21_1 = mysqli_real_Escape_string($con, $_POST['EIT_P21_1']);
    $EIT_PObs = mysqli_real_Escape_string($con, $_POST['EIT_PObs']);
    
    $EIM_P1 = mysqli_real_Escape_string($con, $_POST['EIM_P1']);
    $EIM_P2 = mysqli_real_Escape_string($con, $_POST['EIM_P2']);
    $EIM_P3 = mysqli_real_Escape_string($con, $_POST['EIM_P3']);
    $EIM_P4 = mysqli_real_Escape_string($con, $_POST['EIM_P4']);
    $EIM_P5 = mysqli_real_Escape_string($con, $_POST['EIM_P5']);
    $EIM_P6 = mysqli_real_Escape_string($con, $_POST['EIM_P6']);
    $EIM_P7 = mysqli_real_Escape_string($con, $_POST['EIM_P7']);
    $EIM_P8_1 = mysqli_real_Escape_string($con, $_POST['EIM_P8_1']);
    $EIM_P8_2 = mysqli_real_Escape_string($con, $_POST['EIM_P8_2']);
    $EIM_P8_3 = mysqli_real_Escape_string($con, $_POST['EIM_P8_3']);
    $EIM_P8_4 = mysqli_real_Escape_string($con, $_POST['EIM_P8_4']);
    $EIM_P8_5 = mysqli_real_Escape_string($con, $_POST['EIM_P8_5']);
    $EIM_P8_6 = mysqli_real_Escape_string($con, $_POST['EIM_P8_6']);
    $EIM_P8_7 = mysqli_real_Escape_string($con, $_POST['EIM_P8_7']);
    $EIM_P8_8 = mysqli_real_Escape_string($con, $_POST['EIM_P8_8']);
    $EIM_P8_9 = mysqli_real_Escape_string($con, $_POST['EIM_P8_9']);
    $EIM_P8_10 = mysqli_real_Escape_string($con, $_POST['EIM_P8_10']);
    $EIM_P8_11 = mysqli_real_Escape_string($con, $_POST['EIM_P8_11']);

    $EIM_P9 = mysqli_real_Escape_string($con, $_POST['EIM_P9']);
    $EIM_P10 = mysqli_real_Escape_string($con, $_POST['EIM_P10']);
    $EIM_P11 = mysqli_real_Escape_string($con, $_POST['EIM_P11']);
    $EIM_P12 = mysqli_real_Escape_string($con, $_POST['EIM_P12']);
    $EIM_P13 = mysqli_real_Escape_string($con, $_POST['EIM_P13']);
    $EIM_P14 = mysqli_real_Escape_string($con, $_POST['EIM_P14']);
    $EIM_P15 = mysqli_real_Escape_string($con, $_POST['EIM_P15']);
    
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
    E3P12='$E3P12', 

    E3SP1='$E3SP1', 
    E3SP2='$E3SP2', 
    E3SP3='$E3SP3', 
    E3SP4='$E3SP4', 
    E3SP5='$E3SP5', 
    E3SP6='$E3SP6', 
    E3SP7='$E3SP7', 
    E3SP8='$E3SP8', 
    
    E3SP9_1='$E3SP9_1', 
    E3SP9_2='$E3SP9_2', 
    E3SP9_3='$E3SP9_3', 
    
    E3SP10_1='$E3SP10_1', 
    E3SP10_2='$E3SP10_2', 
   
    E3SP11='$E3SP11', 
    E3SP12='$E3SP12',

    E3SP13='$E3SP13', 
    E3SP13_1='$E3SP13_1', 
    
    E3SP14='$E3SP14', 

    E3SP15_FIS='$E3SP15_FIS', 
    E3SP15_AUD='$E3SP15_AUD', 
    E3SP15_VIS='$E3SP15_VIS', 
    E3SP15_COG='$E3SP15_COG', 
    E3SP15_PSI='$E3SP15_PSI', 
    E3SP15_MUL='$E3SP15_MUL', 
    E3SP15_SOR='$E3SP15_SOR', 

    E3SP16_1='$E3SP16_1', 
    E3SP16_2='$E3SP16_2', 
    E3SP16_3='$E3SP16_3', 
    E3SP16_4='$E3SP16_4', 
    E3SP16_5='$E3SP16_5', 
    E3SP16_6='$E3SP16_6', 
    E3SP16_7='$E3SP16_7', 
    E3SP16_8='$E3SP16_8', 

    E3SP17='$E3SP17', 
    E3SP17_1='$E3SP17_1', 
    E3SP17_2='$E3SP17_2', 

    E3SP18='$E3SP18', 
    E3SP18_1='$E3SP18_1', 
    
    E3SP19='$E3SP19', 
    E3SP19='$E3SP19',
    
    eie_p1 = '$eie_p1' ,
    eie_p2 = '$eie_p2' ,
    eie_p2_1 = '$eie_p2_1',
    eie_p3 = '$eie_p3',
    eie_p4 = '$eie_p4',
    eie_p5 = '$eie_p5',
    eie_p6 = '$eie_p6',
    eie_p7 = '$eie_p7',

    EIT_P1 = '$EIT_P1',
    EIT_P2 = '$EIT_P2',
    EIT_P3 = '$EIT_P3',
    EIT_P4 = '$EIT_P4',
    EIT_P6 = '$EIT_P6',
    EIT_P7 = '$EIT_P7',
    EIT_P8_1 = '$EIT_P8_1',
    EIT_P8_2 = '$EIT_P8_2',
    EIT_P8_3 = '$EIT_P8_3',
    EIT_P8_4 = '$EIT_P8_4',
    EIT_P8_5 = '$EIT_P8_5',
    EIT_P8_6 = '$EIT_P8_6',
    EIT_P8_7 = '$EIT_P8_7',
    EIT_P9_1 = '$EIT_P9_1',
    EIT_P9_2 = '$EIT_P9_2',
    EIT_P10 = '$EIT_P10',
    EIT_P11 = '$EIT_P11',
    EIT_P12 = '$EIT_P12',
    EIT_P13 = '$EIT_P13',
    EIT_P14 = '$EIT_P14',
    EIT_P15 = '$EIT_P15',
    EIT_P16 = '$EIT_P16',
    EIT_P17 = '$EIT_P17',
    EIT_P17_1 = '$EIT_P17_1',
    EIT_P18 = '$EIT_P18',
    EIT_P18_1 = '$EIT_P18_1',
    EIT_P19 = '$EIT_P19',
    EIT_P19_1 = '$EIT_P19_1',
    EIT_P20 = '$EIT_P20',
    EIT_P20_1 = '$EIT_P20_1',
    EIT_P21 = '$EIT_P21',
    EIT_P21_1 = '$EIT_P21_1',
    EIT_PObs = '$EIT_PObs',

    EIM_P1 = '$EIM_P1',
    EIM_P2 = '$EIM_P2',
    EIM_P3 = '$EIM_P3',
    EIM_P4 = '$EIM_P4',
    EIM_P5 = '$EIM_P5',
    EIM_P6 = '$EIM_P6',
    EIM_P7 = '$EIM_P7',
    
    EIM_P8_1 = '$EIM_P8_1',
    EIM_P8_2 = '$EIM_P8_2',
    EIM_P8_3 = '$EIM_P8_3',
    EIM_P8_4 = '$EIM_P8_4',
    EIM_P8_5 = '$EIM_P8_5',
    EIM_P8_6 = '$EIM_P8_6',
    EIM_P8_7 = '$EIM_P8_7',
    EIM_P8_8 = '$EIM_P8_8',
    EIM_P8_9 = '$EIM_P8_9',
    EIM_P8_10 = '$EIM_P8_10',
    EIM_P8_11 = '$EIM_P8_11',
 
    EIM_P9 = '$EIM_P9',
    EIM_P10 = '$EIM_P10',
    EIM_P11 = '$EIM_P11',
    EIM_P12 = '$EIM_P12',
    EIM_P13 = '$EIM_P13',
    EIM_P14 = '$EIM_P14',
    EIM_P15 = '$EIM_P15'


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