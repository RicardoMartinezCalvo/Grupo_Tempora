<?php

	$para = "temporagrupo@gmail.com";
	$asunto = "Formulario página web";

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telf'];
	$evento = $_POST['tipoEvento'];
	$fecha = $_POST['fecha'];
	$lugar = $_POST['lugarEvento'];
	$agrupacion = $_POST['agrupacion'];
	$adicional = $_POST['adicional'];
	
	$header = 'From: ' . $nombre . "\r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";
	
	$mensaje = "***Detalles del formulario de contacto***\r\n\n";	
	$mensaje .= "Nombre: " . $nombre . "\r\n";
	$mensaje .= "Email : " . $email . "\r\n";
	if($telefono != "") {
		$mensaje .= "Teléfono: " . $telefono . "\r\n";
	}
	$mensaje .= "Tipo de Evento: " . $evento . "\r\n";
	if($fecha != "") {
		$mensaje .= "Fecha del Evento: " . $fecha . "\r\n";
	}
	if($lugar != "") {
		$mensaje .= "Lugar del Evento: " . $lugar . "\r\n";
	}
	$mensaje .= "Agrupación: " . $agrupacion . "\r\n";
	if($adicional != "") {
		$mensaje .= "Información adicional: " . $adicional . "\r\n";
	}
	$mensaje .= "\n\nEnviado el " . date('d/m/Y', time());
	
	if (mail($para, $asunto, utf8_decode($mensaje), $header) )
	{
		header ("Location: enviado.html");
	}
	else 
	{
		header ("Location: errorEnvio.html");
	}
	
?>