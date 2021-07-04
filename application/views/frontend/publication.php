<?php ?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from preview.colorlib.com/theme/magnews2/blog-list-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 20:02:03 GMT -->

<head>
    <?php include('_meta2.php') ?>
</head>

<body class="animsition">
    <!-- Header -->
   <?php include('_menu_header.php') ?>
    <!-- Breadcrumb -->
    
    
    <section class="bg0 p-b-55">
        <div class="container">
            <div class="row justify-content-center">
                
                <!-- section on -->
                <div class="col-md-10 col-lg-8" style="margin-top: 10px;">
                    <?php include('component/category.php') ?>
                </div>
                <!-- fin section -->


                <div class="col-md-10 col-lg-4 p-b-80" style="margin-top: 10px;">
                    <?php include('component/_section_pub.php') ?>
                </div>
                

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('_footer.php') ?>
    <!-- fin footer -->

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>
    <!--===============================================================================================-->
    <?php include('_script2.php') ?>

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
         
         // load_country_data2(1);

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

     <script>
        $(document).ready(function(){
          var sample_data = new Bloodhound({
           datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
           queryTokenizer: Bloodhound.tokenizers.whitespace,
           prefetch:'<?php echo base_url(); ?>home/fetch_auto_offres_articles',
           remote:{
            url:'<?php echo base_url(); ?>home/fetch_auto_offres_articles/%QUERY',
            wildcard:'%QUERY'
           }
          });
          

          $('#prefetch .typeahead').typeahead(null, {
           name: 'sample_data',
           display: 'name',
           source:sample_data,
           limit:10,
           templates:{
            suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/article/{{image}}" class="img-thumbnail" width="68" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;">{{name}}</div></div></div>')
           }
          });
        });
        </script>
        
</body>

<!-- Mirrored from preview.colorlib.com/theme/magnews2/blog-list-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 20:02:10 GMT -->

</html>