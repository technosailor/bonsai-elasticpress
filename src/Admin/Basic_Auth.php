<?php

namespace Heroku\Bonsai\Admin;

class Basic_Auth {

	const NAME = 'basic-auth';

	const ACCESS_KEY    = 'ep_heroku_access_key';
	const ACCESS_SECRET = 'ep_heroku_access_secret';

	const BONSAI_SETTINGS = 'bonsai_settings';

	const NONCE = 'heroku_bonsai_basic_auth';

	protected $bonsai_settings;

	public function __construct() {
		$this->bonsai_settings = get_option( self::BONSAI_SETTINGS );
	}

	public function add_basic_auth_settings() {
		?>
        <h3><?php _e( 'Bonsai by Heroku', 'heroku' ) ?></h3>
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row">
                    <label for="<?php echo esc_attr( self::ACCESS_KEY ) ?>"><?php esc_html_e( 'Access Key', 'heroku' ); ?></label>
                </th>
                <td>
                    <input type="text" name="<?php echo esc_Attr( self::ACCESS_KEY ) ?>"
                           id="<?php echo esc_attr( self::ACCESS_KEY ) ?>"
                           value="<?php echo esc_html( $this->_get_bonsai_access_key() ); ?>">
                </td>
            </tr>

            <tr>
                <th scope="row">
                    <label for="<?php echo esc_attr( self::ACCESS_SECRET ) ?>"><?php esc_html_e( 'Access Secret', 'heroku' ); ?></label>
                </th>
                <td>
                    <input type="text" name="<?php echo esc_attr( self::ACCESS_SECRET ) ?>"
                           id="<?php echo esc_attr( self::ACCESS_SECRET ) ?>"
                           value="<?php echo esc_html( $this->_get_bonsai_access_secret() ); ?>">
                </td>
            </tr>
            </tbody>
        </table>
		<?php
		wp_nonce_field( self::NONCE, self::NONCE );
	}

	private function _get_bonsai_access_key() {

		if ( defined( 'HEROKU_BONSAI_ACCESS_KEY' ) && ! empty( HEROKU_BONSAI_ACCESS_KEY ) ) {
			$value = HEROKU_BONSAI_ACCESS_KEY;
		} else {
			$value = $this->bonsai_settings[ self::ACCESS_KEY ] ?? '';
		}

		return $value;
	}

	private function _get_bonsai_access_secret() {

		if ( defined( 'HEROKU_BONSAI_ACCESS_SECRET' ) && ! empty( HEROKU_BONSAI_ACCESS_SECRET ) ) {
			$value = HEROKU_BONSAI_ACCESS_SECRET;
		} else {
			$value = $this->bonsai_settings[ self::ACCESS_KEY ] ?? '';
		}

		return $value;
	}
}