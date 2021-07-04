<script>
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>home/search_auto_offres_articles',
       remote:{
        url:'<?php echo base_url(); ?>home/search_auto_offres_articles/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch2 .typeahead').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/article/{{image}}" class="img-thumbnail" width="68" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;"><a href="<?php echo(base_url()) ?>home/article/{{idart}}">{{name}}</a></div></div></div>')
       }
      });
    });
</script>



<script type="text/javascript">
	$(document).ready(function() {

		$('.zone_recherche').hide();
		$(document).on('click', '.show_zone_recherche', function(event) {
			event.preventDefault();
			/* Act on the event */
			$('.zone_recherche').show();
			$(this).removeClass('show_zone_recherche');
			$(this).addClass('hide_zone_recherche');
			$(this).html('<i class="fa fa-close" style="font-size: 20px; color: black;"></i>');
			// $(this).html("Cachez la recherche");

		});

		$(document).on('click', '.hide_zone_recherche', function(event) {
			event.preventDefault();
			/* Act on the event */
			$('.zone_recherche').hide();
			$(this).removeClass('hide_zone_recherche');
			$(this).addClass('show_zone_recherche');
			// $(this).html("Effectuer une recherche");
			$(this).html('<i class="fa fa-search" style="font-size: 20px; color: black;"></i>');
		});
	});
</script>