<?php
$conexion = new mysqli('localhost','root','','prueba_informacion');
//echo $conexion ->connect_errno;

if($conexion -> connect_errno){
    die('lo sineto hubo un problema con la conexion con el servidor');
}else{
$sql ="INSERT INTO usuarios values(null,'Antonio',28)";
    $conexion ->query($sql);

}




?>