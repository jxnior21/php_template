<?php

  // File that contains everything that will be needed for an app

  ob_start(); // Output buffering on
  session_start();

  define("PRIVATE_PATH", dirname(__FILE__)); // Path to private folder
  define("PROJECT_PATH", dirname(PRIVATE_PATH)); // Path to project
  define("SHARED_PATH", PRIVATE_PATH . '/shared'); // Path to private/shared

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root); // Path to root or public folder

  require_once 'functions.php'; // A file of functions
  require_once 'database.php'; // Database connectivity
  require_once 'query_functions.php';// SQL query functions
  require_once 'validation_functions.php';
  require_once 'auth_functions.php';

  $db = db_connect();// Database connection functions

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
