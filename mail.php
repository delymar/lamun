	<?php

		$nombre    = $_POST['user'];
		$remitente = $_POST['email'];
		$mensaje   = $_POST['message'];

		if(($nombre != '') && ($remitente != '')&& ($mensaje != '')) {
			$destino= "diturriza17@gmail.com, lamunucabg@gmail.com";
			$cabecera = "From: $remitente\n";
			$asunto = "Mensaje desde www.lamunucab.com.ve - LAMUN UCAB Guayana";
			$contenido = "$nombre ha enviado un mensaje desde la página web www.lamunucab.com.ve\n"
			. "\n"
			. "Nombre: $nombre\n"
			. "Teléfono: $telefono\n"
			. "Email: $remitente\n"
			. "Asunto: $subject\n\n"
			. "Mensaje: $mensaje\n"
			. "\n";

			@mail($destino, $asunto, $contenido, $cabecera);
		}

	?>