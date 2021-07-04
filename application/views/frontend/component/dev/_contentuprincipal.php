<!-- Horizontal Mag 1 Start -->
<?php 


	if ($article_blog_one->num_rows() <= 0) {
		# code...
	}
	else{

		foreach ($article_blog_one->result_array() as $key) {

			$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key['idart']." ");
			if ($vues->num_rows() <=0) {
				$nombre_vue = 0;
			}
			else{
				foreach ($vues->result_array() as $key_vue) {
					$nombre_vue = $key_vue['total'];
				}
			}

			$idcat_ok_boss = $key['idcat'];

			?>

			<div class="fbt-vc-inner hor">
				<div class="title-wrapper border-7">
					<h2><span class="color-7"><?php echo ($key['nom_cat']); ?></span></h2>
				</div>
				<div class="row">
					<div class="fbt-col-lg-8 col-md-7">
						<div class="post-item big clearfix">
							<div class="img-thumb">
								<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
								<div class="img-credits">
									<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3> <?php echo (substr($key['nom'], 0,95)); ?> ...</h3></a>
									<div class="post-info clearfix">
										<span><a href="#"> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> vue(s)</a></span>
										<span>-</span>
										<span><?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fbt-col-lg-4 col-md-5">

						<?php 

							$coucoux = $this->db->query("SELECT * FROM profile_article WHERE idcat=".$key['idcat']."  ORDER BY RAND() LIMIT 3");
							if ($coucoux->num_rows() <= 0) {
								# code...
							}
							else{

								foreach ($coucoux->result_array() as $row) {

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

									<div class="post-item small">
										<div class="row">
											<div class="col-sm-4 col-xs-3">
												<div class="img-thumb">
													<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>')"></div></a>
												</div>
											</div>
											<div class="col-sm-8 col-xs-9 no-padding-left">
												<div class="post-content">
													<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><h3> <?php echo (substr($row['nom'], 0,95)); ?> ...</h3></a>
													<div class="post-info clearfix">
														<span><a href="#"> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> vue(s)</a></span>
														<span>-</span>
														<span><?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?></span>
													</div>
												</div>
											</div>
										</div>
									</div>



									
		                            <!-- Item post -->
									<?php

									
								}
							}


						?>
	                    
						
					</div>
				</div>
			</div><!-- Horizontal Mag 1 End -->



			

			<?php

			?>


			
			<?php
			# code...
		}
	}


?>

						