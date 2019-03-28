<<?php
require_once('conexion.php');
$id_tiempo = ($_POST['id_tiempo']);
if($id_tiempo!='')
{
$veh_res = $conn->query('select * from tarifa where id_tiempo='.$id_tiempo.'');
$options = "<option value=''>Seleccione...</option>";
while($row = $veh_res->fetch_assoc()) {
$options .= "<option value='".$row['id_tarifa']."'>".$row['nombre_tarifa']."</option>";
}
echo $options;
}?>