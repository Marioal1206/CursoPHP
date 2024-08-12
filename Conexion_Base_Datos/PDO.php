<?php
$id = $_GET['id'];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos','root', '');
    echo 'Conexion OK <br>';

    // $resultados = $conexion -> query("SELECT * FROM usuarios where ID = $id");

    //  foreach($resultados as $fila){
    //      echo $fila['ID'] .'--';
    //      echo $fila['nombre'] .'<br>';
    // }



    $resultado = $conexion->prepare('SELECT * FROM usuarios where ID = :id');

    $resultado->execute(array(':id' => 1));
    $respuestas = $resultado->fetch();
    print_r($respuestas);

}catch(PDOException $e){
    //Mostrar Error
    echo "Error" .$e ->getMessage();
}

?>