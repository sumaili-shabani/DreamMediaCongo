<div class="col-md-12">

	<!-- form commence -->
	<div class="row clearfix">



	    <div class="col-md-12 my-3 p-3 bg-white rounded box-shadow">

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
		    
		    <?php

           $this->db->where('id_user', $id_user);
           $this->db->order_by('created_at', 'desc');
           $this->db->limit(8);
           $Notifications= $this->db->get("notification");
           if ($Notifications->num_rows() > 0) {
            $nombre_de_notification = $Notifications->num_rows();

            foreach ($Notifications->result_array() as $not) {
             
	              ?>

	              <div class="media text-muted pt-3">

	              	<!-- <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17497693dc4%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17497693dc4%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
	              	
			        <i class="fa <?php echo($not['icone']) ?> fa-lg" style="width: 32px; height: 32px;"></i>
			        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
			            <strong class="d-block text-gray-dark"><?php echo($not['titre']) ?></strong><br>
			           <?php echo($not['message']) ?>  <?php echo(substr(date(DATE_RFC822, strtotime($not['created_at'])), 0, 23)); ?>
			        </p>
			        <div class="pull-right">
			           	<a href="<?php echo(base_url()) ?><?php echo($not['url']) ?>" class="btn btn-default btn-sm"><i class="fa fa-slack"></i>voir</a>

	                    <a onclick="return confirm('Etes-vous sûre de vouloire Supprimer ce cours dans la liste favorie?')" href="<?php echo(base_url()) ?>admin/view_1/display_delete/<?php echo($not['id']) ?>" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> supprimer</a> 
		           </div>
			    </div>
	             

	              <?php
            }

           }
           else{
            $nombre_de_notification=0;
           } 

         ?>
	</div>

    
</div>
	<!-- fin forme -->
	
</div>