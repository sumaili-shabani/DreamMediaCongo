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
       

        <section class="py-5">
          <div class="container p-0">
            <div class="row">
	            

	            <!-- SHOP LISTING-->
	            <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">

	            	<!-- mes scripts -->

	                   <div class="col-md-12">
	                   	<div class="row">
	                   		
	                   		<div class="col-md-8">
		                    	<?php include("objet_basic_achat.php") ?>

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

      <div id="userModal" class="modal fade">
      <div class="modal-dialog modal-lg">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <div align="center" class="modal-title text-center"></div>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                <div class="form-group col-md-12" id="country_table">
                     
                </div>

                    
              
            </div>
            
          </div>
        </form>
      </div>
    </div>

      <script type="text/javascript">
      	$(document).ready(function() {

          $(document).on('click', '.voir', function(){  

             var code = $(this).attr("code");
             var user_id = $(this).attr("user_id");
             var first_name = $(this).attr("first_name");  
             if (user_id !='' && code !='' && first_name !='') {
                  $('#userModal').modal('show');
                  $.ajax({  
                      url:"<?php echo base_url(); ?>user/showVente",  
                      method:"POST",  
                      data:{
                        user_id:user_id,
                        code:code
                      },
                      beforeSend:function()
                      {
                          $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                      },    
                      success:function(data)  
                      {   
                           $('#country_table').html(data); 
                           $('.modal-title').text("mes achats "+first_name);  
                          
                      }  
                  });
             }
             else{
               swal("erreur!!!", "une erreur est subvenue lors de l'opération","info");

             }

          });

      		$(document).on('change', '#user_image', function(event) {
      			event.preventDefault();

      			 var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 
	               if(extension != '')  
	               {  
	                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
	                    {  

	                         var erreur = "Invalide type de l'image! ton image doit être de format jpg, png, gif ou jpeg 🔕";
	                         swal("Erreur!!!",erreur,'info');

	                         $('#user_image').val('');  
	                         return false;  
	                    }  
	               }
      		});
      		 
      	});
      </script>

     
    </div>
  </body>
</html>

