<?php 
	$destino = "alejandrapartida@hotmail.com";
	$asunto = "Mensaje desde mi pagina web";
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
	mail($destino,"Contacto", $contenido);
	header("Location:index.html");



 ?>