<?php
// Reference Smarty Lib
require_once(SMARTY_DIR . 'Smarty.class.php');

class Application extends Smarty
{
  public function __construct()
  {
    //parent::Smarty();
    
    // Change the Default template Directories
    $this->template_dir = TEMPLATE_DIR;
    $this->compile_dir = COMPILE_DIR;
    $this->config_dir = CONFIG_DIR;
  }
}