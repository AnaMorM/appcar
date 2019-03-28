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
    <div class="loader justify-content-center pink-gradient">
        <div class="align-self-center text-center">
            <div class="logo-img-loader">
                <img src="img/loader-hole.png" alt="" class="logo-image">
                <img src="img/loader-bg.png" alt="" class="logo-bg-image">
            </div>
            <h2 class="mt-3 font-weight-light">BIENVENIDOS!</h2>
            <p class="mt-2 text-white">SISTEMA DE ADMINISTRACION DE PARQUEADEROS</p>
        </div>
    </div>
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
                            <a class="btn header-color-secondary dropdown-toggle username" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="padding-left: 165px">
                                <figure class="userpic"><img src="img/user1.png" alt=""></figure>
                                <h5 class="text-hide-xs">
                                    <small class="header-color-secondary">Bienvenido,</small>
                                    <span class="header-color-primary">PEDRO PEREZ</span>
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
                    <a href="admin_parqueaderos.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">insert_chart_outlined</i> <span>Administrador de Parqueaderos</span></a>
                </li>
                <li class="nav-item">
                    <a href="control_tarifas.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">filter_none</i> <span>Control de tarifas</span></a>
                </li>
                <li class="nav-item">
                    <a href="mensualidad.php" class="nav-link dropdwown-toggle"><i class="material-icons icon">equalizer</i> <span>Mensualidad</span></a>
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
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">BIENVENIDO</h2>
                            <p class="content-color-secondary page-sub-title">TAL POR CUAL</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
			<form>
                <div class="card-header border-bottom">
                    <h5 class="content-color-primary mb-0">MENSUALIDAD</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>CEDULA DE CIUDADANIA</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>NOMBRES</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>APELLIDOS</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>EMAIL</label>
									<input type="email" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>TELEFONO</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>DIRECCION DE RESIDENCIA</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>TIPO DE VEHICULO</label>
									<select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
										<option value="Seleccione">Seleccione</option>
										<option value="0">1</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>PLACAS</label>
									<input type="text" class="form-control" placeholder="">
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>TIPO DE TARIFA</label>
									<select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true">
										<option value="Seleccione">Seleccione</option>
										<option value="0">1</option>
                                    </select>
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>FECHA DE INICIO</label>
									<input type="text" class="form-control datepicker">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>FECHA FIN</label>
									<input type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancelar</button>
                    <button class="btn btn-success float-right">Registrar</button>
                </div>
			</form>	
            </div>
			
			
			<!-- data table -->
			<div class="row">
                <div class="col-sm-12">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">REGISTRO DE MENSUALIDAD</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
										<th>TI/CC</th>
                                        <th>Nombres</th>
										<th>Apellidos</th>
										<th>Placas</th>
										<th>Teléfono</th>
                                        <th>Email</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Costo $COP</th>
                                        <th>Estado</th>
                                        <th>Edición</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>1</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>2</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>3</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>4</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>5</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>6</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>7</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>8</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>9</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>10</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>11</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-success ">Activo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                    <tr class="even ">
                                        <td>12</td>
                                        <td>00123456</td>
										<td class="center">PEDRO</td>
										<td class="center">PEREZ</td>
                                        <td class="center">ABC-123</td>
										<td>2223344</td>
										<td class="center">mail@mail.com</td>
										<td>06/12/2018</td>
										<td>06/12/2018</td>
										<td class="derecha">150000</td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-secondary ">Inactivo</button></td>
                                        <td class="center"><button type="button" class="mb-2 box-shadow mr-2 btn btn-warning ">Editar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>

            </div>
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
	<!-- page specific script -->
    <script>
        "use strict"
        $("#my-dropzone").dropzone({
            url: "../file-upload",
            addRemoveLinks: "dictRemoveFile"
        });
        
        
    </script>
   
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
</body>
</html>
