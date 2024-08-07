<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
     'mayo', 'junio', 'julio', 'agosto',
     'septiembre', 'octubre', 'noviembre', 'diciembre'
);
$alex = array('telefono' => '8673083084', 'edad' => 18, 'apellido' => 'Rodriguez', 'pais' => 'mexico');


    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Documento</title>
    </head>
    <body>
        <h1>Meses</h1>
        <ul>
            <?php
                //foreach($meses as $mes){
                //    echo "<li>". $mes ."</li>";
                //}
                foreach($alex as $dato => $valor){
                    echo "<li>". $valor ."</li>";
                }
            ?>
        </ul>
    </body>
</html>