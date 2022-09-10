<?php

namespace No3x\WPML\Tests\Helper;

use No3x\WPML\WPML_Plugin;

/**
 * Class WPML_UnitTestCase
 * @package No3x\WPML\Tests\Helper
 * @group ignore
 */
abstract class WPML_IntegrationTestCase extends \WP_UnitTestCase {

	/** @var WPML_Plugin */
	private $plugin;

	/**
	 * @return WPML_Plugin
	 */
	public function getPlugin() {
		return $this->plugin;
	}

	function setUp(): void {
		parent::setUp();

		$this->plugin = apply_filters('wpml_get_di_service', 'plugin' );

		if( ! isset( $_SERVER['SERVER_NAME'] ) ) {
			$_SERVER['SERVER_NAME'] = 'vvv';
		}
	}

	function tearDown(): void {
		parent::tearDown();
	}
}
