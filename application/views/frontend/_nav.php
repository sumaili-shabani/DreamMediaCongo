<!-- Headline Start -->
<section id="newsticker">
    <div class="headline-wrapper">
        <div class="container">
            <div class="row">
            
                <!-- Newsticker start -->
                <div class="col-md-2 col-sm-3 col-xs-5">
                    <div class="headline-title color-6">                
                        <h5><?php echo($nom_site_info) ?></h5>
                    </div>
                </div>
                <div class="col-md-7 col-sm-9 col-xs-7 no-padding">
                    <ul class="ticker clearfix">
                        <li><a href="javascript:void(0);">Adresse domicile :<?php echo($adresse_info) ?></a></li>
                        <li><a href="javascript:void(0);">Contact <?php echo($tel1_info) ?> ou <?php echo($tel2_info) ?></a></li>
                        <li><a href="mailto:<?php echo($email_info) ?>">Adresse mail: <?php echo($email_info) ?></a></li>
                        
                    </ul>
                </div><!-- Newsticker end -->
                
                <!-- Search Form start -->
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="fa-icon-wrap">
                        <a class="facebook" href="<?php echo($facebook_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                        <a class="google+" href="mailto:<?php echo($email_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Google+"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
                        <a class="twitter" href="<?php echo($twitter_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                        <a class="linkedin" href="<?php echo($linkedin_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Linkedin"><i aria-hidden="true" class="fa fa-linkedin"></i></a>

                        <a class="pinterest" href="<?php echo($instagram_info) ?>" data-toggle="tooltip" data-placement="left" title="instagram page"><i aria-hidden="true" class="fa fa-instagram"></i></a>

                        <a class="pinterest" href="tel:<?php echo($tel1_info) ?>" data-toggle="tooltip" data-placement="left" title="phone number"><i aria-hidden="true" class="fa fa-phone"></i></a>
                        <a class="youtube" href="javascript:void(0);" target="_blank" data-toggle="tooltip" data-placement="left" title="Youtube"><i aria-hidden="true" class="fa fa-youtube"></i></a>
                        <a class="soundcloud" href="<?php echo($whatsapp_info) ?>" target="_blank" data-toggle="tooltip" data-placement="left" title="Whatsapp group"><i aria-hidden="true" class="fa fa-whatsapp"></i></a>
                    </div>
                </div><!-- Search Form end -->
                
            </div>
        </div>
    </div>
</section><!-- Headline End -->

<!-- Header Start -->
<section class="header-wrapper dark clearfix">
	<div class="container">
		<!-- Header Carousel Start -->
		<div class="main-carousel clearfix">
			<div class="carousel-content-box owl-wrapper clearfix">
				<div class="owl-carousel" data-num="3">


					<?php 
						if ($padding_articles->num_rows() <=0) {
							# code...
						}
						else{
							foreach ($padding_articles->result_array() as $key) {

								$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key['idart']." ");
								if ($vues->num_rows() <=0) {
									$nombre_vue2 = 0;
								}
								else{
									foreach ($vues->result_array() as $key_vue) {
										$nombre_vue2 = $key_vue['total'];
									}
								}
								
								?>

								<div class="item fbt-hr-crs">
									<div class="post-item clearfix">
										<div class="img-thumb">
											<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
										</div>
										<div class="post-content clearfix">
											<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3> <?php echo (substr($key['nom'], 0,95)); ?> ...</h3></a>
											<div class="post-info clearfix">
												<span>  <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
												<span>-</span>
												<span> <i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?> </span>
											</div>
										</div>
									</div>
								</div>


					            
								<?php
							}

							
						}

					 ?>

				</div>
			</div>
		</div><!-- Header Carousel End -->
	</div>
</section><!-- Header End -->

<!-- Menu Navigation Start -->
<div class="navbar navbar-default yellow megamenu clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#mainmenu" class="navbar-toggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo(base_url()) ?>"><img class="img-responsive" src="<?php echo($icone_info) ?>" alt="logo"/></a>
				</div>
				<div id="mainmenu" class="navbar-collapse collapse clearfix">
					<ul class="nav navbar-nav">

						<li><a href="<?php echo(base_url()) ?>">Accuel</a></li>
						<li><a href="<?php echo(base_url()) ?>home/contact">Contact</a></li>

						<?php 
							if ($categories->num_rows() <=0) {
								# code...
							}
							else{
								foreach ($categories->result_array() as $key) {
									
									?>

									<li class="dropdown full-cont"><a href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>" data-toggle="dropdown" class="dropdown-toggle"><?php echo($key['nom']) ?> <b class="caret"></b></a>
										<!-- Mega Menu Start -->
										<ul class="dropdown-menu fullwidth">
											<li class="default clearfix">
												<div class="row">
													<?php include('component/_descriptionArticle.php') ?>
													
													
												</div>
											</li>
										</ul><!-- Mega Menu End -->
									</li>

									<?php
								}
							}

							 ?>
						

						
						
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo(base_url()) ?>home/about">Apropos</a>
                                </li>
                                <li><a href="<?php echo(base_url()) ?>home/contact">Contact</a>
                                </li>

                                <li><a href="<?php echo(base_url()) ?>home/contrat">Terme et contrat</a>
                                </li>
                                <?php 
									if ($categories2->num_rows() <=0) {
										# code...
									}
									else{
										foreach ($categories2->result_array() as $memu_autre) {

											?>

											<li>
												<a href="<?php echo(base_url()) ?>home/publication/<?php echo($memu_autre['idcat']) ?>">
													<?php echo($memu_autre['nom']) ?>
											     </a>
											</li>
									
											<?php
											
										}
									}

										

								?>

                               <?php

									if($this->session->userdata('admin_login'))
								    {	$id_connected_ok = $this->session->userdata('admin_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>admin/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								   

								    elseif($this->session->userdata('id'))
								    {	$id_connected_ok = $this->session->userdata('id');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>user/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }

								    elseif($this->session->userdata('instuctor_login'))
								    {	$id_connected_ok = $this->session->userdata('instuctor_login');
								    	$this->db->where('id',$id_connected_ok);
     							        $ok_users_ = $this->db->get('users')->result_array();
     							        foreach ($ok_users_ as $key) {
     							        	# code...
									      	?>
									      	<li>
									      		 <div class="col-md-12 text-center" style="margin-top: 10px;">
									      		 	<img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" style="width: 50px;height: 40px; border-radius: 50%;" />
									      		 	<a href="<?php echo(base_url()) ?>entreprise/profile">
									      			<?php echo($key['first_name']) ?> &nbsp;<?php echo($key['last_name']) ?>
									      		 </div>
									      		
									      	</a></li>
									      	<?php
     							        }
								    }
                                    else{
                                        ?>

                                        <li>
                                            <a href="<?php echo(base_url()) ?>login">Se connecter</a>
                                        </li>
                                        
                                        <?php
                                    }



								

								 ?>
								
                                
                               
                                
                               

                            </ul>
                        </li>
							</ul>
						</li>
					</ul>
					<!-- Search Form start -->
					<form class="navbar-form navbar-right hidden-sm hidden-xs" role="search" id="prefetch2">
						<input type="text" id="search" name="search" placeholder="Search..." class="typeahead">
						<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
					</form><!-- Search Form end -->
				</div>
			</div>
		</div>
	</div>
</div><!-- Menu Navigation End -->