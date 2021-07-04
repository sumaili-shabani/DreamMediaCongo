<div class="fbt-vc-inner nude large clearfix" style="margin-top: 10px;">
	<div class="title-wrapper border-5">
		<h2><span class="color-5"><?php echo($title2) ?></span></h2>

	</div>

	<?php 

		
		if ($article_tag->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($article_tag->result_array() as $row) {

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
					<!-- post -->
			        <div class="post-item small">
						<div class="row">
							<div class="col-md-5">
								<div class="img-thumb">
									<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>')"></div></a>
								</div>
							</div>
							<div class="col-md-7 padding-left-5">
								<div class="post-content">
									<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><h3><?php echo (nl2br(substr($row['nom'], 0,300))); ?></h3></a>
									<div class="post-info clearfix">
										<span>  <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?></span>
								<span>-</span>
								<span> <i class="fa fa-eye mr-1"></i> <?php echo($nombre_vue2) ?> </span>
									</div>
									<div class="text-content">
										<div class="text-center"><a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="text-center">Lire la publication</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fin post -->

					<?php
				
				# code...
			}
		}


    ?>

	
	


</div>