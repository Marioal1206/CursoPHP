<?php

class Usuario{
    public $nombre;
    public $correo;


    public function __construct($nombre, $correo)
    {
        $this -> nombre = $nombre;
        $this -> correo = $correo;       
    }

    public function mostrarcorreo(){
        echo 'Este es su correo ' .$this -> correo .'<br>';
        return $this;
    }

    public function mostrarnombre(){
        echo 'Este es su nombre ' .$this -> nombre .'<br>';
        return $this;
    }


}

$carlos = new Usuario('carlos', 'carlos@gmail.com');
$carlos -> mostrarnombre()-> mostrarcorreo();