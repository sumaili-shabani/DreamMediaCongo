<div class="p-l-10 p-rl-0-sr991">
    <!-- Subscribe -->
    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50" style="background-color: rgb(240, 240, 240);">
        <!-- <h5 class="f1-m-5 cl0 p-b-10">
            Contact pour information
        </h5> -->
        <p class="f1-s-1 cl0 p-b-25" style="color: black;">
            Contectez-nous pour renseignement
        </p>
        <form class="size-a-9 pos-relative" action="<?= base_url() ?>home/contact">
            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="email" name="email"
                placeholder="Adresse email">
            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                <i class="fa fa-arrow-right"></i>
            </button>
        </form>
    </div>
    <!-- Most Popular -->
    <div class="p-b-23">
        <div class="how2 how2-cl4 flex-s-c">
            <h3 class="f1-m-2 cl3 tab01-title">
                Publications les plus suivues
            </h3>
        </div>
        <ul class="p-t-35">

        	<?php 

	
				if ($populars->num_rows() <= 0) {
					# code...
				}
				else{

					foreach ($populars->result_array() as $key) {

						$vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key['idart']." ");
						if ($vues->num_rows() <=0) {
							$nombre_vue = 0;
						}
						else{
							foreach ($vues->result_array() as $key_vue) {
								$nombre_vue = $key_vue['total'];
							}
						}

						

						?>

						<li class="flex-wr-sb-s p-b-22">
			                <div class="col-md-4">
			                    
			                </div>
			                <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
			                    <font class="mr-2" style="font-style: italic;"><i class="fa fa-eye"></i> <?php echo($nombre_vue) ?></font> <?php echo (substr($key['nom'], 0,30)); ?> ... 
			                </a>
			            </li>
						
						<?php
						# code...
					}
				}


			?>

        </ul>
    </div>
    <!--  -->

    <!-- debit publicite -->
	<?php 

		if ($pub_publicite3->num_rows() <= 0) {
			# code...
		}
		else{

			foreach ($pub_publicite3->result_array() as $row) {

					?>

					<!-- phto de partainer -->
					
					<div class="flex-c-s p-b-50">
				        <a target="_blank" href="<?php echo($row['url'])?>">
				            <img class="max-w-full" src="<?php echo(base_url())?>upload/galery/<?php echo($row['image'])?>"
				                alt="IMG" style="width: 100%;">
				        </a>
				    </div>
					<!-- fin photo -->

					
					<?php
				
				# code...
			}
		}


	?>
	<!-- bublicite -->



    <div>
        <div class="how2 how2-cl4 flex-s-c m-b-30">
            <h3 class="f1-m-2 cl3 tab01-title">
                 Catégories 
            </h3>
        </div>
        <div class="flex-wr-s-s m-rl--5">

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

						

						<a href="<?php echo(base_url())?>home/publication/<?php echo($memu_autre['idcat'])?>/<?php echo($memu_autre['nom'])?>"
			                class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
			                <?php echo($memu_autre['nom']) ?> &nbsp;&nbsp; <span class="badge badge-danger"><?php echo($nombre_pub) ?></span>
			            </a>
				
						<?php
					}

					
				}

			 ?>


           
        </div>
    </div>

    <!-- Popular Posts -->
    <div class="p-b-30" style="margin-top: 10px;">
        <div class="how2 how2-cl4 flex-s-c">
            <h3 class="f1-m-2 cl3 tab01-title">
                Articles sponsorisés
            </h3>
        </div>
        <ul class="p-t-35">

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


			             <li class="flex-wr-sb-s p-b-30">
			                <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="size-w-10 wrap-pic-w hov1 trans-03">
			                    <img src="<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>">
			                </a>
			                <div class="size-w-11">
			                    <h6 class="p-b-4">
			                        <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="f1-s-5 cl3 hov-cl10 trans-03">
			                            <?php echo (substr($key['nom'], 0,95)); ?> ...
			                        </a>
			                    </h6>
			                    <span class="cl8 txt-center p-b-24">
			                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
			                            <i class="fa fa-eye"></i> <?php echo($nombre_vue2) ?> 
			                        </a>
			                        <span class="f1-s-3 m-rl-3">
			                            -
			                        </span>
			                        <span class="f1-s-3">
			                            <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?>
			                        </span>
			                    </span>
			                </div>
			            </li>
				
						<?php
					}

					
				}

			 ?>

           
        </ul>
        <hr>
    </div>


</div>