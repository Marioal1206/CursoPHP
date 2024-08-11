<?php
    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        public function mostrarinformacion(){
            echo 'Hola Mundo';
        }
    }
$carlos = new Persona;
$carlos -> nombre = 'carlos arturo';
$carlos -> edad = 19;
$carlos -> pais = 'Mexico';
//$carlos -> mostrarinformacion();

$alejandro = new Persona;
$alejandro -> nombre = 'alejandro rodriguez';
$alejandro -> edad = 29;
$alejandro -> pais = 'Africa';

?>
