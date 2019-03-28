<!DOCTYPE html>
<html>
<head>
	<?php 
require('conexion.php');

$placa = mysqli_real_escape_string($conn, $_REQUEST['placa']);
$fecha = mysqli_real_escape_string($conn, $_REQUEST['fecha']);
$hora = mysqli_real_escape_string($conn, $_REQUEST['hora']);
$fecha2 = mysqli_real_escape_string($conn, $_REQUEST['fecha2']);
$hora2 = mysqli_real_escape_string($conn, $_REQUEST['hora2']);
$tarifa = mysqli_real_escape_string($conn, $_REQUEST['tarifa']);
$vehiculo = mysqli_real_escape_string($conn, $_REQUEST['vehiculo']);
$estado = '1';

$bus = mysqli_query($conn, "SELECT id_tiempo From tiempo WHERE nombre_tiempo='$tarifa'");
		while ($row = mysqli_fetch_array($bus)) {
		$option .=$row['id_tiempo'];
	}
$bus2 = mysqli_query($conn, "SELECT id_tarifa, valor_tarifa From tarifa WHERE id_tiempo='$option' AND nombre_tarifa='$vehiculo'");
		while ($row2 = mysqli_fetch_array($bus2)) {
		$option2 .=$row2['id_tarifa'];
		$option4 .=$row2['valor_tarifa'];
	}
$bus3 = mysqli_query($conn, "SELECT id_registro From registro WHERE placa_registro='$placa' AND horaini_registro='$hora'");
		while ($row3 = mysqli_fetch_array($bus3)) {
		$option3 .=$row3['id_registro'];
	}

if ($option === '1') {
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = ($horas * 60 ) + $minutos;
list($horas, $minutos, $segundos) = explode(':', $hora2);
$hora_en_segundos2 = ($horas * 60 ) + $minutos; 
$total = $hora_en_segundos2 - $hora_en_segundos;
$pagar = $total * $option4;
$número_formato_inglés = number_format($pagar);
$valor = explode(',',$número_formato_inglés); 
$matriz1 = str_split($valor[1]); 
$cambio= $matriz1[1].$matriz1[2];
if ($cambio != 0) {
		$decimal = $cambio;
				if ($decimal <51) {
					$decimal = 50;
				}else $decimal = "00";
				if ($decimal <30) {
				$pagototal = $valor[0].$matriz1[0].$decimal + 100;
				}else
				$pagototal = $valor[0].$matriz1[0].$decimal;
				$número_formato = number_format($pagototal);
				echo "Total a pagar = $ ".$número_formato;
		}elseif ($cambio == 0) {
		$pagototal = $valor[0].$matriz1[0].$cambio;
		$número_formato = number_format($pagototal);
		echo "Total a pagar = $ ".$número_formato;
								}

	}else if ($option === '2') {
list($horas, $minutos, $segundos) = explode(':', $hora);
$hora_en_segundos = $horas + ($minutos * (1/60));
list($horas, $minutos, $segundos) = explode(':', $hora2);
$hora_en_segundos2 = $horas + ($minutos * (1/60)); 
$total = $hora_en_segundos2 - $hora_en_segundos;
$pagar = $total * $option4;
$número_formato_inglés = number_format($pagar);
$valor = explode(',',$número_formato_inglés); 
$matriz1 = str_split($valor[1]); 
$cambio= $matriz1[1].$matriz1[2];
if ($cambio != 0) {
		$decimal = $cambio;
				if ($decimal <51) {
					$decimal = 50;
				}else $decimal = "00";
				if ($decimal <30) {
				$pagototal = $valor[0].$matriz1[0].$decimal + 100;
				}else
				$pagototal = $valor[0].$matriz1[0].$decimal;
				$número_formato = number_format($pagototal);
				echo "Total a pagar = $ ".$número_formato;
		}elseif ($cambio == 0) {
		$pagototal = $valor[0].$matriz1[0].$cambio;
		$número_formato = number_format($pagototal);
		echo "Total a pagar = $ ".$número_formato;
	}
}

$sql = "UPDATE registro SET horafin_registro = '".$hora2."', estado_registro = '".$estado."', costo_registro = '".$número_formato."' WHERE id_registro= '".$option3."' ";

$resul = mysqli_query($conn,$sql); 

 ?>
 	<title>Datos guardados</title>
</head>
<body>
<form>
<input class="MyButton" type="button" value="Regresar" onclick="window.location.href='index.php'" />
</form>
</body>
</html>
