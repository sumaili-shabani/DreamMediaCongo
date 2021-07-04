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
	            

	            <!-- SHOP LISTING-->
	            <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">

	            	<!-- mes scripts -->

	                   <div class="col-md-12">
	                   	<div class="row">
	                   		
	                   		<div class="col-md-8">
		                    	<?php include("objet_basic.php") ?>

	                   		</div>

	                   		<div class="col-md-4">
	                   			<?php include('menu_user.php') ?>
	                   		</div>

	                   	</div>
	                   </div>
	                   
        			<!-- fin -->
	                
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
       <?php //include('component/_friend.php') ?>
        <!-- NEWSLETTER-->
    

      </div>
      
      <!-- footer -->
      <?php include('_footer.php') ?>
      <!-- fin footer -->

      <!-- script -->
      <?php include('_script.php')  ?>
      <!-- fin script -->

     
    </div>
  </body>
</html>

