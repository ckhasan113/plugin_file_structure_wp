<?php

/**
 * @package MhPlugin
 */

namespace Inc\Pages;

use Inc\Base\BaseController;

class Admin extends BaseController
{

  /**
   * register method always use all the classes for tigger methods
   *
   * @return void
   */
  public function register()
  {
    add_action('admin_menu', array($this, 'add_admin_pages'));
  }

  public function add_admin_pages()
  {

    add_menu_page('Mh Plugin', 'Mh Admin', 'manage_options', 'mh_plugin', array($this, 'admin_index'), 'dashicons-heart', 110);
  }

  public function admin_index()
  {
    require_once $this->plugin_path . 'templates/admin.php';
  }
}
