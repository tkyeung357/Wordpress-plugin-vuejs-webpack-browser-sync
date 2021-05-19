<?php
/**
 * @wordpress-plugin
 * Plugin Name:      VueappAndWebpack 
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class VwpPlugin2
{
  public $plugin;

  function __construct() {
    $this->plugin = plugin_basename(__FILE__);
  }

  function register() {
    add_action('admin_menu', array($this, 'add_admin_page'));
    add_action('admin_enqueue_scripts', array($this, 'enqueue_assets'));
    add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
  }

  public function settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=vwp_plugin2">Settings</a>';
    array_push($links, $settings_link);
    return $links;
  }

  function enqueue_assets() {
    wp_register_script('Vuejs','https://unpkg.com/vue@3.0.11/dist/vue.global.js',null, null, false);
    wp_register_script('Vuejs-router','https://unpkg.com/vue-router@4.0.5/dist/vue-router.global.js','Vuejs', null, false);
    wp_enqueue_script('Vuejs');
    wp_enqueue_script('Vuejs-router');
    // wp_enqueue_style( "$this->plugin-css", plugins_url('/public/styles.css', __FILE__) );
    // wp_enqueue_script( "$this->plugin-js", plugins_url('/public/scripts.js', __FILE__), null, null, true );
    wp_enqueue_script( "admin-app", plugins_url('/admin/dist/build.js', __FILE__), null, null , true );
  }

  public function add_admin_page() {
    add_menu_page("Vue WordPress", 'Vue WordPress', 'manage_options', 'vwp_plugin2', array($this, 'admin_index'), '');
  }

  public function admin_index() {
    $config = [
      'adminRootUrl' => plugins_url('/admin', __FILE__)
    ];
    require_once plugin_dir_path(__FILE__) . 'admin/index.php';
  }
}

if ( class_exists('VwpPlugin2') ) {
  $vwpPlugin = new VwpPlugin2();
  $vwpPlugin->register();
}

// Activation
require_once plugin_dir_path(__FILE__)  . 'inc/vwp-plugin-activate2.php';
register_activation_hook( __FILE__, array( 'VwpPluginActivate2', 'activate' ) );

// Deactivation
require_once plugin_dir_path(__FILE__)  . 'inc/vwp-plugin-deactivate2.php';
register_deactivation_hook( __FILE__, array( 'VwpPluginDeactivate2', 'deactivate' ) );
