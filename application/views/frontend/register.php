<!DOCTYPE html>
<html dir="ltr" lang="fr" class="no-js"> 

<!-- Mirrored from fbtemplates.net/html/glossymag/header_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 10:46:36 GMT -->
<head>
  <!-- Basic -->
  <?php include('_meta2.php') ?>
</head>
<body class="fbt-owl-header">
    <div class="navbar-fixed-top"></div>
    
    <?php include('_nav.php') ?>
    
    <?php //include('component/carousel.php') ?>
    
    <!-- Main Content Start -->
    <section id="main-content" class="full-width-slider clearfix">
        <div class="container">
            <div class="row">
                <div class="outer-wrapper clearfix">
                    <!-- Main Wrapper Start -->
                    <div class="fbt-col-lg-9 col-md-8 col-sm-6 main-wrapper clearfix">
                    
                        <?php include('component/_register.php') ?>
                        
                    </div><!-- Main Wrapper End -->
                    
                    <!-- Sidebar Start -->
                    <div class="fbt-col-lg-3 col-md-4 col-sm-6 sidebar">
                        <?php include('component/dev/_pub.php') ?>
                    </div><!-- Sidebar End -->
                    
                </div>
                
                
                
                <!-- Post Outer Start -->
                <div class="outer-wrapper clearfix">
                    <?php include('news.php') ?>
                    
                </div><!-- Post Outer End -->
            </div>
        </div>      
    </section><!-- Main Content End -->
    
    <?php include('_footer.php') ?>
    
    <a href="#" id="BackToTop"><i class="fa fa-angle-up"></i></a>
    <div class="navbar-fixed-bottom"></div>
    
    <!-- JAVASCRIPTS -->
    <?php include("_script2.php") ?>




        <script type="text/javascript">
        $(document).ready(function() {
            
            /*
            FIN SCRIPT PARTAGE DE BUTTON RESEAUX SOCIAUX
        */

        function load_country_data2(page)
        {
          $.ajax({
           url:"<?php echo base_url(); ?>home/pagination_access_our_article/"+page,
           method:"GET",
           dataType:"json",

            beforeSend:function()
            {
              $('.resultat_menus').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
            },
           success:function(data)
           {
            $('.resultat_menus').html(data.country_table);
            $('#pagination_link2').html(data.pagination_link);
           }
          });
        }
         
         load_country_data2(1);

         $(document).on("click", ".pagination li a", function(event){
          event.preventDefault();
          var page = $(this).data("ci-pagination-page");
          load_country_data2(page);
         });


         function load_data(query)
         {
              $.ajax({
               url:"<?php echo base_url(); ?>home/fetch_search_our_articles",
               method:"POST",
               data:{query:query},
                beforeSend:function()
                {
                  $('.resultat_menus').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success:function(data){
                  $('.resultat_menus').html(data);
                }

              });
          }

         $(document).on('keyup','.search_text',function(event){
            if (event.which == 13) {
                var search = $(this).val();
                if(search != '')
                {
                   load_data(search);
                   $('#pagination_link2').html('');
                }
                else
                {
                   load_country_data2(1);
                }
            }
            
        });



        });
    </script>










</body>

<!-- Mirrored from fbtemplates.net/html/glossymag/header_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jun 2020 10:46:37 GMT -->
</html>


