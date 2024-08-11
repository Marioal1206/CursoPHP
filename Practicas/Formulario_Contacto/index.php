<?php
$errores = '';
$enviado = '';
if(isset($_POST['submit'])){
    $nombre =$_POST['nombre'];
    $correo =$_POST['correo'];
    $mensaje =$_POST['mensaje'];

    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre =filter_var($nombre, FILTER_SANITIZE_STRING);

    }else{
        $errores .= 'Porfavor ingresa un nombre <br>';

    }

    if(!empty($correo)){
        $correo =filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var( $correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Ingrese un correo valido <br>';
        }
    }else{
        $errores .= 'Porfavor ingresa un Correo <br>';

    }
    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    }else {
        $errores .= 'Porfavor ingresa el mensaje <br>';
    }

    if(!$errores){
        $enviar_a = 'mariordz0710@gmail.com';
        $asundo = 'correo enviado del formulario';
        $mensaje_preparado = "DE: $nombre  \n";
        $mensaje_preparado = "CPRREO: $correo \n";
        $mensaje_preparado = "MENSAJE:" . $mensaje; 

        //mail($enviar_a, $asunto, $mensaje_preparado);
        $enviado = true;
    }
}

require 'index.view.php';


?>