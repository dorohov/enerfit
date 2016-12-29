<?php

// Функции темы

add_theme_support('post-thumbnails');

function getAzbnController($config=array()) {
	global $Azbn;
	if(isset($Azbn)) {
		
	} else {
		include('azbn.ru/AzbnController.class.php');
		//include('azbn.ru/AzbnAjax.class.php');
		$Azbn = new AzbnController($config);
	}
}
getAzbnController(array());
$Azbn->setPath(get_bloginfo('template_directory'));

$Azbn->setAjax();

$Azbn->setShortcodes();

$Azbn->setImgs();
$Azbn->Imgs->setImgSizes(array(
	/*
	'100x100crop' => array(
		'w' => 100,
		'h' => 100,
		'crop' => true,
	),
	*/
	
	'210x53' => array(
		'w' => 210,
		'h' => 53,
		'crop' => false,
	),
	
	'225x150' => array(
		'w' => 225,
		'h' => 150,
		'crop' => true,
	),
	
	'280x110' => array(
		'w' => 280,
		'h' => 110,
		'crop' => true,
	),
	
	'330x130' => array(
		'w' => 330,
		'h' => 130,
		'crop' => true,
	),
	
	'250x250' => array(
		'w' => 250,
		'h' => 250,
		'crop' => true,
	),
	
	'375x375' => array(
		'w' => 375,
		'h' => 375,
		'crop' => true,
	),
	
	'496x790' => array(
		'w' => 496,
		'h' => 790,
		'crop' => true,
	),
	
	'623x645' => array(
		'w' => 623,
		'h' => 645,
		'crop' => true,
	),
	
	'1800x641' => array(
		'w' => 1800,
		'h' => 641,
		'crop' => true,
	),
	
));

function __azbn_set_category_for_pages() {
	register_taxonomy(
		'page-category',
		'page',
		array(
			'hierarchical' => true,
			'label' => 'Рубрики страниц',
		)
	);
}
add_action('init', '__azbn_set_category_for_pages');

function l($id) {
	return get_permalink($id);
}

function t($id) {
	return get_the_title($id);
}

function phone($str) {
	return preg_replace('/[^0-9]/', '', $str);
}

function c($post_id) {
	$page_data = get_page($post_id);
	if ($page_data) {
		return apply_filters('the_content', $page_data->post_content);
	} else {
		return false;
	}
}

function d2r($date) {
	$month = array("january"=>"января", "february"=>"февраля", "march"=>"марта", "april"=>"апреля", "may"=>"мая", "june"=>"июня", "july"=>"июля", "august"=>"августа", "september"=>"сентября", "october"=>"октября", "november"=>"ноября", "december"=>"декабря");
	$days = array("monday"=>"Понедельник", "tuesday"=>"Вторник", "wednesday"=>"Среда", "thursday"=>"Четверг", "friday"=>"Пятница", "saturday"=>"Суббота", "sunday"=>"Воскресенье");
	return str_replace(array_merge(array_keys($month), array_keys($days)), array_merge($month, $days), mb_strtolower($date, 'UTF-8'));
}

function lng($v = 'ru') {
	$url = explode('/', $_SERVER['REQUEST_URI']);
	if(count($url)) {
		if($url[1] != '' && $url[1] == 'en') {
			$v = $url[1];
		}
	}
	return $v;
}

function changeLang($v = 'ru') {
	$url = explode('/', $_SERVER['REQUEST_URI']);
	if(count($url)) {
		$url[1] = $v;
		
		$url = implode('/', $url);
	}
	return $url;
}

add_action('init', 'rewrite_rules');  
function rewrite_rules(){
	add_rewrite_tag('%as_slider%','([^&]+)'); // Регистрируем параметр genre
	//add_rewrite_rule('^films/([^/]*)/([^/]*)/?$','index.php?pagename=films&genre=$matches[1]&country=$matches[2]','top');
	// Добавляем новое правило, 3-й параметр top говорит о том, что правило необходимо проверять первым.
}

/*
function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
*/


/*
function new_excerpt_length($length){
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');




function shortStr($str,$len=77) {
	$str = strip_tags($str);
	$str = strtr($str,array("\t"=>'',"\n"=>'',"\r"=>'',"    "=>' ',"   "=>' ',"  "=>' ',));
	return mb_substr($str, 0, $len, 'UTF-8').'…';
}

function getPostImgUrl($id,$size='large') {
	$image_id = get_post_thumbnail_id($id);
	$image_url = wp_get_attachment_image_src($image_id, $size);
	return $image_url[0];
}
*/



function pagination($wp_query, $pages = '', $range = 10)
{
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '') {
		//global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}
	if(1 != $pages) {
		echo "<div class=\"pagination\"><span>Страница ".$paged." из ".$pages."</span>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		echo "</div>\n";
	}
}



/* Регистрируем Элементы и таксономию для них
-----------------------------------------------*/
/*
add_action('init', 'posttype_azbnelement');
function posttype_azbnelement()
{
	$labels = array(
		'name' => 'Элементы сайта',
		'singular_name' => 'Элемент',
		'add_new' => 'Добавить элемент',
		'add_new_item' => 'Добавить новый элемент',
		'edit_item' => 'Редактировать элемент',
		'new_item' => 'Новый элемент',
		'view_item' => 'Посмотреть элемент',
		'search_items' => 'Найти элемент',
		'not_found' =>	'Элементов не найдено',
		'not_found_in_trash' => 'В корзине элементов не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Элементы'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 3,
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'), //'custom-fields'
	'taxonomies' => array('azbnelement_taxonomies') 
	);
	register_post_type('azbnelement',$args);	
}

// Создаем новую таксономию для элементов
add_action('init', 'create_posttype_azbnelement_taxonomies', 0 );

function create_posttype_azbnelement_taxonomies(){
	$labels = array(
		'name' => _x( 'Категории элементов', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория элемента', 'taxonomy singular name' ),
		'search_items' =>	__( 'Найти категорию элементов' ),
		'all_items' => __( 'Все категории элементов' ),
		'parent_item' => __( 'Родительская категория элемента' ),
		'parent_item_colon' => __( 'Родительская категория' ),
		'edit_item' => __( 'Родительская категория' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую катгорию' ),
		'new_item_name' => __( 'Название новой категории элементов' ),
		'menu_name' => __( 'Категории элементов' ),
	);

	register_taxonomy('azbnelement_taxonomies', array('azbnelement'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'azbnelements' ),
	));

}
*/
