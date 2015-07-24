<?php
/**
 * Plugin Name: Kernl Example Plugin
 * Plugin URI: https://kernl.us
 * Description: The Kernl Plugin for testing.
 * Version: 2.1.6
 * Author: Jack Slingerland
 * Author URI: http://re-cycledair.com
 */

// This is another test comment.
require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5544bd7e5b8ae0fc1fa5e7a5/',
    __FILE__,
    'kernl-example-plugin',
    1
);
?>