<?php
// file tests/wpunit/PluginLoadedTest.php

class PluginLoadedTest extends \Codeception\TestCase\WPTestCase {

    public function test_namespaced_slug() {
		$this->assertEquals( 'orbtest-plugin', \OrbTest\Plugin\SLUG );
    }
}
