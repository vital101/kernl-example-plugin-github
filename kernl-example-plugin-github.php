<?php
/**
 * Plugin Name: Kernl Example Plugin GitHub
 * Plugin URI: https://kernl.us
 * Description: The Kernl Plugin for testing GitHub Testing
 * Version: 2.6.1
 * Author: Jack Slingerland
 * Author URI: http://re-cycledair.com
 */

//
// Plugin update example
//
require 'cdn_plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://global.kernl.us/api/updates/plugin/56508ee948447e402e805290',
    __FILE__,
    'kernl-example-plugin-github',
    1
);
$MyUpdateChecker->remoteGetTimeout = 7;
?>