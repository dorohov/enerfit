<?php
/* Template Name: production - Производство*/

$b_tpl = 'production';

if ( have_posts() ) {
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		$Azbn->lng = lng();
		
		$Azbn->tpl('_/header', array());
		$Azbn->tpl($b_tpl.'/'.$Azbn->lng.'-index', array());
		$Azbn->tpl('_/footer', array());
	}
}
