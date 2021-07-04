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
                                 <button class="btn btn-dim btn-sm btn-outline-dark pull-right  mb-2" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
                               </div>
                             </div>
                          </div>

                          <div class="col-md-12">

                              <div class="row">
                                <div class="col-md-2 mb-2">
                                   <div class="col-md-10">
                                     <select class="form-control" id="filtrage">
                                       <option value="">Filtrer</option>
                                       <option value="2">2</option>
                                       <option value="10">10</option>
                                       <option value="15">15</option>
                                       <option value="25">25</option>
                                       <option value="100">100</option>
                                       <option value="150">150</option>
                                     
                                     </select>
                                   </div>
                                </div>
                                <div class="col-md-2 mb-2">
                                  
                                </div>
                                <div class="col-md-4 mb-2"></div>
                                <div class="col-md-4 mb-2">
                                  <div class="form-group">
                                      <div class="input-group">
                                         <span class="input-group-addon" style="margin-top: 8px;"><i class="fa fa-search mr-2"></i> Recherche &nbsp;</span>
                                         <input type="text" name="search_text" id="search_text" placeholder="Recherche..." class="form-control" />
                                      </div>
                                  </div>
                                </div>
                              </div>
                              
                          </div>
                          <!-- insertion de tableau -->
                          <div class="col-md-12">
                            <div class="table-responsive" id="country_table">
                                <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead class="tb-member-head thead-light">  
                                        <tr> 
                                            <th width="10%">Avatar</th> 
                                            <th width="20%">Nom de la vidéo</th>  
                                            <th width="20%">Description </th> 
                                            <th width="10%">Catégorie </th> 
                                            <th width="10%">Type </th>  
                                            <th width="20%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
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

                      <div class="col-md-12">
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
                        </div>

                      
                      

                      
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


 



    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

      var  $message = '';

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des nos articles  d'informations");  
               $('#action').val("Add");  
               $('.description_mod').hide(); 
               $('.description_bloc').show(); 
          })  


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
                           url:"<?php echo base_url() . 'entreprise/operation_article'?>",  
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
                                 load_country_data();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'entreprise/modification_article'?>",  
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
                                   load_country_data();  
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
                    url:"<?php echo base_url(); ?>entreprise/fetch_single_article",  
                    method:"POST",  
                    data:{idart:idart},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
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
                        url:"<?php echo base_url(); ?>entreprise/supression_article",
                        method:"POST",
                        data:{idart:idart},
                        success:function(data)
                        {
                           // Swal.fire("succès!", ''+data, "success"); 
                           var message =  data;
                           showSuccessMessage(message);

                            load_country_data();
                        }
                      });
              }
              else
              {
                var erreur = "opération annulée :)";
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

                  showErrrorMessage("Erreur lors de l'opération!!! Veillez complèter le type de l'article  😰");
                
                
              }
          });

         $("#category_pro").on("change", function(t) {

            var idcat = $(this).val();
                if (idcat !='') {
                  $('#idcat').val(idcat);
                }
                else{

                  $('#idcat').val("");

                  showErrrorMessage("Erreur lors de l'opération!!! Veillez complèter la catégorie d'information 😰");
                }
          });

          $("#filtrage").on("change", function() {

            var nombre = $(this).val();
                if (nombre !='') {
                  filtrage(nombre);
                }
                else{

                 showErrrorMessage("Erreur lors de l'opération!!! Veillez selectionner le filtre d'information 😰");
                }
          });




        const showErrrorMessage = function(erreur) {
          swal("Oups!!!", erreur, "info");
        };

        const showSuccessMessage = function(message) {
          swal("Succès!!!", message, "success");
        };



          function filtrage(nombre){
            $.ajax({
             url:"<?php echo base_url(); ?>entreprise/pagination_view_article/"+nombre,
             method:"GET",

              beforeSend:function()
              {
                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data)
             {
              $('#country_table').html(data);
             }
            });
          }
          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>entreprise/pagination_view_article",
             method:"GET",

              beforeSend:function()
              {
                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data)
             {
              $('#country_table').html(data);
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
             url:"<?php echo base_url(); ?>entreprise/fetch_search_view_article",
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
            load_country_data();
          }
         });

        load_country_data();




     });  
     </script>

    

  



</body>

</html>