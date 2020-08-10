<?php
// file tests/functional/PluginLoadedCest.php

class PluginLoadedCest {

	public function _before( FunctionalTester $I ) {
		$I->loginAsAdmin();
		$I->amOnPluginsPage();
		$I->activatePlugin( 'test-plugin-for-orb-ryanshoover/wpengine' );
	}

	public function test_footer_template( FunctionalTester $I ) {
		$I->amOn( '/' );
		$I->see( 'Plugin used solely for testing functional in orb-wpengine-deploy.' );
	}
}
