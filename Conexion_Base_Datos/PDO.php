<?php
//$id = $_GET['id'];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola','root', '');
    echo 'Conexion OK <br>';

    // $resultados = $conexion -> query("SELECT * FROM usuarios where ID = $id");

    //  foreach($resultados as $fila){
    //      echo $fila['ID'] .'--';
    //      echo $fila['nombre'] .'<br>';
    // }



    $resultado = $conexion->prepare('SELECT * FROM usuarios');

    $resultado->execute(array());
    $respuestas = $resultado->fetchAll();


    //print_r($respuestas);

    foreach($respuestas as $fila){
        echo $fila['id'] .'--';
        echo $fila['nombre'] .'--';
        echo $fila['email'] .'-- </br>';
    }

}catch(PDOException $e){
    //Mostrar Error
    echo "Error" .$e ->getMessage();
}

?>