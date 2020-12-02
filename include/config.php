<?php

// SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

// App directories
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Settings needed to configure Smarty Template Engine
define('SMARTY_DIR', SITE_ROOT . '/vendor/smarty/smarty/libs/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

// Set these to true on development.
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// Error types to be reported
define('ERROR_TYPES', E_ALL);

// Error Mail settings
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'admin@example.com');
define('SENDMAIL_FROM', 'errors@example.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// Dont log errors to file by default
define('LOG_ERRORS', false);
define('SITE_GENERIC_ERROR_MSG', "<h1>TShirtShop Error!</h1>");
define('LOG_ERRORS_FILE', SITE_ROOT . "/error_log.txt");

// Database Connection setup
define('DB_PERSISTENCY', true);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'tshirtshop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');

/* Name of the virtual directory the site runs in i.e '/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/, '/' if the site runs at http://www.example.com/ */
define('VIRTUAL_LOCATION', '/tshirtshop/');

// Turn off errors
error_reporting(0);


//Next catalog_get_products_on_department
