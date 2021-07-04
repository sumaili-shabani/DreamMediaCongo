<?php 

/**
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
	
	    private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  
		  $this->load->library('form_validation');
		  $this->load->library('encryption');
	      // $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');

		}

		function test(){
			echo("chargement...");
			redirect('home','refresh');
		}


		function index(){
			$data['title']			= "L'acccueil vous soit doux";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();

			$data['padding_carousel']  	= $this->crud_model->Select_padding_carousel();

			$data['padding_filtrage']  	= $this->crud_model->Select_padding_filtragage();
			
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			// $this->load->view('frontend/exemple', $data);
			$this->load->view('frontend/panel', $data);
      		
		}
		function article($param1=''){


	 		$title_job = $this->crud_model->get_name_article_pub($param1);
			$data['title']			= $title_job;

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();

			

			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['offre_tag']  = $this->crud_model->Select_our_articles_tag($param1);
			$data['commentaires']  = $this->crud_model->Select_our_commentaire_to_articles_tag($param1);



			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/_pannelArticle', $data);

		}

		function publication($param1='', $param2=''){

			$data['title']			="Nos articles";
			$data['title2']			= $this->crud_model->get_name_article_cat($param1);

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();



			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			
			

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['article_tag']  = $this->crud_model->Select_our_article_tag($param1);


			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();

			$data['padding_carousel']  	= $this->crud_model->Select_padding_carousel();



			$this->load->view('frontend/_pannelPub', $data);

		}

		function about(){
			$data['title']			="A propos de  nous!";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();
			
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/about', $data);
      		// $this->load->view('backend/admin/templete_admin', $data);
		}

		function contrat(){

			$data['title'] ="Contrat et politique de confidentialité de confidentialité du site";

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();

			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/contrat', $data);

		}

		function contact(){

			$data['title']			="Contrat pour information";

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();


			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();



			$this->load->view('frontend/_contact_info', $data);


		}







		// pagination de articles
	 function pagination_access_our_article()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_articles();
	  $config["per_page"] = 6;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="flex-wr-c-c m-rl--7 p-t-15 pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_articles($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_articles()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_articles($query);
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {

			   	 $vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key->idart." ");
			      if ($vues->num_rows() <=0) {
			        $nombre_vue = 0;
			      }
			      else{
			        foreach ($vues->result_array() as $key_vue) {
			          $nombre_vue = $key_vue['total'];
			        }
			      }

			    $output .= '
			      <div class="col-sm-6 p-r-25 p-r-15-sr991">
			        <!-- Item latest -->
			        <div class="m-b-45">
			          <a href="'.base_url().'home/article/'.$key->idart.'" class="wrap-pic-w hov1 trans-03">
			            <img src="'.base_url().'upload/article/'.$key->image.'" alt="IMG" style="height: 200px;">
			          </a>
			          <div class="p-t-16">
			            <h5 class="p-b-5">
			              <a href="'.base_url().'home/article/'.$key->idart.'" class="f1-m-3 cl2 hov-cl10 trans-03">
			                '.nl2br(substr($key->nom, 0,100)).'...
			              </a>
			            </h5>
			            <span class="cl8">
			             
			              <span class="f1-s-3 m-rl-3">
			                <i class="fa fa-eye"></i>  '.$nombre_vue.' vue(s) &nbsp;&nbsp; - &nbsp;&nbsp;
			              </span>
			              <span class="f1-s-3">
			                '.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'
			              </span>
			            </span>
			          </div>
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
		  }

	  	echo $output;
	 }

	 // fin script articles 

	/*
	*======================================
	les script commence pour la articles
	=======================================
	___________________________________________
	*/

	// auto complete text roffres d'emplois
	function fetch_auto_offres_articles()
	{
	    echo $this->crud_model->fetch_data_auto_articles($this->uri->segment(3));
	}

	// auto complete text roffres d'emplois
	function search_auto_offres_articles()
	{
	    echo $this->crud_model->recherche_data_auto_articles($this->uri->segment(3));
	}

	// insertion de vues 
	function insert_vue(){

		$idart 		= $this->input->post('idart');
		$machine 	= $this->input->post('machine');
		$test_existe = $this->crud_model->Select_idart_tag_insert($idart,$machine);
		if ($test_existe->num_rows() > 0) {
			echo("adresse ip existe deja");
		}
		else{

			$data_insert = array(
	            'idart'        => $this->input->post('idart'),
	            'machine'       => $this->input->post('machine')
	        );

	        $query = $this->crud_model->insert_vues_ip($data_insert);

		}
		
	}

	function operation_contact(){

	  	$insert_data = array(  
           'nom'           =>     $this->input->post('name'),  
           'sujet'         =>     $this->input->post("subject"),
           'email'         =>     $this->input->post("email"),  
           'message'       =>     $this->input->post("message")		           
		 ); 

      	$requete=$this->crud_model->insert_contact($insert_data);
      	echo("Nous vous répondrons dans un instant");
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