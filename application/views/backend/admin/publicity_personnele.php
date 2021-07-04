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
	                        		<div class="col-md-2"></div>
	                        		<div class="col-md-8">
	                        			 <div for="files" class="text-center"><i class="fa fa-picture-o"></i>&nbsp; Selectionnez multiples photos</div>
				                         <input type="file" name="files" id="files" class="form-control" multiple />
				                        <hr>
	                        		</div>
	                        		<div class="col-md-2"></div>
	                        	</div>
	                        </div>
	                       
	                         
	                         <form class="form-group col-md-12" method="post" action="<?php echo base_url(); ?>admin/download_photo_galery" style="margin-top: 10px;">
	                         	<div class="row" id="uploaded_images" style="margin-top: 10px;">
	                         		
	                         	</div>

	                         	<div class="row resultat" id="country_table" style="margin-top: 10px;">

	                        	</div>

	                            <div class="col-md-12 col-lg-12" style="margin-top: 10px;">
	                            	<div class="row">
	                            		<div class="col-md-4"></div>
	                            		<div class="col-md-4">
	                            			<nav aria-label="Page navigation example" id="pagination_link">
											  
											</nav>
	                            		</div>
	                            		<div class="col-md-4"></div>
	                            	</div>
	                            </div>

	                         	<div class="form-group col-md-12" style="margin-top: 10px;">
	                         		<div class="row">
									  	
									  	<div class="col-md-3"></div>
	                         			<div class="col-md-6">
	                         				<button type="submit" name="download" class="btn btn-dark btn-block"> <i class="fa fa-save fa-lg"></i> &nbsp; Télécharger</button>&nbsp;

	                         			</div>
	                         			<div class="col-md-3"></div>
									   
									 </div>
	                         	</div>

	                         </form>

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
            <div class="modal-header bg-primary text-white">
              <p class="modal-title text-center">cat</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                <div class="col-md-12">
        			<div class="input-group flex-nowrap mb-2">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-pencil"></i></span>
					  </div>
					  <input type="url" name="url" id="url" class="form-control" placeholder="https://www.nomdomaine.com" />
					</div>
        		</div>

        		 
              
            </div>
            <div class="modal-footer">
              <input type="hidden" name="idg" id="idg" />
              <input type="hidden" name="operation" id="operation" />
              <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div> 


    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");

            $('#files').change(function(){
				  var files = $('#files')[0].files;
				  var error = '';
				  var form_data = new FormData();
				  for(var count = 0; count<files.length; count++)
				  {
				   var name = files[count].name;
				   var extension = name.split('.').pop().toLowerCase();
				   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','webp']) == -1)
				   {
				    error += "Invalid " + count + " Image File"
				   }
				   else
				   {
				    form_data.append("files[]", files[count]);
				   }
				  }
				  if(error == '')
				  {
				   $.ajax({
				    url:"<?php echo base_url(); ?>admin/upload_galery2", 
				    method:"POST",
				    data:form_data,
				    contentType:false,
				    cache:false,
				    processData:false,
				    beforeSend:function()
				    {
				     	$('#uploaded_images').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
				    },
				    success:function(data)
				    {
					     $('#uploaded_images').html(data);
					     $('#files').val('');
				    }
				    
				   })
				  }
				  else
				  {
				   showErrrorMessage(error);
				  }
			 });



         function load_country_data(page)
		 {
		  $.ajax({
		   url:"<?php echo base_url(); ?>admin/pagination_galery_member2/"+page,
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

		


		 $(document).on('click', '.supprimer', function(e){
		 	e.preventDefault();
	           var idg = $(this).attr('idg');

				  if(confirm("Etes-vous sûre de vouloir le supprimer?"))
		          {
		            
			          if(idg !='')
		              {
		                 // alert("idg:"+idg);
						  $.ajax({
				              url:"<?php echo base_url(); ?>admin/supression_photo_galery_personnele",
				              method:"POST",
				              data:{idg:idg},
				              success:function(data)
				              {
				              	var message = data;
				              	showSuccessMessage(message);
				                 load_country_data(1);
				                 // dataTable.ajax.reload();
				              }
				          });
		              }
		              else
		              {

		                showErrrorMessage("Veillez selectionner aumoins un message pour éffectuer cette opération");
		               
		              }
		           		
		          }
		          else
		          {
		            showErrrorMessage("opération annulée :)")
		          }

	          	
	      });

		 $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var nom = $('#nom').val();  
               
               var action = $('#action').val();


               if(nom != '')
                {

                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_galery_entrep_personnele'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  // swal('succès', ''+data, 'success'); 
                                   var message =  data;
								    showSuccessMessage(message);

                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  showErrrorMessage("Tous les champs doivent être remplis");
                }


                 
          });  

		  $(document).on('click', '.update', function(){  
               var idg = $(this).attr("idg");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_galery_entrep_personnele",  
                    method:"POST",  
                    data:{idg:idg},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#url').val(data.url);
                         
                         $('.modal-title').text("modification de rôle ");  
                         $('#idg').val(idg);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

            const showErrrorMessage = function(erreur) {
		      swal("Ouf!!!", erreur, "info");
		    };

		    const showSuccessMessage = function(message) {
		      swal("Succès!!!", message, "success");
		    };





        });
    </script>

    <script type="text/javascript">
		$(document).ready(function(){
		 $('.select').click(function(){
		  if(this.checked)
		  {
		   $(this).parent().css('border', '5px solid #ff0000');
		  }
		  else
		  {
		   $(this).parent().css('border', 'none');
		  }
		 });
		});
	</script>



</body>

</html>