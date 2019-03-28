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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <?php
    include 'plantilla.php';
    require('conexion.php'); 
    $hp = mysqli_query($conn, "SELECT  id_sede From usuario WHERE id_usuario = '$var_nombre'");
    while ($row = mysqli_fetch_array($hp)) {
        $option .=$row['id_sede'];
    }
    $sql = mysqli_query($conn, "SELECT nombre_sede, id_sede From sede WHERE id_sede ='$option'");
    $usr = mysqli_query($conn, "SELECT nombre_usuario, apellido_usuario From usuario WHERE id_usuario =  '$var_nombre'");
    ?>
    <title>SISTEMA DE ADMINISTRACION DE PARQUEADEROS</title>
</head>

        <!-- content page -->
        <div class="container-fluid container mt-4 main-container">
            <div class="card mb-4">
			<form>
				<div class="card-header border-bottom">
                    <h5 class="content-color-primary mb-0">REGISTRO DIARIO - CIERRE</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
							<div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>FECHA Y HORA</label>
									<input type="text" class="form-control datepicker" placeholder="12:00:00 PM">
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>USUARIO</label>
									<input type="text" class="form-control" value="<?php while ($row = mysqli_fetch_array($usr)){
                              echo $row['nombre_usuario']." ".$row['apellido_usuario'];
                              } ?>" readonly>
                                </div>
								<div class="col-lg-4 col-md-4">
                                    <label>SEDE</label>
									<input type="text" class="form-control" value="<?php while ($row = mysqli_fetch_array($sql)){
                              echo $row['nombre_sede'];
                              } ?>" readonly>
                                </div>
							</div>
							<hr>
							<div class="form-group row">
								<div class="col-lg-4 col-md-4"></div>
								<div class="col-lg-4 col-md-4"><label>TOTAL RECIBIDO DIA</label></div>
								<div class="col-lg-4 col-md-4">
									<div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="10000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
							<div class="form-group row">
								<div class="col-lg-4 col-md-4"></div>
								<div class="col-lg-4 col-md-4"><label>TOTAL MENSUAL DIA</label></div>
								<div class="col-lg-4 col-md-4">
									<div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="10000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
							<hr>
							<div class="form-group row">
								<div class="col-lg-4 col-md-4"></div>
								<div class="col-lg-4 col-md-4"><label>TOTAL DIA</label></div>
								<div class="col-lg-4 col-md-4">
									<div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="10000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
							<div class="form-group row">
								<div class="col-lg-4 col-md-4"></div>
								<div class="col-lg-4 col-md-4"><label>TOTAL ≠</label></div>
								<div class="col-lg-4 col-md-4">
									<div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="10000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary">Cancelar</button>
                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">Registrar</button>
                </div>
			</form>	
            </div>
			
			
			
        </div>
        <!-- content page ends -->

    </div>
     <footer class="border-top">
        <div class="row">
        <!-- <div class="col-12 col-sm-6 text-right" style="z-index: 999;"><a href="#" class="content-color-secondary">Politicas de privacidad</a> | <a href="#" class="content-color-secondary">Terminos y Condiciones</a></div> -->
        </div>
    </footer>
    <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">MENSAJE DEL SISTEMA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           EL REGISTRO SE GUARDO CON EXITO
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

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
