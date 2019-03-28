<?php

if(!empty($_POST))
{
	if(isset($_POST["username"]) &&isset($_POST["password"]))
	{
		if($_POST["username"]!=""&&$_POST["password"]!="")
		{
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from usuario where correo_usuario=\"$_POST[username]\" and password_usuario=\"$_POST[password]\" ";
			$query = $conn->query($sql1);
			while ($r=$query->fetch_array()) 
			{
				$user_id=$r["id_usuario"];
				$user=$r["id_rol"];
				break;
			}
			if($user_id==null)
			{
				print "<script>alert(\"Acceso invalido.\");window.location='signin1.php';</script>";
			}
			else
			{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$user=$r["id_rol"];
				print "<script>window.location='index.php';</script>";				
			}
		}
	}
}
?>