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


        <!-- CATEGORIES SECTION-->
        <?php include('component/_category_rand.php') ?>
        <!-- FIN CATEGORIES RAND -->
        
        <!-- TRENDING PRODUCTS-->
        <?php include('component/product_one.php') ?>
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
     
    </div>
  </body>
</html>