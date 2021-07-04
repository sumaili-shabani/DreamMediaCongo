<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include('_navigation.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('_menuheader.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                    

                    <div class="col-md-12 card">
                    	<div class="row card-body">

                    		<!-- mes script commencent -->
		                      <div class="col-md-12">
		                         <div class="row">
		                           <div class="col-md-12">
		                           

		                           	<!-- <a href="" class="btn btn-dim btn-sm btn-outline-primary pull-center  mb-4"><i class="fa fa-print"></i> PDF</a> -->

		                             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>

		                            
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">

                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4"></div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-search"></i> Recherche </span>
                                       <input type="text" name="search_text" id="search_text" placeholder="Rechercher un produit..." class="form-control" />
                                    </div>
                                </div>
                              </div>
                            </div>

		                        <div class="table-responsive" id="country_table">
		                            
		                        </div>

                            <div class="col-md-12 mb-2">
                              <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                  <nav class="pagination" id="pagination_link">
                                
                                  </nav>
                                </div>
                                <div class="col-md-4"></div>
                              </div>
                            </div>

		                      </div>
		                      <!-- fin insertion tableau -->
		                      <!-- fin de mes scripts -->
		                   
		        			<!-- fin -->
                    		
                    	</div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('_footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
   <?php include('_script.php') ?>

    <!-- modal -->
    <div id="userModal" class="modal fade">
      <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header text-white bg-secondary">
              <p class="modal-title text-center">Add User</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label> <i class="fa fa-edit"></i> Entrer le nom du produit</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Nom du produit" />
                              
                            </div>

                            <div class="form-group col-md-12">
                                <label><i class="fa fa-money"></i> Prix du produit </label>
                                <input type="number" step="1" name="product_price" id="product_price" class="form-control" placeholder="Entrez le prix du produit" />  
                            </div>

                            <div class="form-group col-md-12">
                                <label><i class="fa fa-hand-o-down"></i> Catégorie du produit</label>
                               <select name="category_pro" id="category_pro" class="form-control ">
                               	<?php 
                               	if ($categories->num_rows() > 0) {
                               		?>
                               		<option value="">Selectionnez la catégorie du produit</option>
                               		<?php
                               		foreach ($categories->result_array() as $key) {
                               			?>
                               			<option value="<?php echo($key['idcat']) ?>"><?php echo($key['nom']) ?></option>
                               			<?php
                               		}
                               	}
                               	else{

                               		?>
                               		<option value="">Aucune catégorie n'est diponible</option>
                               		<?php
                               	}
                               	?>
                               	
                               </select> 
                            </div>

                            <div class="form-group col-md-12">
                                <label><i class="fa fa-pencil"></i> Quantité du produit </label>
                                <input type="number" step="1" name="Qte" id="Qte" class="form-control" placeholder="Entrez la Quantité du produit" />  
                            </div>

                            <div class="form-group col-md-12">
                                <label>
                                	<i class="fa fa-camera"></i>Selectionnez l'image du produit
                                </label>
                                <input type="file" name="user_image" id="user_image" class="form-control" />
                                
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                    	<div class="row">
                    		<div class="col-md-4"></div>
                    		<div class="col-md-4">
                    			<span id="user_uploaded_image"></span>
                    		</div>
                    		<div class="col-md-4"></div>
                    	</div>
                    </div>
              
            </div>
            <div class="modal-footer">
              <input type="hidden" name="category_id" id="category_id">
              <input type="hidden" name="product_id" id="product_id" />
              <input type="hidden" name="operation" id="operation" />
              <input type="submit" name="action" id="action" class="btn btn-secondary" value="Add" />
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div> 


    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Approvisionnement de produits");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  

          /*
            // var dataTable = $('#user_data').DataTable();
            // var dataTable = $('#user_data').DataTable({  
            //      "processing":true,  
            //      "serverSide":true,  
            //      "order":[],  
            //      "ajax":{  
            //           url:"<?php echo base_url() . 'admin/fetch_product'; ?>",  
            //           type:"POST"  
            //      },  
            //      "columnDefs":[  
            //           {  
            //                "targets":[0, 0, 0],  
            //                "orderable":false,  
            //           },  
            //      ],  
            // });
          */

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var product_name 	= $('#product_name').val();  
               var category_id 		= $('#category_id').val();
               var product_price 	= $('#product_price').val();

               var Qte 	= $('#Qte').val();

               var extension = $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '')  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','jfif']) == -1)  
                    {  
                         swal("Oups!!!", "opération annulée :)", "error");
                         $('#user_image').val('');  
                         return false;  
                    }  
               }

               // alert(nomtbl_info+" description:"+description+" action:"+action);


               if(product_name != ''  && product_price != '' && category_id != '' && Qte != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_product'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,
                           
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                load_country_data(1);
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_product'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                 load_country_data(1); 
                             }  
                        });

                  }

                }
                else
                {
                  // alert("Tous les champs doivent être remplis", "", "danger");
                  swal("Erreur!!!","Tous les champs doivent être remplis","error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var product_id = $(this).attr("product_id");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_product",  
                    method:"POST",  
                    data:{product_id:product_id},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#product_name').val(data.product_name);
                         $('#category_id').val(data.category_id);
                         
                         $('#product_price').val(data.product_price); 
                         $('#Qte').val(data.Qte); 

                         $('.modal-title').text("modification du produit "+data.product_name);  
                         $('#product_id').val(product_id);  
                         $('#user_uploaded_image').html(data.user_image);  
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var product_id = $(this).attr("product_id");

              if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_product",
                      method:"POST",
                      data:{product_id:product_id},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         load_country_data(1);
                      }
                    });
	          }
	          else
	          {
	            swal("Ouf!!!", "opération annulée :)", "info");
	          }

          });

          $(document).on('change', '#category_pro',function(){
          	var category_id = $(this).val();
          	if (category_id !='') {
          		$('#category_id').val(category_id);
          	}
          	else{
          		swal("Erreur!!!","veillez-selectionner la catégorie","error");
          	}
          	
          });



          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>admin/pagination_view_product/"+page,
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

         $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
         });

         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>admin/fetch_search_view_product",
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

        load_country_data(1);



     });  
     </script>




</body>

</html>