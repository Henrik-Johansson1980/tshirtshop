<?php

namespace Tshirtshop;

use Smarty;

// Reference Smarty Lib
require_once(SMARTY_DIR . 'Smarty.class.php');

class Application extends Smarty
{
    public function __construct()
    {
        // Change the Default template Directories
        $this->template_dir = TEMPLATE_DIR;
        $this->compile_dir = COMPILE_DIR;
        $this->config_dir = CONFIG_DIR;
        $this->plugins_dir[0] = SMARTY_DIR . 'plugins';
        $this->plugins_dir[1] = PUBLIC_DIR . 'smarty_plugins';
    }
}
