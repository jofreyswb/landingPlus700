 <?php
/**
 * header.php
 *
 *Error page
 *
 * @package landingPlus700
 * @since landingPlus700  1.0
 */
?>
<!doctype html>
<html>
<head>
<title><?php wp_title();?>| Plus 700</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/img/favocon_plus700-1.png">

<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/reset.css" type="text/css" />   -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" type="text/css" />
<!--<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/responsive-leyouts.css" type="text/css" />
<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/mainmenu/sticky.css" rel="stylesheet">  -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/menu.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/plitka.css">
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/mainmenu/menu.css">     -->
<!--<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/form/sky-forms.css" type="text/css" media="all">-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?/*<link href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" rel="stylesheet" type="text/css">*/?>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/menu.js"></script>
<script  src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/scrollto.js"></script>


<?php wp_head();?>
</head>
<body>
<div id="head"></div>
<a href="#head" title="Вверх"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/UpButoon.png" alt="" id="UpButton" class="UpButtonn"/> </a>

<div class="site_wrapper">
<div id="header">
<div id="trueHeader">
<div class="wrapper">
<div class="container_full">
<header class="clearfix">
<!-- Logo -->

<!--<div class="logo"><a href="#home" data-scroll><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/wp-content/uploads/2015/03/favocon_plus700.png" alt="" /></a></div>
-->
<div class="logo"><a href="/" data-scroll><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo_plus700.png" alt="" /></a></div>
<!-- Menu -->
<!--<div class="menu_main">
<nav class="nav-collapse">
<ul>
<li><a href="<?php bloginfo( 'url' ); ?>#home" data-scroll><i class="fa fa-circle"></i>Главная</a></li>
<li><a href="<?php bloginfo( 'url' ); ?>#about" data-scroll><i class="fa fa-circle"></i>О компании</a></li>
<li><a href="<?php bloginfo( 'url' ); ?>#advantages" data-scroll><i class="fa fa-circle"></i>Преимущества</a></li>
<li><a href="<?php bloginfo( 'url' ); ?>#catalog" data-scroll><i class="fa fa-circle"></i>Каталог</a></li>
<li><a href="<?php bloginfo( 'url' ); ?>#contact" data-scroll><i class="fa fa-circle"></i>Контакты</a></li>
</ul>
</nav>
</div>-->
<!-- end menu -->

<!-- My menu -->
<?
 $args = array(  'menu' => 'first',
'theme_location'=>'equipment-menu',
'container'=>'div',
'container_class'=>'first_children_menu_top',
'container_id'=>'firstMenu',
'menu_class'=>'first_sf-menu',
'menu_id'=>'first',
'fallback_cb'=>false
);
/*array( 'menu' => '',
'container' => 'div',
'container_class' => '',
'container_id' => '',
'menu_class' => 'menu',
'menu_id' => '',
'echo' => true,
'fallback_cb' => 'wp_page_menu',
'before' => '',
'after' => '',
'link_before' => '',
link_after' => '',
'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth' => 0,
    'walker' => '',
    'theme_location' => '' );   */
wp_nav_menu($args);
//wp_nav_menu('menu=first');
?>
<!-- END My menu -->
</header>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>

