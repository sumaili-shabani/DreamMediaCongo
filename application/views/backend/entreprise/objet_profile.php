
<div class="col-xl-12 col-lg-12 col-md-12">
    <div class="row">
        <div class="col-md-12">

             <div class="text-center" align="center">
              <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success"><i class="fa fa-check"></i>
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                elseif ($this->session->flashdata('message2')) {
                  echo '
                    <div class="alert alert-danger"><i class="fa fa-question"></i>
                        '.$this->session->flashdata("message2").'
                    </div>
                    ';
                }
                else{

                }
                ?>
            </div>
            
        </div>

        <div class="col-md-8">
           

            <small class="text-muted">Biographie: </small>
            <div>
                <?php echo($biographie) ?>
            </div>
            
            
            <hr>
            <small class="text-muted">Adresse mail: </small> <font class="text-info"><?php echo($email) ?></font>
              <hr>                          
            
            <small class="text-muted">Mobile: </small>
            <?php echo($telephone) ?>
            <hr>
            <small class="text-muted">Date d'anniversaire: </small>
            <p class="m-b-0"><?php echo($date_nais) ?></p>
            <hr>
            <small class="text-muted">Social: </small>
            <div class="form-inline">
                <a href="<?php echo($twitter) ?>" target="_blank"><i class="fa fa-twitter m-r-5"></i> twitter.com</a> &nbsp;| &nbsp;

                <a href="<?php echo($facebook) ?>" target="_blank"><i class="fa fa-facebook m-r-5"></i> facebook.com</a> &nbsp;| &nbsp;

                <a href="<?php echo($linkedin) ?>" target="_blank"><i class="fa fa-linkedin m-r-5"></i> linkedin.com</a>
            </div>
           
        </div>


        <div class="col-md-4">
            <div class="text-center">
                 <img src="<?= base_url()?>upload/photo/<?php echo($image) ?>" class="img img-responsive img-circle rounded" alt="" style="width: 50%; height: 50%;">
            </div>
            <div class="col-md-12">
                <small class="text-muted">Nom: </small>
                <p><?php echo($first_name) ?></p>

                <small class="text-muted">Postnom: </small>
                <p>
                    <?php echo($last_name) ?>
                </p>

                <small class="text-muted">Email: </small>
                <p><?php echo($email) ?></p>

                
                
            </div>
        </div>


    </div>
</div>
