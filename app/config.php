<?php
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');
mb_internal_encoding('UTF-8');
date_default_timezone_set("Europe/Paris");
header('Content-type: text/html; charset=utf-8');

define('DB_DSN', 'mysql:dbname=generateurmeme;host=localhost');
define('DB_USER', 'stagiaire');
define('DB_PASSWORD', 'online@2017');

require_once 'functions.common.php';
