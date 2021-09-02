<header id="header">
    <div class="wrapper">
        <div class="header__cont">
            <ul>
                <li>
                    <a href="https://facebook.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/icons/fb-icon.png" alt="facebook"></a>
                </li>
                <li>
                    <a href="https://instagram.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/icons/ing-icon.png" alt="instagram"></a>
                </li>
                <li>
                    <a href="https://twitter.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/icons/twitter-icon.png" alt="twitter"></a>
                </li>
                <li>
                    <a href="<?=site_url("/my-account/logout")?>" target="_blank"><i class="fas fa-sign-out-alt"></i></a>
                </li>
                <li class="cart-btn">
                    <a href="<?=site_url("/cart")?>"><i class="fas fa-shopping-cart"></i> <?=do_shortcode("[cart_count]");?></a>
                </li>
            </ul>
        </div>
    </div>
</header>