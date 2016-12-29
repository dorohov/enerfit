<?

?>


<footer class="footer-site ">
	<div class="_fs__navbar">
		<div class="_fs__navbar-inner _cb__flex _col">
			
			<?
			$cat_arr = get_categories(array(
						'type'					=> 'product',
						//'child_of'				=> 0,
						'parent'				=> 0,
						'orderby'				=> 'order',
						'order'					=> 'ASC',
						'hide_empty'			=> 0,
						'hierarchical'			=> 0,
						'exclude'				=> '',
						'include'				=> '',
						'number'				=> 0,
						'taxonomy'				=> 'product_taxonomies',
						'pad_counts'			=> false,
					));
			
			if(count($cat_arr)){
						foreach($cat_arr as $cat){
							//$link = get_category_link($cat->term_id);
							
							$sub_cat_arr = get_categories(array(
								'type'					=> 'product',
								//'child_of'				=> 0,
								'parent'				=> $cat->term_id,
								'orderby'				=> 'order',
								'order'					=> 'ASC',
								'hide_empty'			=> 0,
								'hierarchical'			=> 0,
								'exclude'				=> '',
								'include'				=> '',
								'number'				=> 0,
								'taxonomy'				=> 'product_taxonomies',
								'pad_counts'			=> false,
							));
					?>
					
			<ul class="_fs__navbar-item _cb__col">
				<li class="_heading"><?=$cat->name;?></li>
				
				<?
								if(count($sub_cat_arr)){
									foreach($sub_cat_arr as $sub_cat){
										$sub_cat_link = get_category_link($sub_cat->term_id);
								?>
								<li><a href="<?=$sub_cat_link;?>"><?=$sub_cat->name;?></a></li>
								<?
									}
								}
								?>
			</ul>
					
					<?
						}
					}
			
			?>
			
		</div>
	</div>
	<div class="_fs__footer">
		<div class="_fs__copyright">
			<div>&copy; 2016. ООО «Энерфит». Все права защищены.</div>
		</div>
		<div class="_fs__dorohovdesign _cb__flex _col">
			<a href="http://www.dorohovdesign.ru/" target="_blank" class="_cb__col">Разработка сайта</a>
			<a href="http://www.dorohovdesign.ru/" target="_blank" class="_cb__col"><img src="<?=$this->path('img');?>/default/dorohovdesign.png" alt="" ></a>
		</div>		
	</div>
</footer>


<a class="go-to-top active" href="body"></a>


<div class="modal fade modal-site" id="modal-review" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form action="<?=l(43);?>" method="POST" class="modal-reviews">
					<input type="hidden" name="f[Тема сообщения]" value="Обратная связь" />
					
					<h3 class="modal-title">Обратная связь</h3>
					<div class="_mr__note">Если у Вас остались вопросы по заказу оборудования или сервиса, оставьте свои данные, и наши менеджеры свяжутся с Вами</div>
					<div class="_czr__ms__input icon-user">
						<input type="text" name="f[Имя]" placeholder="Ваше имя*">
					</div>
					<div class="_czr__ms__input icon-tel">
						<input type="tel" name="f[Телефон]" placeholder="Ваш телефон*">
					</div>
					<div  class="_czr__ms__btn">
						<button type="submit" class="btn-orange">Отправить</button>
					</div>
				</form>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
		</div>
	</div>
</div> 


<link rel="stylesheet" href="<?=$this->path('js');?>/../plugins/owl.carousel/owl.carousel.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="<?=$this->path('js');?>/jquery.min.js" ></script>

<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
<script src="<?=$this->path('js');?>/jquery.bootstrap-autohidingnavbar.min.js" ></script>
<script src="<?=$this->path('js');?>/storage.js" ></script>
<script src="<?=$this->path('js');?>/device.min.js" ></script>
<script src="<?=$this->path('js');?>/azbn.js" ></script>
<script src="<?=$this->path('js');?>/hamburger.js" ></script>
<script src="<?=$this->path('js');?>/../plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=$this->path('js');?>/jquery-plugin/jquery.jqfeShowMoreBtn.js"></script>
<script src="<?=$this->path('js');?>/document-ready.js" ></script>
<script>
	$(window).load(function(){
		$("[data-toggle-nav]").click(function() {
			var toggle_el = $(this).data("toggle-nav"); 
			$(toggle_el).toggleClass("open-sidebar");
		});
	});
	
	$(function(){
		
		$('.azbn-jqfeShowMoreBtn-count-btn[data-showmore-count="' + (SS.get('azbn-jqfeShowMoreBtn-count') || 9) + '"]').addClass('active');
		//console.log(SS.get('azbn-jqfeShowMoreBtn-count'));
		
		$('.azbn-jqfeShowMoreBtn-container .azbn-jqfeShowMoreBtn-item')
			.sort(function(a,b){
				return parseInt($(a).attr('data-cost')) < parseInt($(b).attr('data-cost'));
			}).each(function(){
				$('.azbn-jqfeShowMoreBtn-container').prepend(this);
			})
		;
		
		$(document.body).on('click.azbn', '.azbn-jqfeShowMoreBtn-count-btn', {}, function(event){
			//event.preventDefault();
			
			var btn = $(this);
			var smc = btn.attr('data-showmore-count') || 9;
			
			SS.set('azbn-jqfeShowMoreBtn-count', smc);
			
			/*
			$('.azbn-jqfeShowMoreBtn-count-value').val(smc);
			
			$('.azbn-jqfeShowMoreBtn-count-btn').removeClass('active');
			btn.addClass('active');
			*/
		});
		
		$('.azbn-jqfeShowMoreBtn-btn')
			.jqfeShowMoreBtn({
				container:'.azbn-jqfeShowMoreBtn-container',
				items:'.azbn-jqfeShowMoreBtn-item',
				display:'block',
				count:SS.get('azbn-jqfeShowMoreBtn-count') || 9,
				css_hidden:{
					opacity:0,
				},
				css_visible:{
					opacity:1,
				},
				animation_time:700,
			})
			.trigger('click')
		;
		
	})
</script>

<?
if($this->post['id'] == 6 || $this->post['id'] == 1) {
?>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>

    google.maps.event.addDomListener(window, 'load', init);
    function init() {

        var coord, coord_marker, zoom_map;
        if(screenJS.isXS() || screenJS.isSM()) {
            coord = {lat: 55.82435, lng: 38.258159};
            coord_marker = {lat: 55.82435, lng: 38.258159};
            zoom_map = 14;
        } else {
            zoom_map = 15;
            coord = {lat: 55.82540, lng: 38.250};
            coord_marker = {lat: 55.82435, lng: 38.258159};
        }

        var mapOptions = {
            zoom: zoom_map,
            center: new google.maps.LatLng(coord.lat, coord.lng),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
	  	var image = '<?=$this->path('img');?>/icon/icon-map.png';
	  	var marker = new google.maps.Marker({
		    position: coord_marker,
		    map: map,
		    icon: image
	 	});
    }
</script>

<?
}


if($this->post['id'] == 32) {
?>

<script src="<?=$this->path('js');?>/../plugins/fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
<script src="<?=$this->path('js');?>/../plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="<?=$this->path('js');?>/../plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script>
	$(document).ready(function() {
		$('.fancybox').fancybox(); 
	});
</script>

<?
}

?>


</body>
</html>