<?php
/* Template Name: seo-production-cat - Продукция, категория */

$b_tpl = 'seo-production';

if ( have_posts() ) {
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		$Azbn->lng = lng();
		
		$Azbn->tpl('_/header', array());
		//$Azbn->tpl($b_tpl.'/'.$Azbn->lng.'-index-cat', array());
		
		$Azbn->_get['as_slider'] = intval($wp_query->query_vars['as_slider']);
		if ($Azbn->_get['as_slider'] == 1) {
			$Azbn->tpl($b_tpl.'/'.$Azbn->lng.'-slider-cat', array());
		} else {
			$Azbn->tpl($b_tpl.'/'.$Azbn->lng.'-index-cat', array());
		}
		$Azbn->tpl('_/footer', array());
	}
}
