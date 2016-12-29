<?php
/* Template Name: product-slider - Продукция (слайдер) */

$b_tpl = 'product';

if ( have_posts() ) {
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		$Azbn->lng = lng();
		
		$Azbn->tpl('_/header', array());
		$Azbn->tpl($b_tpl.'/'.$Azbn->lng.'-slider', array());
		$Azbn->tpl('_/footer', array());
	}
}
