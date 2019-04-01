<?php 
session_start(); 
$var_nombre = $_SESSION["user_id"];
include "conexion.php";
$usr2 = mysqli_query($conn, "SELECT nombre_usuario, apellido_usuario From usuario WHERE id_usuario = '$var_nombre'");
$usr1 = mysqli_query($conn, "SELECT nombre_usuario, apellido_usuario From usuario WHERE id_usuario = '$var_nombre'");
$rolnuevo = mysqli_query($conn, "SELECT id_rol From usuario WHERE id_usuario = '$var_nombre'");
while ($row = mysqli_fetch_array($rolnuevo))
{
    $rolusuario .= $row['id_rol'];
}
$rol = mysqli_query($conn, "SELECT nombre_rol From rol WHERE id_rol = '$rolusuario'");
?>
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
                            <a class="btn header-color-secondary dropdown-toggle username" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-left: 165px;">
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
                                            <h5 class="card-title mb-2 header-color-primary"> 
                                        <?php 
                                        while ($row = mysqli_fetch_array($usr1))
                                        {
                                            echo $row['nombre_usuario'];
                                            echo " ".$row['apellido_usuario'];
                                        }  
                                    ?> 
                                    </h5>
                                        <h6 class="card-subtitle mb-3 header-color-secondary"><?php 
                                        while ($row = mysqli_fetch_array($rol))
                                        {
                                            echo $row['nombre_rol'];
                                        }  
                                        ?>  
                                    </h6>
                                        </a>
                                        <a href="signin1.php" class="btn btn-sm pink-gradient border-0 mb-3">Cerrar Sesión</a>
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