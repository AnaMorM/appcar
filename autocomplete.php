
<?php
if (isset($_GET['term'])){
	# conectare la base de datos
   require 'conexion.php';
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($conn)
{

$fetch =mysqli_query($conn, "SELECT registro.placa_registro,  tarifa.nombre_tarifa, tarifa.valor_tarifa, tiempo.nombre_tiempo, registro.horaini_registro, registro.fecha_registro
FROM registro INNER JOIN tarifa ON registro.id_tarifa=tarifa.id_tarifa
INNER JOIN tiempo ON tarifa.id_tiempo=tiempo.id_tiempo where placa_registro like '%" . mysqli_real_escape_string($conn,($_GET['term'])) . "%' ");

	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$row_array['value'] = $row['placa_registro'];
		$row_array['placa']=$row['placa_registro'];
		$row_array['vehiculo']=$row['nombre_tarifa'];
		$row_array['tarifa']=$row['nombre_tiempo'];
		$row_array['hora']=$row['horaini_registro'];
		$row_array['fecha']=$row['fecha_registro'];
		array_push($return_arr,$row_array);
    }
}
 
/* Cierra la conexión. */
 
/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);
 
}
?>
