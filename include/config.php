<?php

// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// App directories
define('PUBLIC_DIR', SITE_ROOT . '/public/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Settings needed to configure Smarty Template Engine
define('SMARTY_DIR', SITE_ROOT . '/vendor/smarty/smarty/libs/');
define('TEMPLATE_DIR', PUBLIC_DIR . 'templates');
define('COMPILE_DIR', PUBLIC_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

