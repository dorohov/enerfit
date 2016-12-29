<?
					
					function azbn_wgt_getCatalog($categories)
					{
						$catalog=array(
							'list'=>array(),
							'structure'=>array(),
						);
						if( $categories ){
							foreach($categories as $cat){
								$catalog['list'][$cat->term_id]=$cat;
								$catalog['structure'][$cat->parent][$cat->term_id]=&$catalog['list'][$cat->term_id];
								//$catalog['list'][$cat->term_id]->parent_slug = $catalog['list'][$cat->parent]->slug;
							}
						}
						if( $categories ){
							foreach($categories as $cat){
								$catalog['list'][$cat->term_id]->parent_slug = $catalog['list'][$cat->parent]->slug;
							}
						}
						return $catalog;
					}
					
					$args = array(
						'type'					=> 'page',
						'child_of'				=> 2,
						//'parent'				=> '',
						'orderby'				=> 'menu_order',
						'order'					=> 'DESC',
						'hide_empty'			=> 0,
						'hierarchical'			=> 1,
						'exclude'				=> '',
						'include'				=> '',
						'number'				=> 0,
						'taxonomy'				=> 'page-category',
						'pad_counts'			=> false,
					);
					
					$categories = get_categories( $args );
					$catalog = azbn_wgt_getCatalog($categories);
				
				/*
				if(count($catalog['structure'][2])) {
					foreach($catalog['structure'][2] as $index=>$entity) {
						//echo '<li><a href="#flt" data-term_id="'.$entity->slug.'" >'.$entity->name.'</a></li>';
						?>
						<li ><a href="#<?=$entity->slug;?>" data-filter="<?=$entity->slug;?>"><?=$entity->name;?></a></li>
						<?
					}
				}
				*/
					
					
					?>

<script>
$(document).ready(function(){
	
	
	var pmm = $('.product-menu-main').eq(0);
	var pmc = $('.product-menu-children').eq(0);
	var pmm_l = $('.product-menu-main-modal');//pmm.find('.product-menu-main-list');
	var pmc_l = pmc.find('.product-menu-children-list');
	
	//.product-menu-main-modal
	
	
	pmm_l.find('a').on('click', function(event){
		//event.preventDefault();
		
		var flt = $(this).attr('data-filter');
		//alert(flt);
		//pmc_l.find('li:not(' + flt + ')').filter(':visible').hide();
		//pmc_l.find('li.' + flt).filter(':hidden').show();
		pmc_l.find('li:not(.' + flt + ')').fadeOut('fast');
		
		var to_show = pmc_l.find('li.' + flt);
		if(to_show.size()) {
			if(pmc.is(':visible')) {
				
			} else {
				pmc.fadeIn('fast');
			}
			pmc_l.find('li.' + flt).fadeIn('fast');
			pmm.find('.product-menu-main-title').html($(this).html()).prepend('<img src="<?=$this->path('img');?>/index/product/product-title-menu.png" /> ');
			
			
			
			$('.is-product-list .is-product').hide();
			$('.is-product-list .is-product.' + flt).fadeIn('fast');
			pmc_l.find('li.' + flt).each(function(index){
				
				var _flt = $(this).find('a').eq(0).attr('data-filter');
				$('.is-product-list .is-product.' + _flt).fadeIn('fast');
				
			});
			
			
			
		} else {
			pmc.fadeOut('fast');
			
			pmm.find('.product-menu-main-title').html($(this).html()).prepend('<img src="<?=$this->path('img');?>/index/product/product-title-menu.png" /> ');
			
			$('.is-product-list .is-product').hide();
			$('.is-product-list .is-product.' + flt).fadeIn('fast');
		}
		
		$('.product-menu-main-modal-close').trigger('click');
		
	});
	
	pmc_l.find('li a').on('click', function(event){
		//event.preventDefault();
		
		var flt = $(this).attr('data-filter');
		pmc_l.find('li').removeClass('active');
		$(this).parent().addClass('active');
		
		$('.is-product-list .is-product:not(' + flt + ')').hide();
		$('.is-product-list .is-product.' + flt).fadeIn('fast');
	});
	
	// _prodb__prod-list _prodb__item
	
	//pmm_l.find('li').eq(0).find('a').trigger('click');
	
	var window_onload_onhashchange = function(hash) {
		if(typeof(hash) != "undefined"){
			if(hash != ""){
				var tbtn = pmm_l.find('a[data-filter="' + hash + '"]');
				var bbtn = pmc_l.find('a[data-filter="' + hash + '"]');
				if(bbtn.size()) {
					var flt = bbtn.attr('data-parent-filter');
					pmm_l.find('a[data-filter="' + flt + '"]').trigger('click');
					setTimeout(function(){
						bbtn.trigger('click');
					},200);
				} else if(tbtn.size()) {
					tbtn.trigger('click');
				}
			} else {
				pmm_l.find('a').eq(0).trigger('click');
			}
		} else {
			pmm_l.find('a').eq(0).trigger('click');
		}
	};
	
	window_onload_onhashchange(window.location.hash.replace('#', ''));
	
});
</script>




<div class="production__nav content-block">
	<div class="_prodnav__container container">
		<div class="_prodnav__heading-block">
			
			<div class="_prodnav__heading-dropdown product-menu-main">
				<h1 class="heading-block _prodnav__heading product-menu-main-title" data-toggle="modal" data-target="#prod-modal"><img src="<?=$this->path('img');?>/index/product/product-title-menu.png" /> <?=t($this->post['id']);?></h1>
			</div>
			
			<div class="_prodnav__navbar">
				<ul>
					<li class="_heading">Показать как</li>
					<li <?if($this->_get['as_slider'] == 1) {?>class="active"<?}?> ><a href="?as_slider=1" class="icon icon-image"></a></li>
					<li <?if($this->_get['as_slider'] == 0) {?>class="active"<?}?> ><a href="?as_slider=0" class="icon icon-gallery"></a></li>
				</ul>
			</div>
			
		</div>
		
		<?
		if($this->_get['as_slider'] == 0) {
		?>
		<div class="_prodnav__dropdown product-menu-children ">
			<a data-toggle="dropdown" href="#" class="visible-xs visible-sm product-menu-children-title ">Минеральные комплексы <span class="caret"></span></a>
			<ul class="_prodnav__dropdown-menu product-menu-children-list " aria-labelledby="dLabel">
				
				<?
				
				if(count($catalog['structure'][2])) {
					foreach($catalog['structure'][2] as $index=>$entity) {
						
						if(count($catalog['structure'][$index])) {
							foreach($catalog['structure'][$index] as $index=>$_entity) {
								//echo '<li><a href="#flt" data-term_id="'.$entity->slug.'" >'.$entity->name.'</a></li>';
								?>
								<li class="<?=$_entity->parent_slug;?> is-product-category " ><a href="#<?=$_entity->slug;?>" data-filter="<?=$_entity->slug;?>" data-parent-filter="<?=$_entity->parent_slug;?>" ><?=$_entity->name;?></a></li>
								<?
							}
						}
						
					}
				}
				?>
				
			</ul>
		</div>
		<?
		}
		?>
		
	</div>
</div> 
<div class="modal _prodnav__modal fade" id="prod-modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">	
			<button type="button" class="close product-menu-main-modal-close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div class="_prodnav__modal-flex product-menu-main-modal">
				<?
				/*
				if(count($catalog['structure'][2])) {
					foreach($catalog['structure'][2] as $index=>$entity) {
						//echo '<li><a href="#flt" data-term_id="'.$entity->slug.'" >'.$entity->name.'</a></li>';
						?>
						
						<a href="#<?=$entity->slug;?>" data-filter="<?=$entity->slug;?>" class="_pn-modal__item icon-bolus smooth-item " data-filter="<?=$entity->slug;?>" style="background: url(<?=$this->path('img');?>/index/product/<?=$entity->slug;?>.jpg) no-repeat center"><span><?=$entity->name;?></span></a>
						
						<?
					}
				}
				*/
				?>
				
				
				<a href="#dlya-ptits" data-filter="dlya-ptits" class="_pn-modal__item icon-bird smooth-item "  style="background: url(<?=$this->path('img');?>/index/product/dlya-ptits.jpg) no-repeat center"><span>Для птиц</span></a>
				<a href="#dlya-sviney" data-filter="dlya-sviney"  class="_pn-modal__item icon-pig smooth-item "  style="background: url(<?=$this->path('img');?>/index/product/dlya-sviney.jpg) no-repeat center"><span>Для свиней</span></a>
				<a href="#dlya-korov" data-filter="dlya-korov"  class="_pn-modal__item icon-krs smooth-item " style="background: url(<?=$this->path('img');?>/index/product/dlya-korov.jpg) no-repeat center"><span>Для коров</span></a>
				<a href="#bolyusyi" data-filter="bolyusyi" class="_pn-modal__item icon-bolus smooth-item " style="background: url(<?=$this->path('img');?>/index/product/bolyusyi.jpg) no-repeat center"><span>Болюсы</span></a>
				<a href="#kormoproizvodstvo" data-filter="kormoproizvodstvo"  class="_pn-modal__item icon-korm smooth-item "  style="background: url(<?=$this->path('img');?>/index/product/kormoproizvodstvo.jpg) no-repeat center"><span>Кормопроизводство</span></a>
				
			</div>
		</div>
	</div>
</div>
