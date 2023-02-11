<?php

/**
 * @package MhPlugin
 */

namespace Inc\Base;

use Inc\Base\BaseController;


class SettingsLinks extends BaseController
{

  //This is one process
  /* protected $plugin;
  public function __construct()
  {
    $this->plugin = PLUGIN_BASENAME;
  }
  public function register()
  {
    add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
  } */

  //This is second process
  public function register()
  {
    add_filter("plugin_action_links_$this->plugin_basename", array($this, 'settings_link'));
  }

  public function settings_link($links)
  {
    $settings_link = '<a href="admin.php?page=mh_plugin">Settings</a>';
    array_push($links, $settings_link);
    return $links;
  }
}
