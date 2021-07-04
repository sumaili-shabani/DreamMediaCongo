<!-- Featured Slide Start -->
<section id="fp-container" class="dark clearfix">
	<div class="container">
		<div class="row">
			<div class="feuture-posts">
			
				<!-- Slider Start -->
				<div class="col-sm-6 big-section">
					<div class='fbt-slide-nav'>
						<span class='fbt-slide-pager'></span>
					</div>
					<div class="fp-slides">

						<?php 
							if ($padding_carousel->num_rows() <=0) {
								# code...
							}
							else{
								foreach ($padding_carousel->result_array() as $key) {

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

									<div class="img-thumb">
										<a href="single.html"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
										<div class="img-credits">
											<a class="post-category" href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>"><?php echo($key['nom_cat']) ?></a>
											<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3><?php echo (substr($key['nom'], 0,100)); ?> ...</h3></a>
											<div class="post-info">
												<span><?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
												<span><a href="#"><i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?></a></span>
											</div>
										</div>
									</div>

									

						            
									<?php
								}

								
							}

						 ?>
						
					</div>
					<nav class="nav-growpop">
						<div>
							<a class="fp-prev" href="#fp-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
							<a class="fp-next" href="#fp-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
						</div>
					</nav>
				</div><!-- Slider End -->
				
				<!-- Slide Small Start -->
				<div class="col-sm-6 small-section">
					<div class="row">
						<div class="fp-small">

							<?php 
								if ($padding_carousel->num_rows() <=0) {
									# code...
								}
								else{
									foreach ($padding_carousel->result_array() as $key) {

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

										<div class="col-xs-6 last-small">
											<div class="img-thumb">
												<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
												<div class="img-credits">
													<a class="post-category" href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>"><?php echo($key['nom_cat']) ?></a>
													<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3><?php echo (substr($key['nom'], 0,100)); ?>...</h3></a>
													<div class="post-info">
														<span><?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
														<span><a href="#"><i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?></a></span>
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
				</div><!-- Slide Small End -->
				
			</div>
		</div>
	</div>
</section><!-- Featured Slide End -->