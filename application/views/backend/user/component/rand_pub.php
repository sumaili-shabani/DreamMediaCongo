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

    <h5 class="text-uppercase mb-4">Nos marchantises</h5>
    <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">La mode &amp; c'est nous! </strong></div>

    <div class="col-md-12 col-xl-12 col-sm-12">

    	<div class="row" id="country_table2">
	    
	      
	  
	    </div>
    	
    </div>

   
    
    
</div>