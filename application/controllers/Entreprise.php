<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class entreprise extends CI_Controller
{
	private $token;
	private $connected;
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->userdata('instuctor_login'))
	  {
	      	redirect(base_url().'login');
	  }
	  $this->load->library('form_validation');
	  $this->load->library('encryption');
      // $this->load->library('pdf');
	  $this->load->model('crud_model'); 

	  $this->load->helper('url');

	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
	  $this->connected = $this->session->userdata('instuctor_login');

	  /*
	  je script pour les galeries du contrat d'expiration
	
		// $this->crud_model->show_galery_expire();
		$this->crud_model->show_galery_expire();
	  */



	}

	function index(){
		$data['title']="mon profile entreprise";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('backend/entreprise/templete_admin', $data);
  		// $this->load->view('backend/entreprise/templete_admin', $data);
	}

	

	function dashbord(){
		    $data['title']="Tableau de bord";
	      
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");

        $data['nombre_client'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

        $data['nombre_membre'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

        $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

        $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");

        $data['nombre_publicite']   = $this->crud_model->statistiques_nombre("publicite");
        $data['nombre_category']   = $this->crud_model->statistiques_nombre("category");

        $data['nombre_pub']   = $this->crud_model->statistiques_nombre("galery2");
        $data['nombre_role']   = $this->crud_model->statistiques_nombre("role");


	      $this->load->view('backend/entreprise/dashbord', $data);
	}

  function article(){
    $data['title']="Paramétrage  des articles et publication";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

    $data['articles']     = $this->crud_model->Select_articles();
    $data['categories']   = $this->crud_model->Select_category();

    $this->load->view('backend/entreprise/article', $data);  
  }



	function profile(){
      $data['title']="mon profile entreprise";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/entreprise/profile', $data);
    }

    function basic(){
        $data['title']="Information basique de mon compte";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/entreprise/notification', $data);
    }

    function client(){
		$data['title']="Paramétrage  des clients";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['entreprises']  = $this->crud_model->Select_entreprises();
		$this->load->view('backend/entreprise/client', $data);		
	}


  function publicity_personnele(){
      $data['title']="Paramétrage  des publicités";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $this->load->view('backend/entreprise/publicity_personnele', $data);  
  }

  function commentaire(){
    $data['title']="Paramétrage  des commentaire pour les articles";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

    $data['articles']     = $this->crud_model->Select_articles();
    $data['categories']   = $this->crud_model->Select_category();
    $data['articles']   = $this->crud_model->Select_artcle_orders();
    

    $this->load->view('backend/entreprise/commentaire', $data);  
  }

	  // script de client
  function fetch_client(){  

       $fetch_data = $this->crud_model->make_datatables_client();  
       $data = array();  
       foreach($fetch_data as $row)  
       {  
            $sub_array = array();  
           
            $sub_array[] = nl2br(substr($row->fullname, 0,50));
            $sub_array[] = nl2br(substr($row->tel, 0,15));
            $sub_array[] = nl2br(substr($row->email, 0,20));

            $sub_array[] = nl2br(substr($row->adresse, 0,20));

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
           

            $sub_array[] = '<button type="button" name="update" idclient="'.$row->idclient.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
            $sub_array[] = '<button type="button" name="delete" idclient="'.$row->idclient.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_client(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_client(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_client()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_client($_POST["idclient"]);  
       foreach($data as $row)  
       {  
            $output['fullname'] 	= $row->fullname;
            $output['tel'] 			= $row->tel;
            $output['email'] 		= $row->email;
            $output['adresse'] 		= $row->adresse;
            
           
       }  
       echo json_encode($output);  
  }  


  function operation_client(){

      $insert_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'     	=>     $this->input->post('tel'),
           'email'     	=>     $this->input->post('email'),
           'adresse'    =>     $this->input->post('adresse')
	  );  

      $requete=$this->crud_model->insert_client($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_client(){

      $updated_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'     	=>     $this->input->post('tel'),
           'email'     	=>     $this->input->post('email'),
           'adresse'    =>     $this->input->post('adresse')
	  );

      $this->crud_model->update_client($this->input->post("idclient"), $updated_data);
      echo("modification avec succès");
  }

  function supression_client(){

      $this->crud_model->delete_client($this->input->post("idclient"));
      echo("suppression avec succès");
    
  }

  // fin de script  client 

   // script de location
  function fetch_location(){  

       $fetch_data = $this->crud_model->make_datatables_location();  
       $data = array(); 
       $etat =''; 
       foreach($fetch_data as $row)  
       {  
            $sub_array = array(); 

            if ($row->etat == 0) {
             	$etat ='<span class="badge badge-info">innocupée</span>';
            }
            else{
            	$etat ='<span class="badge badge-success">occupée</span>';
            } 
           
            $sub_array[] = nl2br(substr($row->nom, 0,50)).' ...';
            $sub_array[] = nl2br(substr($row->fullname, 0,15)).' ...';

            $sub_array[] = nl2br(substr($row->montant, 0,20));

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));
            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23));
            $sub_array[] = $etat;

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
           

            $sub_array[] = '<button type="button" name="update" idl="'.$row->idl.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
            $sub_array[] = '<button type="button" name="delete" idl="'.$row->idl.'" idchambre="'.$row->idchambre.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_location(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_location(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_location()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_location($_POST["idl"]);  
       foreach($data as $row)  
       {  
            $output['montant'] 			= $row->montant;
            $output['idclient'] 		= $row->idclient;
            $output['idchambre'] 		= $row->idchambre;
            $output['date_debit'] 		= $row->date_debit;
            $output['date_fin'] 		= $row->date_fin;
       }  
       echo json_encode($output);  
  }  

  function fetch_single_location_2()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_location_2($_POST["idl"]);  
       foreach($data as $row)  
       {  
            $output['montant'] 			= $row->montant;
            $output['idclient'] 		= $row->idclient;
            $output['idchambre'] 		= $row->idchambre;

            $output['date_debit'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));
            $output['date_fin'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23));
           
            $output['nom'] 				= $row->nom;
            $output['fullname'] 		= $row->fullname;
            $output['adresse'] 			= $row->adresse;

            $output['tel'] 				= $row->tel;
            $output['email'] 			= $row->email;
            $output['montant'] 			= $row->montant;

       }  
       echo json_encode($output);  
  }  


  function operation_location(){

      $insert_data = array(  
           'montant'   		=>     $this->input->post('montant'),
           'idchambre'  	=>     $this->input->post('idchambre'),
           'idclient'   	=>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'    	=>     $this->input->post('date_fin')
	  );  

      $requete=$this->crud_model->insert_location($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_location(){

      $updated_data = array(  
           'montant'   		=>     $this->input->post('montant'),
           'idchambre'  	=>     $this->input->post('idchambre'),
           'idclient'   	=>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'    	=>     $this->input->post('date_fin')
	  );

      $this->crud_model->update_location($this->input->post("idl"), $updated_data);
      echo("modification avec succès");
  }

  function supression_location(){

  		$idchambre = $this->input->post('idchambre');
  		if ($idchambre !='') {
  			
  			$updated_data = array(  
	           'etat'   =>     0
			);

		    $this->crud_model->update_chambre($idchambre, $updated_data);
  		}

      $this->crud_model->delete_location($this->input->post("idl"));
      echo("suppression avec succès");
    
  }

  // fin de script  location 

  function modification_panel($param1='', $param2='', $param3=''){

      if ($param1="option1") {
         $data = array(
            'first_name'        => $this->input->post('first_name'),
            'last_name'       => $this->input->post('last_name'),
            'telephone'       => $this->input->post('telephone'),
            'full_adresse'      => $this->input->post('full_adresse'),
            'biographie'        => $this->input->post('biographie'),
            'date_nais'       => $this->input->post('date_nais'),
            'sexe'          => $this->input->post('sexe'),
            'email'         => $this->input->post('mail_ok'), 

            'facebook'        => $this->input->post('facebook'),
            'linkedin'        => $this->input->post('linkedin'),
            'twitter'         => $this->input->post('twitter')
        );

        $id_user= $this->connected;
        $query = $this->crud_model->update_crud($id_user, $data);
        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
         redirect('entreprise/basic', 'refresh');
      }

  }

  function modification_photo(){

     $id_user= $this->connected;
     if ($_FILES['user_image']['size'] > 0) {
       # code...
        $data = array(
          'image'     => $this->upload_image()
        );
       $query = $this->crud_model->update_crud($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('entreprise/basic_image', 'refresh');

     }
     
  }


  function upload_image()  
  {  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/photo/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }

  function modification_account($param1=''){
       $id_user= $this->connected;
       $first_name;

       $passwords = md5($this->input->post('user_password_ancien'));
       
       $users = $this->db->query("SELECT * FROM users WHERE passwords='".$passwords."' AND id='".$id_user."' ");

       if ($users->num_rows() > 0) {
          
          foreach ($users->result_array() as $row) {
            $first_name = $row['first_name'];
            // echo($first_name);
             $nouveau   =  $this->input->post('user_password_nouveau');
             $confirmer =  $this->input->post('user_password_confirmer');
             if ($nouveau == $confirmer) {
              $new_pass= md5($nouveau);

              $data = array(
                  'passwords'  => $new_pass
                );

                 $query = $this->crud_model->update_crud($id_user, $data);
                 $this->session->set_flashdata('message', 'votre clée de sécurité a été changer avec succès '.$first_name);
                   redirect('entreprise/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('entreprise/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('entreprise/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {
	  	$this->session->set_flashdata('message', 'suppression avec succès ');
	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('entreprise/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('entreprise/message/'.$param2);
	  }
	  else{

	  }

  }


  function upload_galery2()
   {
      sleep(3);
      if($_FILES["files"]["name"] != '')
      {
       $output = '';
       $config["upload_path"] = './upload/galery/';
       $config["allowed_types"] = 'gif|jpg|png|webp';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
       {
        $extension = explode('.', $_FILES["files"]["name"][$count]);  
        $new_name = rand() . '.' . $extension[1];

        $_FILES["file"]["name"] = $new_name;
        $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
        $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
        $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
        $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

        // echo($_FILES["files"]["name"][$count]).'<br>';
        // echo($new_name).PHP_EOL;


        if($this->upload->do_upload('file'))
        {
         $data = $this->upload->data();

         $insert_data = array(  
             'image'         =>     $new_name              
         ); 
         $requete=$this->crud_model->insert_galery2($insert_data);

         $output .= '
         <div class="col-md-3" align="center" style="margin-bottom:24px;">
          <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
            <br />
            <input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
         </div>
         ';
        }
       }
       echo $output;   
      }
   }

   // pagination contact 
    function pagination_galery_member2()
    {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_galery_personnel();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_details_pagination_galery2($config["per_page"], $start)
    );
    echo json_encode($output);
    }

    function supression_photo_galery_personnele(){

      $this->crud_model->delete_photo_galery_personnele($this->input->post("idg"));
      echo("suppression avec succès");

    }

    function modification_galery_entrep_personnele(){
  
          $updated_data = array(  
                 'url'            =>     $this->input->post('url')
          );
  
          $this->crud_model->update_galery_entrep_personnele($this->input->post("idg"), $updated_data);
          echo("modification avec succès");
      }

    function fetch_single_galery_entrep_personnele()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_galery_entreprise_personnele($_POST["idg"]);  
         foreach($data as $row)  
         {  
              $output['url']    = $row->url;  
              
             
         }  
         echo json_encode($output);  
    }

    function download_photo_galery()
   {
      if($this->input->post('images'))
      {
        $this->load->library('zip');
        $images = $this->input->post('images');
        foreach($images as $image)
        {
          $this->zip->read_file($image);
          // echo($image);
        }
        $this->zip->download(''.time().'.zip');
      }
   }


      // script de article
   function fetch_article(){  

         $fetch_data = $this->crud_model->make_datatables_article();  
         $data = array();  
         $etat = '';
         foreach($fetch_data as $row)  
         {  
              $sub_array = array(); 

              if ($row->type=='texte') {
                $etat = '
              <div class="user-avatar bg-dim-primary d-none d-sm-flex text-center">
                  <span><i class="fa fa-file text-primary" ></i></span>
              </div>
               ';
              }
              elseif ($row->type=='video'){
                $etat = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera text-primary"></i></span>
                    </div>
                ';
              }
              else{

                $etat = '';
              }


              $sub_array[] = $etat;
             
              // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
              $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
              $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

              $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

              $sub_array[] = nl2br(substr($row->type, 0,15)).'';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

             
              $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-primary btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

              $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
              
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }


    function fetch_article_pub(){  

         $fetch_data = $this->crud_model->make_datatables_article();  
         $data = array();  
         $etat = '';
         foreach($fetch_data as $row)  
         {  
              $sub_array = array(); 

              if ($row->type=='texte') {
                $etat = '
              <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                  <span><i class="fa fa-file text-primary" ></i></span>
              </div>
               ';
              }
              elseif ($row->type=='video'){
                $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-primary"></i></span>
                  </div>
              ';
              }
              else{

                $etat = '';
              }


              $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

              // $sub_array[] = $etat;
             
              $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-primary  d-sm-flex" width="50" height="35" />';  
              $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
              $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

              $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

              $sub_array[] = nl2br(substr($row->type, 0,15)).'';

              // $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

             
              $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

              $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
              
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }



    function operation_article(){

        if($_FILES["user_image"]["size"] > 0)  
        {  
             $insert_data = array(  
                 'nom'            =>     $this->input->post('nom'),  
                 'description'    =>     htmlspecialchars($this->input->post("description")),
                 'lien'           =>     $this->input->post("lien"),
                 'idcat'          =>     $this->input->post('idcat'), 
                 'type'           =>     $this->input->post('type'), 
                 'image'          =>     $this->upload_image_article()
              );    
        }  
        else  
        {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
                 'nom'            =>     $this->input->post('nom'),  
                 'description'    =>     htmlspecialchars($this->input->post("description")),
                 'lien'           =>     $this->input->post("lien"),
                 'idcat'          =>     $this->input->post('idcat'), 
                 'type'           =>     $this->input->post('type'),
                 'image'          =>     $user_image
              );   
        }

      $requete=$this->crud_model->insert_article($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_article(){

        if($_FILES["user_image"]["size"] > 0)  
        {  
             $updated_data = array(  
                 'nom'            =>     $this->input->post('nom'),  
                 'description'    =>     htmlspecialchars($this->input->post("description")),
                 'lien'           =>     $this->input->post("lien"),
                 'idcat'          =>     $this->input->post('idcat'), 
                 'type'           =>     $this->input->post('type'), 
                 'image'          =>     $this->upload_image_article()
              );    
        }  
        
        else  
        {   
             $updated_data = array(  
                 'nom'          =>     $this->input->post('nom'),  
                 'description'    =>     htmlspecialchars($this->input->post("description")),
                 'lien'           =>     $this->input->post("lien"),
                 'idcat'          =>     $this->input->post('idcat'), 
                 'type'           =>     $this->input->post('type')
              );   
        }

        
        $this->crud_model->update_article($this->input->post("idart"), $updated_data);

        echo("modification avec succès");
    }

    function supression_article(){

        $this->crud_model->delete_article($this->input->post("idart"));
        echo("suppression avec succès");
      
    }

    function fetch_single_article()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_article($this->input->post('idart'));  
         foreach($data as $row)  
         {  
              $output['nom'] = $row->nom;  
              $output['description'] = $row->description; 

              $output['lien']   = $row->lien;
              $output['type']   = $row->type;
              $output['idcat']  = $row->idcat;
              
              $output['image']  = $row->image;
              $output['text_description']   ='
                <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l\'article">
                    '.$row->description.'
                </textarea>
              ';


              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  

              
         }  
         echo json_encode($output);  
    }

    function upload_image_article()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/article/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

  // fin de sript article 

      // fin de sript article 

  function pagination_view_article($param1='')
  {
    $limit = $param1;
    if ($limit !='') {
      $output = $this->crud_model->fetch_details_view_articles_limit($limit);
    }
    else{
      $output = $this->crud_model->fetch_details_view_articles();
    }
    
    echo($output);
  }

  function fetch_search_view_article()
  {
    $output = '';
    $query = '';
    $etat = '';
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->crud_model->fetch_data_search_view_article($query);
   $output .= '
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
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-primary" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-primary"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nom_cat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idart="'.$row->idart.'" class="btn btn-primary btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
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
          
      </table>';

      echo($output);
    
  }

  
   /**
   * commentaires des articles de publications
   ===============================================
   *===============================================
   *

   */

    function operation_commentaire(){

      $insert_data = array(  
           'etape1'       =>     htmlspecialchars($this->input->post('etape1')),  
           'etape2'       =>     htmlspecialchars($this->input->post("etape2")),
           'idart'          =>     $this->input->post("idart")
        ); 

      $requete=$this->crud_model->insert_commentaire($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_commentaire(){

      $updated_data = array(  
            'etape1'      =>     htmlspecialchars($this->input->post('etape1')),  
        'etape2'      =>     htmlspecialchars($this->input->post("etape2")),
        'idart'         =>     $this->input->post("idart")
        );

      $this->crud_model->update_commentaire($this->input->post("idcomment"), $updated_data);

      echo("modification avec succès");
    }

    function supression_commentaire(){

        $this->crud_model->delete_commentaire($this->input->post("idcomment"));
        echo("suppression avec succès");
      
    }

    function fetch_single_commentaire()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_commentaire($this->input->post('idcomment'));  
         foreach($data as $row)  
         {  
              $output['etape1'] = $row->etape1;  
              $output['etape2'] = $row->etape2; 
              $output['idart']  = $row->idart;

              $output['nom']  = $row->nom;

              $output['description']  = substr(nl2br(html_entity_decode($row->description)), 100) .'...';

              $output['text_description']   ='
                <textarea class="form-control textarea" name="etape1" id="etape1" >
                    '.$row->etape1.'
                </textarea>
              ';

              $output['text_description2']   ='
                <textarea class="form-control textarea" name="etape2" id="etape2">
                    '.$row->etape2.'
                </textarea>
              ';
              

              $output['image']  = $row->image;
              
              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
         }  
         echo json_encode($output);  
    }

  function pagination_view_commentaire($param1='')
  {
    $limit = $param1;
    if ($limit !='') {
      $output = $this->crud_model->fetch_details_view_commentaire_limit($limit);
    }
    else{
      $output = $this->crud_model->fetch_details_view_commentaire();
    }
    
    echo($output);
  }

  function fetch_search_view_commentaire()
  {
    $output = '';
    $query = '';
    $etat = '';
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->crud_model->fetch_data_search_view_commentaire($query);
   $output .= '
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
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-primary" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-primary"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nomcat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idcomment="'.$row->idcomment.'" class="btn btn-primary btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idcomment="'.$row->idcomment.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
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
          
      </table>';

      echo($output);
    
  }

      













}