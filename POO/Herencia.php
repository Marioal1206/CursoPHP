<?php
class Persona {
    public $nombre;
    public $edad;
    public $pais;
    function __construct($nombre, $edad, $pais)
    {
        $this->nombre =$nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    public function mostrarinformacion(){
        return $this->nombre .' tiene ' .$this->edad .' años de adad y es de ' .$this->pais ;
    }
}

class Estudiante extends Persona {
    public $carrera;


    function __construct($nombre, $edad, $pais, $carrera)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
    public function mostrarinformacion(){
        return $this->nombre .' tiene ' .$this->edad .' años de adad y es de ' .$this->pais .' y es ' .$this->carrera;
    }
}

$carlos = new Estudiante('Carlos Arturo', 23, 'Mexico', 'Desarrollador');
echo $carlos -> mostrarinformacion();


// class Estudiante{
//     public $nombre;
//     public $edad;
//     public $pais;
//     public $carrera;

//     function __construct($nombre, $edad, $pais, $carrera)
//     {
//         $this->nombre =$nombre;
//         $this->edad = $edad;
//         $this->pais = $pais;
//         $this->carrera =$carrera;
//     }

//     public function mostrarinformacion(){
//         return $this->nombre .' tiene ' .$this->edad .' años de adad y es de ' .$this->pais ;
//     }
// }
// $carlos = new Estudiante('Carlos Arturo', 23, 'Mexico', 'Desarrollador');
// echo $carlos -> mostrarinformacion();