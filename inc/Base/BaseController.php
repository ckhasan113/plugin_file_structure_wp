<?php

/**
 * @package MhPlugin
 */

namespace Inc\Base;

/**
 * This BaseController class is only exteneds by other class
 * In this class we define all the require_once and use
 */

class BaseController
{
  public $plugin_path;
  public $plugin_url;
  public $plugin_basename;

  public function __construct()
  {
    /**
     * second perameter is the postion of this file from root. this file is in "Base" folder which is in "inc" folder and "inc" is in root folder, which meens this file postion is in 2
     * this number also define how many times we need to go back to have the exect directory, like for basename we have to go back 3 times
     */
    $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
    $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
    $this->plugin_basename = plugin_basename(dirname(__FILE__, 3) . '/mh-plugin.php');
  }
}
