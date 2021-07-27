<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://itech-softsolutions.com/
 * @since             1.0.0
 * @package           Itech_Doc
 *
 * @wordpress-plugin
 * Plugin Name:       iTech Doc
 * Plugin URI:        https://itech-softsolutions.com/itech-doc
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            iTech Theme
 * Author URI:        https://itech-softsolutions.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       itech-doc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ITECH_DOC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-itech-doc-activator.php
 */
function activate_itech_doc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itech-doc-activator.php';
	Itech_Doc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-itech-doc-deactivator.php
 */
function deactivate_itech_doc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-itech-doc-deactivator.php';
	Itech_Doc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_itech_doc' );
register_deactivation_hook( __FILE__, 'deactivate_itech_doc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-itech-doc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_itech_doc() {

	$plugin = new Itech_Doc();
	$plugin->run();

}
run_itech_doc();

// Require File

require_once( __DIR__ . '/public/inc.php' );

// Setup Carbon Fields

use Carbon_Fields\Container;
use Carbon_Fields\Field;

require_once "vendor/autoload.php";

function itech_doc_boot(){
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action('plugins_loaded', 'itech_doc_boot');


// Setup Single Template

function itech_doc_template( $file ) {
	global $post;
	if ( "doc" == $post->post_type ) {

		$file_path	= plugin_dir_path( __FILE__ ) . "/public/template/single-doc.php";
		$file 	= $file_path;
	}
	return $file;
}

add_filter ( 'single_template', 'itech_doc_template' );


// Meta Box

function itech_doc_general_metabox(){
	Container::make("post_meta",__('General Settings', 'itech-doc'))
	->where('post_type','=','doc')
	->add_fields([
		Field::make('image','itech_doc_logo',__('Logo', 'itech-doc')),
		Field::make('text','itech_doc_version',__('Version', 'itech-doc')),
		Field::make('text','itech_doc_copy_right',__('Copyright', 'itech-doc')),
	]);

	Container::make("post_meta",__('Style Settings', 'itech-doc'))
	->where('post_type','=','doc')
	->add_fields([
		Field::make('color','itech_doc_header_background',__('Header Backgound', 'itech-doc')),
		Field::make('color','itech_doc_header_color',__('Header Color', 'itech-doc')),
		Field::make('color','itech_doc_version_color',__('Version Color', 'itech-doc')),
		Field::make('color','itech_doc_sidebar_background_color',__('Sidebar Backgound Color', 'itech-doc')),
		Field::make('color','itech_doc_menu_color',__('Menu Color', 'itech-doc')),
		Field::make('color','itech_doc_active_menu_color',__('Active Menu Color', 'itech-doc')),
		Field::make('color','itech_doc_active_menu_border_color',__('Active Menu Border Color', 'itech-doc')),
	]);

	Container::make( 'post_meta', __('Sections', 'itech-doc') )
    ->where( 'post_type', '=', 'doc' )
    ->add_fields( array(
        Field::make( 'complex', 'itech_doc_sections', __('Main Section', 'itech-doc') )
            ->add_fields( array(
                Field::make('text','itech_doc_title',__('Setion Title', 'itech-doc')),
                Field::make('rich_text','itech_doc_description',__('Setion Description', 'itech-doc')),
                Field::make( 'complex', 'itech_doc_sub_sections',__('Sub Section', 'itech-doc') )
                    ->add_fields( array(
                        Field::make('text','itech_doc_sub_title',__('Setion Title', 'itech-doc')),
                		Field::make('rich_text','itech_doc_sub_description',__('Setion Description', 'itech-doc')),
                    ))
            )),
    ));

}
add_action('carbon_fields_register_fields', 'itech_doc_general_metabox');