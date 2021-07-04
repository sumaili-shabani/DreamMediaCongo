<?php 

		$this->db->limit(4);
		$query2  =  $this->db->get_where("profile_article", array(
			'idcat'		=>	$key['idcat']
		));
		if ($query2->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($query2->result_array() as $row) {

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

				<div class="col-md-3 col-sm-6 mega-item">
					<div class="img-thumb">
						<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"><div class="fbt-resize" style="background-image: url('<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>')"></div></a>
						<div class="img-credits">
							<h3><?php echo(substr($row['nom'], 0,100)) ?>...</h3>
							<div class="post-info">
								<span> <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> &nbsp;&nbsp;
									<?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 15));?>
								</span>
							</div>
						</div>
					</div>
				</div>
					
				
				<!-- fin bloc -->
				<?php

				

				?>


				
				<?php
				# code...
			}
		}


	?>