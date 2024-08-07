<?php

    if($_POST)
    {
        echo $_POST['nombre'];
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
        
</br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" id="hombre" value="Hombre">

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="mujer" value="Mujer">
        
        <select name="year" id="">
            <option value="2000">2000</option>
            <option value="2000">2001</option>
            <option value="2000">2002</option>
        </select>
<br>
        <input type="checkbox" name="terminos" id="terminos" value="true">
        <label for="terminos">Aceptar los terminos</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>