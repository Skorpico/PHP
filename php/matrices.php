<h3>Almacenamiento de datos en matrices</h3>
<br>
Llenado de Matriz:
<br>
<ul>
<?php

	//Atributos:
	$fruta[0] = "Manzana";
	$fruta[1] = "Pera";
	$fruta[2] = "Cambur";
	$fruta[3] = "Cocos";
	$FRUTA[4] = "Fresa";
	
		for($i = 0;$i <= 4;$i++)
		{
			echo "<li>".$fruta[$i]."</li>";
		}
?>
</ul>
<br><br>
Matrices asociativas y multidimensionales:
<?php
	//Atributos:
	$agenda[0]['nombre'] = "Luis";
	$agenda[0]['telefono'] ="555555";
	$agenda[0]['email'] = "luis@gmail.com";
	
	$agenda[1]['nombre'] = "Maria";
	$agenda[1]['telefono'] = "123456";
	$agenda[1]['email'] = "maria@yahoo.es";
	
	$agenda[2]['nombre'] = "Jose";
	$agenda[2]['telefono'] = "789456";
	$agenda[2]['email'] = "jose@hotmail.com";
	
	
	for($i=0;$i<=2;$i++)
	{
		echo "
		<center><table border='1' width='300px'>
			<tr>
				<td>Nombre:</td>
				<td>".$agenda[$i]['nombre']."</td>
			</tr>
			<tr>
				<td>Teléfono:</td>
				<td>".$agenda[$i]['telefono']."</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>".$agenda[$i]['email']."</td>
			</tr>
		</table></center>
		";
	}
?>

<br><br>
Matrices con la función array 'LA COMBI COMPLETA':<br>
<?php

	$combiCompleta = array('COCHA','CULO','TETA');
	
	foreach($combiCompleta as $valor)
	{
		echo $valor."<br>";
	}
?>
<br><br><br><br>
<a href="../index.php">Volver</a>