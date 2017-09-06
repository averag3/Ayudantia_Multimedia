<?php

	if(isset($_REQUEST['alumno_form'])){
		$nom = $_REQUEST['nombre'];
		$apell = $_REQUEST['apellido'];
		$rut = $_REQUEST['rut'];

		echo "Insercion correcta en el campo alumno.";
	}

	if(isset($_REQUEST['ramo_form'])){
		$ramo = $_REQUEST['ramo'];
		$nota = $_REQUEST['nota'];

		echo "Insercion correcta en el campo ramo.";
	}

?>