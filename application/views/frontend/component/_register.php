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
                                        <h1 class="h4 text-gray-900 mb-4">Création de compte</h1>
                                       <span>
                                    		Créer un nouveau compte au système Ets YETU.
                                    	</span>
                                    </div>
                                    <form class="user" method="post"  enctype="multipart/form-data" action="<?= base_url(); ?>login/register_validation">
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
		                                <div class="form-group row">
		                                    <div class="col-sm-12 mb-3 mb-sm-0">
		                                        <input type="text"  name="first_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Entrez votre nom">
		                                    </div>
		                                </div>
		                                <div class="form-group">
		                                    <input type="email" name="mail_ok" class="form-control form-control-user" id="exampleInputEmail" placeholder="Entrez votre adresse mail">
		                                </div>
		                                <div class="form-group row">
		                                    <div class="col-sm-12 mb-3 mb-sm-0">
		                                        <input type="password" name="user_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe secret">
		                                    </div>
		                                    
		                                </div>
		                                <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="mr-2" id="customCheck" required>
                                                <label class="custom-control-label" for="customCheck">  
                                                	<a href="<?php echo(base_url()) ?>home/contrat">
                                                		J'accepte Politique de confidentialité
                                                	</a>
                                                </label>
                                            </div>
                                        </div>
		                                <button type="submit" name="valider" class="btn btn-primary btn-user btn-block">
		                                  S'inscrire
		                                </button>
                                        
                                        
		                                
		                            </form>
                                    <hr>

                                    <div class="text-center">
                                        Vous avez déjà un compte ?<a class="small" href="<?php echo(base_url()) ?>login">&nbsp; S'identifier</a>
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
