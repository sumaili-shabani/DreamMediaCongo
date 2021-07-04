<!-- debit de statistique -->
<div class="row">


    <div class="col-lg-12">
        <div class="row">

            <!-- fin de blocs  -->

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Nombre Total des articles actifs</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_publicite); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/article">
                                    
                                    <i class="fas fa-pie-chart fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Nombre total de catégorie(rubrique) d'article</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_category); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/category">
                                    <i class="fas fa-line-chart fa-2x text-gray-300"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre des membres qui ont les privilège au système
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_membre); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/users">
                                    
                                    <i class="fas fa-university fa-2x text-gray-300"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Nombre D'utilisateurs </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_users); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>admin/users">
                                    
                                    <i class="fas fa-group fa-2x text-gray-300"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

<!-- fin de statistique -->

<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="row">

					 <?php        
						  $chart_data = '';

						  $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM users GROUP BY sexe");
						  
						 
						  if ($detail3->num_rows() > 0) {
						          foreach ($detail3->result_array() as $key) {

						          	$sexe = "personnes de sexe:".$key["sexe"];

						             $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
						          }

						          $chart_data = substr($chart_data, 0, -2);
						          // echo($chart_data);
						  }
						  else{

						  }
					  ?>


					<?php 

						$chart_data2 = '';
						$chart_data3 = '';
                        $label = '';

						$detail2 = $this->db->query("SELECT COUNT(nom_cat) AS nombre, nom_cat FROM profile_article GROUP BY nom_cat");
						if ($detail2->num_rows() > 0) {
						    foreach ($detail2->result_array() as $key) {

                                    $label = $key["nombre"]." publication(s) ".$key["nom_cat"];

                                    $chart_data2 .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";

							        $chart_data3 .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";

							         
							}

						      
						      $chart_data2 = substr($chart_data2, 0, -2);
						      $chart_data3 = substr($chart_data3, 0, -2);

						      // echo($chart_data2);
						}
						else{

						}
					?>

				

				<div class="col-md-6">

					 <div class="card">
					    <div class="card-header bg-dark text-white">
					      Statistiques des publications par rapport à leurs catégories
					    </div>
					    <div class="card-body">
					      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
					    </div>
					  </div>
				</div>

				<div class="col-md-6">
				  <div class="card">
				    <div class="card-header bg-dark text-white">
				      Statistique de paiement par raport au genre de sexe
				    </div>
				    <div class="card-body">
				      <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
				    </div>
				  </div>
				</div>



			</div>
		</div>
	</div>
</div>