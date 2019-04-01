<?php

if(!empty($_POST))
{
	if(isset($_POST["username"]) &&isset($_POST["password"]))
	{
		if($_POST["username"]!=""&&$_POST["password"]!="")
		{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$user=$r["id_rol"];
				print "<script>window.location='index.php';</script>";				
		}
	}
}
?>