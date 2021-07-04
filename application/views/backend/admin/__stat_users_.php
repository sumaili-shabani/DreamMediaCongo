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

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mb-2">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							Statistiques des utilisateurs par rapport à leurs sexe
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							Statistiques des utilisateurs par rapport à leurs sexe
						</div>
						<div class="card-body">
							<div id="chartContainer2" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>
