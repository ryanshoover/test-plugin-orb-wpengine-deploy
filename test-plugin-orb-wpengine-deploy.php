<?php
/**
 * Test Plugin for orb ryanshoover/wpengine
 *
 * @package     OrbTest\Plugin
 * @author      DX Team
 * @license     Proprietary
 *
 * @wordpress-plugin
 * Plugin Name: Test Plugin for orb ryanshoover/wpengine
 * Plugin URI:  https://wpengine.com
 * Description: Plugin used solely for testing functional in orb-wpengine-deploy
 * Version:     0.1.0
 * Author:      DX Team
 * Author URI:  https://wpengine.com
 * Text Domain: orbtest-plugin
 * License:     Proprietary
 */

namespace OrbTest\Plugin;

add_action(
	'wp_footer',
	function() {
		require plugin_dir_path( __FILE__ ) . 'templates/footer.php';
	}
);
