<div class="col-lg-3 order-2 order-lg-1">
    <h5 class="text-uppercase mb-4">Catégories</h5>
    <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Fashion &amp; Actuel</strong></div>
    <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
    	<?php
    	if ($nomProduit->num_rows() > 0) {
    	 	foreach ($nomProduit->result_array() as $key) {
    	 		?>
    	 		 <li class="mb-2"><a class="reset-anchor brand_product_name" product_id="<?php echo($key['product_id']) ?>" href="javascript:void(0);"><?php echo($key['product_name']) ?></a></li>
    	 		<?php
    	 	}
    	}
    	else{

    	} 

    	?>
    </ul>

   
   
    <h6 class="text-uppercase mb-4">arrangement Prix</h6>
    <div class="price-range pt-4 mb-5">
      <div id="range" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect noUi-draggable" style="transform: translate(5%, 0px) scale(0.45, 1);"></div></div><div class="noUi-origin" style="transform: translate(-950%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="700.0" aria-valuenow="100.0" aria-valuetext="$100"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$100</div></div></div><div class="noUi-origin" style="transform: translate(-500%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="400.0" aria-valuemax="2000.0" aria-valuenow="1000.0" aria-valuetext="$1000"><div class="noUi-touch-area"></div><div class="noUi-tooltip">$1000</div></div></div></div></div>
      <div class="row pt-2">
        <div class="col-6"><strong class="small font-weight-bold text-uppercase">Dès</strong></div>
        <div class="col-6 text-right"><strong class="small font-weight-bold text-uppercase">à</strong></div>
      </div>
    </div>
    <h6 class="text-uppercase mb-3">Afficher juste</h6>
    <?php
	if ($nomCat->num_rows() > 0) {
	 	foreach ($nomCat->result_array() as $key) {
	 		?>

	 		<div class="custom-control custom-checkbox mb-1">
		      <input class="custom-control-input brand_category_id" id="customCheck1_<?php echo($key['category_id']) ?>" type="checkbox" value="<?php echo($key['category_id']) ?>">
		      <label class="custom-control-label text-small" for="customCheck1_<?php echo($key['category_id']) ?>"><?php echo($key['nom']) ?></label>
		    </div>
	 		
	 		<?php
	 	}
	}
	else{

	} 

	?>
    
    
    <h6 class="text-uppercase mb-3">Nos produits par différents prix</h6>

	    <?php
		if ($nomProduit->num_rows() > 0) {
		 	foreach ($nomProduit->result_array() as $key) {
		 		?>
		 		
		 		 <div class="custom-control custom-radio">
			      <input class="custom-control-input brand_product_price" value="<?php echo($key['product_price']) ?>" id="customRadio1_<?php echo($key['product_id']) ?>" type="radio" name="customRadio" >
			      <label class="custom-control-label text-small" for="customRadio1_<?php echo($key['product_id']) ?>"><?php echo($key['product_price']) ?>$</label>
			     </div>
		 		<?php
		 	}
		}
		else{

		} 

		?>
    
    
</div>