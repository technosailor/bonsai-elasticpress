<?php

namespace Heroku\Bonsai\Admin;

class Credentials {
	const NAME = 'admin.credentials';

	const ACCESS_KEY      = 'ep_heroku_access_key';
	const ACCESS_SECRET   = 'ep_heroku_access_secret';
	const BONSAI_SETTINGS = 'bonsai_settings';


	protected $bonsai_settings;

	public function __construct() {
		$this->bonsai_settings = get_option( self::BONSAI_SETTINGS );
	}

	/**
	 * Save the badsic auth credentials
	 *
	 * @return bool
	 */
	public function save_credentials() : bool {

		if ( ! isset( $_POST[ Basic_Auth::NONCE ] ) ) {
			return false;
		}

		if ( ! wp_verify_nonce( $_POST[ Basic_Auth::NONCE ], Basic_Auth::NONCE ) ) {
			return false;
		}

		$credentials = [];
		if ( isset( $_POST[ self::ACCESS_KEY ] ) ) {
			$credentials[ self::ACCESS_KEY ] = sanitize_text_field( $_POST[ self::ACCESS_KEY ] );
		}

		if ( isset( $_POST[ self::ACCESS_SECRET ] ) ) {
			$credentials[ self::ACCESS_SECRET ] = sanitize_text_field( $_POST[ self::ACCESS_SECRET ] );
		}

		update_option( self::BONSAI_SETTINGS, $credentials );
	}

	/**
	 * Returns the Access key for Basic Auth
	 *
	 * @return string
	 */
	public function get_bonsai_access_key() : string {

		if ( defined( 'HEROKU_BONSAI_ACCESS_KEY' ) && ! empty( HEROKU_BONSAI_ACCESS_KEY ) ) {
			$value = HEROKU_BONSAI_ACCESS_KEY;
		} else {
			$value = $this->bonsai_settings[ self::ACCESS_KEY ] ?? '';
		}

		return $value;
	}

	/**
	 * Returns the Access secret for Basic auth
	 *
	 * @action admin_init
	 *
	 * @return string
	 */
	public function get_bonsai_access_secret() : string {

		if ( defined( 'HEROKU_BONSAI_ACCESS_SECRET' ) && ! empty( HEROKU_BONSAI_ACCESS_SECRET ) ) {
			$value = HEROKU_BONSAI_ACCESS_SECRET;
		} else {
			$value = $this->bonsai_settings[ self::ACCESS_SECRET ] ?? '';
		}

		return $value;
	}
}