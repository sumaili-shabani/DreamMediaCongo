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
                    <?php include('component/_contact.php') ?>
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

   <script type="text/javascript" language="javascript" >  
	   $(document).ready(function(){


	      
	      $(document).on('submit', '#user_form', function(event){  
	           event.preventDefault();




	           var name = $('#name').val();
	           var subject = $('#subject').val();
	           var email = $('#email').val();
	           var message = $('#message').val(); 
	           var extension = $('#user_image').val().split('.').pop().toLowerCase();
	           // alert(nom+" sujet:"+sujet+" email:"+email+" message:"+message);

	            if(extension != '')  
	           {  
	                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','txt','xlsx','docx','mp3','mp4']) == -1)  
	                {  
	                     // alert("Invalid Image File"); 
	                     swal("Oups!!!", " erreur liée au format du fichier","error");  
	                     $('#user_image').val('');  
	                     return false;  
	                }  
	           } 

	           if(name != '' && subject != '' && email != '' && message != '')
	            {
	              	  $.ajax({  
	                       url:"<?php echo base_url() . 'home/operation_contact'?>",  
	                       method:'POST',  
	                       data:new FormData(this),  
	                       contentType:false,  
	                       processData:false,  
	                       success:function(data)  
	                       {  
	                            swal("succès!!!👌",data,"success");  
	                            $('#user_form')[0].reset();    
	                       }  
	                  });
	                 // swal("cool👌", "félicitation", "success");

	            }
	            else
	            {
	            	if (name=='') {
	            		swal("error!!!🙆", " Veillez complèter le nom","error");
	            	}
	            	if (subject=='') {
	            		swal("error!!!🙆", " Veillez complèter le sujet","error");
	            	}
	            	if (email=='') {
	            		swal("error!!!🙆", " Veillez complèter votre adresse mail","error");
	            	}
	            	if (message=='') {
	            		swal("error!!!🙆", " Veillez complèter le message","error");
	            	}
	              
	            }


	             
	      });  
	      

	 });  
    </script>
        
</body>

<!-- Mirrored from preview.colorlib.com/theme/magnews2/blog-list-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Oct 2020 20:02:10 GMT -->

</html>