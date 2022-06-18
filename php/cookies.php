<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>.::PHP/Cookie::.</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<body>

<div class="contenedorParrafo">
	<p>
    	Una Cookie es un conjunto de datos que se pasa en el encabezado HTTP (http header).
        la cual se almacena en el computador del cliente en forma de archivo de texto.
        Sus valores están en formato ASCII. Las cookies no aceptan datos binarios. El archivo
        contiene: </p>
        	<ul>
            	<li>Nombre de dominio del servidor que creo la cookie.</li>
                <li>Ruta donde se almacena la cookie.</li>
                <li>Nombre de la cookie.</li>
                <li>Tiempo de vida la cookie (lo establece el propietario de la cookie).</li>
                <li>Valor de la cookie (domain,path,secure, expires).</li>
            </ul>
       <p>
       	  Por ejemplo una cookie se utiliza para almacenar el nombre del usuario y enviar un
          mensaje de Bienvenida más adelante.
       </p>
<div>

<?php
//VARIABLES PARA LA COOKIE:
	$nombre = "Josephanie Jones";
	$mail = "jonesjph@haqnnov.com";
	$direccion = "Amterdam-Netherlands";
	$login = "jonesjph";
	$password = "password1";


//CREAR LA COOKIEE:

	setcookie("nombreUs","$nombre",time()+82000,"/","",0);
	


?>


</body>
</html>