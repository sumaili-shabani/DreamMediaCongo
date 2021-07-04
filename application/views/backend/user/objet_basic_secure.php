<div class="col-md-12">

	<!-- form commence -->
	<form method="post" id="user_form" enctype="multipart/form-data" action="<?= base_url(); ?>user/modification_account">
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

        <div class="col-md-12">
        	<h6>Changer votre mot de passe</h6>
        	<hr>
        </div>

    	 <!-- nouveau mot de passe -->
        <div class="col-md-12">
        	<label class="label-control"><i class="fa fa-lock"></i>nouveau mot de passe</label>
       
        	<input type="password" name="user_password_nouveau" id="pass1" class="form-control" placeholder="nouveau mot de passe">
           <div class="col-md-12">
          	 <span class="text-danger"><?php echo form_error('user_password_nouveau'); ?></span>
           </div>
         
        </div>
         <!-- mot de passe -->
        <div class="col-md-12">
        	<label class="label-control"><i class="fa fa-lock"></i>Confirmer votre nouveau mot de passe</label>
       
        	<input type="password" name="user_password_confirmer" id="pass1" class="form-control" placeholder="Confirmer votre nouveau mot de passe" required="">
           <div class="col-md-12">
          	 <span class="text-danger"><?php echo form_error('user_password_confirmer'); ?></span>
           </div>
         
        </div>

        <!-- fin mot de passe -->

        <div class="col-md-12">
        	<label class="label-control"><i class="fa fa-key"></i>Veillez-entrer votre ancien mot de passe</label>
       
        	<input type="password" name="user_password_ancien" id="pass1" class="form-control" placeholder="Votre ancien mot de passe" required="">
           <div class="col-md-12">
          	 <span class="text-danger"><?php echo form_error('user_password_ancien'); ?></span>
           </div>
         
        </div>

        
        <div class="col-md-12 mb-2" style="margin-top: 10px;">
        	<div class="form-group">
        		<input type="hidden" name="operation" id="operation" value="Add" />

        		<input type="submit" name="action" id="action" class="btn btn-dark btn-round pull-right" value="modifier" />
        	</div>
        </div>

	  </form>
	<!-- fin forme -->
	
</div>