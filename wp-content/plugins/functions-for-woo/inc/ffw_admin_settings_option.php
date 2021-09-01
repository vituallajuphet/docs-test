<?php
/*
 * Get settings
 */
include 'classes/class-admin-settings.php';

//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

$fields = $settings;
$settings = array();

$field_checkout = $setting_checkout;
$setting_checkout = array();

foreach ($fields as $key => $value) {
	$settings[$value[0]] = sanitize_text_field(get_option($value[0], $value[5]));
}

foreach ($field_checkout as $key => $value) {
	$setting_checkout[$value[0]] = sanitize_text_field(get_option($value[0], $value[5]));
}
