<?php
//if(condicion){
// Instrucciones
//}
 $edad = 18;
$nombre = 'carlos';
 if($edad < 18){
    echo '<h1>No puedes comprar alchol</h1>';
 }
 if($edad >= 18 || $nombre == 'carlos'){
    echo '<h1> Si puedes comprar alchol </h1>';
 }
?>