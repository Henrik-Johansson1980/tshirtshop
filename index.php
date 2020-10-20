<?php

namespace Tshirtshop;

use Tshirtshop\Application;
use Tshirtshop\Errorhandler;

// Include utilities
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set Error Handler
ErrorHandler::setHandler();

// Load application page template
require_once PUBLIC_DIR . 'application.php';

// Load Smarty template file
$application = new Application();

// Display Page
$application->display('store_front.tpl');

require_once 'file.php';
