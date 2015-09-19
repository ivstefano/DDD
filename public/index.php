<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 16/09/2015
 * Time: 08:15
 * Type:
 */


// TODO: Change it from mock to normal class that separates the URL string
// website/ddd/createInvoice/id/5
/*$url = new URL('contracts', 'finder', 'getInvoices', ['id' => 5]);
$actionName = $url->getAction();
$parameters = $url->getParameters();

$injector = new DIC();


$controller = $injector->make($url->getController());
$controller->invoke($action, $parameters);*/

// Let it explode ...
error_reporting(E_ALL);

// Configure shortcuts ...
define('SLASH',        DIRECTORY_SEPARATOR);

// Configure file constants ...
define('MAIN_FILE',     'main.php');
define('AUTOLOAD_FILE', 'autoload.php');

// Configure directory constants ...
define('BASE_DIR',      __DIR__   . SLASH . '..');
define('APP_DIR',       BASE_DIR  . SLASH . 'src');
define('SETUP_DIR',     BASE_DIR  . SLASH . 'setup');
define('VENDOR_DIR',    BASE_DIR  . SLASH . 'vendor');
define('ROUTES_DIR',    SETUP_DIR . SLASH . 'routes');
define('CONFIG_DIR',    SETUP_DIR . SLASH . 'configs');
define('BOOTSTRAP_DIR', SETUP_DIR . SLASH . 'bootstrap');

// In AutoLoader Veritas
require VENDOR_DIR . SLASH . AUTOLOAD_FILE;

// Bootstrap the application
require APP_DIR . SLASH . 'Methodology/Command/test.php';