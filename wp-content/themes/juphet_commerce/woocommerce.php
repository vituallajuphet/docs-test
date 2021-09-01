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
	<div class="wrapper woocommerce">
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
				<?php woocommerce_content();?>
			</main>
		</div>
	</div>
</div>
<?php get_includes('footer'); ?>