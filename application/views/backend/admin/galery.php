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
                           <!-- mes scripts commencent -->
                             <div class="col-md-12">
		                         <div class="row">
		                           <div class="col-md-12">
		                             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">
		                        <div class="table-responsive">
		                            <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		                                <thead>  
		                                    <tr>         
	                                             <th width="10%">Image</th>
		                                         <th width="35%">Nom du produit</th>  
		                                         <th width="35%">Prix</th>
		                                         <th width="10%">Qte en stock</th>
	                                             
	                                            
	                                             <th width="5%">Modifier</th> 
	                                             <th width="5%">Supprimer</th>  
	                                        </tr> 
		                               </thead> 

	                                    <tfoot>  
                                            <tr>         
	                                             <th width="10%">Image</th>
		                                         <th width="35%">Nom du produit</th>  
		                                         <th width="35%">Prix</th>
		                                         <th width="10%">Qte en stock</th>
	                                             
	                                            
	                                             <th width="5%">Modifier</th> 
	                                             <th width="5%">Supprimer</th>   
	                                        </tr> 
	                                   </tfoot>   
		                                
		                            </table>
		                        </div>
		                      </div>
		                      <!-- fin insertion tableau -->
                           <!-- fin de mes scripts commencent -->
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

   <div id="userModal" class="modal fade">
      <div class="modal-dialog">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
              <p class="modal-title text-center">role</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

             <div class="form-group col-md-12">
                <label><i class="fa fa-hand-o-down"></i> Selectionnez le produit</label>
               <select name="produit_pro" id="produit_pro" class="form-control ">
               	<?php 
	               	if ($produits->num_rows() > 0) {
	               		?>
	               		<option value="">Selectionnez le produit</option>
	               		<?php
	               		foreach ($produits->result_array() as $key) {
	               			?>
	               			<option value="<?php echo($key['product_id']) ?>"><?php echo($key['product_name']) ?></option>
	               			<?php
	               		}
	               	}
	               	else{

	               		?>
	               		<option value="">Aucun produit n'est diponible</option>
	               		<?php
	               	}
               	?>
               	
               </select> 
            </div>

            <div class="form-group col-md-12">
                <label>
                	<i class="fa fa-camera"></i>Selectionnez l'image du produit
                </label>
                <input type="file" name="user_image" id="user_image" class="form-control" />
                
            </div>

            <div class="col-md-12 mb-2">
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
              <input type="hidden" name="idgalery" id="idgalery" />
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
               $('.modal-title').text("Paramètrage des catégories des produits");  
               $('#action').val("Add");  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_galery'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 0, 0],  
                         "orderable":false,  
                    },  
               ],  
          });


          

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var product_id = $('#product_id').val();

               var extension = $('#user_image').val().split('.').pop().toLowerCase(); 
	           if(extension != '')  
	           {  
	                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','jfif']) == -1)  
	                {  
	                     swal("Oups!!!", "opération annulée :)", "error");
	                     $('#user_image').val('');  
	                     return false;  
	                }  
	           }  
               
               var action = $('#action').val();


               if(product_id != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_galery'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_galery'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  swal("Erreur!!!!","Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idgalery = $(this).attr("idgalery");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_galery",  
                    method:"POST",  
                    data:{idgalery:idgalery},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  

                         $('#product_id').val(data.product_id);  
                         $('#user_uploaded_image').html(data.user_image);  
                         
                         $('.modal-title').text("modification de la catégorie "+data.nom);  
                         $('#idgalery').val(idgalery);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idgalery = $(this).attr("idgalery");

               if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		 $.ajax({
                          url:"<?php echo base_url(); ?>admin/supression_galery",
                          method:"POST",
                          data:{idgalery:idgalery},
                          success:function(data)
                          {
                             swal("succès!", ''+data, "success");
                             dataTable.ajax.reload();
                          }
                        });
	          }
	          else
	          {
	            swal("Ouf!!!", "opération annulée :)", "info");
	          }

          });

          $(document).on('change', '#produit_pro',function(){
          	var product_id = $(this).val();
          	if (product_id !='') {
          		$('#product_id').val(product_id);
          	}
          	else{
          		swal("Erreur!!!","veillez-selectionner le produit","error");
          	}
          	
          });



     });  
     </script>






</body>

</html>