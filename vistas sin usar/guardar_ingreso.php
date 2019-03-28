<!DOCTYPE html>
<html>
<head>
	<?php 
require('conexion.php');

$placa = mysqli_real_escape_string($conn, $_REQUEST['placa']);
$fecha = mysqli_real_escape_string($conn, $_REQUEST['fecha']);
$hora = mysqli_real_escape_string($conn, $_REQUEST['hora']);
$usuario = mysqli_real_escape_string($conn, $_REQUEST['usuario']);
$tarifa = mysqli_real_escape_string($conn, $_REQUEST['tarifa']);
$vehiculo = mysqli_real_escape_string($conn, $_REQUEST['vehiculo']);
$estado = '0';


$sql = "INSERT INTO registro (fecha_registro, horaini_registro, estado_registro, placa_registro, id_tarifa, id_usuario) VALUES ('$fecha', '$hora', '$estado', '$placa', '$vehiculo', '$usuario')";

$resul2 = mysqli_query($conn,$sql); // call 2nd query


 ?>
	<title>Datos guardados</title>
</head>
<body>
<form>
<input class="MyButton" type="button" value="Regresar" onclick="window.location.href='index.php'" />
</form>
</body>
</html>
