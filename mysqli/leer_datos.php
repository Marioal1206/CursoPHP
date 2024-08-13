<?php
$conexion = new mysqli('localhost','root','','prueba_informacion');
//echo $conexion ->connect_errno;

if($conexion -> connect_errno){
    die('lo sineto hubo un problema con la conexion con el servidor');
}else{
    $sql ='SELECT * FROM usuarios';
    $resultado = $conexion ->query($sql);

    //echo $resultado -> num_rows;
    if($resultado -> num_rows){
        // print_r($resultado -> fetch_assoc());
        // echo '</br>';
        // print_r($resultado -> fetch_assoc());
        // echo '</br>';
        // echo $resultado ->fetch_assoc()['nombre'];
        $i =0;
        // while($i < $resultado ->num_rows){
        //     echo $resultado -> fetch_assoc()['ID'] .'--'. fetch_assoc()['nombre'];

        //     $i ++;
        // }

        while($fila = $resultado -> fetch_assoc()){
            echo $fila['ID'] .'--'. $fila['nombre'] .'--'. $fila['edad'] .'</br>';
        }
    }else{
        echo 'No hay datos...';
    }
}


?>