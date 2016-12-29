<meta charset="utf-8">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<title>
<?
if(is_category()) {
	single_cat_title();
} else {
	the_title();
}
?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
<link type="image/x-icon" href="/favicon.ico" rel="icon" />

<link rel="apple-touch-icon" sizes="57x57" href="<?=$this->path('img');?>/../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=$this->path('img');?>/../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=$this->path('img');?>/../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=$this->path('img');?>/../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=$this->path('img');?>/../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=$this->path('img');?>/../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=$this->path('img');?>/../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=$this->path('img');?>/../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=$this->path('img');?>/../favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?=$this->path('img');?>/../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=$this->path('img');?>/../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=$this->path('img');?>/../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$this->path('img');?>/../favicon/favicon-16x16.png">
<link rel="manifest" href="<?=$this->path('img');?>/../favicon/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?=$this->path('img');?>/../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link href="<?=$this->path('css');?>/site.css?v=<?=date("Ymd");?>" rel="stylesheet">