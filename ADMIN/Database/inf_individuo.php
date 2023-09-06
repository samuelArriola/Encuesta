<?php 
    include('../../CONFIG/conexion.php');  

    $tabla="";
    $sql="SELECT * FROM vivienda";
    $resul = mysqli_query($con, $sql);
    while( $row = mysqli_fetch_array($resul) ) {
        $data[] = array(
            'id_vivienda' => $row['id_vivienda'],
            'referencia' => $row['referencia'],
            'created_at' => $row['created_at']
        );
    }; 
    if(!isset($data))
    {
        $data=[];
    }
 
    echo json_encode($data);
?>