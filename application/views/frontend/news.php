<!-- Post Wrapper Start -->
<div class="fbt-col-lg-9 col-md-8 col-sm-6 post-wrapper">
	<div class="row">
	
		<!-- Post Content Start -->
		<div class="fbt-col-lg-12 col-md-12 post-container clearfix">
			<div class="title-wrapper border-1">
				<h2><span class="color-1">Publications recentes</span></h2>
			</div>

			<div class="row resultat_menus">

				
			</div>

			
			<!-- Pagination Start -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="pagination-box clearfix" id="pagination_link2">
							<ul class="pagination-list">
								
							</ul>
							
						</div><!-- Pagination End -->
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			
		</div><!-- Post Content End -->
		
	</div>
</div><!-- Post Wrapper End -->

<!-- Post Sidebar Start -->
<div class="fbt-col-lg-3 col-md-4 col-sm-6 post-sidebar clearfix">
	<div class="theiaStickySidebar">
	
		<!-- Sidebar Small List Start -->
		<div class="widget fbt-vc-inner clearfix">
			<div class="title-wrapper border-2">
				<h2><span class="color-2">Most Popular</span></h2>
			</div>

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

						<div class="post-item small">
							<div class="row">
								<div class="col-sm-4 col-xs-3">
									<div class="img-thumb">
										<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>')"></div></a>
									</div>
								</div>
								<div class="col-sm-8 col-xs-9 no-padding-left">
									<div class="post-content">
										<a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"><h3> <?php echo (substr($key['nom'], 0,95)); ?> ...</h3></a>
										<div class="post-info clearfix">
											<span>  <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
										<span>-</span>
										<span> <i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?> </span>
										</div>
									</div>
								</div>
							</div>
						</div>


			            
						<?php
					}

					
				}

			 ?>

			
			
		</div><!-- Sidebar Small List End -->
		
		<!-- Tags Widget Start -->
		<div class="widget tag-widget">
			<div class="title-wrapper border-3">
				<h2><span class="color-3">Catégorie</span></h2>
			</div>
			<ul class="tag-list">

				<?php 
					if ($categories2->num_rows() <=0) {
						# code...
					}
					else{
						foreach ($categories2->result_array() as $memu_autre) {

							$nbr_pub_cat  =  $this->db->query("SELECT COUNT(idcat) AS total FROM profile_article  WHERE idcat=".$memu_autre['idcat']." ");
							if ($vues->num_rows() <=0) {
								$nombre_pub = 0;
							}
							else{
								foreach ($nbr_pub_cat->result_array() as $key_vue) {
									$nombre_pub = $key_vue['total'];
								}
							}
							
							?>

							<li><a href="<?php echo(base_url())?>home/publication/<?php echo($memu_autre['idcat'])?>"><?php echo($memu_autre['nom']) ?> &nbsp;&nbsp; <span class="badge badge-danger"><?php echo($nombre_pub) ?></span></a></li>

							

							
					
							<?php
						}

						
					}

				 ?>


			
			</ul>
		</div><!-- Tags Widget End -->
		
		
		
	</div>
</div><!-- Post Sidebar End -->