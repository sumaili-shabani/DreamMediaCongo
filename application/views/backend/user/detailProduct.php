<!DOCTYPE html>
<html>
  <head>
    <?php include('_meta.php') ?>
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <?php include('_navMenu.php') ?>
      <!--  Modal -->
      <?php include('_modal.php') ?>
      <!-- fin modal -->
      <!-- HERO SECTION-->
      <div class="container">
        <!-- <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(<?php echo(base_url()) ?>js/dev/img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark" href="javascript:void(0);">Browse collections</a>
              </div>
            </div>
          </div>
        </section> -->

        <?php// echo(CURRENT_URL()) ?>


        <?php 

        if ($donnees->num_rows() < 0) {
        	# code...
        }
        else{

        	foreach ($donnees->result_array() as $row) {
        		# code...
        		?>
        		 <section class="py-5">
			        <div class="container">
			          <div class="row mb-5">
			            <div class="col-lg-6">
			              <!-- PRODUCT SLIDER-->
			              <div class="row m-sm-0">
			                <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0">
			                  <div class="owl-thumbs d-flex flex-row flex-sm-column" data-slider-id="1">

			                  	<?php 
			                  	$this->db->where("product_id", $row['product_id']);
			                  	$query = $this->db->get("profile_galery");
			                  	if ($query->num_rows() < 0) {
			                  		# code...
			                  	}
			                  	else{
			                  		
			                  		?>
			                  		<div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
				                    	<img class="w-100" src="<?php echo(base_url()) ?>upload/product/<?php echo($row['product_image']) ?>" alt="...">
				                    </div>
			                  		<?php
			                  		foreach ($query->result_array() as $key) {
			                  			
			                  			?>
			                  			 <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
					                    	<img class="w-100" src="<?php echo(base_url()) ?>upload/product/galery/<?php echo($key['photos']) ?>" alt="...">
					                    </div>
			                  			<?php
			                  		}
			                  	} 


			                  	 ?>
			                  </div>
			                </div>
			                <div class="col-sm-10 order-1 order-sm-2">
			                  <div class="owl-carousel product-slider" data-slider-id="1">
			                  	<a class="d-block modalView" href="<?php echo(base_url()) ?>upload/product/<?php echo($row['product_image']) ?>" data-lightbox="product" product_id="<?php echo($row['product_id']) ?>"
			                  	 title="<?php echo($row['product_name']) ?>" >
			                  		<img class="img-fluid" src="<?php echo(base_url()) ?>upload/product/<?php echo($row['product_image']) ?>" alt="...">
			                  	</a>


			                    <?php 
				                  	$this->db->where("product_id", $row['product_id']);
				                  	$query = $this->db->get("profile_galery");
				                  	if ($query->num_rows() < 0) {
				                  		# code...
				                  	}
				                  	else{
				                  		foreach ($query->result_array() as $key) {
				                  			
				                  			?>
				                  			 <div class="owl-thumb-item flex-fill mb-2 mr-2 mr-sm-0">
						                    	<img class="w-100 modalView" src="<?php echo(base_url()) ?>upload/product/galery/<?php echo($key['photos']) ?>" alt="..." product_id="<?php echo($row['product_id']) ?>">
						                    </div>

						                    <a class="d-block modalView" href="<?php echo(base_url()) ?>upload/product/galery/<?php echo($key['photos']) ?>" data-lightbox="product" title="Product item 2" product_id="<?php echo($row['product_id']) ?>">
						                  		<img class="img-fluid" src="<?php echo(base_url()) ?>upload/product/galery/<?php echo($key['photos']) ?>" alt="...">
						                  	</a>


				                  			<?php
				                  		}
				                  	} 


			                  	 ?>


			                  </div>
			                </div>
			              </div>
			            </div>
			            <!-- PRODUCT DETAILS-->
			            <div class="col-lg-6">
			              <ul class="list-inline mb-2">
			                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
			                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
			                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
			                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
			                <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
			              </ul>
			              <h1><?php echo($row['product_name']) ?></h1>
			              <p class="text-muted lead"><?php echo($row['product_price']) ?>$</p>
			              
			              <div class="row align-items-stretch mb-4">
			                <div class="col-sm-5 pr-sm-0">
			                  <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Quantité</span>
			                    <div class="quantity">
			                      <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
			                      <input class="form-control border-0 shadow-0 p-0 quantity" id="<?php echo($row['product_id']) ?>" type="number" min="1" max="<?php echo($row['Qte']) ?>" value="1">
			                      <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
			                    </div>
			                  </div>
			                </div>
			                <div class="col-sm-3 pl-sm-0">
			                	<a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0 add_cart" 

			                	data-productname="<?php echo($row['product_name']) ?>" 
			                    data-price="<?php echo($row['product_price']) ?>" 
			                    data-productid="<?php echo($row['product_id']) ?>" 
			                    data-product_image="<?php echo($row['product_image']) ?>" 
			                    Qte="<?php echo($row['Qte']) ?>"
			                	href="javascript:void(0);">
			               			 Ajouter au panier
					            </a>
					        </div>
			              </div>
			              <a class="btn btn-link text-dark p-0 mb-4 add_favory" favoryProduct="<?php echo($row['product_id']) ?>" href="javascript:void(0);">
			              	<i class="far fa-heart mr-2"></i>
			              	Ajouter liste favorite
			              </a>
			              <br>
			              <ul class="list-unstyled small d-inline-block">
			                <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">Quantité desponible:</strong><span class="ml-2 text-muted"><?php echo($row['Qte']) ?></span></li>
			                <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Catégorie:</strong><a class="reset-anchor ml-2" href="#"><?php echo($row['nom']) ?></a></li>
			                
			              </ul>
			            </div>
			          </div>
			          <!-- DETAILS TABS-->
			         
			          
			        </div>
		        </section>
        		<?php
        	}

        }

         ?>



        <!-- CATEGORIES SECTION-->

        <?php include('component/_category_rand.php') ?>

        <!-- FIN CATEGORIES RAND -->
        
        <!-- TRENDING PRODUCTS-->
        <?php //include('component/product_one.php') ?>
        <!-- FIN TRENDING PRODUCTS -->
       
        <!-- SERVICES-->
       <?php include('component/_friend.php') ?>
        <!-- NEWSLETTER-->
    

      </div>
      
      <!-- footer -->
      <?php include('_footer.php') ?>
      <!-- fin footer -->

      <!-- script -->
      <?php include('_script.php')  ?>
      <!-- fin script -->

    <script type="text/javascript">
      	$(document).ready(function() {
      		function load_country_data(page)
			{
				  $.ajax({
				   url:"<?php echo base_url(); ?>user/pagination_recent_products/"+page,
				   method:"GET",
				   dataType:"json",
				   beforeSend:function()
	               {
	                	$('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
	               },
				   success:function(data)
				   {
				    $('#country_table').html(data.country_table);
				    $('#pagination_link').html(data.pagination_link);
				   }
				  });
			}
			 
			 load_country_data(1);

			$(document).on("click", ".pagination li a", function(event){
			  event.preventDefault();
			  var page = $(this).data("ci-pagination-page");
			  load_country_data(page);
			});

			function load_data(query)
	        {
	            $.ajax({
	             url:"<?php echo base_url(); ?>user/fetch_search_product_pagination_shop",
	             method:"POST",
	             data:{query:query},
	              beforeSend:function()
	              {
	                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
	              },
	             success:function(data){
	              $('#country_table').html(data);
	             }
	            })
	        }

	        $('#search_text').keyup(function(){
	          var search = $(this).val();
	          if(search != '')
	          {
	           load_data(search);
	          }
	          else
	          {
	            load_country_data(1);
	          }
	        });



	        // ajout au panier
	        $(document).on("click",".add_cart", function(){

	 		  var product_id = $(this).data("productid");
			  var product_name = $(this).data("productname");
			  var product_price = $(this).data("price");

			  var Qte = $(this).attr('Qte');
			  var product_image = $(this).data("product_image");
			  var quantity = $('#' + product_id).val();
			  if(quantity != '')
			  {
			  	// alert("qte: "+quantity);
			  	var qte = parseInt(quantity);
			  	var qte_stock = parseInt(Qte);

			  	var product_priceTotal = product_price * quantity;

			  	// alert("image : "+product_image+" prixtotal: "+ product_priceTotal);
			  	if (qte > 0 && qte <= qte_stock) {

			  		$.ajax({
					    url:"<?php echo base_url(); ?>user/add_cart",
					    method:"POST",
					    data:{
					    	product_id:product_id, 
					    	product_name:product_name, 
					    	product_price:product_price, 
					    	quantity:quantity,
					    	product_priceTotal:product_priceTotal,
					    	product_image:product_image
					    },
					    success:function(data)
					    {
					     	 // alert("Product Added into Cart");
						     swal("succès!!!👌","Le produit est ajouté dans le panier avec succès","success");
						     $('#cart_details').html(data);
						     $('#' + product_id).val('');
					    }
					});

			  	}
			  	else{

			  		if (qte <= 0) {

			  			swal("Erreur!!! 🙆","veillez entrer une quantité supérieur ou égale à 1","error");
			  		}
			  		else{
			  			swal("Oups!!! 🙆","Veillez entrer la quantité inferieure ou égale à "+Qte,"info");
			  		}
			  	}
				  
			  }
			  else
			  {
			   	// alert("Please Enter quantity");
			   swal("Oups!!! 🙆","Veillez entrer la quantité","error");
			  }
			
	 	    });

	 	    // ajout au favori 
	 	    $(document).on('click', '.add_favory', function(event) {
	 	    	event.preventDefault();
	 	    	/* Act on the event */
	 	    	var product_id = $(this).attr('favoryProduct');
	 	    	if (product_id !='') {

	 	    		$.ajax({
					    url:"<?php echo base_url(); ?>user/add_favories",
					    method:"POST",
					    data:{
					    	product_id:product_id
					    },
					    success:function(data)
					    {
					     	 // alert("Product Added into Cart");
						     swal("succès!!!👌","Ajout à la liste favorite avec succès","success");
					    }
					});
	 	    	}

	 	    });

	 	    // appel au modal 
	 	    $(document).on('click', '.modalView', function(event) {
	 	    	event.preventDefault();
	 	    	/* Act on the event */
	 	    	var product_id = $(this).attr('product_id');
	 	    	// alert(product_id);
	 	    	
	 	    	$.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_article_modal",  
                    method:"POST",  
                    data:{product_id:product_id},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#productView').modal('show');
                         $('.img_product_one').html(data.user_image);

                         $('.title_product').text(data.product_name);
                         $('.prince_product').text(data.product_price);
                         $('.category_product').text(data.nom);
                         $('.afficher_qte').html(data.number);
                         $('.action_modal').html(data.action_to_do);
                         show_photo_galery(product_id);

                    }  
                });  
	 	    	
	 	    });


	 	    function show_photo_galery(product_id){
	 	    	if (product_id !='') {
	 	    		$.ajax({  
	                    url:"<?php echo base_url(); ?>user/fetch_single_galery_photo",  
	                    method:"POST",  
	                    data:{product_id:product_id},  
	                    success:function(data)  
	                    {  
	                         $('.galery_photo').html(data);
	                           // console.log(data);
	                    }  
	                });
	 	    	}
	 	    }

	 	    // photo default accuel
	 	    function show_photo_product(){
 	    	    $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_rand_product",  
                    method:"POST",  
                    data:{}, 
                    beforeSend:function()
		            {
		                $('.affichier_rand_one').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		            }, 
                    success:function(data)  
                    {  
                         $('.affichier_rand_one').html(data);
                           // console.log(data);
                    }  
                });
	 	    }

	 	    show_photo_product();

	 	    $(document).on('click','.brand_product_name', function(){
			
				var brand = $(this).attr('product_id');
				// alert("band "+brand);
				$.ajax({
					url:"<?php echo base_url(); ?>user/view_all_product_by_cat_product_id",
					method: "POST",
					data:{
						brand: brand
					},
					beforeSend:function()
		            {
		                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		            },
					success: function(data){
						$('#country_table').html(data);
					}
				});
			
			});

			// car category des produits

			$(document).on('click','.brand_category_id', function(){
			
				var brand = $(this).val();
				// alert("band "+brand);
				$.ajax({
					url:"<?php echo base_url(); ?>user/view_all_product_by_cat_category_id",
					method: "POST",
					data:{
						brand: brand
					},
					beforeSend:function()
		            {
		                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		            },
					success: function(data){
						$('#country_table').html(data);
					}
				});
			
			});

			// par categorie de prix 
			$(document).on('click','.brand_product_price', function(){
			
				var brand = $(this).val();
				// alert("band "+brand);
				$.ajax({
					url:"<?php echo base_url(); ?>user/view_all_product_by_cat_product_price",
					method: "POST",
					data:{
						brand: brand
					},
					beforeSend:function()
		            {
		                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		            },
					success: function(data){
						$('#country_table').html(data);
					}
				});
			
			});

			// suppression de donnees 
			$(document).on('click', '.remove_inventory', function(){
			  var idc = $(this).attr("id");

			    if(confirm("Êtes-vous sûr? Vous ne pourrez pas récupérer ces données provinciales!"))
	            {
	            
	           		$.ajax({
	                  url:"<?php echo base_url(); ?>user/remove_product_to_cart",
	                  method:"POST",
	                  data:{idc:idc},
	                  success:function(data)
	                  {
	                     swal("succès!", "suppression panier avec succès", "success");
	                     $('#country_table').html(data);
	                  }
	                });
	            }
	            else
	            {
	            	swal("Ouf!!!", "opération annulée :)", "info");
	            }

			  
			});

			// vider le panier 
			$(document).on('click', '#clear_cart', function(){

				if(confirm("Êtes-vous sûr de tous supprimer? Vous ne pourrez pas récupérer ces données provinciales!"))
	            {
	            
	           		$.ajax({
	                  url:"<?php echo base_url(); ?>user/clear_my_card",
	                  method:"POST",
	                  success:function(data)
	                  {
	                     swal("succès!", "votre panier a été vider avec succès", "success");
	                     $('#country_table').html(data);
	                  }
	                });
	            }
	            else
	            {
	            	swal("Ouf!!!", "opération annulée :)", "info");
	            }
				  
			 });

			// script des paniers 
			$(document).on('click','.panier_show', function(){
		 		show_card();
		 	});

		 	$(document).on('dblclick','.panier_show', function(){
		 		load_country_data(1);
		 	});

		 	function show_card(){
				$('#country_table').load("<?php echo base_url(); ?>user/load_cart");
		 	}

		 	function publication_rand(){
		 		$.ajax({  
                    url:"<?php echo base_url(); ?>user/rand_publication_product",  
                    method:"POST",  
                    data:{}, 
                    beforeSend:function()
		            {
		                $('#country_table2').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
		            }, 
                    success:function(data)  
                    {  
                         $('#country_table2').html(data);
                           // console.log(data);
                    }  
                });
		 	}

		 	publication_rand();
		 	$(document).on('click', '.shop_show', function(event) {
		 		event.preventDefault();
		 		/* Act on the event */
		 		 load_country_data(1);
		 	});
			





      	});
      </script>
     
    </div>
  </body>
</html>

