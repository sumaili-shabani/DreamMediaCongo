


<!-- bloc 2 -->
<div class="col-md-12">
	<div class="row">
		
		<?php 


			if ($contact_info_site->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($contact_info_site->result_array() as $row) {

						?>

						<div class="col-md-12 mb-2" style="margin-bottom: 10px;" align="center">
					   	 <label class="form-label"><span>Contactez nous au!!!  </span><i class="fa fa-info"></i></label>
					    </div>

						<div class="col-md-4 mb-2 col-md-12" style="margin-bottom: 10px;">
							<div class="card">
								<div class="card-header text-center">
									<span class="text-info"><i class="fa fa-google"></i> Adresse email:</span> 
								</div>
								<div class="card-body text-center">
									<a href="mailto:<?php echo($row['email']); ?>"><?php echo($row['email']); ?></a><br>
									courier éléctronique
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-2 col-md-12" style="margin-bottom: 10px;">
							<div class="card">
								<div class="card-header text-center">
									<span class="text-info"><i class="fa fa-phone"></i>Téléphone:</span> 
								</div>
								<div class="card-body text-center">
									<a href="tel:<?php echo($row['tel1']); ?>">Appeler <?php echo($row['tel1']); ?></a><br>
									Numéro de téléphone
								</div>
							</div>
						</div>

						<div class="col-md-4 mb-2 col-md-12" style="margin-bottom: 10px;">
							<div class="card">
								<div class="card-header text-center">
									<span class="text-info"><i class="fa fa-phone"></i>Adresse domicile:</span> 
								</div>
								<div class="card-body text-center">
									<span class="text-soft"><?php echo($row['adresse']); ?></span>
								</div>
							</div>
						</div>

						
						<?php
					
					# code...
				}
			}


		?>

		<hr>
	</div>

	
</div>
<!-- fin bloc 2 -->

<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">

			<div class="fbt-contact-box" style="margin-top: 20px;">
	
				<form id="comment-form" method="post" id="user_form" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-4">
							<label for="name">Name*</label>
							<input id="name" name="name" type="text"  placeholder="Entrez votre nom">
						</div>
						<div class="col-md-4">
							<label for="email">E-mail*</label>
							<input id="email" name="email" type="text"  placeholder="Entrez votre adresse mail ">
						</div>
						<div class="col-md-4">
							<label for="subject">Sujet*</label>
							<input id="subject" name="subject" type="text"  placeholder="Entrez le sujet">
						</div>


					</div>

					<label for="message">Message*</label>
					<textarea id="message" name="message" placeholder="tapper votre message"></textarea>

					

					<button type="submit" id="submit-contact">
						<i class="fa fa-send"></i> Envoyer
					</button>
				</form>
			</div>
			
		</div>
	</div>
</div>

<!-- bloc 3 -->
<div class="col-md-12" style="margin-top: 10px;">
	<!-- script pour la carte géographique -->
	  <div class="embed-responsive embed-responsive-16by9 col-lg-12" style="width: 100%; height: 400px;">
	      <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1Q5K5fz4UoKKXxKVu6KdZhVNrYZ4UScBy" allowfullscreen></iframe>

	    
	  </div>
	<!-- fin de ces scripts -->
   
</div><!-- .col -->
<!-- fin bloc 3 -->