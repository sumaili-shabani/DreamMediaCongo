<!-- paiement -->
<div class="col-md-12 mb-5" style="margin-top: 20px;">
	
	<div class="form-group col-md-12">
		<div class="row">
			<div class="col-md-12 card">
				<div class="row card-body">

					<div class="col-md-12 mb-4">
		
						<div class="col-md-12" style="margin-top: 15px;">
							<div class="row">
								
								<div class="col-md-7 mb-2">
									<div class="col-md-12">
										<b><img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;"> &nbsp; M-pesa:</b> + <?php echo($tel1_info) ?> <br>
										<b><img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;"> &nbsp;  Airtel-money:</b> + <?php echo($tel2_info) ?>
									</div>
								</div>
								<div class="col-md-5 mb-2">
									<i class="fa fa-info"></i> ce-ci n'est pas un module de paiement mais plutôt une preuve de votre paiement après validation de votre transaction
								</div>
								<div class="col-md-12 mb-2">
								<i class="fa fa-check"></i>	Après avoir transferé l'argent sur m-pesa ou airtel monney dans l'un de  numéros ci-haut, Vellez confirmer votre paiement  pour  permettre à l'administration de valider votre opération afin de béneficier plus nos services 

								</div>
							</div>
							
						</div>
						<hr>
					</div>

					<div class="col-md-12">
						<div class="row">

							<div class="col-md-12 mb-2">
								<label><i class="fa fa-money"></i> Selectionction un mode de paiement</label>
								<select name="motif" id="motif" class="form-control motif" required>
									<option value="">Selectionction un mode de paiement</option>
									<option selected value="m-pesa">m-pesa</option>
									<option value="airtel money">airtel money</option>
								</select>
							</div>

							<div class="col-md-12 mb-2">
								<label><i class="fa fa-key"></i> Saisissez le code de vérification de transaction</label>
								<input type="text"  name="token" class="form-control token" placeholder="code de transaction envoyée par le réseau après votre paiement">

							</div>

							<div class="col-md-6 mb-2">
								<div class="col-md-12 vodacom" style="margin-top: 10px; display: show">
									<img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive">
								</div>

								<div class="col-md-12 airtel" style="margin-top: 10px; display: none;">
									<img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive">
								</div>

								
							</div>

							<div class="col-md-6 mb-2">
								<label><i class="fa fa-money"></i> Montant à payer</label>
								<input  type="number" min="1" name="montant" class="form-control montant" placeholder="Net à payer <?php echo($net_payer) ?>$" required value="<?php echo($net_payer) ?>">

								<input type="submit" name="valuder" value="Valider votre paiement" class="btn btn-dark btn-block" style="margin-top: 10px;">

								
							</div>


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 form-group" style="margin-top: 10px;"></div>
</div>
<!-- fin -->