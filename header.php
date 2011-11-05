<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('--',true,'right'); ?> <?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="alternate" type="application/rss+xml" title="leflings.dk &raquo; Feed" href="http://leflings.dk/feed/" /> 

	
	<?php wp_head(); ?>
	
</head>
<body class="container_12">