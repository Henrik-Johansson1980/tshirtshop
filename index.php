<?php

namespace Tshirtshop;

use Tshirtshop\presentation\Application;
use Tshirtshop\business\Errorhandler;
use Tshirtshop\business\DatabaseHandler;

// Include utilities
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';
require_once BUSINESS_DIR . 'database_handler.php';
require_once BUSINESS_DIR . 'catalog.php';

// Set Error Handler
ErrorHandler::setHandler();

// Load application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';

// Load Smarty template file
$application = new Application();


// Display Page
$application->display('store_front.tpl');
DatabaseHandler::close();
