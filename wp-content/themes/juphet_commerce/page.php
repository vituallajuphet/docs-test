<?php
@session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
if(is_front_page()){
    get_includes('middle');
}
?>
<div id="main">
	<div class="wrapper">
		<div class="main_cont">
			<?php if(!is_front_page()){ ?>
				<div class="breadcrumbs">
				<?php
						if(function_exists('bcn_display'))
						{
							bcn_display();
						}?>
				</div>
			<?php } ?>
			<main>
				<?php get_template_part('loop','page');?>
			</main>
			<?php if(is_front_page()){ ?>
			<figure>
				<img src="<?php bloginfo('template_url');?>/images/main_img.jpg" alt="product image">
			</figure>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_includes('bottom'); ?>
<?php get_includes('footer'); ?>