<?php
// file tests/acceptance/PluginLoadedCest.php

class PluginLoadedCest {

	public function _before( AcceptanceTester $I ) {
		$I->loginAsAdmin();
		$I->amOnPluginsPage();
		$I->activatePlugin( 'test-plugin-for-orb-ryanshoover/wpengine' );
	}

	public function test_footer_template( AcceptanceTester $I ) {
		$I->amOn( '/' );
        $I->amOn( '/?p=1' );

        $I->seeCookie( 'test-plugin-orb-wpengine-deploy' );
	}
}
