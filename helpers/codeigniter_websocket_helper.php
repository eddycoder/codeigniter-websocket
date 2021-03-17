<?php
/**
 * Author: takielias
 * Github Repo : https://github.com/takielias/codeigniter-websocket
 * Date: 04/05/2019
 * Time: 09:04 PM
 */

/**
 * Inspired By
 * Ratchet Websocket Library: helper file
 * @author Romain GALLIEN <romaingallien.rg@gmail.com>
 */

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('valid_json')) {

	/**
	 * Check JSON validity
	 * @method valid_json
	 * @param mixed $var Variable to check
	 * @return bool
	 */
	function valid_json($var)
	{
		return (is_string($var)) && (is_array(json_decode($var,
			true))) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
	}
}

if (!function_exists('valid_jwt')) {

	/**
	 * Check JWT validity
	 * @method valid_jwt
	 * @param mixed $token Variable to check
	 * @return Object/false
	 */
	function valid_jwt($token)
	{
		return AUTHORIZATION::validateToken($token);
	}
}
