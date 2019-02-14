<?php
/*
Plugin Name: Bonsai Integration for ElasticPress
Description: Adds necessary Authentication fields to allow ElasticPress to communicate with Bonsai hosted Elasticsearch
Author:      Aaron Brazell
Version:     1.0
Author URI:  https://bonsai.io/
*/

define( 'BASE_PATH', plugin_dir_path( __FILE__ ) );
require_once BASE_PATH . 'vendor/autoload.php';

add_action( 'plugins_loaded', function () {
	\Heroku\Bonsai\Init::instance()->init();
} );