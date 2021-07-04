<?php 

	$url;
	$chart_data = '';

	if (isset($dates1)) {
		if ($dates1 !='') {

			 $url = "impression_pdf_entreprise_filtrage/".$dates1;
			
		}
		else{
			$url = "inscription_apprenant";
		}


	}
	else{

		$url = "stat_filtrage_galerie_ap";
		
	}
?>

<!-- debut de script date presence de jours -->
<div class="col-md-12 row">
	<div class="col-md-2">
	
	</div>
	<div class="col-md-8">
		<div class="col-md-12">
			<form class="row" method="post" action="<?php echo(base_url()) ?>admin/stat_filtrage_galerie_ap">

				<div class="col-2 mb-4">
					<a href="<?php echo(base_url()) ?>admin/<?php echo($url) ?>" class="btn btn-dark btn-sm"><i class="fa fa-print"></i>PDF</a>
				</div>

				<div class="col-7">
					<div class="form-group col-md-12">
                        
                           <select  name="date1" id="date1" class="form-control selectpicker" data-live-search="true">
                           	<?php 
                           	if ($entreprises->num_rows() > 0) {
                           		?>
                           		<option value="">Selectionnez l'entreprise</option>
                           		<?php
                           		foreach ($entreprises->result_array() as $key) {
                           			?>
                           			<option value="<?php echo($key['ide']) ?>">
                           				<?php echo($key['designation']) ?>	
                           			</option>
                           			<?php
                           		}
                           	}
                           	else{

                           		?>
                           		<option value="">Aucune entreprise n'est diponible</option>
                           		<?php
                           	}
                           	?>
                           	
                           </select> 
                    </div>

				</div>

				

				<div class="col-3">
					<button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-send"></i> Envoyer</button>
				</div>



			</form>
		</div>
		
	</div>

	<div class="col-md-2"></div>

	<!-- insertion de tableau -->
	 <div class="col-md-12">
	 	<div class="col-md-12" align="center">
	 		<a href="" class="btn btn-outline-light"><i class="fa fa-refresh"></i></a>
	 	</div>
	    <div class="table-responsive">
	        <table id="user_data" class="table table-bordered table-light table-white">
	            <thead class="tb-member-head thead-light">  
	                <tr>  
	                    <th width="25%">adresse de la galerie</th>
	                    <th width="25%">Entreprise</th>  
	                    <th width="20%">N° RCM</th> 
	                    <th width="20%">Mise à jour</th>
	                     
	                    <th width="5%">Modifier</th> 
	                    <th width="5%">Supprimer</th>  
	                </tr>  
	           </thead> 

	           <tbody>

	           	<?php 

					$url;
					$chart_data = '';

					
					if ($dates1 !='') {

						 $url = "impression_pdf_entreprise_filtrage/".$dates1;
						 $detail3 = $this->db->query("SELECT * FROM profile_galerie WHERE ide='".$dates1."' ");
				         
				          if ($detail3->num_rows() > 0) {
				              foreach ($detail3->result_array() as $key) {
				              	?>
				              	<tr>
				              		<td><?php echo(substr($key['adresse'], 0,30)) ?> ...</td>
				              		<td><?php echo(substr($key['designation'], 0,20)) ?> ...</td>
				              		<td><?php echo(substr($key['numrcm'], 0,20)) ?>...</td>
				              		<td><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>
				              		<td>
				              			<a href="javascript:void(0);" class="btn btn-warning btn-circle btn-sm update" idg="<?= $key['idg']; ?>"><i class="fa fa-edit"></i></a>
				              		</td>

				              		<td>
				              			<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm delete" idg="<?= $key['idg']; ?>"><i class="fa fa-trash"></i></a>
				              		</td>

				              	</tr>
				              	<?php
				              	
				              }

				            
				          }
				          else{

				          }

					}
					else{
						$url = "inscription_apprenant";
						 $detail3 = $this->db->query("SELECT * FROM profile_galerie LIMIT 50 ");
				         
				          if ($detail3->num_rows() > 0) {
				              foreach ($detail3->result_array() as $key) {
				              	?>
				              	<tr>
				              		<td><?php echo(substr($key['adresse'], 0,30)) ?> ...</td>
				              		<td><?php echo(substr($key['designation'], 0,20)) ?> ...</td>
				              		<td><?php echo(substr($key['numrcm'], 0,20)) ?>...</td>
				              		<td><?php echo(nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23))) ?></td>
				              		<td>
				              			<a href="javascript:void(0);" class="btn btn-warning btn-circle btn-sm update" idg="<?= $key['idg']; ?>"><i class="fa fa-edit"></i></a>
				              		</td>

				              		<td>
				              			<a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm delete" idg="<?= $key['idg']; ?>"><i class="fa fa-trash"></i></a>
				              		</td>

				              	</tr>
				              	<?php
				              	
				              }

				            
				          }
				          else{

				          }
					}


					
					
				?>
	           	

	           </tbody>

	           <tfoot>  
	                <tr>  
	                    <th width="25%">adresse de la galerie</th>
	                    <th width="25%">Entreprise</th>  
	                    <th width="20%">N° RCM</th> 
	                    <th width="20%">Mise à jour</th>
	                     
	                    <th width="5%">Modifier</th> 
	                    <th width="5%">Supprimer</th>
	                </tr>  
	           </tfoot>   
	            
	        </table>
	    </div>
	</div>
	<!-- fin insertion tableau -->


</div>