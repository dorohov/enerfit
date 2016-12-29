<?php
/*  */

$b_tpl = 'default';

if ( have_posts() ) {
	
	if ( is_home() && ! is_front_page() ) {
		
	}
	
	while ( have_posts() ) {
		the_post();
		$Azbn->post['id'] = get_the_ID();
		$Azbn->post['meta'] = $Azbn->getMeta($Azbn->post['id']);
		
		//$Azbn->_get['count'] = intval($wp_query->query_vars['count']);
		//echo $Azbn->_get['count'];
		
		$Azbn->tpl('_/header', array());
		if(isset($Azbn->post['meta']['azbn_page_tpl']) && $Azbn->post['meta']['azbn_page_tpl'] != '') {
			$Azbn->tpl($Azbn->post['meta']['azbn_page_tpl'], array());
		} else {
			$Azbn->tpl($b_tpl, array());
		}
		$Azbn->tpl('_/footer', array());
	}
}
