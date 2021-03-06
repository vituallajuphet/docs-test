
<div id="footer">
  <div class="ftr_top">
      <div class="wrapper">
          <div class="ftrtop_cont">
              <div class="row-cont">
                  <h3>
                      Contact Information
                  </h3>
                  <div class="ftr_links">
                     <?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
                  </div>
                  
              </div>
              <div class="row-cont">
                  <h3>
                      Customer Service
                  </h3>
                  <div class="ftr_links">
                     <?php wp_nav_menu( array( 'theme_location' => 'third') ); ?>
                  </div>
              </div>
              <div class="row-cont">
                  <h3>
                      Follow Us
                  </h3>
                  <div class="ftr_links">
                      <a href="https://www.facebook.com" target="_blank">Facebook</a>
                      <a href="https://www.instagram.com" target="_blank">Instagram</a>
                      <a href="https://www.twitter.com" target="_blank">Twitter</a>
                  </div>
              </div>
              <div class="row-cont">
                  <h3>
                      Legal
                  </h3>
                  <div class="ftr_links">
                       <?php wp_nav_menu( array( 'theme_location' => 'fourth') ); ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="ftr_btm">
      <div class="wrapper">
          <h5 class='ftr_btn_heading'>Our Safety Promise</h5>
          <div class='cop_icons'>
             <?php dynamic_sidebar('footer_icon_section');?>
          </div>
          Copyright © 2021 Doctors Preferred. All rights reserved. Terms of Use | Privacy Policy
      </div>
  </div>
  </div>
</div>
    </div>
    <script src='<?php bloginfo('template_url');?>/js/jquery.js'></script>
    <script src='<?php bloginfo('template_url');?>/js/rslider.js'></script>
    <script src='<?php bloginfo('template_url');?>/js/css3-animate-it.js'></script>
    <script src='<?php bloginfo('template_url');?>/js/app.js'></script>
    <?php wp_footer(); ?>
</body>
</html>