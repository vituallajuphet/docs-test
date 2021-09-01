<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php printf( __( 'Results for: %s', 'twentyten' ), get_search_query()); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/404.min.css">
	</head>
<body>
	<div class="protect-me">
	<div class="clearfix">
	<div id = "search-result">
		<div class="fourofour-logo">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/main_logo.png" alt="<?php echo get_bloginfo('name');?>" /></a>
		</div>
		<div class="wrapper">
			<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<div class="search_results">
				<?php get_template_part( 'loop', 'search' ); kriesi_pagination();?>
				</div>
			<?php else : ?>
				<div id="post-0" class="post no-results not-found for-searching">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p class = "wrongtext"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
			<?php endif; ?>
		</div>
	</div>
	</div>
	</div>
	<?php get_includes('ie');?>
<script src="<?php bloginfo('template_url');?>/js/vendor/jquery-1.9.0.min.js"></script>
</body>
</html>
