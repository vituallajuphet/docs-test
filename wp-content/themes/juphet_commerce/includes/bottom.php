<div id="section2">
  <div class="wrapper">
      <div class="sect2_cont animatedParent animateOnce">
          <?php dynamic_sidebar('featured_section');?>
          <div id="featured-section">
                <?php do_action( 'woocommerce_before_single_product' ); ?>
            </div>
          <div class="feature_cont">
             <!-- start -->
            <?php
				$homefeatured = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                    ),
                );
				$loop = new WP_Query( $homefeatured );
				$count = 0;
                $delay = 0;
				if ( $loop->have_posts() ) {
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                     <?php  
                       $count++;
                       $thePrice = $product->get_price(); //will give raw price
                    ?>
            <div class="product_container animated fadeInUp <?php echo $delay!=0 ? "delay-".$delay :"";?>">
               <a href="<?php echo get_permalink($id); ?>"><figure> <img src="<?php $url =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');echo $url[0];  ?>" alt="featured products"> </figure></a>
               <h3><?= the_title();?></h3>
               <span class='prod_price'><?=number_format($thePrice, 2)?></span>
               <?php 
                    if ( !$product->is_type( 'variable' ) ) { ?>
                    <a class="add_cart_btn" href="<?php echo site_url().'/?add-to-cart='.get_the_ID().'#featured-section' ?>">Add to Cart</a>
                    <?php } else{ ?>
                    <a href="<?php echo get_permalink($id); ?>">View Product</a>
                <?php } ?>
            </div>
              
                <?php 
                $delay+= 500;    
            endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
                ?>
            <!-- end -->
          </div>
          <div class="viewall">
              <a href="shop">View All Products</a>
          </div>
      </div>
  </div>
</div>

