<?

// шаблон

//$category = get_queried_object();

//$this->_get['count'] = intval(get_query_var('count'));

?>

<div class="content-block catalog-page _czr__catalog-page ">
	
	
	<nav class="_czr__catalog-navbar">
		<div class="_czr__cn__inner">
			<div class="_czr__cn__navbar">
				<h4 class="_czr__cn__heading">Разделы каталога</h4>
				<div class="panel-group" id="accordion">
					
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
					
					<div class="panel _czr__cn__item"> 
						<div class="_czr__cn__item-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#nav-item-<?=$cat->slug;?>"><span><?=$cat->name;?></span> <b class="caret"></b></a>
						</div>
						<div id="nav-item-<?=$cat->slug;?>" class="_czr__cn__item-collapse panel-collapse collapse ">
							<ul class="_czr__cn__item-nav">
								
								<?
								if(count($sub_cat_arr)){
									foreach($sub_cat_arr as $sub_cat){
										$sub_cat_link = get_category_link($sub_cat->term_id);
								?>
								<li class="<?/*active*/?>" ><a href="<?=$sub_cat_link;?>"><?=$sub_cat->name;?></a></li>
								<?
									}
								}
								?>
							</ul>
						</div>
					</div>
					
					<?
						}
					}
					?>
					
					
					
				</div>
			</div>
			<div class="_czr__cn__swipe-area">
				<button class="_czr__cn__hamburger c-hamburger c-hamburger--htx" data-cat-navbar="._czr__catalog-page">
					<span>toggle menu</span>
				</button>
			</div>
		</div>
	</nav>
	
	
	
	<div class="_czr__cp__inner">
		<div class="_czr__container-fluid container">
			<ul class="_czr__breadcrumb">
				<li><a href="/">Главная</a></li>
				<li class="active">Каталог товаров</li>
			</ul>
			<div class="_czr__cp__heading-block-site heading-block-site">
				<div class="_cb__flex _czr__cp__heading-block">
					<h1 class="heading-site">Каталог товаров</h1>
					
					<div class="_cb__catalog-sort-item">
						<a href="" class=" azbn-jqfeShowMoreBtn-count-btn" data-showmore-count="9" >9</a> / 
						<a href="" class=" azbn-jqfeShowMoreBtn-count-btn" data-showmore-count="18" >18</a> / 
						<a href="" class=" azbn-jqfeShowMoreBtn-count-btn" data-showmore-count="27" >27</a>
						<input class="azbn-jqfeShowMoreBtn-count-value" type="hidden" value="" />
					</div>
					
				</div>
				<!--
				<div class="_cb__catalog-filter">
					<span>Сортировать</span>
					<select class="form-control">
						<option>автоматически</option>
						<option>по цене: по возрастанию</option>
						<option>по цене: по убыванию</option> 
						<option>недавно добавленные</option>
					</select>
				</div>
				-->
			</div>
			<div class="_czr__cp__list azbn-jqfeShowMoreBtn-container ">
				
				<?
				
				$query = new WP_Query(array(
					'post_type' => 'product',
					'posts_per_page' => 36,
				));
				
				while ($query->have_posts()) {
					$query->the_post();
					$id = get_the_ID();
					//$this->Imgs->postImg($id, '736x850');
				?>
				
				<div class="_czr__cp__item-block azbn-jqfeShowMoreBtn-item" data-cost="<?=(get_field('cost', $id) * $this->catalog_course);?>" >
					<a href="<?=l($id);?>" class="_czr__cp__item">
						<div class="_czr__cp__item-preview">
							<div><img src="<?=$this->Imgs->postImg($id, '400x350');?>" alt="" ></div>
						</div>
						<div class="_czr__cp__item-note _cb__flex _col">
							<div class="_czr__cp__item-name _cb__col"><?=get_field('code', $id);?></div>
							<div class="_czr__cp__item-cost _cb__col icon-ruble"><?=(get_field('cost', $id) * $this->catalog_course);?></div>
						</div>
						<div class="_czr__cp__item-btn">
							<div class="btn-orange">подробнее о товаре</div>
						</div> 
					</a>
				</div>
				
				<?
					$i++;
				}
				wp_reset_postdata();
				
				?>
				
			</div>
			<div class="_czr__cp__btn-more"><button type="button" class="btn-orange azbn-jqfeShowMoreBtn-btn ">еще товары</button></div>
		</div>
	</div>
	
	
	
	</div>