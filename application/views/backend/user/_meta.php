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

  }

}


 ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo($title) ?> | <?= $nom_site_info ?></title>
<meta name="description" content="<?= $description_info ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
<meta name="keywords" content="<?= $description_info ?>">
<meta name="author" content="Ets yetu">


<!-- Bootstrap CSS-->
<link href="<?php echo(base_url())?>js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/bootstrap/css/bootstrap.min.css')?>">
<!-- Lightbox-->
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/lightbox2/css/lightbox.min.css')?>">
<!-- Range slider-->
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/nouislider/nouislider.min.css')?>">
<!-- Bootstrap select-->
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/bootstrap-select/css/bootstrap-select.min.css')?>">
<!-- Owl Carousel-->
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/owl.carousel2/assets/owl.carousel.min.css')?>">
<link rel="stylesheet" href="<?= base_url('js/dev/vendor/owl.carousel2/assets/owl.theme.default.css')?>">
<!-- Google fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
<!-- theme stylesheet-->
<link rel="stylesheet" href="<?= base_url('js/dev/css/style.default.css')?>" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="<?= base_url('js/dev/css/custom.css')?>">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="<?php echo($icone_info) ?>">
<!-- Page Title  -->
<!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


<!-- font awason icon -->
<link rel="stylesheet" type="text/css" href="<?= base_url('js/assets/font-awesome/css/font-awesome.css')?>">
<!-- sweetalert -->
<link rel="stylesheet" type="text/css" href="<?= base_url('js/sweetalert/sweetalert.css')?>">
<link rel="stylesheet" href="<?= base_url('js/assets/summernote/summernote-bs4.css')?>">

<link rel="stylesheet" href="<?= base_url('js/assets/fullcalendar/fullcalendar.min.css')?>">


<style type="text/css">
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