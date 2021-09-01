<?php
defined( 'ABSPATH' ) || exit;

$settings = array();
$setting_checkout = array();

//Products Display Settings

// Initialize Settings
$settings['product_gallery'] = array(
   "product_gallery", //Name
   "Single Product Page Gallery <em style='display:block;font-size:12px;color:#777;'>(Disable if zoom plugin is installed)</em>", //Title
   "product_gallery_func", //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "true" // Value
);

$settings['enable_category_list'] = array(
   "enable_category_list", //Name
   "Category list <em style='display:block;font-size:12px;color:#777;'>(Enable Category List of products)</em>", //Title
   "enable_cat_func",  //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "true" // Value
);

$settings['sale_tag'] = array(
   "sale_tag", // Name
   "Percentage on Sale tag", //Title
   "sale_tag_func", //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "true" // Value
);

$settings['sale_text'] = array(
   "sale_text", // Name
   "Sale Tag Text <em style='display:block;font-size:12px;color:#777;'>(Disabled if Percentage is True)</em>", //Title
   "sale_text_func",  //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "On Sale!" // Value
);

$settings['enable_qv'] = array(
   "qv_enable", // Name
   "Enable Quick View",  //Title
   "qv_enable_func",  //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "true" // Value
);

$settings['quickview_text'] = array(
   "qv_text", // Name
   "Quick View Text <em style='display:block;font-size:12px;color:#777;'>(Disabled if Quickview is true)</em>", // Title
   "qv_text_func", // Function
   "woo_sec", // Section
   "woo_setting", // setting
   "Quickview" // Value
);


$settings['out_of_stock_text'] = array(
   "out_of_stock_text", //Name
   "Out of Stock Text <em style='display:block;font-size:12px;color:#777;'>(Sold Text)</em>",  //Title
   "out_of_stock_text_func", //Function
   "woo_sec", // Section
   "woo_setting", // setting
   "Out of Stock!" // Value
);

//Checkout Settings

$setting_checkout['enable_additional_notes'] = array(
  "enable_additional_notes", //Name
  "Additional Notes <em style='display:block;font-size:12px;color:#777;'>(Enable Notes on Checkout)</em>", //Title
  "add_notes_func",  //Function
  "woo_check", // Section
  "woo_checkout", // setting
  "false" // Value
);
