<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Page not Found</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/404.min.css">
	</head>
<body>
	<div class="protect-me">
	<div class="clearfix">
		<div class = "for-searching">
			<div class="fourofour-logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/main_logo.png" alt="<?php echo get_bloginfo('name');?>" /></a>
			</div>
			<div class="wrapper">
				<div id="post-0" class="post error404 not-found">
					<p class = "fourOfour">Page Not Found!<p>
						<p class = "wrongtext"><?php _e( 'Please search the page below.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
				</div><!-- #post-0 -->
				<script type="text/javascript">
					// focus on search field after it has loaded
					document.getElementById('s') && document.getElementById('s').focus();
				</script>
			</div>
		</div>
		</div>
	</div>
	<?php get_includes('ie');?>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery-1.9.0.min.js"></script>
</body>
</html>
