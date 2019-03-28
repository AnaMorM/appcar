<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <!-- favicons -->
    <link rel="apple-touch-icon" href="img/favicon-apple.png">
    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-4.1.3/css/bootstrap.min.css">

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="vendor/materializeicon/material-icons.css">

    <!-- aniamte CSS -->
    <link rel="stylesheet" href="vendor/animatecss/animate.css">

    <!-- swiper carousel CSS -->
    <link rel="stylesheet" href="vendor/swiper/css/swiper.min.css">

    <!-- daterange CSS -->
    <link rel="stylesheet" href="vendor/bootstrap-daterangepicker-master/daterangepicker.css">

    <!-- footable CSS -->
    <link rel="stylesheet" href="vendor/footable-bootstrap/css/footable.bootstrap.min.css">

    <!-- Bootstra tour CSS -->
    <link rel="stylesheet" href="vendor/bootstrap_tour/css/bootstrap-tour-standalone.css">


    <!-- jvector map CSS -->
    <link rel="stylesheet" href="vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- app CSS -->
    <link id="theme" rel="stylesheet" href="css/purplesidebar.css" type="text/css">
<?php
session_start();
    if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
        print "<script>alert(\"Acceso invalido!\");window.location='signin1.php';</script>";
    }
$var_nombre = $_SESSION["user_id"];
    include "conexion.php";
    $usr2 = mysqli_query($conn, "SELECT nombre_usuario, apellido_usuario From usuario WHERE id_usuario = '$var_nombre'"); ?>
    <title>SISTEMA DE ADMINISTRACION DE PARQUEADEROS</title>
</head>
<script type=”text/javascript”>

function startTime(){

today=new Date();

h=today.getHours();

m=today.getMinutes();

s=today.getSeconds();

m=checkTime(m);

s=checkTime(s);

document.getElementById(‘reloj’).innerHTML=h+”:”+m+”:”+s;

t=setTimeout(‘startTime()’,500);}

function checkTime(i)

{if (i<10) {i=”0″ + i;}return i;}

window.onload=function(){startTime();}

</script>

<body class="fixed-header sidebar-right-close">
    <!-- page loader -->
    <!-- page loader ends  -->

    <div class="wrapper">
        <!-- main header -->
        <header class="main-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-auto pl-0">
                        <button class="btn pink-gradient btn-icon" id="left-menu"><i class="material-icons">widgets</i></button>
                        <a href="index.php" class="logo"><h2>Appcar</h2>
                    </div>
                    <div class="col text-center p-xs-0">
                        <ul class="time-day">
						
						
                            <li class="text-right">
								<script>
									var f=new Date();
									var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
									document.write('<p class="header-color-primary">');
									document.write('<span class="header-color-secondary">' + meses[f.getMonth()] + '</span>');
									document.write('<small>'+ f.getFullYear() + '</small>');
									document.write('</p>');
									document.write('<h2>' + f.getDate() + '</h2>');
								</script>
                            </li>
                            <li class="text-left">                               
                                <p class="header-color-primary text-hide-lg"><span class="header-color-secondary">Hora :</span><small>actual</small></p>
								<h2 id="reloj"><span class="header-color-secondary font-weight-light" id="hora"></span>:<span class="header-color-secondary font-weight-light" id="minuto"></span>:<span class="header-color-secondary font-weight-light" id="segundo"></span></h2>
                            </li>
                        </ul>

                    </div>
                    <div class="col-auto pr-0">
                        
                        <div class="dropdown d-inline-block">
                            <a class="btn header-color-secondary dropdown-toggle username" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 165px">
                                <figure class="userpic"><img src="img/user1.png" alt=""></figure>
                                <h5 class="text-hide-xs">
                                    <small class="header-color-secondary">Bienvenido,</small>
                                    <span class="header-color-primary"> 
                                        <?php 
                                        while ($row = mysqli_fetch_array($usr2))
                                        {
                                            echo $row['nombre_usuario'];
                                            echo " ".$row['apellido_usuario'];
                                        }  
                                    ?> 
                                </span>
                                </h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item pink-gradient-active" href="javascript:void(0);" id="open-right-sidebar">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            Configuración
                                        </div>
                                        <div class="col-auto">
                                            <div class="header-color-secondary ml-2"><i class="material-icons vm">settings</i></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                               
                                <a class="dropdown-item pink-gradient-active" href="signin1.php">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            Cerrar Sesión
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-danger ml-2"><i class="material-icons vm">exit_to_app</i></div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main header ends -->

        <!-- sidebar left -->
        <div class="sidebar sidebar-left">
		<div class="card">
                                    <div class="card-body text-center">
                                        <a href="index.php">
                                            <figure class="avatar avatar-120 mx-auto my-3">
                                                <img src="img/user1.png" alt="">
                                            </figure>
                                            <h5 class="card-title mb-2 header-color-primary">PEDRO PEREZ</h5>
                                            <h6 class="card-subtitle mb-3 header-color-secondary">ADMINISTRADOR</h6>
                                        </a>
                                        
                                        <button class="btn btn-sm pink-gradient border-0 mb-3"><a href="signin1.php"">Cerrar Sesión</a></button>
                                    </div>
                                </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="busqueda.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">insert_chart_outlined</i> <span>Busqueda de Parqueaderos</span></a>
                </li>
                <li class="nav-item">
                    <a href="admin_parqueaderos.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">insert_chart_outlined</i> <span>Administrador de Parqueaderos</span></a>
                </li>
                <li class="nav-item">
                    <a href="control_tarifas.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">filter_none</i> <span>Control de tarifas</span></a>
                </li>
                <li class="nav-item">
                    <a href="mensaje.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">filter_none</i> <span>Mensajeria</span></a>
                </li>
                <li class="nav-item">
                    <a href="guardado.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">filter_none</i> <span>guardados</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link dropdwown-toggle"><i class="material-icons icon">devices</i> <span>reservaciones</span><i class="material-icons icon arrow">expand_more</i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="reservas.php" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>reservas activas</span></a>
                            <a href="reservas2.php" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>solicitud reservas</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link dropdwown-toggle"><i class="material-icons icon">devices</i> <span>Informes</span><i class="material-icons icon arrow">expand_more</i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="informes_grafic.php" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>Grafica</span></a>
                            <a href="informes_excel.php" class="nav-link pink-gradient-active"><i class="material-icons icon"></i> <span>Excel</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- sidebar left ends -->
        

        <!-- content page title -->

        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
			<form>
                <div class="card-header border-bottom">
                    <h5 class="content-color-primary mb-0">BUSQUEDA DE PARQUEADERO</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            <h5 class="m-0"> BUSQUEDA DE PARQUEADERO</h5>
                            <hr>
                            <div class="form-group row">
                            </div>
							<div class="form-group row">
								<div class="col-md-11">
                                    <label>UBICACIÒN</label>
                                    <input type="text" class="form-control" placeholder="">

                                </div>
								
                            </div>
							<div class="form-group row">

								
                            </div>
							<h5 class="m-0"> FILTROS</h5>
                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>TIPO DE VEHICULO</label>
									<select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
										<option value="Seleccione">Seleccione</option>
										<option value="0">carro</option>
                                    </select>
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>CAPACIDAD</label>
                                    <input type="number" name="quantity" min="1" max="100" class="form-control">
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <div class="form-group ">
                                        <label>PUNTACION</label>
										<select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
											<option value="Seleccione">Seleccione</option>
											<option value="0">1</option>
											<option value="1">2</option>
                                            <option value="0">3</option>
                                            <option value="1">4</option>
										</select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancelar</button>
                    <a href="busqueda1.php" class="btn btn-success float-right">buscar</a>
                    
                </div>
			</form>	
            </div>
        <!-- content page ends -->

    </div>
     <footer class="border-top">
        <div class="row">   
		<!-- <div class="col-12 col-sm-6 text-right" style="z-index: 999;"><a href="#" class="content-color-secondary">Politicas de privacidad</a> | <a href="#" class="content-color-secondary">Terminos y Condiciones</a></div> -->
        </div>
    </footer>

    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>

    <!-- Cookie jquery file -->
    <script src="vendor/cookie/jquery.cookie.js"></script>

    <!-- sparklines chart jquery file -->
    <script src="vendor/sparklines/jquery.sparkline.min.js"></script>

    <!-- Circular progress gauge jquery file -->
    <script src="vendor/circle-progress/circle-progress.min.js"></script>

    <!-- Swiper carousel jquery file -->
    <script src="vendor/swiper/js/swiper.min.js"></script>

    <!-- Chart js jquery file -->
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/chartjs/utils.js"></script>


    <!-- Footable jquery file -->
    <script src="vendor/footable-bootstrap/js/footable.min.js"></script>

    <!-- datepicker jquery file -->
    <script src="vendor/bootstrap-daterangepicker-master/moment.js"></script>
    <script src="vendor/bootstrap-daterangepicker-master/daterangepicker.js"></script>

    <!-- jVector map jquery file -->
    <script src="vendor/jquery-jvectormap/jquery-jvectormap.js"></script>
    <script src="vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Bootstrap tour jquery file -->
    <script src="vendor/bootstrap_tour/js/bootstrap-tour-standalone.min.js"></script>

    <!-- jquery toast message file -->
    <script src="vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>

    <!-- Application main common jquery file -->
    <script src="js/main.js"></script>
	
	    <!-- Dropzone jquery file -->
    <script src="vendor/dropzone-master/dropzone.js"></script>

    <!-- DataTable jquery file -->
    <script src="vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <!-- page specific script -->

   
	<script type="text/javascript">
var reloj = document.getElementById('reloj');
setInterval(function(){
    var data = new Date();
    reloj.innerHTML = data.toLocaleTimeString();
},1000);

</script>
<!-- page specific script -->
    <script>
        "use strict"
        $(function() {
            $('.datepicker').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901               
            }, function(start, end, label) { });
        });
    </script>
	
	<script>
        "use strict"
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });

    </script>	
		<!-- page specific script -->
    <script>
        "use strict"
        $("#my-dropzone").dropzone({
            url: "../file-upload",
            addRemoveLinks: "dictRemoveFile"
        });
    </script>
</body>
</html>
