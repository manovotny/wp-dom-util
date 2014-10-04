<?php
/**
 * @package WP_DOM_Util
 *
 * @wordpress-plugin
 * Plugin Name: WP DOM Util
 * Plugin URI: https://github.com/manovotny/wp-dom-util
 * Description: A PHP DOM utility for WordPress.
 * Version: 1.0.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /TRANSLATIONS_PATH
 * Text Domain: TRANSLATIONS_DOMAIN
 * GitHub Plugin URI: https://github.com/manovotny/wp-dom-util
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';