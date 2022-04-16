<?php
/**
 * Plugin Name: Kernl Example Plugin GitHub
 * Plugin URI: https://kernl.us
 * Description: The Kernl Plugin for testing GitHub Testing
 * Version: 2.9.3
 * Author: Jack Slingerland
 * Author URI: http://re-cycledair.com
 */

//
// Plugin update example
//
require __DIR__ . '/vendor/autoload.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://kernl.us/api/v1/updates/56508ee948447e402e805290',
    __FILE__,
    'kernl-example-plugin-github'
);
?>