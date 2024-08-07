<?php
$errores ='';
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        if(!empty($nombre)){
            // $nombre = trim($nombre);//quita espaciados al inicio y al final 
            // $nombre = htmlspecialchars($nombre);//evita la incercion de html
            // $nombre = stripslashes($nombre);//remueve los simbolos
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            echo "Tu nombre es: $nombre </br>";
        }else{
            $errores .= 'Por favor agrega un nombre </br>';
        }


        if(!empty($correo)){
            // $nombre = trim($nombre);//quita espaciados al inicio y al final 
            // $nombre = htmlspecialchars($nombre);//evita la incercion de html
            // $nombre = stripslashes($nombre);//remueve los simbolos
            $nombre = filter_var($correo, FILTER_SANITIZE_STRING);
            echo "Tu nombre es: $correo </br>";
        }else{
            $errores .= 'Por favor agrega un correo valido </br>';
        }
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="email" name="correo" placeholder="Correo">
        <?php if(!empty($errores)): ?>
            <div class="error">
                <?php
                echo $errores;
                ?>
            </div>
        <?php endif;?>

        <input type="submit" name="submit" value="Enviar">
        
    </form>
</body>
</html>