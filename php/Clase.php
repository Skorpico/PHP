<?php

class Cobjeto
{
    public $mensaje2;

    public function metodo1($mensaje)
    {
        $this->mensaje2 = $mensaje;
        echo "Manesaje: ".$mensaje;
    }

}

class Cobjeto2 extends Cobjeto //<-Herencia
{

}

$NEWobjeto = new Cobjeto2();
$NEWobjeto->metodo1('Hola mundo!');


?>
<br><br><br><br>
<a href="../index.php">Volver</a>