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
		                           <!--  <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		                                <thead>  
		                                    <tr>         
	                                             <th width="10%">Image</th>
		                                         <th width="25%">Nom du produit</th>  
		                                         <th width="10%">Prix</th>
		                                         <th width="10%">Qte en stock</th>
	                                             
	                                             <th width="10%">Qte en sortie</th>

	                                             <th width="25%">Mise à jour</th>

	                                             <th width="5%">Modifier</th> 
	                                             <th width="5%">Supprimer</th>  
	                                        </tr> 
		                               </thead> 
		                              

	                                    <tfoot>  
                                            <tr>         
	                                             <th width="10%">Image</th>
		                                         <th width="25%">Nom du produit</th>  
		                                         <th width="10%">Prix</th>
		                                         <th width="10%">Qte en stock</th>
	                                             
	                                             <th width="10%">Qte en sortie</th>

	                                             <th width="25%">Mise à jour</th>

	                                            
	                                             <th width="5%">Modifier</th> 
	                                             <th width="5%">Supprimer</th>      
	                                        </tr> 
	                                   </tfoot>   
		                                
		                            </table> -->
		                        </div>
		                      </div>

		                      <div class="col-md-12">
		                      	<div class="row">
		                      		<div class="col-md-4"></div>
		                      		<div class="col-md-4">
		                      			<nav class="pagination" id="pagination_link">
		                      		
		                      	        </nav>
		                      		</div>
		                      		<div class="col-md-4"></div>
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
            <div class="modal-header bg-dark text-white">
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
                <label><i class="fa fa-pencil"></i> Quantité sortie du produit </label>
                <input type="number" min="1" name="QteEntree" id="QteEntree" class="form-control" placeholder="Entrez la Quantité sortie du produit" />  
            </div>

            <div class="col-md-12 mb-2 info">
            	<div class="row">
            		<div class="col-md-9">
            			<div class="col-md-12">Designation: <span id="product_name"></span></div>
            			<div class="col-md-12">Prix: <span id="product_price"></span></div>
            			<div class="col-md-12">Qte en stock: <span id="Qte"></span></div>
            			<div class="col-md-12">Catégorie: <span id="nom"></span></div>
            		</div>
            		<div class="col-md-3">
            			<span id="user_uploaded_image"></span>
            		</div>
            		
            	</div>
            </div>

                    
              
            </div>
            <div class="modal-footer">
              <input type="hidden"  name="Qte_stock" id="Qte_stock" class="form-control" placeholder="Qte_stock" />  
              <input type="hidden"  name="qte_disponsible" id="qte_disponsible" class="form-control" placeholder="qte_disponsible" /> 
              
              <input type="hidden" name="ids" id="ids" />

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
               $('.modal-title').text("Evaluation  des produits");  
               $('#action').val("Add"); 
                $('.info').hide();

          })  
          // var dataTable = $('#user_data').DataTable();
          // var dataTable = $('#user_data').DataTable({  
          //      "processing":true,  
          //      "serverSids":true,  
          //      "order":[],  
          //      "ajax":{  
          //           url:"<?php echo base_url() .'admin/fetch_sortie'; ?>",  
          //           type:"POST"  
          //      },  
          //      "columnDefs":[  
          //           {  
          //                "targets":[0, 0, 0],  
          //                "orderable":false,  
          //           },  
          //      ],  
          // });

          $('.info').hide();

          load_country_data(1);  
         


        $(document).on('keyup', '#QteEntree', function(){
         	var QteEntree1 = $('#QteEntree').val();
         	if (QteEntree1 !='') {
               var QteEntree = parseInt(QteEntree1);
         	   var Qte_stock = parseInt($('#Qte_stock').val());

         	   if (QteEntree > Qte_stock) {
         	   	swal("Oups!!! 🙆","veillez reduire une quantité inferieure à "+Qte_stock,"info");
         	   }
         	   else{

	           	var qte_disponsible =Qte_stock - QteEntree;
	           	$('#qte_disponsible').val(qte_disponsible);

         	   }
	        
         	}
         	else{

         		swal("Erreur!!!","Veillez Entrer la quantité","info");
         	}

        });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var product_id = $('#product_id').val();
               var Qte_stock = $('#Qte_stock').val();
               var QteEntree = $('#QteEntree').val();
               var qte_disponsible = $('#qte_disponsible').val();

               var action = $('#action').val();


               if(product_id != '' && QteEntree !='')
                {

                  if (action =="Add" && qte_disponsible !='') {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_sortie'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_sortie'?>",  
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
                             },
                             error: (error)=>{
                             	swal("Erreur!!!", error, "danger");
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
               var ids = $(this).attr("ids");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_sortie",  
                    method:"POST",  
                    data:{ids:ids},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  

                         $('#product_id').val(data.product_id);
                         $('#QteEntree').val(data.QteEntree);
                         
                         showDetailArticle_Mod(data.product_id);

                        
                         $('.modal-title').text("modification du produit  "+data.product_name);  
                         $('#ids').val(ids);   
                         $('#action').val("Edit"); 
                          // $('.info').show(); 
                         
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var ids = $(this).attr("ids");

               if(confirm("Are you sure you want to delete this?")){
	            
	           		 $.ajax({
                          url:"<?php echo base_url(); ?>admin/supression_sortie",
                          method:"POST",
                          data:{ids:ids},
                          success:function(data){
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

          $(document).on('change', '#produit_pro',function(){
          	var product_id = $(this).val();
          	if (product_id !='') {
          		$('#product_id').val(product_id);

          		showDetailArticle(product_id);
          	}
          	else{
          		swal("Erreur!!!","veillez-selectionner le produit","error");
          	}
          	
          });

          function showDetailArticle(product_id){
	          	if (product_id !='') {

	          		$.ajax({  
		                url:"<?php echo base_url(); ?>admin/fetch_single_product",  
		                method:"POST",  
		                data:{product_id:product_id},  
		                dataType:"json",  
		                success:function(data)  
		                {  
		                     $('.info').show(); 
		                     $('#product_name').text(data.product_name);
		                     $('#category_id').text(data.category_id);
		                     $('#nom').text(data.nom);
		                     
		                     $('#product_price').text(data.product_price); 
		                     $('#Qte').text(data.Qte);

		                     $('#QteEntree').val(data.Qte);
		                     $('#Qte_stock').val(data.Qte); 

		                     $('.modal-title').text("modification du produit "+data.product_name);  
		                     $('#product_id').val(product_id);  
		                     $('#user_uploaded_image').html(data.user_image);  
		                }  
		            });
	          	}
	          	else{
	          		swal("Erreur!!!", "Veillez selectionner un article", "info");
	          	}
          }

          function showDetailArticle_Mod(product_id){
	          	if (product_id !='') {

	          		$.ajax({  
		                url:"<?php echo base_url(); ?>admin/fetch_single_product",  
		                method:"POST",  
		                data:{product_id:product_id},  
		                dataType:"json",  
		                success:function(data)  
		                {  
		                     $('.info').show(); 
		                     $('#product_name').text(data.product_name);
		                     $('#category_id').text(data.category_id);
		                     $('#nom').text(data.nom);
		                     
		                     $('#product_price').text(data.product_price); 
		                     $('#Qte').text(data.Qte);

		                     
		                     $('#Qte_stock').val(data.Qte); 

		                     $('.modal-title').text("modification du produit "+data.product_name);  
		                     $('#product_id').val(product_id);  
		                     $('#user_uploaded_image').html(data.user_image);  
		                }  
		            });
	          	}
	          	else{
	          		swal("Erreur!!!", "Veillez selectionner un article", "info");
	          	}
          }

          function load_country_data(page)
		  {
			  $.ajax({
			   url:"<?php echo base_url(); ?>admin/pagination_view_sortie/"+page,
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
			   url:"<?php echo base_url(); ?>admin/fetch_search_view_sortie",
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



     });  
     </script>






</body>

</html>