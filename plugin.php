<?php

/**
 * Plugin Name: Beebo Server
 * Plugin URI: https://github.com/BeeboIO/BeeboWordPressServer
 * Description: Beebo Server WordPress Plugin
 * Version: 1.0.0
 * Author: Aaron Collegeman
 * Author URI: https://github.com/collegeman
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: beebo-wordpress-server
 * Domain Path: /languages
 * Requires at least: 6.0
 * Tested up to: 6.4
 * Requires PHP: 8.0
 * Network: false
 */
if (! defined('ABSPATH')) {
    exit;
}

define('BEEBO_SERVER_VERSION', '1.0.0');
define('BEEBO_SERVER_PLUGIN_FILE', __FILE__);
define('BEEBO_SERVER_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BEEBO_SERVER_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once __DIR__.'/vendor/autoload.php';

add_action('plugins_loaded', function () {
    BeeboIO\WordPress\Server\Plugin::load();
});

register_activation_hook(__FILE__, function () {
    BeeboIO\WordPress\Server\Plugin::activate();
});

register_deactivation_hook(__FILE__, function () {
    BeeboIO\WordPress\Server\Plugin::deactivate();
});
