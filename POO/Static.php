<?php

class Peersona {
    public static $dia = '7 de septiembre';

    public static function saludo($nombre = null){
        if($nombre == null){
            return 'Hola buen dia ';
        }else{
            return 'Hola buen dia ' .$nombre;
        }
    }
}

//  $carlos = new Peersona;
//  echo $carlos -> saludo('carlos');
 
echo Peersona::saludo();
