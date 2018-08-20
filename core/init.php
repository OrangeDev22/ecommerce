<?php
/**
 * init file
 * this file loaded when web app/site initialize
 */

// start session if not already started
if (session_status() == PHP_SESSION_NONE || !isset($_SESSION))
{
	session_start();
}
// set header content HTML and charset utf-8
header('Content-Type: text/html; charset=utf-8');
// SEPARATOR
define('SP', DIRECTORY_SEPARATOR);
// main file directory
define('ROOT', dirname(__DIR__) . SP);
// classes file directory
define('CLS', ROOT . 'inc/classes' . SP);
// functions file directory
define('FUNC', ROOT . 'inc/functions' . SP);
// core file directory
define('CORE', ROOT . 'core' . SP);

// require_once (FUNC . 'functions.php');

// require_once (__DIR__ . '/../vendor/autoload.php');

// require_once (__DIR__ . "/detect_visitor_language.php");
