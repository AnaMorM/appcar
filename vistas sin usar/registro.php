<?php

include "conexion.php";
$cc = mysqli_real_escape_string($conn, $_REQUEST['cc']);
$nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
$apellido = mysqli_real_escape_string($conn, $_REQUEST['apellido']);
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$tel = mysqli_real_escape_string($conn, $_REQUEST['tel']);
$ciudad = mysqli_real_escape_string($conn, $_REQUEST['ciudad']);
$dir = mysqli_real_escape_string($conn, $_REQUEST['dir']);
$cargo = mysqli_real_escape_string($conn, $_REQUEST['cargo']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$estado = '1';
$sede = '1';


	$sql = "INSERT INTO usuario (documento_usuario,nombre_usuario,apellido_usuario,correo_usuario,telefono_usuario,id_ciudad,direccion_usuario,id_rol,password_usuario, estado_usuario, id_sede) VALUES ('$cc', '$nombre', '$apellido', '$username', '$tel', '$ciudad', '$dir', '$cargo', '$password', '$estado', '$sede')";

	$resul2 = mysqli_query($conn,$sql);

	print "<script>;window.location='signin1.php';</script>";

?>