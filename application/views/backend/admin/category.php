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
		                             <button class="btn btn-dim btn-sm btn-outline-dark pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">
		                        <div class="table-responsive">
		                            <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		                                <thead>  
		                                    <tr>         
	                                             <th width="40%">Nom de la catégorie</th>  
	                                             <th width="40%">Mise à jour</th>
	                                             
	                                            
	                                             <th width="5%">Modifier</th> 
	                                             <th width="5%">Supprimer</th>  
	                                        </tr> 
		                               </thead> 

	                                    <tfoot>  
                                            <tr>         
	                                             <th width="40%">Nom de la catégorie</th>  
	                                             <th width="40%">Mise à jour</th>
	                                             
	                                            
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
            <div class="modal-header bg-dark text-white">
              <p class="modal-title text-center">cat</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                <div class="form-group col-md-12">
                     <label> <i class="fa fa-globe"></i> Entrer le nom d'une catégorie</label>
                     <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez la catégorie d'informations" />
                </div>

                    
              
            </div>
            <div class="modal-footer">
              <input type="hidden" name="idcat" id="idcat" />
              <input type="hidden" name="operation" id="operation" />
              <input type="submit" name="action" id="action" class="btn btn-dark" value="Add" />
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
                    url:"<?php echo base_url() . 'admin/fetch_category'; ?>",  
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
               var nom = $('#nom').val();  
               
               var action = $('#action').val();


               if(nom != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_category'?>",  
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
                             url:"<?php echo base_url() . 'admin/modification_category'?>",  
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
               var idcat = $(this).attr("idcat");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_category",  
                    method:"POST",  
                    data:{idcat:idcat},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         
                         $('.modal-title').text("modification de la catégorie "+data.nom);  
                         $('#idcat').val(idcat);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idcat = $(this).attr("idcat");

               if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		 $.ajax({
                          url:"<?php echo base_url(); ?>admin/supression_category",
                          method:"POST",
                          data:{idcat:idcat},
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



     });  
     </script>






</body>

</html>