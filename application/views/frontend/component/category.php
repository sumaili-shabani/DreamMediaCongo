<div class="row">



    <div class="col-sm-12 p-r-25 p-r-15-sr991">

    	<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991" id="prefetch">
			<h3 class="f1-m-2 cl3 tab01-title">
				 Recherche

			</h3><br>
			<button class="btn btn-light"><i class="fa fa-search"></i></button>
			<input type="search" name="search" class="typeahead search_text" id="inlineFormInputGroupUsername2" placeholder="Rechecher un article...">
		</div>

    	<div class="row resultat_menus" style="margin-top: 10px;">


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

							<!-- Item -->
					        <div class="p-b-53 col-sm-6 p-r-25 p-r-15-sr991">
					            <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="wrap-pic-w hov1 trans-03">
					                <img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>" alt="IMG" style="height: 180px;">
					            </a>
					            <div class="flex-col-s-c p-t-16">
					                <h5 class="p-b-5 txt-center">
					                    <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="f1-m-3 cl2 hov-cl10 trans-03">
					                        <?php echo (nl2br(substr($row['nom'], 0,300))); ?>
					                    </a>
					                </h5>
					                <div class="cl8 txt-center p-b-17">
					                   
					                    <span class="f1-s-3 m-rl-3">
					                       <i class="fa fa-eye"></i>  <?php echo($nombre_vue) ?>  -
					                    </span>
					                    <span class="f1-s-3">
					                        <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 23));?>
					                    </span>
					                </div>
					               <!--  <p class="f1-s-11 cl6 txt-center p-b-16">
					                    <?php echo (nl2br(substr($row['description'], 0,200))); ?> ...
					                </p> -->
					                <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="f1-s-1 cl9 hov-cl10 trans-03">
					                   Lire plus
					                    <i class="m-l-2 fa fa-long-arrow-alt-right"></i>
					                </a>
					            </div>
					        </div>
					        <!-- Item -->

							<?php
						
						# code...
					}
				}


		    ?>


    		 

	       
    		
    	</div>
       
        
    </div>
    
</div>
<!-- Pagination -->
<!-- pagination -->
<div class="col-md-12" style="margin-top: 10px;">
  <div class="row">
      
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <nav aria-label="Page navigation example" id="pagination_link2">
        
          </nav>
      </div>
      <div class="col-md-1"></div>
      
  </div>
</div>
<!-- fin article -->