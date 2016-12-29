<?
$this->catalog_course = get_field('course', 14);
?>
<!DOCTYPE html>
<html <?php language_attributes();?> > 
<head>
<?
$this->tpl('_/head', array());
wp_head();
?>
</head>
<body <?php body_class(''); ?> >

<?
if(is_front_page()) {
	
}
?>

<div class="_czr__loader active page-loader" >
	<div class="_czr__preloader-inner" >
		<div class="_czr__preloader-process-container process-container" >
			<div class="_czr__preloader-process-level process-level" ></div>
		</div>
		<div class="_czr__preloader-center" >
			<a class="close-loader" href="#not-lazyload" ><img src="<?=$this->path('img');?>/default/logotip-preloader.png" alt=""></a>
		</div>		
	</div>
</div>


<nav class="navbar navbar-site _czr__navbar-site ">
	<div class="">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="/"><img src="<?=$this->path('img');?>/default/logotip.png" alt=""></a>
			<button class="c-hamburger c-hamburger--htx" data-toggle-nav=".navbar-site">
				<span>toggle menu</span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="  " ><a href="<?=l(4);?>">О компании</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Тренажеры <b class="caret"></b></a>
					<ul class="dropdown-menu">
						
						<li><a href="<?=l(14);?>">Все тренажеры</a></li>
						<li><a href="/products/kardiotrenazheryi/">Кардиотренажеры</a></li>
						<li><a href="/products/silovyie-trenazheryi/">Силовые тренажеры</a></li>
						<li><a href="/products/svobodnyie-vesa/">Свободные веса и аксессуары</a></li>
						<li><a href="/products/aerobika/">Аэробика</a></li>
					</ul>
				</li>
				
				<!--
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Серии <b class="caret"></b></a>
					<ul class="dropdown-menu">						
						<li><a href="#">MA</a></li>
						<li><a href="#">MZ</a></li>
						<li><a href="#">MN</a></li>
						<li><a href="#">MU</a></li>
						<li><a href="#">A9</a></li>
						<li><a href="#">H</a></li>
						<li><a href="#">ПРО</a></li>
					</ul>
				</li>
				-->
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Оборудование для клубов <b class="caret"></b></a>
					<ul class="dropdown-menu">						
						
						<?
						$sub_cat_arr = get_categories(array(
								'type'					=> 'product',
								//'child_of'				=> 0,
								'parent'				=> 11,
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
						if(count($sub_cat_arr)){
							foreach($sub_cat_arr as $sub_cat){
								$sub_cat_link = get_category_link($sub_cat->term_id);
						?>
						<li><a href="<?=$sub_cat_link;?>"><?=$sub_cat->name;?></a></li>
						<?
							}
						}
						?>
						<!--
						<li><a href="#">Мебель и элект. устройства</a></li>
						<li><a href="#">Шкафчики для раздевалок</a></li>
						<li><a href="#">Ресепшен</a></li>
						<li><a href="#">Электронные замки</a></li>
						<li><a href="#">Браслеты</a></li>
						<li><a href="#">RFID-карты</a></li>
						-->
					</ul>
				</li>
				<li class=" " ><a href="<?=l(8);?>">Услуги</a></li>
				<li class=" " ><a href="<?=l(10);?>">Фотогалерея</a></li>
				<li class=" " ><a href="<?=l(12);?>">Видео</a></li>					  
				<li class=" " ><a href="<?=l(6);?>">Контакты</a></li>				
			</ul>

			<form class="navbar-form" role="search" action="<?php bloginfo('url'); ?>" method="GET" >
				<div class="input-group">
					<input type="text" class="form-control" name="s" placeholder="Поиск по сайту">
					<span class="input-group-btn">
						<button type="reset" class="btn-close"></button>
						<button type="submit" class="btn-search"></button>
					</span>
				</div>
			</form>
		</div>
	</div>
</nav>
