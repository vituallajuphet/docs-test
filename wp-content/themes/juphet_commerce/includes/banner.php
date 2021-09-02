<div id="banner">
  <div class="wrapper">
      <div class="banner_cont">
        <?php if (is_front_page() ) { ?> 
          <ul class="rslides">
              <li><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="woman smiling"></li>
              <li><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="products"></li>
          </ul>
        <?php } else {?>
          <div class="non_ban">
              <figure>
                <?php if (has_post_thumbnail() &&  !is_single() && !is_shop() && !is_product_category() ) {?>
                  <?php the_post_thumbnail('full');?>
                <?php }else{ ?>
                  <img src="<?php bloginfo('template_url');?>/images/slider/non_home.png" alt="product">
                <?php } ?>
            </figure>

              <div class="page_title">
              <?php if(is_product_category() || is_shop() || is_product()){ ?>
                    <h1 class="h1_title"><?php echo woocommerce_page_title(); ?></h1>
                <?php  } elseif(!is_home() && !is_author() && !is_category() && !is_tag() && !is_single()) { ?>
                  <h1 class="h1_title"><?php the_title(); ?></h1>
                  <?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
                <?php } else { ?>
                  <h1 class="headings_title">Blog</h1>
                <?php } ?>
              </div>
            </div>
        <?php }?> 
      </div>
  </div>
</div>