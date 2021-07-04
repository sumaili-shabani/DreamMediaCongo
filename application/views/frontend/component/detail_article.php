 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    </script>
<div class="p-r-10 p-r-0-sr991">

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


					    <!-- Blog Detail -->
					    <div class="p-b-70">
					       <!--  <a href="<?php echo(base_url())?>home/publication/<?php echo($row['idcat'])?>/<?php echo($row['nom_cat'])?>" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
					            <?php echo ($row['nom_cat']); ?>  
					        </a> -->
					        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
					            <?php echo (nl2br($row['nom'])); ?> 
					        </h3>

					        <!-- Share -->
       						 <div class="flex-s-s">
            					<span class="f1-s-12 cl5 p-t-1 m-r-15">
               						<!--  Partager sur : -->
            					</span>
            					<div class="flex-wr-s-s size-w-0">
					                <a href="javascript:void(0);"
					                    class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03 btn_facebook" style="background-color: rgb(240, 240, 240); color: rgb(29, 45, 64);">
					                    <i class="fab fa-facebook-f m-r-7"></i>
					                    
					                </a>
					                <a href="javascript:void(0);"
					                    class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03 btn_twitter" style="background-color: rgb(240, 240, 240); color: rgb(29, 45, 64);">
					                    <i class="fab fa-twitter m-r-7"></i>
					                    
					                </a>
					                <a href="javascript:void(0);"
					                    class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03 btn_linkedin" style="background-color: rgb(240, 240, 240); color: rgb(29, 45, 64);">
					                    <i class="fab fa-linkedin m-r-7"></i>
					                    
					                </a>

					                <a href="javascript:void(0);"
					                    class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03 btn_google"  style="background-color: rgb(240, 240, 240); color: rgb(29, 45, 64);">
					                    <i class="fa fa-envelope m-r-7"></i>
					                    
					                </a>

					                <a href="whatsapp://send?text=<?php echo (nl2br($row['nom'])); ?>" target="_blank"
					                    class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03 btn_whatsapp"  style="background-color: rgb(240, 240, 240); color: rgb(29, 45, 64);">
					                    <i class="fab fa-whatsapp m-r-7"></i>
					                    
					                </a>
					                
					            </div>
					        </div>


					        <div class="flex-wr-s-s p-b-40">
					            <span class="f1-s-3 cl8 m-r-15">
					               
					                <span class="m-rl-3 mr-3"> </span>
					                <span>
					                    <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?>
					                </span>
					            </span>
					            <span class="f1-s-3 cl8 m-r-15">
					               <?php echo($nombre_vue) ?>  Vue(s)
					            </span>
					           
					        </div>
					        <div class="wrap-pic-max-w p-b-20">

					        	<a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="wrap-pic-w hov1 trans-03">
                                    <img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>"
                                        alt="IMG">
                                </a>
					            <!-- <img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="IMG"> -->
					        </div>
					        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					        	<?php echo(html_entity_decode($row['description'])) ?>
					        </div>
					        <!-- Tag -->

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



					       
					        
					    </div>
					    <!-- fin bloc -->

						<?php
					
					# code...
				}
			}


	?>



    
</div>