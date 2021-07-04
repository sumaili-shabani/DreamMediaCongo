<?php 
                  
    $chart_data = '';

    $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM users GROUP BY sexe");
    
    if ($detail3->num_rows() > 0) {
            foreach ($detail3->result_array() as $key) {
                $label = $key["nombre"]." personnes de sexe ".$key["sexe"];
               $chart_data .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";
            }
            $chart_data = substr($chart_data, 0, -2);

            // echo($chart_data);
    }
    else{

    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include('_navigation.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('_menuheader.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                   <div class="col-md-12 card">
                       <div class="row card-body">
                          <?php include("__stat_users_.php") ?>
                       </div>
                   </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('_footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
   <?php include('_script.php') ?>

    <script type="text/javascript">
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: ""
            },
            data: [
            {
                type: "pie",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chartContainer2", {
            theme: "theme2",
            animationEnabled: true,
            title: {
                text: ""
            },
            data: [
            {
                type: "line",                
                dataPoints: [<?php echo $chart_data; ?>]
            }
            ]
        });
        chart.render();

     </script>


</body>

</html>