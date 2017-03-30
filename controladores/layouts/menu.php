<?php
    include dirname(__FILE__) . '/../sesion/sesion.php';
?>

<div class="col-md-3">

    <!-- MOSTRAR ACCESOS LATERALES POR PERMISOS DE USUARIO	-->
    <div class="list-group">
    	<!--	Ejemplo de menú lateral izquierdo	-->
	    <?php 
	    	if ($perm_recepcion == 1)	{
        		echo	'<a href="' . app_url() . 'citas" class="list-group-item "><span class="glyphicon glyphicon-edit"></span>&nbsp Recepción - Programar Citas</a>';
        		echo	'<a href="' . app_url() . 'control" class="list-group-item "><span class="glyphicon glyphicon-user"></span>&nbsp Recepción - Control Pacientes</a>';
        		echo	'<a href="' . app_url() . 'calendario" class="list-group-item "><span class="glyphicon glyphicon-calendar"></span>&nbsp Recepción - Calendario</a>';
                echo    '<a href="'. app_url() .'pagos" class="list-group-item"><span class="glyphicon glyphicon-usd"></span>&nbsp Recepción - Pagos</a>';
	    	}
    	?>
    </div>
</div>   