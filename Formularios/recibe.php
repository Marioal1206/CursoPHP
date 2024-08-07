<?php
//print_r($_POST);

// if($_POST){
//     $nombre=$_POST['nombre'];
//     $sexo=$_POST['sexo'];
//     $year=$_POST['year'];
//     $terminos=$_POST['terminos'];

//     echo 'Hola ' .$nombre. ' eres ' .$sexo;
// }else{
//     header('location: http://localhost/CursoPHP/Formularios/');
// }
$nombre = $_GET['nombre'];

echo htmlspecialchars($nombre)
?>