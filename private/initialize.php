<?php

ob_start(); // turn on output buffering

// session_start() // turn on sessions if needed

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use dame document root as webserver
// * Can't set a hardcoded value
// define("WWW_ROOT", 'chain_gang/public')
// define("WWW_ROOT", '/')
// can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'],0, $public_end);
define('WWW_ROOT', $doc_root);

require_once('functions.php');
require_once('db_credentials/db_credentials.php');
require_once('database_functions.php');

// Load class definitions anually

// Individually

// require_once('classes/bicycle.php');

// -> all classes in directory
foreach(glob('classes/*.php') as $file) {
    require_once($file);
}
// Autoload class definition
function my_autoload($class){
    if(preg_match('/\A\w+\Z/').$class){
        include('classes/'.$class. '.class.php');
    }
}

spl_autoload_register('my_autoload.php');

// $dabaseConnect = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

$database = db_connect();
Bicycle::set_database($database);
?>