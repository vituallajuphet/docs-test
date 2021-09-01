<?php
//Register settings
foreach ($settings as $key => $value) {
   add_settings_field(
      $value[0],
      $value[1],
      $value[2],
      $value[3],
      $value[4]
   );
   register_setting("woo_setting", $value[0]);
}

foreach ($setting_checkout as $key => $value) {
   add_settings_field(
      $value[0],
      $value[1],
      $value[2],
      $value[3],
      $value[4]
   );
   register_setting("woo_checkout", $value[0]);
}

function product_gallery_func(){
   global $settings; ?>
   <input type="checkbox" name="product_gallery" value="true" <?php checked('true', $settings['product_gallery'], true); ?> />
   <?php
}

function sale_tag_func(){
   global $settings; ?>
   <input type="checkbox" name="sale_tag" value="true" class="sale_tag" <?php checked('true', $settings['sale_tag'], true); ?> />
   <?php
}

function qv_enable_func(){
	global $settings; ?>
	<input type="checkbox" name="qv_enable" value="true" <?php checked('true', $settings['qv_enable'], true); ?> />
	<?php
}

function add_notes_func(){
	global $setting_checkout; ?>
	<input type="checkbox" name="enable_additional_notes" value="true" <?php checked('true', $setting_checkout['enable_additional_notes'], true); ?> />
	<?php
}

function enable_cat_func(){
	global $settings; ?>
	<input type="checkbox" name="enable_category_list" value="true" <?php checked('true', $settings['enable_category_list'], true); ?> />
	<?php
}

function out_of_stock_text_func(){
	global $settings; ?>
	<input type="text" class="woo-qv-input" name="out_of_stock_text" value="<?php echo $settings['out_of_stock_text']; ?>">
   <?php
}

function qv_text_func(){
	global $settings; ?>
	<input type="text" class="woo-qv-input" name="qv_text" value="<?php echo $settings['qv_text']; ?>">
   <?php
}

function sale_text_func(){
	global $settings; ?>
	<input type="text" class="woo-qv-input" name="sale_text" value="<?php echo $settings['sale_text']; ?>">
   <?php
}
