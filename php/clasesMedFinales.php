<?php
/*
-Las clases finales las cuales no se pueden heredar.
-Los Métodos finales son aquellos que no pueden sobreescribir.
 */

 class Cmascota
 {
     //Atributos:
     private $nombre;
     private $fechaNac;
     private $sexo;
     protected $IDEstudiante;
     private $registrado;
 
    final public function regMac()
    {
        $registrado = true;
    }
}

final class Perro extends Cmascota
{
    //La siguiente declaracion genera un error:
    function regMac()
    {
        parent::registrarMascota();
        echo "se ha registrado la Mascota";
    }
}

$ObjMascota = new Perro();
$ObjMascota->regMac();
?>
<br>
<a href="../index.php">Volver</a>
