<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://techslide.de/
 * @since      1.0.0
 *
 * @package    Servtake_Menu
 * @subpackage Servtake_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Servtake_Menu
 * @subpackage Servtake_Menu/includes
 * @author     Oliver Fabian Fischer <oliverfabianfischer@gmail.com>
 */
class Servtake_Menu_i18n
{


  /**
   * Load the plugin text domain for translation.
   *
   * @since    1.0.0
   */
  public function load_plugin_textdomain()
  {

    load_plugin_textdomain(
      'servtake-menu',
      false,
      dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
    );
  }
}
