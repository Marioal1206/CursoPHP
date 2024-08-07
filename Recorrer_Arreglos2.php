<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
     'mayo', 'junio', 'julio', 'agosto',
     'septiembre', 'octubre', 'noviembre', 'diciembre'
);

//for($i = 0 ; $i< count($meses);$i++){
//    echo $meses[$i] ."</br>";
//}
$i = 0;
while($i < count($meses)){
    
    echo $meses[$i] ."</br>";
    $i++;
}

    
?>