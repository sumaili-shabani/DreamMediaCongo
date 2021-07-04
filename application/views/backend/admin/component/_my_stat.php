<div class="col-lg-12">
	<div class="row">

		<!-- fin de blocs  -->

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre total de publicités actives
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_pub); ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                        	<a href="<?php echo(base_url()) ?>admin/publicity_personnele">
                                
                            	<i class="fas fa-picture-o fa-2x text-gray-300"></i>
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
                                Nombre total de privilège sur la plateforme</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_role); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?php echo(base_url()) ?>admin/role">
                                
                            	<i class="fas fa-lock fa-2x text-gray-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</div>
</div>