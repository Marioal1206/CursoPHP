<?php
$conexion = new mysqli('localhost','root','','prueba_informacion');
//echo $conexion ->connect_errno;

if($conexion -> connect_errno){
    die('lo sineto hubo un problema con la conexion con el servidor');
}else{
    $statement =$conexion ->prepare("INSERT INTO usuarios(ID, nombre, edad) values(?,?,?)");
    $statement->bind_param('ssi',$id, $nombre, $edad);
    $id=NULL;
    
    if(isset($_GET['nombre']) && isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }
    $statement->execute();
    echo 'fila agregada: ' .$conexion->affected_rows;
    
    
}


?>