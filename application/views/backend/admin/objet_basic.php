<div class="col-md-12">

	<!-- form commence -->
	<form method="post" id="user_form" enctype="multipart/form-data" action="<?= base_url(); ?>admin/modification_panel">
	<div class="col-lg-12">
		<div class="row">

			<div class="col-md-12">
				<div class="text-center" align="center">
	        		<?php
                    if($this->session->flashdata('message'))
                    {
                        echo '
                        <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message").'
                        </div>
                        ';
                    }
                    elseif ($this->session->flashdata('message2')) {
                      echo '
                        <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message2").'
                        </div>
                        ';
                    }
                    else{

                    }
                    ?>
	        	</div>
            </div>


        	<div class="col-md-6">
        		<label class="label-control"><i class="fa fa-user"></i>Entrer votre nom</label>

					 <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Entrer votre nom" value="<?php echo($first_name) ?>">
					 <div class="col-md-12">
		          	<span class="text-danger"><?php echo form_error('first_name'); ?></span>
		         </div>
        	</div>

        	<div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-user"></i>Entrer votre prénom</label>
	       
	        	<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Entrer votre prenom" value="<?php echo($last_name) ?>">

	        	<div class="col-md-12">
		          	<span class="text-danger"><?php echo form_error('last_name'); ?></span>
		         </div>
	           
	        </div>

	        <!-- email -->
	        <div class="col-md-6">
        		<label class="label-control"><i class="fa fa-google"></i>Adresse email</label>

					 <input type="email" name="mail_ok" id="mail_ok" class="form-control" placeholder="nomdomaine@gmail.com" value="<?php echo($email) ?>" value="<?php echo($email) ?>">
					 <div class="col-md-12">
		          	<span class="text-danger"><?php echo form_error('mail_ok'); ?></span>
		         </div>
        	</div>
        	<!-- fin email -->

	        <!-- telephone -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-phone"></i>Numéro de téléphone</label>
	       
	        	<input type="tel" name="telephone" id="telephone" class="form-control" placeholder="0817883541" value="<?php echo($telephone) ?>">
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('telephone'); ?></span>
	           </div>
	         
	        </div>

	        <!-- fin telephone -->

	         <!-- telephone -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-map-marker"></i>Complèter votre Adresse</label>
	       
	        	<input type="text" name="full_adresse" id="full_adresse" class="form-control" placeholder="rdc goma q/tmk avenie/indistriel n° 12" value="<?php echo($full_adresse) ?>">
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('full_adresse'); ?></span>
	           </div>
	         
	        </div>

	        <!-- date de naissence -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-calendar"></i> Date de naissance</label>
	       
	        	<input type="date" name="date_nais" id="full_adresse" class="form-control" value="<?php echo($date_nais) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('date_nais'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de naissance -->

	        <!-- date de facebook -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-facebook"></i> Complèter url facebook</label>
	       
	        	<input type="url" name="facebook" id="full_adresse" class="form-control" value="<?php echo($facebook) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('facebook'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de facebook -->

	        <!-- date de twitter -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-twitter"></i> Complèter url twitter</label>
	       
	        	<input type="url" name="twitter" id="twitter" class="form-control" value="<?php echo($twitter) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('twitter'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de twitter -->

	        <!-- date de linkedin -->
	        <div class="col-md-12">
	        	<label class="label-control"><i class="fa fa-linkedin"></i> Complèter url linkedin</label>
	       
	        	<input type="url" name="linkedin" id="linkedin" class="form-control" value="<?php echo($linkedin) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('linkedin'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de linkedin -->

	         


	        <div class="col-md-12">
	        	<label class="label-control"><i class="fa fa-question-circle"></i>Complèter votre biographie</label>
	       
	        	 <textarea name="biographie" class=" form-control textarea" placeholder="Parler un peu de vous, surtout ce que tu fais dans la vie et quelle personnalité tu occupe dans la société"
                  >
                  	<?php echo($biographie) ?>
                  </textarea>
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('biographie'); ?></span>
	           </div>
	         
	        </div>


	        

	        <!-- sexe -->
	         <div class="col-md-12">
	        	<label class="label-control"><i class="fa fa-male"></i>Complèter votre sexe</label>
	       
	        	<label>
	        		<input type="radio" name="sexe" value="M"  
	        		<?php
	        		if ($sexe=='M') {
	        			echo("checked");
	        		}
	        		 ?>
	        		> Homme
	        	</label>
	        	<label>
	        		<input type="radio" name="sexe" value="F"
	        		<?php
	        		if ($sexe=='F') {
	        			echo("checked");
	        		}
	        		?>

	        		>Femme
	        	</label>
	        	<div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('sexe'); ?></span>
	           </div>
	           
	         
	        </div>
	        <!-- fin sexe -->

	        
	        
	        <div class="col-md-12">
	        	<div class="form-group">
	        		<input type="hidden" name="operation" id="operation" value="Add" />

	        		<input type="submit" name="action" id="action" class="btn btn-dark btn-round pull-right" value="modifier" />
	        	</div>
	        </div>
			
		</div>
	</div>
	

	</form>
	<!-- fin forme -->
	
</div>