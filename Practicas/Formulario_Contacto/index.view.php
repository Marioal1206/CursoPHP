<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" class="input-control" name="nombre" placeholder="Nombre">
        <input type="text" class="input-control" name="correo" placeholder="Correo">

        <textarea name="mensaje" class="input-control" name="mensaje" placeholder="Mensaje"></textarea>
        <?php if (!empty($errores)) : ?>
            <div class="alert error">
                <?php echo $errores ?>
            </div>
        <?php elseif($enviado): ?>
            <div class="alert sucess">
                <p>Enviado Correctamente</p>
            </div>
        <?php endif ?>     
        <input type="submit" value="Enviar correo" name="submit" class="btn btn-primary">
    </form>

    </div>
</body>
</html>