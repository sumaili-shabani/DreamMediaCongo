<div class="col-md12">
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
	                                    Nombre Total des utilisateurs actifs</div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_users); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <i class="fas fa-group fa-2x text-gray-300"></i>
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
	                                    Nombre D'utilisateurs homes</div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_users_m); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <i class="fas fa-male fa-2x text-gray-300"></i>
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
	                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre D'utilisateurs femmes
	                                </div>
	                                <div class="row no-gutters align-items-center">
	                                    <div class="col-auto">
	                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_users_f); ?></div>
	                                    </div>
	                                    <div class="col">
	                                        <div class="progress progress-sm mr-2">
	                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-auto">
	                                <i class="fas fa-female fa-2x text-gray-300"></i>
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
	                                    Nombre D'utilisateurs inconus</div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_users_a); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <i class="fas fa-question fa-2x text-gray-300"></i>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
				
			</div>
		</div>
		
		<div class="col-md-12 ">
			<div class="row ">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                <div class="mailbox-read-message card">

	                	<div class="col-md-12 card-body">
					        <div class="row">
					           <div class="col-md-12">
					           	
					             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
					           </div>
					         </div>
					    </div>

	                	<div class="col-md-12 table-responsive resultat_ok dataTables_wrapper dt-bootstrap4 no-footer" id="DataTables_Table_1_wrapper">
	                		<!-- datatable-init nk-tb-list nk-tb-ulist dataTable no-footer -->

	                      <table  class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">  
	                       <thead>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="10%">Téléphone</th>
	                                 <th width="15%">Son Rôle et fonction</th>
	                                 <th width="5%">Editer</th> 
	                                 <th width="5%">Supprimer</th>  
	                            </tr>  
	                       </thead>
	                       <tbody>
	                       <!-- 	<?php
		                       	foreach ($users->result_array() as $key) {
		                       		?>
		                       		<tr>
			                       		<td>
			                       			<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35">
			                       		</td>
			                       		<td><?php echo(substr($key['first_name'], 0,20)) ?>...</td>
			                       		<td><?php echo(substr($key['last_name'], 0,20)) ?>...</td>
			                       		<td><?php echo(substr($key['sexe'], 0,10)) ?></td>
			                       		<td><?php echo(substr($key['email'], 0,10)) ?>...</td>
			                       		<td><?php echo(substr($key['telephone'], 0,10)) ?>...</td>
			                       		<td><?php echo(substr($key['id'].'_/'.$key['image'], 0,10)) ?>...</td>
			                       		
			                       		<td>
			                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-warning btn-sm update">
			                       				<i class="fa fa-edit"></i>
			                       			</a>
			                       		</td>
			                       		<td>
			                       			<a href="javascript:void(0);" id="<?= $key['id']?>" class="btn btn-danger btn-sm update">
			                       				<i class="fa fa-trash"></i>
			                       			</a>
			                       		</td>

		                       		</tr>

		                       		<?php
		                       	}

	                       	?> -->
	                       </tbody>
	                       <tfoot>  
	                            <tr>  
	                                 <th width="10%">Image</th>  
	                                 <th width="20%">Prenom </th>  
	                                 <th width="15%">Postnom</th> 
	                                 <th width="5%">Sexe</th> 
	                                 <th width="15%">Email</th>
	                                 <th width="10%">Téléphone</th>
	                                 <th width="15%">Son Rôle et fonction</th>
	                                 <th width="5%">Editer</th> 
	                                 <th width="5%">Supprimer</th> 
	                            </tr>  
	                       </tfoot>   
	                     </table>
	                		
	                	</div>
	                  
	                </div>
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>






