<?php

$paises = array('Mexico', 'Espa;a', 'Peru', 'Colombia', 'Venezuela');

/*foreach($paises as $pais){

    echo $pais .'</br>';

    if($pais == 'Peru'){
        break;
    }
}*/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Documento</title>
    </head>
    <body>
        <h1>Paises de latinoamerica </h1>
       <?php 
       
       foreach($paises as $pais){
        if($pais == 'Peru'){
            continue;
        }
        echo $pais .'</br>';
    
        
    }
       ?>
    </body>
</html>
