<?php
/**
 * Plugin Name: Image Caption Hover Galleries
 * Plugin URI: http://webcodingplace.com/image-hover-gallery-wordpress-plugin
 * Description: Create multiple galleries for images with CSS3 based hover effects for captions.
 * Version: 0.1
 * Author: Rameez
 * Author URI: http://webcodingplace.com/
 * Text Domain: image-hover-gallery
 */

/*

  Copyright (C) 2015  Rameez  rameez.iqbal@live.com

*/
require_once('plugin.class.php');

if( class_exists('Image_Hover_Gallery')){
	
	$just_initialize = new Image_Hover_Gallery;
}

?>