<div id="navigation">
    <div class="wrapper">
        <div class="nav_cont">
            <div class="log_cont">
                <div class="togglecont">
                    <div class="toggleNav">
                        <span><i class="fas fa-bars"></i></span>
                    </div>
               </div>
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.jpg" alt="<?php echo get_bloginfo('name');?>"></a>
                </div>
            </div>
            <nav class='main_nav'>
              <div class="main_nav_cont">
                 <?php  wp_nav_menu( array( 'container_class' => 'nav-menu', 'theme_location' => 'primary' )); ?> 
              </div>
               
               <div class="mobile_nav">
                   <div class="mobile_nav_cont">

                   </div>
               </div>
            </nav>
            <div class='mob_cart_cont'>
                <ul></ul>
            </div>
        </div>
    </div>
</div>