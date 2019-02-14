<?php
namespace Heroku\Bonsai;

use Heroku\Bonsai\Admin\Basic_Auth;

class Init {

	protected static $_instance;

	protected $providers = [];

	public function init() {
		$this->register_providers();
	}

	public function register_providers() {
		$this->providers[ Basic_Auth::NAME ] = new Basic_Auth();

		add_action( 'ep_settings_custom', function() {
			$this->providers[ Basic_Auth::NAME ]->add_basic_auth_settings();
		} );
	}

	/**
	 * Singleton only allows the loading of the namespace once.
	 *
	 * @return Init
	 * @throws \Exception
	 */
	public static function instance() {
		if ( ! isset( self::$_instance ) ) {
			$className       = __CLASS__;
			self::$_instance = new $className();
		}
		return self::$_instance;
	}
}