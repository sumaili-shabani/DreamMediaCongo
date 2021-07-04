<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
    $base_url = "http://localhost:82/fidba/";


     ?>

     <!-- Custom fonts for this template-->
<link href="<?php echo($base_url)?>js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo($base_url)?>js/css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?php echo($base_url)?>js/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="<?php echo($base_url) ?>upload/annumation/logo.jpg">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-3">
                            	 
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                       
                                    </div>
                                    <div class="col-md-12">
                                    	<div class="container text-center">
											<h4><?php echo $heading; ?></h4>
											<div id="body">
												<?php echo $message; ?>
											</div>

											<hr>
											<a class="btn btn-secondary btn-block" href="javascript:history.go(-1);">Revenir en arrière</a>
										</div>
                                    </div>
                                        
                                    </form>
                                   

                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                            	 
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


     <!-- Bootstrap core JavaScript-->
	<script src="<?php echo($base_url)?>js/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo($base_url)?>js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo($base_url)?>js/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo($base_url)?>js/js/sb-admin-2.min.js"></script>
	<!-- fin Custom scripts for all pages-->

	<!-- Page level plugins -->
	<script src="<?php echo($base_url)?>js/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo($base_url)?>js/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo($base_url)?>js/js/demo/datatables-demo.js"></script>
	<!-- Fin Page level custom scripts -->


</body>

</html>
