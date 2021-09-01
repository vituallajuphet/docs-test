xxxxxxxxxxxxxx_Upper_Code_xxxxxxxxxxxxxx
			
			<h1 class="page-title">
			<?php
          printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
      ?></h1>

			<?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                echo '<div class="archive-meta">' . $category_description . '</div>';

        /* Run the loop for the category page to output the posts.
         * If you want to overload this in a child theme then include a file
         * called loop-category.php and that will be used instead.
           */

	$category = get_queried_object()->term_id;


	$args = array( 'post_status' => 'publish', 'post_type' =>  array('post', 'second_blog'), 'paged'=>$paged, 'category__in' => $category );
	$loop = new WP_Query( $args );
	$postCount = $loop ->post_count;		// count of all posts

	 if ( $loop->have_posts() ):
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="blog_cont">

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <div class="img_wrapper">
	          <?php
	            /* Display image on loop-home */
	            $content = get_the_content();
	            $count = preg_match('/src=(["\'])(.*?)\1/', $content, $match);
	            if ($count != FALSE){
	              $url = ($match[2] . "\n"); ?>
	              <img src="<?php echo $url; ?>" alt="image"/>
	            <?php }else{ ?>
	              <img src="<?php bloginfo("template_url") ?>/images/blog/default.png" alt="<?php echo get_bloginfo('name');?>"/>
	          <?php } ?>
	        </div>

	        <div class="info_cont">
						<h2 class="blog_heading"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 11, '...' ); ?></a></h2>
	          <p><?php echo get_excerpt(250); ?></p>
						<a class="read_more" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
	        </div>
	        <div class="blog_footer">
	          <div class="author_link">
	            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
	              <?php printf( __( 'By %s <span class="meta-nav"></span>', 'twentyten' ), get_the_author() ); ?>
	            </a>
	          </div>
	          <span class="blog_date"><?php echo get_the_date();?></span>

	        </div>
	  		</div><!-- #post-## -->
	    </div>
		<?php endwhile; kriesi_pagination(); // end of the loop.
			else: ?>
		<div class="entry-content">
			<p class="comingsoon">No Blog Post</p>
		</div>
		<?php endif; ?>
			
			</div>
			xxxxxxxxxxxxxx_Lower_Code_xxxxxxxxxxxxxx