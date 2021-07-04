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


        <section class="py-5">
          <div class="container p-0">
            <div class="row">
	            <!-- SHOP SIDEBAR-->
	            <?php include('component/menu_category.php') ?>
	            <!-- FIN CATEGORY LISTING-->


	            <!-- SHOP LISTING-->
	            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
	                <?php include('component/shop_bloc.php') ?>

	            </div>
	            <!-- FIN SHOP LISTING-->



          </div>
        </section>


        <!-- CATEGORIES SECTION-->

        <?php //include('component/_category_rand.php') ?>

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
				   url:"<?php echo base_url(); ?>user/pagination_product_shop/"+page,
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

