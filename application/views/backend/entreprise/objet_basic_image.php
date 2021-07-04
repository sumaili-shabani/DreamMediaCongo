<div class="col-md-12">

	<!-- form commence -->
	<form method="post" id="user_form" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/modification_photo">

													
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

    		<div class="col-md-12">
    			<label class="label-control"><i class="fa fa-camera"></i>Changer votre photo de profile</label>
       
        		<input type="file" name="user_image" id="user_image" class="form-control" placeholder="selectionner une photo" required="">
    		</div>
    		<div class="col-md-12" style="margin-top: 5px;">

        		<input type="submit" name="action" id="action" class="btn btn-dark btn-round btn-block" value="modifier la photo" />
    		</div>
    	</div>

    </form>
	<!-- fin forme -->
	
</div>