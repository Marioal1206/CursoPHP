<?php
$conexion = new mysqli('localhost','root','','prueba_informacion');
echo $conexion ->connect_errno;

if($conexion -> connect_errno){
    die('lo sineto hubo un problema con la conexion con el servidor');
}


?>