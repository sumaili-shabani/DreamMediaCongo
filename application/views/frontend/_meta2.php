<?php 
$icone_info;
$tel1_info;
$tel2_info ;
$adresse_info ;
$facebook_info ;
$twitter_info;
$linkedin_info;
$email_info ;
$termes_info;
$confidentialite_info ;
$description_info;
$mission_info;
$objectif_info;
$blog_info;
$nom_site_info;

$whatsapp_info ;
$instagram_info ;

if ($contact_info_site->num_rows() > 0) {
	foreach ($contact_info_site->result_array() as $key) {
		$nom_site_info = $key['nom_site'];
		$icone_info = base_url().'upload/tbl_info/'.$key['icone'];
		$tel1_info = $key['tel1'];
		$tel2_info = $key['tel2'];
		$adresse_info = $key['adresse'];
		$facebook_info = $key['facebook'];
		$twitter_info = $key['twitter'];
		$linkedin_info = $key['linkedin'];
		$email_info = $key['email'];
		$termes_info = $key['termes'];
		$confidentialite_info = $key['confidentialite'];
		$description_info = $key['description'];
		$mission_info = $key['mission'];
		$objectif_info = $key['objectif'];
		$blog_info = $key['blog'];

    $whatsapp_info = $key['whatsapp'];;
    $instagram_info= $key['instagram']; ;

	}

}


 ?>
 
<title><?php echo($title) ?> | <?= $nom_site_info ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="<?php echo($icone_info) ?>">
<!-- Page Title  -->
<meta name="description" content="<?= $description_info ?>">
<meta name="keywords"    content="<?= $description_info ?>">
<!--===============================================================================================-->
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/font-awesome/css/font-awesome.min.css" media="screen">

<!-- mon style -->
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/my_style.css" media="screen">

<!-- fin de mon style -->
  
  <!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/colors.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/owl.carousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/owl.theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/frond/css/style.css" media="screen">
  

<!-- sweetalert -->
<link rel="stylesheet" type="text/css" href="<?= base_url('js/sweetalert/sweetalert.css')?>">

<!-- <link rel="stylesheet" href="https://twitter.github.io/typeahead.js/css/examples.css" />  -->


<style>
    @-webkit-keyframes placeHolderShimmer {
      0% {
        background-position: -468px 0;
      }
      100% {
        background-position: 468px 0;
      }
    }

    @keyframes placeHolderShimmer {
      0% {
        background-position: -468px 0;
      }
      100% {
        background-position: 468px 0;
      }
    }

    .content-placeholder {
      display: inline-block;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-name: placeHolderShimmer;
      animation-name: placeHolderShimmer;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      background: #f6f7f8;
      background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
      background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
      background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
      -webkit-background-size: 800px 104px;
      background-size: 800px 104px;
      height: inherit;
      position: relative;
    }

    .post_data
    {
      padding:24px;
      border:1px solid #f9f9f9;
      border-radius: 5px;
      margin-bottom: 24px;
      box-shadow: 10px 10px 5px #eeeeee;
    }
    </style>
