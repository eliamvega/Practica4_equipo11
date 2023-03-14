
<!DOCTYPE html>
<html>
	<head>
		<title>FORMULARIO</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h4>Datos capturados</h4>
		Nombre: 
		<?php echo $_POST["txtNombre"];?><br/>
		CURP: 
		<?php echo $_REQUEST["txtCURP"];?><br/>
		Tema buscar: 
		<?php echo $_REQUEST["txtbuscador"];?><br/>
		e-mail: 
		<?php echo $_REQUEST["txtcorrep"];?><br/>
		¿Cómo califica nuestros productos del 1 al 10?: 
		<?php echo $_REQUEST["txtpuntaje"];?><br/>
		Elija la fecha de su proxima visita: 
		<?php echo $_REQUEST["txtvisita"];?><br/>
		Qué le parece el servicio prestado?: 
		<?php echo $_REQUEST["txtservicio"];?><br/>
		Edad:
		<?php echo $_REQUEST["txtNumRango"];?><br/>
		¿Cual es su sexo?: 
		<?php echo $_REQUEST["txtsexo"];?><br/>
		Elija su color favorito::
		<?php echo $_REQUEST["txtcolor"];?><br/>
		Escribir comentarios adicionales:
		<?php echo $_REQUEST["txtopinion"];?><br/>
		<a href="index.html">Regresar</a>
	</body>
</html>
