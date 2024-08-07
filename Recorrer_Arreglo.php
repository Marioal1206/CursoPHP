<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
     'mayo', 'junio', 'julio', 'agosto',
     'septiembre', 'octubre', 'noviembre', 'diciembre'
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Mese del año</h1>
    <ul>
        <?php
        foreach($meses as $mes){
            echo '<li>'. $mes .'</li>';
        }
        
        ?>
    </ul>
    
</body>
</html>