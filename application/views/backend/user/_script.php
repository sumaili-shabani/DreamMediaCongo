 <!-- JavaScript files-->
  <script src="<?php echo(base_url()) ?>js/dev/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/lightbox2/js/lightbox.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/nouislider/nouislider.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/owl.carousel2/owl.carousel.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
  <script src="<?php echo(base_url()) ?>js/dev/js/front.js"></script>
  <script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite - 
    //   see more here 
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {
    
        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
    
  </script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- sweetalert -->
  <script type="text/javascript" src="<?= base_url('js/sweetalert/sweetalert.js')?>"></script>

  <!-- script calendrier -->
  <script src="<?= base_url('js/assets/bundles/fullcalendarscripts.bundle.js')?>"></script>
  <!--/ calender javascripts -->
  <!-- fin -->
  <script src="<?= base_url('js/plugins/summernote/summernote-bs4.min.js')?>"></script>
  <script>
    $(function () {
      // Summernote
      $('.textarea').summernote();
    })
  </script>

  <script type="text/javascript">
  	$(document).ready(function() {
  		//alert("cool");
  	});
  </script>
