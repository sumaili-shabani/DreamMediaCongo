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

                                        <a href="" class="btn btn-dim btn-sm btn-secondary-light pull-center  mb-4"><i class="fa fa-refresh"></i> Actualisez</a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                         <button class="btn btn-dim btn-sm btn-secondary-light pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal2"><i class="fa fa-plus"></i>Effectuer l'opération</button>
                                       </div>
                                     </div>
                                  </div>
                                  <!-- insertion de tableau -->
                                  <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                                            <thead class="tb-member-head thead-light">  
                                                <tr> 
                                                    <th width="10%">Avatar</th> 
                                                    <th width="20%">Nom de la vidéo</th>  
                                                    <th width="20%">Description </th> 
                                                    <th width="10%">Catégorie </th> 
                                                    <th width="10%">Type </th>  
                                                    <th width="20%">Mise à jour</th>
                                                     
                                                    
                                                    <th width="5%">Opération</th> 
                                                    <th width="5%">Supprimer</th>  
                                                </tr>  
                                           </thead> 

                                           <tbody>
                                           
                                           </tbody>

                                           <tfoot>  
                                                <tr>  
                                                    <th width="10%">Avatar</th> 
                                                    <th width="20%">Nom de la vidéo</th>  
                                                    <th width="20%">Description </th> 
                                                    <th width="10%">Catégorie </th> 
                                                    <th width="10%">Type </th>  
                                                    <th width="20%">Mise à jour</th>
                                                     
                                                    
                                                    <th width="5%">Opération</th> 
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


    <!-- modal ajout radio -->
    <!-- modal  -->
   <div id="userModal" class="modal fade">
      <div class="modal-dialog modal-lg">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <p class="modal-title text-center">cat</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                  <!-- .contenues -->
                  <div class="col-md-12">
                    <div class="row">

                      <div class="form-group col-md-12">
                           <label> <i class="fa fa-edit"></i> Entrer le nom de l'article</label>
                           <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrer le nom de l'article" />
                      </div>

                      <div class="form-group col-md-6">
                          <label><i class="fa fa-hand-o-down"></i> Catégorie de l'information</label>
                           <select name="category_pro" id="category_pro" class="form-control ">
                            <?php 
                            if ($categories->num_rows() > 0) {
                              ?>
                              <option value="">Selectionnez la catégorie de l'information</option>
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

                      <div class="form-group col-md-6">
                          <label><i class="fa fa-file-o"></i> le type de l'information</label>
                           <select name="type_pro" id="type_pro" class="form-control">
                              <option value="">Selectionnez le type de l'information</option>
                              <option value="texte">texte</option>
                              <option value="video">video</option>
                           </select> 
                      </div>

                      <div class="form-group col-md-12">
                          <label><i class="fa fa-camera"></i> Selectionner l'image de l'article</label>
                          <input type="file" name="user_image" id="user_image" class="form-control" />
                          
                      </div>

                      <div class="form-group col-md-12 lien" style="display: none;">
                           <label> <i class="fa fa-globe"></i> le lien de l'article</label>
                           <input type="url" name="lien" id="lien" class="form-control" placeholder="https://youtube.com/" />
                      </div>

                      
                      <div class="form-group jf-inputwithicon col-md-12 description_bloc">
                          <label><i class="fa fa-edit"></i> La description  de l'article</label>
                          <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l'article">

                          </textarea>
                      </div>

                      <div class="form-group jf-inputwithicon col-md-12 description_mod" style="display: none;">
                         <span class="description_mod"></span>
                      </div>

                      <!-- <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-1 mb-2"></div>
                          <div class="col-md-10">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                  <div class="col-md-12" style="margin-top: 7px;">
                                    <span id="user_uploaded_image"></span>
                                  </div>
                                </div>
                                <div class="col-3"></div>
                                
                              </div>
                            </div>
                            
                            
                          </div>
                          <div class="col-md-1"></div>
                          
                        </div>
                      </div> -->

                      
                      

                      
                    </div>
                  </div>
                  <!-- fin contenus -->

                    
              
            </div>
            <div class="modal-footer">
                <input type="hidden" name="idcat" id="idcat">
                <input type="hidden" name="type" id="type">

                <input type="hidden" name="idart" id="idart" />
                <input type="hidden" name="operation" id="operation" />
                <input type="submit" name="action" id="action" class="btn btn-dark" value="Add" />
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   <!-- fin modal -->
    <!-- fin modal-->

    <!-- modal ajout radio -->


    <div id="userModal2" class="modal fade">
      <div class="modal-dialog modal-lg">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <p class="modal-title text-center">Liste des publications</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                <!-- insertion de tableau -->
                <div class="col-md-12">
                  <div class="table-responsive">
                      <table id="user_data2" class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" role="grid" aria-describedby="DataTables_Table_1_info">
                          <thead class="tb-member-head thead-light">  
                              <tr>
                                  <th width="5%">
                                    <button type="button" name="delete_all" id="delete_all" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i> &nbsp;Add</button>
                                  </th> 
                                  <th width="5%">Avatar</th>
                                  <th width="20%">Nom de la vidéo</th>  
                                  <th width="20%">Description </th> 
                                  <th width="10%">Catégorie </th> 
                                  <th width="10%">Type </th>  
                                  <!-- <th width="20%">Mise à jour</th> -->
                                   
                                  
                                  <th width="5%">Edit</th> 
                                  <th width="5%">Del</th>  
                              </tr>  
                         </thead> 

                         <tbody>
                          
                         </tbody>

                         <tfoot>  
                              <tr>  
                                  <th width="5%">
                                    <button type="button" name="delete_all2" id="delete_all2" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i> &nbsp;Add</button>
                                  </th> 
                                  <th width="5%">Avatar</th>
                                  <th width="20%">Nom de la vidéo</th>  
                                  <th width="20%">Description </th> 
                                  <th width="10%">Catégorie </th> 
                                  <th width="10%">Type </th>  
                                  
                                  <th width="5%">Edit</th> 
                                  <th width="5%">Del</th> 
                              </tr>  
                         </tfoot>   
                          
                      </table>
                  </div>
                </div>
                <!-- fin insertion tableau -->

                    
              
            </div>
            <div class="modal-footer">
             
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div> 

    <!-- fin modal2-->



     <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

      var  $message = '';

          $('#add_button').click(function(e){
               e.preventDefault();  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des publictés  d'informations");  
               $('#action').val("Add");

          })  
          // var dataTable = $('#user_data').DataTable();

          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_publicite'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 0, 0],  
                         "orderable":false,  
                    },  
               ],  
          });

          var dataTable2 = $('#user_data2').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'admin/fetch_article_pub'; ?>",  
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
               var description = $('#description').val(); 
               var lien = $('#lien').val(); 

               var idcat = $('#idcat').val(); 
               var type = $('#type').val(); 

               var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '' )  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         var erreur = "Invalid Image File";
                          showErrrorMessage(erreur);  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description !='' && idcat !='' && type !='')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/operation_article'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                var message =  data;
                                 showSuccessMessage(message);

                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'admin/modification_article'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  

                                 var message =  data;
                                 showSuccessMessage(message);

                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');
                                  $('.modal-title').text("");
                                  $('#userModal2').modal('show');  
                                  dataTable.ajax.reload(); 
                                  dataTable2.ajax.reload(); 
                             }  
                        });

                  }

                }
                else
                {
                  var erreur = "Tous les champs doivent être remplis";
                  showErrrorMessage(erreur);
                }
 
          });  


          $(document).on('click', '.update', function(){  
               var idart = $(this).attr("idart");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>admin/fetch_single_article",  
                    method:"POST",  
                    data:{idart:idart},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                        
                         $('#userModal').modal('show');
                         $('#userModal2').modal('hide');  
                         $('.description_mod').show(); 
                         $('.description_bloc').hide(); 
                         $('#nom').val(data.nom);
                         $('#description').val(data.description);
                         $('#lien').val(data.lien);

                         $('#idcat').val(data.idcat);
                         $('#type').val(data.type);

                         $('.description_mod').html(data.text_description);

                         $('#user_uploaded_image').html(data.user_image);

                         
                         $('.modal-title').text("modification de l'article  "+data.nom);  
                         $('#idart').val(idart);   
                         $('#action').val("Edit"); 
                         $('.textarea').summernote();
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idart = $(this).attr("idart");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_article",
                      method:"POST",
                      data:{idart:idart},
                      success:function(data)
                      {
                         var message =  data;
                         showSuccessMessage(message); 

                         dataTable.ajax.reload();
                         dataTable2.ajax.reload();
                      }
                    });
            }
            else
            {
              var erreur = "opération annulée :)";
              showErrrorMessage(erreur);
            }

          });


          $(document).on('click', '.delete2', function(){
              var idp = $(this).attr("idp");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>admin/supression_publicite",
                      method:"POST",
                      data:{idp:idp},
                      success:function(data)
                      {
                         var message =  data;
                         showSuccessMessage(message);
                          

                         dataTable.ajax.reload();
                         dataTable2.ajax.reload();
                      }
                    });
            }
            else
            {
              var erreur = "opération annulée :)";
              showErrrorMessage(erreur);
            }

          });



           $("#category_pro").on("change", function(t) {

               var idcat = $(this).val();
                if (idcat !='') {
                  $('#idcat').val(idcat);
                }
                else{

                  $('#idcat').val("");
                  var erreur = "Veillez complèter la catégorie d'information 😰";
                  showErrrorMessage(erreur);
                }
          });

         $("#type_pro").on("change", function(t) {
            var type = $(this).val();
                if (type !='') {
                  $('#type').val(type);

                  if (type =='texte') {
                    $('.lien').hide();
                  }
                  if (type =='video') {
                    $('.lien').fadeIn(1000);
                  }
                }
                else{

                    $('#type').val("");
                    var erreur = "Veillez complèter le type de l'article  😰";
                    showErrrorMessage(erreur);
                }
          });






          $('.delete_checkbox').click(function(){
            if($(this).is(':checked'))
            {
             $(this).closest('tr').addClass('removeRow');
            }
            else
            {
             $(this).closest('tr').removeClass('removeRow');
            }
          });


          $('#delete_all').click(function(event){
              event.preventDefault();
                var checkbox = $('.delete_checkbox:checked');
              if(checkbox.length > 0)
              {
                 var checkbox_value = [];
                 $(checkbox).each(function(){
                  checkbox_value.push($(this).val());
                 });

                 // alert("idart:"+checkbox_value);
                 $.ajax({
                    url:"<?php echo base_url(); ?>admin/operation_publicite",
                    method:"POST",
                    data:{
                      checkbox_value:checkbox_value
                    },
                    success:function()
                    {
                      $('.removeRow').fadeOut(1500);
                      dataTable.ajax.reload();
                      dataTable2.ajax.reload();
                    }
                 });
              }
              else
              {
         
                showErrrorMessage("veillez selectionner un article  approprié🙆");
               
              }
              
           });


          $(document).on('click', '.activer', function(){
              var idp = $(this).attr("idp");

              if(confirm("Etes-vous sûre de vouloir activer la publicité?"))
              {
                
                  $.ajax({
                        url:"<?php echo base_url(); ?>admin/activation_publicite",
                        method:"POST",
                        data:{idp:idp},
                        success:function(data)
                        {
                           var message =  data;
                           showSuccessMessage(message);
                           dataTable.ajax.reload();
                           dataTable2.ajax.reload();
                        }
                      });
              }
              else
              {
                showErrrorMessage("opération annulée 🙆");
              }

          });

          $(document).on('click', '.desactiver', function(){
              var idp = $(this).attr("idp");

              if(confirm("Etes-vous sûre de vouloir desactiver la publicité?"))
              {
                
                  $.ajax({
                        url:"<?php echo base_url(); ?>admin/desactivation_publicite",
                        method:"POST",
                        data:{idp:idp},
                        success:function(data)
                        {
                           // Swal.fire("succès!", ''+data, "success");
                           var message =  data;
                            showSuccessMessage(message);

                           dataTable.ajax.reload();
                           dataTable2.ajax.reload();
                        }
                      });
              }
              else
              {
                showErrrorMessage("opération annulée 🙆");
              }

          });

          const showErrrorMessage = function(erreur) {
          swal("Oups!!!", erreur, "info");
        };

        const showSuccessMessage = function(message) {
          swal("Succès!!!", message, "success");
        };




     });  
     </script>

   

</body>

</html>