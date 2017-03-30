<?php

include 'App/route.php';

$route = new Route();


	//	EJEMPLO PARA LLAMAR RUTAS CON URL LIMPIA 
	$route->add('/ruta_ejemplo', 'controladores/carpeta_destino/archivo_a_cargar.php');

$route->submit();