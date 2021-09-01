<?php
/*
Description: Admin Settings
Author: 783 | 788 (SP Proweaver)
Version: 1.0
*/

//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

/**
 * Initialise setting options.
 */
require 'ffw_admin_settings_option.php';
/**
 * Initialise Form Fields.
 */
function includes() {
	include 'classes/class-admin-settings.php';
	include 'classes/class-admin-functions.php';
}

function woo_qv_menu_settings(){
	add_menu_page( 'Functions for Woo', 'Woo Settings', 'manage_options', 'woo_sec', 'ffw_page', 'dashicons-admin-generic', 61 );
}
add_action('admin_menu','woo_qv_menu_settings');
/**
 * Creating Page.
 */
function ffw_page(){
  ?>
      <div class="wrap">
		  <div id="icon-themes" class="icon32"></div>
        <h2>Additional WooCommerce Settings</h2>
        <?php settings_errors(); ?>
        <?php
                $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'products-disp';
        ?>

        <h2 class="nav-tab-wrapper">
            <a href="?page=woo_sec&tab=products-disp" class="nav-tab <?php echo $active_tab == 'products-disp' ? 'nav-tab-active' : ''; ?>">Products Display</a>
            <a href="?page=woo_sec&tab=checkout-page" class="nav-tab <?php echo $active_tab == 'checkout-page' ? 'nav-tab-active' : ''; ?>">Checkout</a>
        </h2>
         <form method="post" action="options.php">
            <?php
					   if( $active_tab == 'products-disp' ) {
	                settings_fields( 'woo_setting' );
	                do_settings_sections( 'woo_sec' );
	            } else if( $active_tab == 'checkout-page' ) {
	                settings_fields( 'woo_checkout' );
	                do_settings_sections( 'woo_check' );
	            }
               submit_button();
            ?>
         </form>
      </div>
   <?php
}

/*
  Initialise Forms
*/
function settings_page(){
	add_settings_section("woo_setting", "", null, "woo_sec");

	add_settings_section("woo_checkout", "", null, "woo_check");

	includes();
}
add_action("admin_init", "settings_page");

?>
