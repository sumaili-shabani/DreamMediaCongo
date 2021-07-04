

<div class="p-b-20">

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
			 <!-- Entertainment -->
	        <div class="tab01 p-b-20">
	            <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
	                <!-- Brand tab -->
	                <h3 class="f1-m-2 cl12 tab01-title">
	                    <?php echo ($key['nom_cat']); ?>
	                </h3>
	                <!-- Nav tabs -->
	                <ul class="nav nav-tabs" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">A la une</a>
	                    </li>
	                    
	                    
	                </ul>
	                <!--  -->
	                <a href="<?php echo(base_url())?>home/publication/<?php echo($key['idcat'])?>/<?php echo($key['nom_cat'])?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
	                    Voir tous
	                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
	                </a>
	            </div>
	            <!-- Tab panes -->
	            <div class="tab-content p-t-35">
	                <!-- bloc 1- -->
	                <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
	                    <div class="row">
	                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
	                            <!-- Item post -->
	                            <div class="m-b-30">
	                                <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>" class="wrap-pic-w hov1 trans-03">
	                                    <img src="<?php echo(base_url())?>upload/article/<?php echo($key['image'])?>"
	                                        alt="IMG" style="height: 230px;">
	                                </a>
	                                <div class="p-t-20">
	                                    <h5 class="p-b-5">
	                                        <a href="<?php echo(base_url())?>home/article/<?php echo($key['idart'])?>"
	                                            class="f1-m-3 cl2 hov-cl10 trans-03">
	                                           <?php echo (substr($key['nom'], 0,95)); ?> ...
	                                        </a>
	                                    </h5>
	                                    <span class="cl8">
	                                        <a href="javascript:void(0);" class="f1-s-4 cl8 hov-cl10 trans-03">
	                                           <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> vue(s)
	                                        </a>
	                                        <span class="f1-s-3 m-rl-3">
	                                            -
	                                        </span>
	                                        <span class="f1-s-3">
	                                            <?= nl2br(substr(date(DATE_RFC822, strtotime($key['created_at'])), 0, 23));?>
	                                        </span>
	                                    </span>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
	                            <!-- Item post -->
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
										 <!-- Item post -->
			                            <div class="flex-wr-sb-s m-b-30">
			                                <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>" class="size-w-1 wrap-pic-w hov1 trans-03">
			                                    <img src="<?php echo(base_url())?>upload/article/<?php echo($row['image'])?>"
			                                        alt="IMG" style="height: 80px;">
			                                </a>
			                                <div class="size-w-2">
			                                    <h5 class="p-b-5">
			                                        <a href="<?php echo(base_url())?>home/article/<?php echo($row['idart'])?>"
			                                            class="f1-s-5 cl3 hov-cl10 trans-03">
			                                           <?php echo (substr($row['nom'], 0,80)); ?> ... 
			                                        </a>
			                                    </h5>
			                                    <span class="cl8">
			                                        <a href="javascript:void(0);" class="f1-s-6 cl8 hov-cl10 trans-03">
			                                            <i class="fa fa-eye"></i> <?php echo($nombre_vue) ?> 
			                                        </a>
			                                        <span class="f1-s-3 m-rl-3">
			                                            -
			                                        </span>
			                                        <span class="f1-s-3">
			                                            <?= nl2br(substr(date(DATE_RFC822, strtotime($row['created_at'])), 0, 15));?>
			                                        </span>
			                                    </span>
			                                </div>
			                            </div>
			                            <!-- Item post -->
										<?php

										
									}
								}


							?>
	                            
	                           
	                            
	                        </div>
	                    </div>
	                </div>
	                <!-- fin bloc - -->

	               
	            </div>
	        </div>
	        <!-- Fin Entertainment -->

			<?php

			?>


			
			<?php
			# code...
		}
	}


?>

</div>


<!-- la test articles -->
<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991" id="prefetch">
	<h3 class="f1-m-2 cl3 tab01-title">
		Latest Articles
		

	</h3><br>
	<button class="btn btn-light"><i class="fa fa-search"></i></button>
	<input type="search" name="search" class="typeahead search_text" id="inlineFormInputGroupUsername2" placeholder="Rechecher un article...">
</div>
<div class="row p-t-35 resultat_menus">

	<div class="col-sm-6 p-r-25 p-r-15-sr991">
		<!-- Item latest -->
		<div class="m-b-45">
			<a href="javascript:void(0);" class="wrap-pic-w hov1 trans-03">
				<img src="images/xlatest-01.jpg.pagespeed.ic.uU9vdj6kbF.jpg" alt="IMG">
			</a>
			<div class="p-t-16">
				<h5 class="p-b-5">
					<a href="javascript:void(0);" class="f1-m-3 cl2 hov-cl10 trans-03">
						You wish lorem ipsum dolor sit amet consectetur
					</a>
				</h5>
				<span class="cl8">
					<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
						by John Alvarado
					</a>
					<span class="f1-s-3 m-rl-3">
						-
					</span>
					<span class="f1-s-3">
						Feb 18
					</span>
				</span>
			</div>
		</div>
	</div>
	
</div>

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