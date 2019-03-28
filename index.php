

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
    $usr2 = mysqli_query($conn, "SELECT nombre_usuario, apellido_usuario From usuario WHERE id_usuario = '$var_nombre'");
?>
    <title>SISTEMA DE ADMINISTRACION DE PARQUEADEROS</title>
    <?php include 'plantilla.php'; ?>
</head>       

        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">BIENVENIDO</h2>
                                <p class="content-color-secondary page-sub-title">
                                    
                                    <?php 
                                        while ($row = mysqli_fetch_array($usr2))
                                        {
                                            echo $row['nombre_usuario'];
                                            echo " ".$row['apellido_usuario'];
                                        }  
                                    ?>  
                                </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="row">
                
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



    <!-- page specific script -->
	
   
	<script type="text/javascript">
var reloj = document.getElementById('reloj');
setInterval(function(){
    var data = new Date();
    reloj.innerHTML = data.toLocaleTimeString();
},1000);

</script>



</body>
</html>
