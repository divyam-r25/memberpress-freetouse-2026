<?php
/**
 * Helper utilities for MemberPress.
 *
 * @package MemberPress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function memberpress_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
