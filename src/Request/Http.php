<?php
namespace Heroku\Bonsai\Request;

use Heroku\Bonsai\Admin\Basic_Auth;

class Http {
	const NAME = 'request.http';

	protected $basic_auth;

	public function __construct( Basic_Auth $basic_auth ) {
		$this->basic_auth = $basic_auth;
	}

	public function add_basic_auth_headers( $headers ) {

		$key = $this->basic_auth->get_bonsai_access_key();
		$secret = $this->basic_auth->get_bonsai_access_secret();

		if( empty( $key ) || empty( $secret ) ) {
			return $headers;
		}

		$headers['Authorization'] = 'Basic ' . base64_encode( $key . ':'  . $secret );

		return $headers;
	}
}