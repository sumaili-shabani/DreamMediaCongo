 <?php

 $first_name;
 $last_name;
 $email;
 $image;
 $telephone;
 $full_adresse;
 $biographie;
 $date_nais;
 $passwords;
 $idrole;

 $facebook;
 $linkedin;
 $twitter ;

 $university;
 $faculte;
 $option ;
 $sexe;
 $photo;

 $id_user;

 foreach ($users as $row) {
  $id_user    = $row["id"];
  $first_name   = $row["first_name"];
  $last_name    = $row["last_name"];
  $email      = $row["email"];
  $image      = $row["image"];
  $telephone    = $row["telephone"];
  $full_adresse = $row["full_adresse"];
  $biographie   = $row["biographie"];
  $date_nais    = $row["date_nais"];
  $passwords    = $row["passwords"];
  $idrole       = $row["idrole"];
  $sexe       = $row["sexe"];

  $facebook     = $row["facebook"];
  $linkedin     = $row["linkedin"];
  $twitter      = $row["twitter"];
  
 }

 ?>
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
        

        <?php// echo(CURRENT_URL()) ?>


        <section class="py-5">
          <div class="container p-0">
            <div class="row">
	            <!-- SHOP SIDEBAR-->
	            <?php include('component/rand_pub.php') ?>
	            <!-- FIN CATEGORY LISTING-->


	            <!-- SHOP LISTING-->
	            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
	                <?php// include('component/shop_bloc.php') ?>

	                <!-- heckout -->
	                <section class="py-5">
			          <!-- BILLING ADDRESS-->
			          <h6 class="h6 text-uppercase mb-4">Finissez votre paiement! 
			          	Net à payer: <?php echo($net_payer) ?>$
			          </h6>
			          <div class="row">
			            <div class="col-lg-8">
			              <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>user/add_paiement/<?php echo($id_user) ?>">
			                <div class="row">
			                	<!-- message -->
			                    <div class="form-group col-md-12 mb-2" style="margin-top: 10px;">
									<div class="text-center" align="center">
							    		<?php
							            if($this->session->flashdata('message'))
							            {
							                echo '
							                <div class="alert alert-success">
							                <button class="close" data-dismiss="alert">x</button>
							                    '.$this->session->flashdata("message").'
							                </div>
							                ';
							            }
							            elseif ($this->session->flashdata('message2')) {
							              echo '
							                <div class="alert alert-danger">
							                <button class="close" data-dismiss="alert">x</button>
							                    '.$this->session->flashdata("message2").'
							                </div>
							                ';
							            }
							            else{

							            }
							            ?>
							    	</div>
							    </div>
							    <!-- fin message -->

			                  <div class="col-lg-6 form-group">
			                    <label class="text-small text-uppercase" for="firstName">Nom</label>
			                    <input name="first_name" class="form-control form-control-lg" id="firstName" type="text" placeholder="Entrez votre nom" required value="<?php echo($first_name) ?>">
			                  </div>
			                  <div class="col-lg-6 form-group">
			                    <label class="text-small text-uppercase" for="lastName">Prénom</label>
			                    <input name="last_name" class="form-control form-control-lg" id="lastName" type="text" placeholder="Entrez votre prénom" required value="<?php echo($last_name) ?>">
			                  </div>
			                  <div class="col-lg-6 form-group">
			                    <label class="text-small text-uppercase" for="email">Adresse mail</label>
			                    <input name="email" class="form-control form-control-lg" id="email" type="email" placeholder="Adresse mail" required value="<?php echo($email) ?>">
			                  </div>
			                  <div class="col-lg-6 form-group">
			                    <label class="text-small text-uppercase" for="phone">Numéro de téléphone</label>
			                    <input name="telephone" class="form-control form-control-lg" id="phone" type="tel" placeholder="ex +243817883541" required value="<?php echo($telephone) ?>">
			                  </div>
			                 
			                  
			                  <div class="col-lg-12 form-group">
			                    <label class="text-small text-uppercase" for="address">Addresse domicile</label>
			                    <input name="adresse1" class="form-control form-control-lg" id="address" type="text" placeholder="Entrez votre Adresse domicile ou lieu de la maison" required value="<?php echo($full_adresse) ?>">
			                  </div>
			                  <div class="col-lg-12 form-group">
			                    <label class="text-small text-uppercase" for="address">Addresse de livraison</label>
			                    <input name="adresse2" class="form-control form-control-lg" id="addressalt" type="text" placeholder="Par ou souhaitez-vous recevoir la marchandise?" required>
			                  </div>

			                  <!-- inclusion de module de paiement -->
			                  <?php include('component/paiement.php') ?>
			                  <!-- fin inclusion -->
			                 
			                </div>
			              </form>
			            </div>
			            <!-- ORDER SUMMARY-->
			            <div class="col-lg-4">
			              <div class="card border-0 rounded-0 p-lg-4 bg-light">
			                <div class="card-body">
			                  <h6 class="text-uppercase mb-4">Votre paiement sera validé après vérification de votre transaction</h6>
			                  <ul class="list-unstyled mb-0">
			                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">Client </strong><span class="text-muted small"><?php echo($first_name) ?></span></li>
			                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">Téléphone </strong><span class="text-muted small"><a href="tel:<?php echo($telephone) ?>"></a><?php echo($telephone) ?></span></li>
			                    <li class="border-bottom my-2"></li>
			                     <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">Adresse mail </strong><span class="text-muted small"><a href="mailto:<?php echo($email) ?>"></a><?php echo($email) ?></span></li>
			                    <li class="border-bottom my-2"></li>

			                    
			                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Net à payer</strong><span><?php echo($net_payer) ?>$</span></li>
			                    <li class="border-bottom my-2"></li>
			                  </ul>
			                </div>
			              </div>
			            </div>
			          </div>
			        </section>
	                <!-- fin checkout -->


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

		 	$(document).on('change', '.motif', function(){
            
                var motif = $(this).val();

                if(motif != '')
                {
                  // alert(country_id);
                  if (motif =="m-pesa") {
                    $('.vodacom').show();
                    $('.airtel').hide();
                  }
                  else if (motif =="airtel money") {
                    $('.vodacom').hide();
                    $('.airtel').show();
                  }
                  else{
                    $('.vodacom').show();
                    $('.airtel').hide();
                  }
                }
                else
                {
                   
                   swal("Erreur!!!","veillez selectionner un module de paiement m-pesa ou airtel-money","error");

                }
                // alert(idv);
              });
			





      	});
      </script>
     
    </div>
  </body>
</html>

