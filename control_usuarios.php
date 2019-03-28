
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
    require('conexion.php'); 
    $sql = mysqli_query($conn, "SELECT id_rol, nombre_rol From rol order by id_rol");
    $sql2 = mysqli_query($conn, "SELECT id_ciudad, nombre_ciudad From ciudad order by nombre_ciudad");
    $sqlusu = mysqli_query($conn, "SELECT * From usuario order by id_usuario");
    ?>

    <title>SISTEMA DE ADMINISTRACION DE PARQUEADEROS</title>
    </head>
       <!-- content page -->
        <div class="container-fluid container mt-4 main-container"><form role="form" name="registro" action="registro.php" method="post">
            <div class="card mb-4">
            
                <div class="card-header border-bottom">
                    <h5 class="content-color-primary mb-0">REGISTRO DE USUARIOS</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 mx-auto">
                            
                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label form="cc">CEDULA DE CIUDADANIA</label>
                                    <input type="text" class="form-control" placeholder="" id="cc" name="cc">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label form="nombre">NOMBRES</label>
                                    <input type="text" class="form-control" placeholder="" id="nombre" name="nombre">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label form="apellido">APELLIDOS</label>
                                    <input type="text" class="form-control" placeholder="" id="apellido" name="apellido">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 col-md-4">
                                    <label form="username">EMAIL</label>
                                    <input type="email" class="form-control" placeholder="" id="username" name="username">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label form="tel">TELEFONO</label>
                                    <input type="number" class="form-control" placeholder="" id="tel" name="tel">
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <label form="ciudad">CIUDAD</label>
                                    <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true" id="ciudad" name="ciudad">
                                        <option value="Seleccione">Seleccione...</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($sql2)){
                                        echo "<option  value='".$row['id_ciudad']."'>".$row['nombre_ciudad'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label form="dir">DIRECCION DE RESIDENCIA</label>
                                    <input type="text" class="form-control" placeholder="" id="dir" name="dir">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label form="cargo">CARGO</label>
                                    <select class="form-control " data-live-search="true" tabindex="-1" aria-hidden="true" id="cargo" name="cargo">
                                        <option value="Seleccione">Seleccione...</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($sql)){
                                        echo "<option  value='".$row['id_rol']."'>".$row['nombre_rol'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 col-md-6">
                                    <label form="password">CONTRASEÑA</label>
                                    <input type="password" class="form-control" placeholder="" id="password" name="password">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <label form="confirm_password">CONFIRMAR CONTRASEÑA</label>
                                    <input type="password" class="form-control" placeholder="" id="confirm_password" name="confirm_password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                   <a href="signin1.php" class="btn btn-primary pink-gradient">Registrar</a> 

                    <a href="signin1.php" class="float-right btn btn-outline-primary">Cancelar</a>
                </div>
            
            </div>
            </form> 
            <script src="js/valida_registro.js"></script>
            
            <!-- data table -->
            
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
