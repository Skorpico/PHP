<br>
<a href="../index.php">Volver</a>

<h3>Sentencias de control</h3>
<center>
<br><br>
Control Goto:<br>
<?php

goto marca;

echo "Este texto me lo salto.";

marca:
echo "Este texto es el que te muestro.";

?>
<br><br>
Control if:<br>
<?php
$var1 = 1;
$var2 = 2;

	echo "\tVariable A:".$var1."<br>";
	echo "\tVariable B:".$var2."<br>";
	
	if($var1 < $var2)
	{
		echo $var1." es menor que ".$var2;
	}else{
			echo $var2." es mayor que ".$var1;
		}
	

?>
<br><br>
Control switch:<br>
<?php
	$varOp = 0;
	
	switch($varOp)
	{
		case 1:
			echo "Opción 01";
		break;
		
		case 2:
			echo "Opcion 02";
		break;
		
		default:
			echo "Esta Opción no existe";
		break;
	}
?>
<br><br>
Control While:<br>
<?php
	$variable = 0;
	
	while($variable<=10)
	{
		echo "Hola nº ".$variable."<br>";
		$variable = $variable + 1;
	}
?>

<br><br>
Control do While:<br>
<?php
	$variable2 = 1;
	
	do
	{
		echo "Hola nº ".$variable2."<br>";
		
	}while($variable2 > 2);
	
	echo "he finalizado!";
?>

<br><br>
<strong>Foreach:</strong><br>
<?php
	$matriz = array("coche","moto","ciudad","mundo","Tetotas");
	
		foreach($matriz as $valor)
		{
			echo "<li>".$valor."</li>";
		}
	
?>

</center>
<br><br><br><br>
<a href="../index.php">Volver</a>