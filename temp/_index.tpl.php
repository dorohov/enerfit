<?
$query = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => -1,
	'tax_query' => array(array(
		'taxonomy' => 'category',
		'field' => 'slug',
		'terms' => array('mainpage-slider'),
	)),
));
?>

<header class="index-header _czr__index-header">
	<? if(count($query) > 1){ ?>
		<div id="carousel-header" class="carousel _czr__ih-carousel slide" data-ride="carousel">
			<a class="_czr__ih-control left" href="#carousel-header" data-slide="prev">
				<img src="<?=$this->path('img');?>/icon/icon-arrow-left.png" alt="" class="img-responsive">
			</a>
			<a class="_czr__ih-control right" href="#carousel-header" data-slide="next">
				<img src="<?=$this->path('img');?>/icon/icon-arrow-right.png" alt="" class="img-responsive">
			</a>
			<div class="carousel-inner">
				<?
				while($query->have_posts()) {
					$query->the_post();
					$id = get_the_ID();
					
				?>
				<div class="item">
					<div class="_czr__ih-inner" style="background: url(<?=$this->Imgs->postImg($id, 'full');?>) no-repeat right bottom;">
						<div class="_czr__ih-flex">
							<div>
								<div class="_czr__ih-heading"><? the_title();?></div>
								<div class="_czr__ih-note">
									<?=get_field('preview', $id);?>
								</div>
								<?
								$content_page = get_the_content();
								if(!empty($content_page)){?>
									<div><a href="<?=l($id);?>" class="btn-orange">подробнее</a></div>
								<? } ?>
							</div>
						</div>
					</div>
				</div>
				<? } ?>
			</div>
		</div>
	<? }else{ 
		while($query->have_posts()) {
			$query->the_post();
			$id = get_the_ID();
		?>
			<div class="carousel-inner _czr__ih-carousel-inner ">
				<div class="_czr__ih-inner" style="background: url(<?=$this->Imgs->postImg($id, 'full');?>) no-repeat right bottom;">
					<div class="_czr__ih-flex">
						<div>
							<div class="_czr__ih-heading"><? the_title();?></div>
							<div class="_czr__ih-note">
								<?=get_field('preview', $id);?>
							</div>
							<?
							$content_page = get_the_content();
							if(!empty($content_page)){?>
								<div><a href="<?=l($id);?>" class="btn-orange">подробнее</a></div>
							<? } ?>
						</div>
					</div>
				</div>
			</div>
		<? }
	}?>
</header> 

		<div class="index-product _czr__index-product">
	<div class="_czr__ip-flex">
		<div class="_czr__ip-col">
			<div class="_czr__ip-item">
				<a href="/products/kardiotrenazheryi/" class="_czr__ip-item-link item1">
					<h4 class="_czr__ip-item-heading">Кардиотренажеры</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
		<div class="_czr__ip-col">
			<div class="_czr__ip-item">
				<a href="/products/silovyie-trenazheryi/" class="_czr__ip-item-link item2">
					<h4 class="_czr__ip-item-heading">Силовые тренажеры</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
		<div class="_czr__ip-col">
			<div class="_czr__ip-item">
				<a href="/products/svobodnyie-vesa/" class="_czr__ip-item-link item3">
					<h4 class="_czr__ip-item-heading">Свободные веса<br> и аксессуары</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
		<div class="_czr__ip-col">
			<div class="_czr__ip-item">
				<a href="/products/aerobika/" class="_czr__ip-item-link item4">
					<h4 class="_czr__ip-item-heading">Аэробика</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
		<div class="_czr__ip-col col2">
			<div class="_czr__ip-item">
				<a href="/products/oborudovanie/" class="_czr__ip-item-link item5">
					<h4 class="_czr__ip-item-heading">Оборудование и мебель для клубов</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
		<div class="_czr__ip-col col2">
			<div class="_czr__ip-item">
				<a href="/products/krossfit-i-pokryitiya/" class="_czr__ip-item-link item6">
					<h4 class="_czr__ip-item-heading">Кроссфит и покрытия</h4>
					<span class="_czr__ip-item-bg"></span>
				</a>				
			</div>
		</div>
	</div>
</div>

		<div class="index-services _czr__index-services">
	<h2 class="_czr__is-heading">Наши услуги и преимущества</h2>
	<div class="_czr__is-flex _cb__flex _col">
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item1">	
				<div class="_czr__is-item-heading">Бесплатная доставка</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item2">	
				<div class="_czr__is-item-heading">Сборка тренажеров</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item3">	
				<div class="_czr__is-item-heading">Гарантия и сервис</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item4">	
				<div class="_czr__is-item-heading">Бесплатное обслуживание</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item5">	
				<div class="_czr__is-item-heading">Оборудование залов</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item6">	
				<div class="_czr__is-item-heading">Бесплатная замена</div>
			</div>
		</div>
	</div>	
</div>
<? /*
<!-- если нужны тултипы просто раскоменть:)
<div class="index-services _czr__index-services">
	<h2 class="_czr__is-heading">Наши услуги и преимущества</h2>
	<div class="_czr__is-flex _cb__flex _col">
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item1" data-toggle="tooltip" data-placement="bottom" title="Бесплатная доставка при сумме заказа от 2 млн. руб.">	
				<div class="_czr__is-item-heading">Бесплатная доставка</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item2" data-toggle="tooltip" data-placement="bottom" title="Всплывающий текст" >	
				<div class="_czr__is-item-heading">Сборка тренажеров</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item3" data-toggle="tooltip" data-placement="bottom" title="Всплывающий текст" >	
				<div class="_czr__is-item-heading">Гарантия и сервис</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item4" data-toggle="tooltip" data-placement="bottom" title="Всплывающий текст" >	
				<div class="_czr__is-item-heading">Бесплатное обслуживание</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item5" data-toggle="tooltip" data-placement="bottom" title="Всплывающий текст" >	
				<div class="_czr__is-item-heading">Оборудование залов</div>
			</div>
		</div>
		<div class="_czr__is-item _cb__col">
			<div class="_czr__is-item-inner item6" data-toggle="tooltip" data-placement="bottom" title="Всплывающий текст" >	
				<div class="_czr__is-item-heading">Бесплатная замена</div>
			</div>
		</div>
	</div>	
</div>
-->*/
?>

<?

$query = new WP_Query(array(
	'post_type' => 'photo',
	'posts_per_page' => -1,
	'tax_query' => array(array(
		'taxonomy' => 'photo_taxonomies',
		'field' => 'slug',
		'terms' => array('main-gallery'),
	)),
));

?>
<div class="index-slider _czr__index-slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		
		<?
		while($query->have_posts()) {
			$query->the_post();
			$id = get_the_ID();
			$link = $this->Imgs->postImg($id, 'full');
			?>
			<div class="item" style="background-image: url(<?=$link;?>)"></div>
			<?
		}
		wp_reset_postdata();
		?>
		
		</div>
		<a class="_czr__isl-control left" href="#carousel-example-generic" data-slide="prev">
			<img src="<?=$this->path('img');?>/icon/icon-arrow-left.png" alt="">
		</a>
		<a class="_czr__isl-control right" href="#carousel-example-generic" data-slide="next">
			<img src="<?=$this->path('img');?>/icon/icon-arrow-right.png" alt="">
		</a>
	</div>
</div>







<div class="index-contacts _czr__index-contacts">
	<div id="map"></div>
	<div class="_czr__icnt-block">
		<h3 class="_czr__icnt-heading">Контакты</h3>
		<ul class="_cb__list _czr__icnt-list">
			<li><?=get_field('adr', 6);?></li>
			<li><a href="tel:+<?=phone(get_field('phone', 6));?>"><?=get_field('phone', 6);?></a></li>
			<li><a href="mailto:<?=get_field('email', 6);?>"><?=get_field('email', 6);?></a></li>
		</ul>
		<div><button type="button" data-toggle="modal" data-target="#modal-review" class="btn-orange">обратная связь</button></div>
	</div>
</div>