<?php
/**
 * Plugin Name: Kernl Example Plugin GitHub
 * Plugin URI: https://kernl.us
 * Description: The Kernl Plugin for testing GitHub Testing
 * Version: 2.2.4
 * Author: Jack Slingerland
 * Author URI: http://re-cycledair.com
 */

//
// Plugin update example
//
require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'http://maksimer.kernl.us/api/v1/updates/56508ee948447e402e805290/',
    __FILE__,
    'kernl-example-plugin-github',
    1
);
$MyUpdateChecker->remoteGetTimeout = 7;

//
// Feature Flags example
//
require __DIR__ . '/vendor/autoload.php';

$kernlFeatureFlagProductKey = '58cb023bc9689c1fe811615d';
$userIdentifier = 'jack@kernl.us';

$kff = new kernl\WPFeatureFlags($kernlFeatureFlagProductKey, $userIdentifier);
if ($kff->active('GITHUB_ON_OFF')) {
    add_action('admin_notices', 'feature_flag_active');
}

function feature_flag_active() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p>Great work!  The feature flag is active.</p>
    </div>
    <?php
}

?>