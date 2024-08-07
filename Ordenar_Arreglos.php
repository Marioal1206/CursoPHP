<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril',
     'mayo', 'junio', 'julio', 'agosto',
     'septiembre', 'octubre', 'noviembre', 'diciembre'
);

$numeros = array(1,34,56,73,2,47,90.637,3,88,4);
sort($numeros)
//rsort($meses)

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
        foreach($numeros as $num){
            echo '<li>'. $num .'</li>';
        }
        
        ?>
    </ul>
    
</body>
</html>