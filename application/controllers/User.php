<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
class user extends CI_Controller
{
	private $token;
	private $connected;
	protected $numeros_sites;

	public function __construct()
	{
	 	  parent::__construct();
		  if(!$this->session->userdata('id'))
		  {
		      	redirect(base_url().'login');
		  }
		  $this->load->library('form_validation');
		  $this->load->library('encryption');
	      // $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('id');
		  $this->numeros_sites = $this->crud_model->get_telephone_du_site();
	}

	// envois sms avec api 
	public function sendsms_users(){
		$this->load->helper('sendsms_helper');
		$envoie = sendsms('0970524665', 'Hello world, this is a test message');
	}
	// fin envoie 


	public function index(){
		$data["title"] = "Accueil vous soit doux!";  
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected);
		$this->load->view('backend/user/home', $data);
	}

	public function dashbord(){
		$data["title"] = "Accueil vous soit doux!";  
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected);
		$this->load->view('backend/user/home', $data);
	}

	public function shop(){
		$data["title"] = "Shop de notre boutique";  
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		
		$this->load->view('backend/user/shop', $data);
	}

	public function recent_lot(){
		$data["title"] = "Shop de notre boutique"; 
		$data['users'] = $this->crud_model->fetch_connected($this->connected); 
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		
		$this->load->view('backend/user/recent_lot', $data);
	}

	public function detailProduct($param1){
		$title_product = $this->crud_model->get_name_article_tag($param1);
		$data['title'] = "Détail de ".$title_product; 
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		$data['donnees'] = $this->crud_model->filtre_de_donnees_produit_tag($param1);
		$this->load->view('backend/user/detailProduct', $data);
	}

	public function checkout(){

		$data["title"] = "Finaliser votre paiement".rand(); 
		$data['users'] = $this->crud_model->fetch_connected($this->connected); 
		$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		$this->load->view('backend/user/checkout', $data);

	}

	public function contact(){
		$data["title"] = "Contact pour information!";  
		$data['users'] = $this->crud_model->fetch_connected($this->connected); 
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		$this->load->view('backend/user/contact', $data);
	}

	/*

	LES SCRIPTS POUR LA GESTION DES DONNEES DES UTILISATEURS 
	=================================================================
	USER INTERFACE
	*****************************************************************
	*/

	function profile(){
      $data['title']="mon profile admin";
      $data['users'] = $this->crud_model->fetch_connected($this->connected); 

	  $data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
	  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	  $data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
	  $data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
	  $data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();

      $this->load->view('backend/user/profile', $data);
    }

    function basic(){
          $data['title']="Information basique de mon compte";
          $data['users'] = $this->crud_model->fetch_connected($this->connected); 

		  $data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		  $data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		  $data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		  $data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();

        $this->load->view('backend/user/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['users'] = $this->crud_model->fetch_connected($this->connected); 

		$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();

        $this->load->view('backend/user/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected); 

		$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
        $this->load->view('backend/user/basic_secure', $data);
    }

    function notification($param1=''){
        $data['title']    ="Mes notifications";
        $data['users'] = $this->crud_model->fetch_connected($this->connected); 

		$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
      $this->load->view('backend/user/notification', $data);
    }

    function favory(){
    	$data['title']    ="Ma Liste favorite";
    	$data['users'] = $this->crud_model->fetch_connected($this->connected); 

		$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
		$this->load->view('backend/user/favory', $data);
    }

    function achat(){
          $data['title']="Information basique de mon compte";
          $data['users'] = $this->crud_model->fetch_connected($this->connected); 
          $data['mes_ventes'] = $this->crud_model->fetch_connected_vente($this->connected); 

		  $data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
		  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		  $data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
		  $data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
		  $data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();

        $this->load->view('backend/user/achat', $data);
    }


    /*

	    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI Ecommerce
	    MES SCRIPTS EcommerceB COMMENCE DEJE
	    ========================================================
	    */


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
	         redirect('user/basic', 'refresh');
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
	           redirect('user/basic_image', 'refresh');
	     }
	     else{

	        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
	        redirect('user/basic_image', 'refresh');

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
	                   redirect('user/basic_secure', 'refresh');

	               }
	               else{
	   
	                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
	                redirect('user/basic_secure', 'refresh');
	               }
	         
	          }

	       }
	       else{

	          $this->session->set_flashdata('message2', 'information incorecte');
	          redirect('user/basic_secure', 'refresh');
	       }
	     
	  } 

	  function view_1($param1='', $param2='', $param3=''){
	      
		  if($param1=='display_delete') {
		  	$this->session->set_flashdata('message', 'suppression avec succès ');
		    $query = $this->crud_model->delete_notifacation_tag($param2);
		    redirect('user/notification');
		  }

		  if($param1=='display_delete_favory') {
		  	$this->session->set_flashdata('message', 'suppression avec succès ');
		    $query = $this->crud_model->delete_favory_tag($param2);
		    redirect('user/favory');
		  }

		  if($param1=='display_delete_vente') {
		  	$this->session->set_flashdata('message', 'suppression avec succès ');
		    $query = $this->crud_model->delete_favory_vente($param2);
		    redirect('user/achat');
		  }


		  if($param1=='display_delete_message') {

		    $query = $this->crud_model->delete_message_tag($param3);
		    redirect('user/message/'.$param2);
		  }
		  else{

		  }

	  }














	/*

	LES SCRIPTS POUR LA GESTION D'AFFICHAGE DE PRODUITS COMMENCENTS
	=================================================================
	USER INTERFACE
	*************

	*/
	// Ajout de paiement  
	function add_paiement($param1 =''){

	  	$identrep = $param1;
	  	$montant = $this->input->post('montant');
	  	$token = $this->input->post('token');
	  	$token_rand = rand().'-'.$token;
	  	$net_payer = $this->crud_model->calcul_net_apayer($this->connected);

	  	if ($montant  < $net_payer) {
	  		
	  		$data["title"] = "Finaliser votre paiement"; 
			$data['users'] = $this->crud_model->fetch_connected($this->connected); 
			$data['net_payer'] = $this->crud_model->calcul_net_apayer($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['nombreProduitsPanier'] = $this->crud_model->fetch_number_Panier_connected($this->connected); 
			$data['nomProduit'] = $this->crud_model->filtre_de_nom_Category_produit();
			$data['nomCat'] = $this->crud_model->filtre_de_cat_Category_produit();
			$this->session->set_flashdata('message2', 'Erreur!!!🙆 <br>
				Le montant envoyé doit être égale à '.$net_payer);
			$this->load->view('backend/user/checkout', $data);
	  	}
	  	else{

		  	if ($identrep !='' && $token !='') {

		  		$insertdata = array(
		  			'first_name'      => $this->input->post('first_name'),
		  			'last_name'       => $this->input->post('last_name'),
		  			'email'     	  => $this->input->post('email'),
		  			'telephone'       => $this->input->post('telephone'),
		  			'adresse1'     	  => $this->input->post('adresse1'),
		  			'adresse2'     	  => $this->input->post('adresse2'),

			        'idpersonne'      => $this->connected,
			        'date_paie'       => date('Y-m-d'),
			        'montant'         => $this->input->post('montant'),
			        'motif'     	  => $this->input->post('motif'),
			        'token'      	  => $token_rand
			    );

		  	   // envoie de notifications 
			   $id_user= $this->connected;
			   $query = $this->crud_model->insert_paiement_pading($insertdata);
			   if($query > 0)
			   {

			   		// enregistrement vente en attente 
				   	    $produit = $this->crud_model->detail_cart($this->connected);
				        if ($produit->num_rows() > 0) {
				          $code = $token;
				          $nom_client;

				            foreach ($produit->result_array() as $key) {
				                $idc = $key['idc'];
				                $product_id = $key['product_id'];
				                $product_name = $key['product_name'];
				                $quantity = $key['quantity'];
				                $product_price = $key['product_price'];
				                $product_priceTotal = $key['product_priceTotal'];
				                $product_image = $key['product_image'];
				                $user_id = $key['user_id'];
				                $code = $code;

				                $data = array(
				                  
				                  'product_id'      =>  $product_id,
				                  'product_name'      =>  $product_name,
				                  'quantity'        =>  $quantity,
				                  'product_price'     =>  $product_price,
				                  'product_priceTotal'  =>  $product_priceTotal,
				                  'product_image'     =>  $product_image,
				                  'user_id'       =>  $user_id,
				                  'code'          =>  $code
				                );

				                // confirmation de vente en attante
				                $vente = $this->crud_model->insert_pading_vente($data);
				                // suppression dans le panier
				                $del = $this->crud_model->suppression_produit_cart($idc);
				                // var_dump($data);

				            }


				          /*
				          confirmation de paiement
				          =========================
				          $this->session->set_flashdata("message", "Félicitation votre paiement a bien reussi avec succès vous recevrez une facture de paiement dans un instant!!!🆗🆗🆗");
				          redirect('user/checkout','refresh');
				          */


				        }
				        else{
				          $this->session->set_flashdata("message2", "Tentative de hacking, attention!!!🙆🙆🙆");
				          redirect('user/checkout','refresh');
				        }

			   	    // fin enregistrement vente



			        $users_cool = $this->crud_model->get_info_user();
			        foreach ($users_cool as $key) {

			        	
			            $id_user_recever = $key['id'];

			            if ($key['idrole'] == 1) {
			            	$url ="admin/paiement_pading/".$token_rand;
			                $nom = $this->crud_model->get_name_user($id_user);
			                // $nom = $this->input->post('titre');
			                $message ="Nouvelle tentative de paiement ".$nom." vient de tenter de confirmer  son paiement";

			                $notification = array(
			                  'titre'     =>    "Tentative de paiement",
			                  'icone'     =>    "fa fa-money",
			                  'message'   =>     $message,
			                  'url'       =>     $url,
			                  'id_user'   =>     $id_user_recever
			                );
			                
			                $not = $this->crud_model->insert_notification($notification);

			            }
			            elseif ($key['idrole'] == 3) {
			            	$url ="entreprise/paiement_pading/".$token_rand;
			                $nom = $this->crud_model->get_name_user($id_user);
			                // $nom = $this->input->post('titre');
			                $message ="Nouvelle tentative de paiement ".$nom." vient de tenter de confirmer  son paiement";

			                $notification = array(
			                  'titre'     =>    "Tentative de paiement",
			                  'icone'     =>    "fa fa-money",
			                  'message'   =>     $message,
			                  'url'       =>     $url,
			                  'id_user'   =>     $id_user_recever
			                );
			                
			                $not = $this->crud_model->insert_notification($notification);

			            }
			            else{

			            }

			            # code...
			        }

			        $this->session->set_flashdata('message', "votre paiement a été mis à jour avec succès!!!🆗 c'est encore en attente de vérification par l'administrateur du système. <br/> pour toute contestation appeler ce numéro ".$this->numeros_sites);
				    redirect('user/checkout','refresh');
			   }
			   else{
			   	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
				     redirect('user/checkout','refresh');
			   }
			   // fin envoies des notifications

		  	}
		  	else{
		  		$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
		  		redirect('user/checkout','refresh');
		  	}
	  	}
	
	}
	// fin paiement

	
	


	// pagination information sur les produits
    function pagination_product()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_product();
	  $config["per_page"] = 12;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination justify-content-center justify-content-lg-begin">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><span aria-hidden="true" class="page-link">»</span>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><span aria-hidden="true" class="page-link">«</span>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item page-link'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_product($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}
    // fin pagination


	// recherche de formations des produits
	function fetch_search_product_pagination()
	{
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_product_to_lean($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			    $output .= '
			     <div class="col-xl-3 col-lg-4 col-sm-6">
		          <div class="product text-center">
		            <div class="position-relative mb-3">
		              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
		              <div class="product-overlay">
		                <ul class="mb-0 list-inline">
		                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
		                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li>
		                  <li class="list-inline-item m-0 p-0">
		                   <a class="btn btn-sm btn-dark add_cart" 
		                      data-productname="'.$row->product_name.'" 
		                      data-price="'.$row->product_price.'" 
		                      data-productid="'.$row->product_id.'" 
		                      data-product_image="'.$row->product_image.'"  
		                      Qte="'.$row->Qte.'"
		                      href="javascript:void(0);">
		                    Ajouter au panier
		                    </a></li>
		                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
		                </ul>
		              </div>
		            </div>
		            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
		            <p class="small text-muted">'.$row->product_price.'$</p>
		          </div>
		        </div>
			    ';
			   }
		  }
		  else
		  {
		  		$output .= '
		  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>

		  		 <div class="col-xl-6 col-lg-4 col-sm-6">
		  		 <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 100;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true" style="border-radius: 100px;">
		  		 </div>
		  		
		  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>

			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;
	}



	// pagination information sur les produits
    function pagination_product_shop()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_product();
	  $config["per_page"] = 12;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination justify-content-center justify-content-lg-begin">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><span aria-hidden="true" class="page-link">»</span>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><span aria-hidden="true" class="page-link">«</span>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item page-link'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_product_shop($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}
    // fin pagination


	// recherche de formations des produits
	function fetch_search_product_pagination_shop()
	{
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_product_to_lean($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			    $output .= '
			    <div class="col-lg-4 col-sm-6">
		          <div class="product text-center">
		            <div class="position-relative mb-3">
		              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
		              <div class="product-overlay">
		                <ul class="mb-0 list-inline">
		                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
		                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
		                  <li class="list-inline-item m-0 p-0">
		                   <a class="btn btn-sm btn-dark add_cart" 
		                      data-productname="'.$row->product_name.'" 
		                      data-price="'.$row->product_price.'" 
		                      data-productid="'.$row->product_id.'" 
		                      data-product_image="'.$row->product_image.'" 
		                      Qte="'.$row->Qte.'"
		                      href="javascript:void(0);">
		                    + Au panier
		                    </a></li>
		                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
		                </ul>
		              </div>
		            </div>
		            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
		            <p class="small text-muted">'.$row->product_price.'$</p>
		          </div>
		        </div>
			    ';
			   }
		  }
		  else
		  {
		  		$output .= '
		  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>

		  		 <div class="col-xl-6 col-lg-4 col-sm-6">
		  		 <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 100;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true" style="border-radius: 100px;">
		  		 </div>
		  		
		  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>

			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;
	}


	// ajouter au panier 
	function add_cart()
	{

	  	$data = array(
		   "product_id"  			=> $_POST["product_id"],
		   "product_name"  			=> $_POST["product_name"],
		   "quantity"  				=> $_POST["quantity"],
		   "product_price"  		=> $_POST["product_price"],
		   "product_priceTotal"  	=> $_POST["product_priceTotal"],
		   "product_image"  		=> $_POST["product_image"],
		   "user_id"				=> $this->connected
		);
		$this->crud_model->insert_to_cart($data); //return rowid 
	    echo $this->view_cart();
	}

	function load_cart()
	{
	  echo $this->view_cart();
	}

	function remove_product_to_cart()
	{
		  $idc = $this->input->post("idc");
		  $this->crud_model->suppression_produit_cart($idc);
		  echo $this->view_cart();
	}

	function clear_my_card()
	{
	  	$this->crud_model->vide_suppression_produit_cart($this->connected);
		echo $this->view_cart();
	}


	function view_cart()
	{

	  $output = '';
	  
	  $count = 0;
	  $net_apayer 	= $this->crud_model->calcul_net_apayer($this->connected);
	  $produit 		= $this->crud_model->detail_cart($this->connected);
	  if ($produit->num_rows() > 0) {

	  	  $output .= '
			  <div class="table-responsive mb-4">
			   <div align="right">
			    <button type="button" id="clear_cart" class="btn btn-dark btn-sm" style="border-radius:10%;"><i class="fa fa-trash"></i> Vide la carte</button>
			   </div>
			   <br />
			   <table class="table panier_table" id="panier_table">
			   <thead class="bg-light">
				    <tr>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Image</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Nom du produit</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Quantité</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Prix</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Prix total</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Action</strong>
				     </th>
				    
				    </tr>
			    </thead>
			    <tbody>

		  ';

	  	  foreach($produit->result_array() as $items)
		  {
			   $count++;
			   $output .= '
			   <tr> 
			   	<td class="align-middle border-0"><img src="'.base_url().'upload/product/'.$items["product_image"].'" class="img-thumbnail" width="40" height="30" /></td>
			    <td class="align-middle border-0">'.$items["product_name"].'</td>
			    <td class="align-middle border-0"> 

			    <!--<input type="number" min="1" name="" value="'.$items["quantity"].'" class="form-control" placeholder="La quantité"> -->
			     '.$items["quantity"].'
			     </td>
			    <td class="align-middle border-0">'.$items["product_price"].'$</td>
			    <td class="align-middle border-0">'.$items["product_priceTotal"].'$</td>
			    <td class="align-middle border-0"><button type="button" name="remove" class="btn btn-dark btn-sm remove_inventory" style="border-radius:50%;" id="'.$items["idc"].'"><i class="fa fa-trash"></i></button></td>
			   </tr>
			   ';
		  }
		  $output .= '
			   <tr>
			    <td colspan="5" align="right" class="align-middle border-0">Total</td>
			    <td class="align-middle border-0">'.$net_apayer.'$</td>
			   </tr>
			   </tbody>
			  </table>

			  </div>

			  <div class="col-md-12 col-xl-12 col-sm-12">

			  	<div class="bg-light px-4 py-3">
	                <div class="row align-items-center text-center">
	                  <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm shop_show" href="javascript:void(0);"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continuer pour panier</a></div>
	                  <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="'.base_url().'user/checkout">Proceder au paiement<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
	                </div>
	            </div>

			  </div>
		  ';

		  
	  }
	  else{

	  	$output .= '
	   		<div class="col-xl-3 col-lg-4 col-sm-6"></div>

	  		 <div class="col-xl-6 col-lg-4 col-sm-6">
	  		 <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 100;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true" style="border-radius: 100px;">
	  		 </div>
	  		
	  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>
	   ';

	  }
	  
  	 return $output;
	}

	// appell showVente
	function showVente()
	{
		$user_id = $this->input->post("user_id");
		$code = $this->input->post("code");
	    echo $this->affichage_view_cart_padding_vente($user_id, $code);
	}

	// affichage des ventes en attente
	function affichage_view_cart_padding_vente($user_id, $code)
	{

	  $output = '';
	  
	  $count = 0;
	  $net_apayer 	= $this->crud_model->padding_vente_calcul_net_apayer($user_id, $code);
	  $produit 		= $this->crud_model->padding_vente_detail_cart($user_id, $code);
	  if ($produit->num_rows() > 0) {

	  	  $output .= '
			  <div class="table-responsive mb-4">
			  
			   <br />
			   <table class="table panier_table" id="panier_table">
			   <thead class="bg-light">
				    <tr>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Image</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Nom du produit</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Quantité</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Prix</strong>
				     </th>
				     <th class="border-0" scope="col">
				     	<strong class="text-small text-uppercase">Prix total</strong>
				     </th>
				     
				    
				    </tr>
			    </thead>
			    <tbody>

		  ';

	  	  foreach($produit->result_array() as $items)
		  {
			   $count++;
			   $output .= '
			   <tr> 
			   	<td class="align-middle border-0"><img src="'.base_url().'upload/product/'.$items["product_image"].'" class="img-thumbnail" width="40" height="30" /></td>
			    <td class="align-middle border-0">'.$items["product_name"].'</td>
			    <td class="align-middle border-0"> 

			    <!--<input type="number" min="1" name="" value="'.$items["quantity"].'" class="form-control" placeholder="La quantité"> -->
			     '.$items["quantity"].'
			     </td>
			    <td class="align-middle border-0">'.$items["product_price"].'$</td>
			    <td class="align-middle border-0">'.$items["product_priceTotal"].'$</td>
			    
			   </tr>
			   ';
		  }
		  $output .= '
			   <tr>
			    <td colspan="4" align="right" class="align-middle border-0">Total</td>
			    <td class="align-middle border-0">'.$net_apayer.'$</td>
			   </tr>
			   </tbody>
			  </table>

			  </div>

			  
		  ';

		  
	  }
	  else{

	  	$output .= '
	   		<div class="col-xl-3 col-lg-4 col-sm-6"></div>

	  		 <div class="col-xl-6 col-lg-4 col-sm-6">
	  		 <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 100;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true" style="border-radius: 100px;">
	  		 </div>
	  		
	  		 <div class="col-xl-3 col-lg-4 col-sm-6"></div>
	   ';

	  }
	  
  	 return $output;
	}
	// fin affichage des ventes en attente


	// affichage de produits par id 
	function view_all_product_by_cat_product_id(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('brand'))
		  {
		   $query = $this->input->post('brand');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_search_product_by_product_id($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			    $output .= '
			       <div class="col-lg-4 col-sm-6">
			          <div class="product text-center">
			            <div class="position-relative mb-3">
			              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
			              <div class="product-overlay">
			                <ul class="mb-0 list-inline">
			                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
			                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
			                  <li class="list-inline-item m-0 p-0">
			                   <a class="btn btn-sm btn-dark add_cart" 
			                      data-productname="'.$row->product_name.'" 
			                      data-price="'.$row->product_price.'" 
			                      data-productid="'.$row->product_id.'" 
			                      data-product_image="'.$row->product_image.'" 
			                      Qte="'.$row->Qte.'"
			                      href="javascript:void(0);">
			                    + Au panier
			                    </a></li>
			                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
			                </ul>
			              </div>
			            </div>
			            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
			            <p class="small text-muted">'.$row->product_price.'$</p>
			          </div>
			        </div>

			    ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="media text-muted pt-3">
			          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
			          
			        </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	 }

	 // affichage de produits par category_id 
	function view_all_product_by_cat_category_id(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('brand'))
		  {
		   $query = $this->input->post('brand');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_search_product_by_category_id($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			    $output .= '
			       <div class="col-lg-4 col-sm-6">
			          <div class="product text-center">
			            <div class="position-relative mb-3">
			              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
			              <div class="product-overlay">
			                <ul class="mb-0 list-inline">
			                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
			                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
			                  <li class="list-inline-item m-0 p-0">
			                   <a class="btn btn-sm btn-dark add_cart" 
			                      data-productname="'.$row->product_name.'" 
			                      data-price="'.$row->product_price.'" 
			                      data-productid="'.$row->product_id.'" 
			                      data-product_image="'.$row->product_image.'" 
			                      Qte="'.$row->Qte.'"
			                      href="javascript:void(0);">
			                    + Au panier
			                    </a></li>
			                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
			                </ul>
			              </div>
			            </div>
			            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
			            <p class="small text-muted">'.$row->product_price.'$</p>
			          </div>
			        </div>

			    ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="media text-muted pt-3">
			          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
			          
			        </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	 }

	  // affichage de produits par prix 
	function view_all_product_by_cat_product_price(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('brand'))
		  {
		   $query = $this->input->post('brand');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_search_product_by_product_price($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			    $output .= '
			       <div class="col-lg-4 col-sm-6">
			          <div class="product text-center">
			            <div class="position-relative mb-3">
			              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
			              <div class="product-overlay">
			                <ul class="mb-0 list-inline">
			                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
			                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
			                  <li class="list-inline-item m-0 p-0">
			                   <a class="btn btn-sm btn-dark add_cart" 
			                      data-productname="'.$row->product_name.'" 
			                      data-price="'.$row->product_price.'" 
			                      data-productid="'.$row->product_id.'" 
			                      data-product_image="'.$row->product_image.'" 
			                      Qte="'.$row->Qte.'"
			                      href="javascript:void(0);">
			                    + Au panier
			                    </a></li>
			                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
			                </ul>
			              </div>
			            </div>
			            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
			            <p class="small text-muted">'.$row->product_price.'$</p>
			          </div>
			        </div>

			    ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="media text-muted pt-3">
			          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
			          
			        </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	 }


    /*
      favorie
     =======================
     */
	// ajouter au panier 
	function add_favories()
	{

		$favory = $this->crud_model->verification_favory($this->connected, $_POST["product_id"]);
		if ($favory->num_rows() > 0) {
			# code...
		}
		else{

		  	$data = array(
			   "product_id"  			=> $_POST["product_id"],
			   "id_user"				=> $this->connected
			);
			$this->crud_model->insert_to_favories($data);  
		}
	}

	// voir les données modales 
	function fetch_single_article_modal()  
	{  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_to_modal($_POST["product_id"]);  
	       foreach($data as $row)  
	       {  
	            $output['product_name']     = $row->product_name;  
	            $output['product_price']      = $row->product_price.'$'; 
	            $output['product_image']       = $row->product_image; 

	            $output['Qte']      = $row->Qte; 
	            $output['nom']     = $row->nom; 
	            

	            if($row->product_image != '')  
	            {  
	                 $output['user_image'] = '

	                 <a class="product-view d-block h-100 bg-cover bg-center" style="background: url('.base_url().'upload/product/'.$row->product_image.')" href="'.base_url().'upload/product/'.$row->product_image.'" data-lightbox="productview" title="'.$row->product_name.' - '.$row->nom.'"></a>';

	                 $output['number'] =' 

		                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>

	                    <input class="form-control border-0 shadow-0 p-0 qty" type="number" min="1" value="1" id="'.$row->product_id.'" max="'.$row->Qte.'">

	                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
	                 ';

	                 $output['action_to_do'] =' 

		                <a class="btn btn-dark btn-sm btn-block h-50 d-flex align-items-center justify-content-center px-0 add_cart" 
		                  data-productname="'.$row->product_name.'" 
	                      data-price="'.$row->product_price.'" 
	                      data-productid="'.$row->product_id.'" 
	                      data-product_image="'.$row->product_image.'" 
	                      Qte="'.$row->Qte.'"

		                href="javascript:void(0);">Ajouter au panier</a>
		                <hr>

                    	<a class="btn btn-link text-dark p-0 add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart mr-2" ></i>Ajouter sur la  favorite</a>
	                 ';


	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	       }  
	       echo json_encode($output);  
	} 

	// voir galery photos 
	function fetch_single_galery_photo()  
	{  
	       $output = array();
	       $chart_data = ''; 
	       $data = $this->crud_model->fetch_single_galery_to_modal($_POST["product_id"] );  
	       foreach($data as $row)  
	       {  
	           

	            if($row->photos != '')  
	            {  

	            	$chart_data .=' 
	            		<a class="d-none" href="'.base_url().'upload/product/galery/'.$row->photos.'" title="'.$row->product_name.'" data-lightbox="productview"></a>
	            	';
	            }  
	            else  
	            {  
	                 
	            }  

	       }
	       echo($chart_data);
	}  

	// voir product rand  
	function fetch_single_rand_product()  
	{  
	       $output = array();
	       $chart_data = ''; 
	       $img1 = $this->crud_model->fetch_single_rand_pro_one(); 
	       $img2 = $this->crud_model->fetch_single_rand_pro_one();
	       $img3 = $this->crud_model->fetch_single_rand_pro_one();
	       $img4 = $this->crud_model->fetch_single_rand_pro_one();
	       $img5 = $this->crud_model->fetch_single_rand_pro_one();
	       $img6 = $this->crud_model->fetch_single_rand_pro_one();

	       $chart_data .=' 
	            		
        		<div class="col-md-4 mb-4 mb-md-0">
			      '.$img1.'
			      '.$img2.'
			    </div>


			    <div class="col-md-4 mb-4 mb-md-0">
			    	'.$img3.'
			    	'.$img4.'
			    </div>
			   
			    <div class="col-md-4">
			    	'.$img5.'
			    	'.$img6.'
			      
			    </div>

        	'; 
	       
	       echo($chart_data);
	}

	// recent produit 
	// pagination information sur les produits
    function pagination_recent_products()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_product();
	  $config["per_page"] = 12;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination justify-content-center justify-content-lg-begin">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item page-link bg-light">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><span aria-hidden="true" class="page-link">»</span>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><span aria-hidden="true" class="page-link">«</span>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item page-link'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_recent_products($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}
    // fin pagination

    function rand_publication_product(){

    	$output = '';
        $query = $this->db->query("SELECT * FROM product ORDER BY RAND() LIMIT 4");

        if ($query->num_rows() >0) {
        	
        	foreach($query->result() as $row)
	        {

	         $output .= '
		        <div class="col-lg-12 col-sm-6">
		          <div class="product text-center">
		            <div class="position-relative mb-3">
		              <div class="badge text-white badge-"></div><a class="d-block" href="javascript:void(0);"><img class="img-fluid w-100" src="'.base_url().'upload/product/'.$row->product_image.'" alt="..." style="height: 250px;"></a>
		              <div class="product-overlay">
		                <ul class="mb-0 list-inline">
		                <input type="number" min="1" max="'.$row->Qte.'" name="quantity" class="form-control quantity" id="'.$row->product_id.'" placeholder="Entrez la quantité" /><br />
		                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark add_favory" href="javascript:void(0);" favoryProduct="'.$row->product_id.'"><i class="far fa-heart"></i></a></li> 
		                  <li class="list-inline-item m-0 p-0">
		                   <a class="btn btn-sm btn-dark add_cart" 
		                      data-productname="'.$row->product_name.'" 
		                      data-price="'.$row->product_price.'" 
		                      data-productid="'.$row->product_id.'" 
		                      data-product_image="'.$row->product_image.'" 
		                      Qte="'.$row->Qte.'"
		                      href="javascript:void(0);">
		                    + Au panier
		                    </a></li>
		                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark modalView" product_id="'.$row->product_id.'"><i class="fas fa-expand"></i></a></li>
		                </ul>
		              </div>
		            </div>
		            <h6> <a class="reset-anchor" href="'.base_url().'user/detailProduct/'.$row->product_id.'">'.$row->product_name.'</a></h6>
		            <p class="small text-muted">'.$row->product_price.'$</p>
		          </div>
		        </div>



		         ';
	        }
        }
        else{

        }

        
        
        echo  $output;

    }

    /*
    script de contact
    =========================
    fin appel contact
    *************************
    ==========================
    */
    function operation_contact(){

	  	if ($_FILES['user_image']['size'] > 0) {
	 		
	 		$logo = $this->upload_image_fichier_contact_radio();
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message"),
		           'fichier'       =>     $logo  
		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");	
	 	}
	 	else{
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message")		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");
	 	}
  
    }


    function upload_image_fichier_contact_radio()  
	{  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/contact/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	}




	





}


?>