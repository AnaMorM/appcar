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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <title>SISTEMA DE ADMINISTRACION DE PARQUEADEROS</title>
    <?php include 'plantilla.php'; ?>
</head>

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="card mb-4">
			<form action="calcular_salida.php" method="post" autocomplete="off">
				<div class="card-header border-bottom">
                    <h5 class="content-color-primary mb-0">REGISTRO DIARIO - SALIDA</h5>
                </div>
				<div class="card-header border-bottom py-4 text-center">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<h2>Appcar</h2>
						</div>
						<div class="col-lg-6 col-md-6">
							<p class="mt-3 content-color-secondary">NIT: <span>IBMS0000215</span></p>
							<p class="mt-3 content-color-secondary">SEDE: <span>CALLE 63</span></p>
							<p class="mt-3 content-color-secondary">N° TIQUETE: </p>
							<h1 class="content-color-primary mb-0 text-center font-weight-light">00001</h1>
						</div>
					</div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label>INGRESE LA PLACA</label>
									<input type="text" class="form-control" id="placa" name="placa">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>TIPO DE TARIFA</label>
                                    <input type="text" class="form-control" id="tarifa" name="tarifa" readonly>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label>TIPO DE VEHICULO</label>
									<input type="text" class="form-control" id="vehiculo" name="vehiculo" readonly>
                                </div>
                            </div>
							<div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>HORA DE INGRESO</label>
									<input type="text" class="form-control" id="hora" name="hora" readonly>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>FECHA DE INGRESO</label>
									<input type="text" class="form-control datepicker" id="fecha" name="fecha" readonly>
                                </div>
								
                            </div>
							<div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label>HORA DE SALIDA</label>
									<input type="text" class="form-control" value="<?php echo date('G:i:s');?>" name="hora2"readonly>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label>FECHA DE SALIDA</label>
									<input type="text" class="form-control datepicker" value="<?php echo date('Y-m-d');?>" readonly name="fecha2" class="form-control datepicker">
                                </div>
								
                            </div>
							
							
							
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success float-right">Registrar</button>
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
						   <div class="form-group row">
								<div class="col-lg-12 col-md-12"></div>
								<div class="col-lg-12 col-md-12"><label>TOTAL A PAGAR</label></div>
								<div class="col-lg-12 col-md-12">
									<div class="input-group">
										<h1 class="content-color-primary mb-0 text-center font-weight-light">$ 100.000</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
							<button class="btn btn-secondary">Imprimir</button>
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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
            $("#placa").autocomplete({
                source: "autocomplete.php",
                minLength: 1,
                select: function(event, ui) {
                    event.preventDefault();
                    $('#placa').val(ui.item.placa);
                    $('#tarifa').val(ui.item.tarifa);
                    $('#vehiculo').val(ui.item.vehiculo);
          $('#hora').val(ui.item.hora);
          $('#fecha').val(ui.item.fecha);
                 }
            });
        });
</script>
</body>
</html>
