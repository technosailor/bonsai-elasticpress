<?php

namespace Heroku\Bonsai\Admin;

class Basic_Auth {

	const NAME = 'admin.basic-auth';

	const NONCE = 'heroku_bonsai_basic_auth';

	protected $credentials;

	/**
	 * @return Credentials
	 */
	public function getCredentials() : Credentials {
		return $this->credentials;
	}

	public function __construct( Credentials $credentials ) {
	    $this->credentials = $credentials;
	}

	/**
	 * Renders the HTML form fields for storing basic auth info
     *
     * @action ep_settings_custom
	 */
	public function add_basic_auth_settings() {
		?>
        <h3><?php _e( 'Bonsai by Heroku', 'heroku' ) ?></h3>
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row">
                    <label for="<?php echo esc_attr( Credentials::ACCESS_KEY ) ?>"><?php esc_html_e( 'Access Key', 'heroku' ); ?></label>
                </th>
                <td>
                    <input type="text" name="<?php echo esc_Attr( Credentials::ACCESS_KEY ) ?>"
                           id="<?php echo esc_attr(  Credentials::ACCESS_KEY ) ?>"
                           value="<?php echo esc_html( $this->credentials->get_bonsai_access_key() ); ?>">
                </td>
            </tr>

            <tr>
                <th scope="row">
                    <label for="<?php echo esc_attr( Credentials::ACCESS_SECRET ) ?>"><?php esc_html_e( 'Access Secret', 'heroku' ); ?></label>
                </th>
                <td>
                    <input type="text" name="<?php echo esc_attr( Credentials::ACCESS_SECRET ) ?>"
                           id="<?php echo esc_attr( Credentials::ACCESS_SECRET ) ?>"
                           value="<?php echo esc_html( $this->credentials->get_bonsai_access_secret() ); ?>">
                </td>
            </tr>
            </tbody>
        </table>
		<?php
		wp_nonce_field( self::NONCE, self::NONCE );
	}
}