 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    </script>
<div class="col-md-12" style="margin-top: 10px;">

	<?php 

				
		if ($offre_tag->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($offre_tag->result_array() as $row) {

				$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$row['idart']." ");
				if ($vues->num_rows() <=0) {
					$nombre_vue = 0;
				}
				else{
					foreach ($vues->result_array() as $key_vue) {
						$nombre_vue = $key_vue['total'];
					}
				}

					?>
					
					<!-- debit bloc -->
					<input type="hidden" name="idart" id="idart" class="idart form-control" placeholder="idart" class="form-control" value="<?php echo($row['idart']) ?>">

					<input type="hidden" name="ipv4" id="ipv4" class="form-control ipv4" placeholder="adresse ipv4">
					<!-- fin bloc -->

					<!-- debit et fin -->
					<div class="col-md-12 single-post-container clearfix">
						<div class="single-post">
							<div class="img-crop">
								<img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" class="img-responsive" alt=" ">
								<div class="img-credits">
									<div class="col-md-8 col-md-offset-2">
										<a class="post-category" href="<?php echo(base_url()) ?>home/publication/<?php echo($row['idcat']) ?>"><?php echo (nl2br($row['nom_cat'])); ?> </a>
										<div class="post-title"><h1><?php echo (nl2br($row['nom'])); ?> </h1></div>
										<div class="post-description"><p><?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></p></div>
										<div class="post-info clearfix">
											<span><a href="#"><i class="fa fa-eye"></i>  <?php echo($nombre_vue) ?>  Vue(s)</a></span>
											<span class="sepr">-</span>
											<span class="date"><i class="fa fa-clock-o"></i>  <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></span>
											<span class="sepr">-</span>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
											</span>
										</div>
									</div>
								</div>
							</div><!-- img-crop -->
							
							<!-- Post Share Start -->
							<div class="post-share clearfix">
								<ul>
									<li><a class="facebook df-share btn_facebook" data-sharetip="Share on Facebook!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-facebook"></i> <span class="social-text">Facebook</span></a></li>
									<li><a class="twitter df-share btn_twitter" data-hashtags="" data-sharetip="Share on Twitter!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-twitter"></i> <span class="social-text">Twitter</span></a></li>
									<li><a class="google df-pluss btn_google" data-sharetip="Share on Google+!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-google-plus"></i> <span class="social-text">Google+</span></a></li>
									<li><a class="facebook df-share btn_linkedin" data-sharetip="Share on Linkedin!" href="javascript:void(0);" rel="nofollow"><i class="fa fa-linkedin"></i> <span class="social-text">Linkedin</span></a></li>
								</ul>
							</div><!-- Post Share End -->
							
							<div class="clearfix"></div>
							
							<div class="post-text-content clearfix col-md-12">
								<?php echo(html_entity_decode($row['description'])) ?>

								 <!-- script commentaire -->
						        <?php 
						        if ($commentaires->num_rows() >0) {
						        	foreach ($commentaires->result_array() as $key) {
						        		# code...
						        		?>
						        		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								        	<?php echo(html_entity_decode($key['etape1'])) ?>
								        </div>
								        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								        	<?php echo(html_entity_decode($key['etape2'])) ?>
								        </div>

								       <!--  -->
								       
						        		<?php
						        	}
						        	# code...
						        }
						        else{

						        }

						        ?>
						        <!-- fin commentaire -->


							</div><!-- post-text-content -->
							
							
							
							
							
						</div><!-- single-post -->
						
					</div>
					<!-- fin -->



					<?php
				
				# code...
			}
		}


	?>
	
</div>







