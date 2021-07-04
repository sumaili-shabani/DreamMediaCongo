<?php 
                  
    $chart_data = '';
    $chart_data2 = '';

    $detail3 = $this->db->query("SELECT COUNT(nom_cat) AS nombre, nom_cat FROM profile_article GROUP BY nom_cat");
    
    if ($detail3->num_rows() > 0) {
            foreach ($detail3->result_array() as $key) {
            	$label = $key["nombre"]." publication(s) de la catégorie ".$key["nom_cat"];
               $chart_data .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";
            }
            $chart_data = substr($chart_data, 0, -2);

            // echo($chart_data);
    }
    else{

    }

    $detail4 = $this->db->query("SELECT COUNT(type) AS nombre, type FROM profile_article GROUP BY type");
    if ($detail4->num_rows() > 0) {
            foreach ($detail4->result_array() as $key) {
            	$label2 = $key["nombre"]." publication(s) de type ".$key["type"];
               $chart_data2 .= "{ indexLabel:'".$label2."', y:".$key["nombre"]."}, ";
            }
            $chart_data2 = substr($chart_data2, 0, -2);

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
                           <!-- mes scripts commencent -->
                            <?php include("__stat_pub_.php") ?>
                           <!-- fin de mes scripts commencent -->
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
	            type: "area",                
	            dataPoints: [<?php echo $chart_data; ?>]
	        }
	        ]
	    });
	    chart.render();

	    var chart3 = new CanvasJS.Chart("chartContainer3", {
	        theme: "theme2",
	        animationEnabled: true,
	        title: {
	            text: ""
	        },
	        data: [
	        {
	            type: "column",                
	            dataPoints: [<?php echo $chart_data2; ?>]
	        }
	        ]
	    });
	    chart3.render();

	    var chart3 = new CanvasJS.Chart("chartContainer4", {
	        theme: "theme2",
	        animationEnabled: true,
	        title: {
	            text: ""
	        },
	        data: [
	        {
	            type: "pie",                
	            dataPoints: [<?php echo $chart_data2; ?>]
	        }
	        ]
	    });
	    chart3.render();

	 </script>

</body>

</html>