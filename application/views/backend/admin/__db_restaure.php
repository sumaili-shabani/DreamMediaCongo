
<div class="col-md-12">
	<div class="row">
		<!-- bloc notification -->
		<div class="col-md-12" style="margin-top: 10px;">
            <?php
            if($this->session->flashdata('message'))
            {
                echo '
                <div class="alert alert-success" style="background:white;">
                <button class="close" data-dismiss="alert">x</button>
                    '.$this->session->flashdata("message").'
                </div>
                ';
            }
            elseif ($this->session->flashdata('message2')) {
              echo '
                <div class="alert alert-danger" style="background:white;">
                <button class="close" data-dismiss="alert">x</button>
                    '.$this->session->flashdata("message2").'
                </div>
                ';
            }
            else{

            }
            ?>
        </div>
		<!-- fin bloc -->
		<!-- bloc 1 -->
		<div class="col-md-6" style="margin-top: 10px;">
			<div class="card">
				<div class="card-header text-center text-uppercase bg-dark text-white">
					<i class="fa fa-download"></i>&nbsp;Generer la sauvergarde des données(backup)
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-4"></div>
									<div class="col-4">
										<img src="<?php echo(base_url()) ?>upload/annumation/backup db.svg" class="img img-responsive" >
									</div>
									<div class="col-4"></div>

								</div>
							</div>

							<div class="col-md-12 text-center" style="margin-top: 53px;">
								<i class="fa fa-hand-o-down fa-lg"></i>
							</div>
							<div class="col-md-12 text-center">

								<a href="<?php echo(base_url()) ?>admin/database/create" class="btn btn-dark btn-round">
									<i class="fa fa-download"></i>&nbsp; Sauvegarder la base des données
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- fin bloc 1 -->

		<!-- bloc 1 -->
		<div class="col-md-6" style="margin-top: 10px;">
			<div class="card">
				<div class="card-header text-center text-uppercase bg-dark text-white">
					<i class="fa fa-download"></i>&nbsp;Importer la sauvergarde des données(backup)
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-4"></div>
									<div class="col-4">
										<img src="<?php echo(base_url()) ?>upload/annumation/restore db.svg" class="img img-responsive" >
									</div>
									<div class="col-4"></div>
								</div>
							</div>
							<div class="col-md-12 text-center mb-2" style="margin-top: 10px;">
								<form method="POST" action="<?php echo(base_url()) ?>admin/database/restore" enctype="multipart/form-data" class="row">

									<div class="col-12" style="margin-top: 10px;">
										<input type="file" name="file_name" id="file_name" class="form-control form-round">
								    </div>

								    <div class="col-12" style="margin-top: 10px;">
										<button type="submit" class="btn btn-dark btn-round"><i class="fa fa-download"></i>&nbsp; importer la base des données</button>
								    </div>
								
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- fin bloc 1 -->



	</div>
</div>