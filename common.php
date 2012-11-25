<?php
session_start();

include_once('settings.php');
include_once('i18n.php');
//creating database connection
static $DB_CONNECTION;
	
function connectDb($db_hostname,$db_name,$db_username,$db_pass){
	$connection = mysql_connect($db_hostname, $db_username,$db_pass) or die('Server Information is not Correct');
	mysql_select_db($db_name, $connection) or die ('Database Information is not correct');
	return $connection;
}
	
if ($DB_CONNECTION == null){
	$DB_CONNECTION = connectDb($DB_HOSTNAME,$DB_NAME,$DB_USERNAME,$DB_PASS);
}	

// Overriding the default language preferences : from session OR GET param
if ($_GET['lang'] != null){
	$_SESSION['lang']=$_GET['lang'];
}

if ($_SESSION['lang'] != null){
	$DEFAULT_LANGUAGE = $_SESSION['lang'];
}	
?>