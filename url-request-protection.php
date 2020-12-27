<?php

/*
Plugin Name: URL REQUEST PROTECTION
Plugin URI: https://wagner-remote.de
Description: Protect WordPress against Malicious URL-Requests
Version: 1.0
Author: Tim Wagner | Wagner-Remote
Author URI: https://wagner-remote.de
Requires at least: 5.0
Tested up to: 5.3.2
WC requires at least: 3.0.0
WC tested up to: 4.0.1
*/

defined('ABSPATH') or die('No script kiddies please!');

if (strpos($_SERVER['REQUEST_URI'], "eval(") ||
strpos($_SERVER['REQUEST_URI'], "CONCAT") ||
strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
strpos($_SERVER['REQUEST_URI'], "base64"))
{
@header("HTTP/1.1 400 Bad Request");
@header("Status: 400 Bad Request");
@header("Connection: Close");
@exit;
}

?>