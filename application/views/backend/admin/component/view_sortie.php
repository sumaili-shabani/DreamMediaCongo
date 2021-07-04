<?php 

$chart_data = '';
$url = '';


if (isset($date1) && isset($date2)) {

	$url= base_url().'admin/impressionStockSortie_Date/'.$date1.'/'.$date2;
	# code...
	$detail3 = $this->db->query("SELECT COUNT(product_id) AS nombre, nom FROM profile_sortie_stock  WHERE created_at BETWEEN '".$date1."'  AND '".$date2."' GROUP BY idcat ");
	if ($detail3->num_rows() > 0) {
	          foreach ($detail3->result_array() as $key) {

	          	$sexe = "produit(s) :".$key["nom"];

	             $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
	          }

	          $chart_data = substr($chart_data, 0, -2);
	          // echo($chart_data);
	}
	else{

	}
}
else{

	
	$url= base_url().'admin/impressionStockSortie';
	$detail3 = $this->db->query("SELECT COUNT(product_id) AS nombre, nom FROM profile_sortie_stock GROUP BY idcat");
	if ($detail3->num_rows() > 0) {
	          foreach ($detail3->result_array() as $key) {

	          	$sexe = "produit(s) :".$key["nom"];

	             $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
	          }

	          $chart_data = substr($chart_data, 0, -2);
	          // echo($chart_data);
	}
	else{

	}

}

?>


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-12 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="col-md-12">
                    	<form method="post" action="<?php echo(base_url()) ?>admin/stat_sortie" class="row">
                    		
                    		<div class="col-md-3">
                    			<input type="date" name="date1" class="form-control"
                    			value="<?php 
                    			if (isset($date1)) {
                    				echo($date1);
                    			}
                    			?>"
                    			>
                    		</div>
                    		<div class="col-md-3">
                    			<input type="date" name="date2" class="form-control"
                    			value="<?php 
                    			if (isset($date2)) {
                    				echo($date2);
                    			}
                    			?>"
                    			>
                    		</div>
                    		<div class="col-md-3">
                    			<input type="submit" name="valier" class="btn btn-secondary" value="Envoyer">
                    		</div>
                    		<div class="col-md-3">
                    			<a href="<?php echo($url) ?>" class="btn btn-outline-secondary"><i class="fa fa-print"></i> Imprimer le fichier</a>
                    		</div>
                    	</form>
                    </div>
                </div>
                <div class="col-auto">
                    

                    <ul class="navbar-nav ml-auto">
                    	<!-- Nav Item - User Information -->
	                    <li class="nav-item dropdown no-arrow">
	                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="userDropdown" role="button"
	                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            
	                            <i class="fas fa-list fa-2x text-gray-300"></i>
	                        </a>
	                        <!-- Dropdown - User Information -->
	                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
	                            aria-labelledby="userDropdown">
	                            <a class="dropdown-item" href="<?php echo(base_url())?>admin/stat_entree">
	                                <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
	                               Entrée en stock
	                            </a>
	                            <a class="dropdown-item" href="<?php echo(base_url())?>admin/stat_sortie">
	                                <i class="fas fa-tag fa-sm fa-fw mr-2 text-gray-400"></i>
	                                Sortie en stock
	                            </a>
	                            <a class="dropdown-item" href="<?php echo(base_url())?>admin/stat_fichestock">
	                                <i class="fas fa-book fa-sm fa-fw mr-2 text-gray-400"></i>
	                               Fiche de stock
	                            </a>
	                            
	                        </div>
	                    </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Nombre Total des prodits entrants en stock</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_total); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-file fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Earnings (Annual) Card Example -->
<!-- <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Nombre Total des prodits entrants en stock par catégorie</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_total_by_cat); ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-tag fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="col-xl-12 col-md-6 mb-4">
	<div class="row">
		<div class="col-md-6 mb-2">
			<div class="card">
				<div class="card-header bg-secondary text-white text-center">
					Statistiques de produits sortant en stock 
				</div>
				<div class="card-body">
					<div id="chartContainer" style="height: 200px; width: 100%;"></div>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-secondary text-white text-center">
					Statistiques de produits sortant en stock 
				</div>
				<div class="card-body">
					<div id="chartContainer2" style="height: 200px; width: 100%;"></div>
				</div>
			</div>
			 
		</div>
	</div>
	
</div>
