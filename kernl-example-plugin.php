<?php
/**
 * Plugin Name: Kernl Example Plugin GitHub
 * Plugin URI: https://kernl.us
 * Description: The Kernl Plugin for testing GitHub Testing
 * Version: 1.3.1
 * Author: Jack Slingerland
 * Author URI: http://re-cycledair.com
 */

// This is another test comment.
require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/56508ee948447e402e805290/',
    __FILE__,
    'kernl-example-plugin-github',
    1
);
$MyUpdateChecker->remoteGetTimeout = 7;
?>
