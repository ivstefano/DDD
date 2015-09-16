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
$url = new URL('contracts', 'finder', 'getInvoices', ['id' => 5]);
$actionName = $url->getAction();
$parameters = $url->getParameters();

$injector = new DIC();


$controller = $injector->make($url->getController());
$controller->invoke($action, $parameters);