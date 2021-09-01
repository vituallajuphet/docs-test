xxxxxxxxxxxxxx_Upper_Code_xxxxxxxxxxxxxx
			
		<?php
			/* Queue the first post, that way we know who
			 * the author is when we try to get their name,
			 * URL, description, avatar, etc.
			 *
			 * We reset this later so we can run the loop
			 * properly with a call to rewind_posts().
			 */
			if ( have_posts() )
				the_post();
		?>

		<h1 class="page-title author"><?php printf( __( 'Author Archives: %s', 'twentyten' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>


			<?php
		// If a user has filled out their description, show a bio on their entries.
		if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
					</div><!-- #entry-author-info -->
		<?php endif; ?>


		<?php
		$args = array( 'post_status' => 'publish', 'post_type' =>  array('post', 'second_blog'), 'paged'=>$paged, 'author'=>$current_user->ID );
		$loop = new WP_Query( $args );
		$postCount = $loop ->post_count; // count of all posts

			if ( $loop->have_posts() ):
			 while ( $loop->have_posts() ) : $loop->the_post(); ?>
			 <div class="blog_cont">
			  <div id="post-<?php the_ID(); ?>" <?php if( ($postCount <= 2 && $postCount > 0) && $paged == 0 ){ post_class('full-width'); }else{post_class(); } ?>> <!--if one or two posts only -->
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