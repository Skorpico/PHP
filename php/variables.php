
Datos del visitante:

<?php

	//Atributos Globales:
	@$Obtener_ip = getenv(REMOTE_ADDR);
	$Obtener_nav = $_SERVER["HTTP_USER_AGENT"];
	
	echo "<ul><li>Dirección IP (intenet protocol) del visitante: ".$Obtener_ip."</li>";
	echo "<li>Navegador Usado:".$Obtener_nav."</li></ul>";

?>

<a href="../index.php">Volver</a>