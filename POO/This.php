<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarinformacion(){
        echo $this->nombre .' tiene ' .$this->edad .' años de adad y es de ' .$this->pais ;
    }
}
$carlos = new Persona;
$carlos -> nombre = 'carlos arturo';
$carlos -> edad  = 23;
$carlos -> pais = 'Mexico';
$carlos -> mostrarinformacion();
echo '<br>';
$alejandro = new Persona;
$alejandro -> nombre = 'Alejandro';
$alejandro -> edad  = 43;
$alejandro -> pais = 'Peru';
$alejandro -> mostrarinformacion();
?>