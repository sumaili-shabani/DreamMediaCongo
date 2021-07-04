<div class="card" style="margin-top: 10px;">
    <div class="card-body">
        <div class="text-center"> 
            <img src="<?= base_url()?>upload/photo/<?php echo($image) ?>" class="rounded-circle" width="150" />
            <h4 class="card-title mt-10"><?php echo($first_name) ?></h4>
            <p class="card-subtitle"><?php echo($biographie) ?></p>
            
        </div>
    </div>
    <hr class="mb-0"> 
    <div class="card-body">

    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-12">
    				 <small class="text-muted d-block">Adresse mail </small>
        			<h6><?php echo($email) ?></h6> 
    			</div>

    			<div class="col-md-6">
    				<small class="text-muted d-block pt-10">Téléphone</small>
        			<h6><a href="tel:<?php echo($telephone) ?>" class="link"><?php echo($telephone) ?></a></h6> 
    			</div>

    			<div class="col-md-6">
    				<small class="text-muted d-block pt-10">Date de naissance</small>
       				 <h6><?php echo($date_nais) ?></h6>
    			</div>

    			

    			<div class="col-md-6">
    				<small class="text-muted d-block pt-30">Réseaux sociaux</small>
	                <br/>
	                <a href="<?php echo($facebook) ?>" target="_blank" class="btn btn-circle btn-sm btn-primary"><i class="fab fa-facebook-f"></i></a>
	                <a href="<?php echo($twitter) ?>" target="_blank" class="btn btn-circle btn-sm btn-info"><i class="fab fa-twitter"></i></a>
	               <!--  <a href="<?php echo($linkedin) ?>" target="_blank" class="btn btn-circle btn-sm btn-danger"><i class="fab fa-linkedin"></i></a> -->
    			</div>

    			<div class="col-md-6">
    				<div class="card-inner p-0">
					    <ul class="list-group">

					    	  <li class=""><a href="<?php echo(base_url()) ?>user/profile"> <i class="fa fa-user"></i>&nbsp; Profile</a></li>
							  <li class=""><a href="<?php echo(base_url()) ?>user/basic"><i class="fa fa-laptop"></i>&nbsp;Basiques</a></li>
							  <li class=""><a href="<?php echo(base_url()) ?>user/basic_image"><i class="fa fa-camera"></i>&nbsp; Ma Photo</a></li>
							  <li class=""><a href="<?php echo(base_url()) ?>user/basic_secure"><i class="fa fa-key"></i>&nbsp;  Ma Securité</a></li>

					    </ul>
					</div><!-- .card-inner -->
    			</div>


    		</div>
    	</div> 
       
         

        <div class="map-box">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div> 

        
       
    </div>
</div>


