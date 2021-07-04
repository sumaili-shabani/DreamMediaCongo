<div class="col-md-12" style="margin-top: 20px;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Reinitialisation de mot de passe</h1>
                                       <span>
                                            vous êtes au bout de réunitialisation de mot de passe; prière d'entrer les bonnes bonnes informations secretes.
                                        </span>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url(); ?>login/recupere_passe_word">
                                        <div class="form-group">
                                            <?php
                                                if($this->session->flashdata('message'))
                                                {
                                                    echo '
                                                    <div class="alert alert-success" style="font-size: 14px;">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                        '.$this->session->flashdata("message").'
                                                    </div>
                                                    ';
                                                }
                                                elseif ($this->session->flashdata('message2')) {
                                                  echo '
                                                    <div class="alert alert-danger" style="font-size: 14px;">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                        '.$this->session->flashdata("message2").'
                                                    </div>
                                                    ';
                                                }
                                                else{

                                                }
                                            ?>
                                        </div>      
                                        <div class="form-group">
                                            <input type="text" name="user_password" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nouveau mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="user_password2" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Confirmer votre mot de passe">
                                        </div>

                                        <div class="form-group">
                                               
                                            <input class="form-control" type="hidden"  name="email" id="email" value="<?php echo($email) ?>">

                                            <input class="form-control" type="hidden"  name="verification_key" id="verification_key" value="<?php echo($verification_key) ?>">

                                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                                        </div>


                                        
                                        <button  type="submit" class="btn btn-primary btn-user btn-block">
                                            Restaurer mon mot de passe
                                        </button>
                                        
                                        
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?php echo(base_url()) ?>login">Revenir à la connexion</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>