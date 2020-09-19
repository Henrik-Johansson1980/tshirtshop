<?php
// Include utilities

require_once('include/config.php');

// Load application page template
require_once( PUBLIC_DIR . 'application.php');

// Load Smarty template file
$application = new Application();

// Display Page
$application->display('store_front.tpl');

