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

// Turn off errors
//error_reporting(0);
