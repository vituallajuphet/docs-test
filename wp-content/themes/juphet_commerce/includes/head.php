<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/index.min.css">
	<?php if(!is_front_page()){ ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/non_home.css">
	<?php } ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/lib/rslider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/lib/animations.css">
	<?php wp_head(); ?>
</head>
<body>
    <div class="app">