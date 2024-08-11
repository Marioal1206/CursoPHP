<?php
abstract class Humano{
    public function saludo(){
        return 'hola';
    }
}


class Estudiantes extends Humano{

}
$carlos = new Estudiantes;
echo $carlos ->saludo();