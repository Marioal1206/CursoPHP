<?php
session_start();
$_SESSION['nombre'] = 'carlos';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesiones</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir ala pagina 2</a>
</body>
</html>