<?php
/*  */

global $Azbn;

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><? the_title();?></title>
	
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link rel="stylesheet" href="<?php echo $Azbn->path('css');?>/pagination.css" />
	
	
	<script src="http://yandex.st/jquery/2.1.3/jquery.min.js"></script>
	<script>
	if(typeof window.jQuery === 'undefined') {
		document.write(
		unescape("%3Cscript src='<?php echo $Azbn->path('js');?>/jquery.min.js' type='text/javascript'%3E%3C/script%3E")
		);
	}
	</script>
	
	<!--[if lt IE 9]>
		<script src="<?php echo $Azbn->path('js');?>/html5.js"></script>
	<![endif]-->
	
	<script src="<?php echo $Azbn->path('js');?>/js.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
<?php get_sidebar(); ?>
