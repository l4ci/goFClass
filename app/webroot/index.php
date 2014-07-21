<?php
ob_start();
if (!defined('APP'))  define('APP' , 'goFClass');
if (!defined('DS'))   define('DS'  , DIRECTORY_SEPARATOR);

if (!defined('ROOT')) define('ROOT', dirname(dirname(dirname(__FILE__))));

// Paths
if (!defined('APP_PATH')) define('APP_PATH', ROOT . DS . 'app' . DS);
if (!defined('WWW_PATH')) define('WWW_PATH', ROOT . DS . 'app' . DS . 'webroot' . DS);


/* ==========================================================================
   LOAD - SYSTEM
   ========================================================================== */

  /* LOAD - LIB
     ========================================================================== */
    require_once(APP_PATH . '_lib' . DS . '_init.php');


  /* LOAD - CONFIGS
     ========================================================================== */
    $configFiles = array(
      'main' => 'config.php',
      'host' => 'config.' . $_SERVER['HTTP_HOST'] . '.php',
      'addr' => 'config.' . $_SERVER['SERVER_ADDR'] . '.php',
    );

    $config = array();
    foreach($configFiles as $configFile) {
      $configFile = APP_PATH . '_config' . DS . $configFile;
      if(file_exists($configFile)) require_once($configFile);
    }
    c::set($config);


  /* SET - ERROR_REPORTING
     ========================================================================== */
    if ( c::get('ERROR_REPORTING') ){
      @ini_set('display_errors',1);
      error_reporting(-1);
    }else{
      error_reporting(0);
    }


  /* SET - TIMEZONE
     ========================================================================== */
     @date_default_timezone_set( c::get('TIME_ZONE') );


  /* START - SESSION
     ========================================================================== */
     s::start();


/* ==========================================================================
   ROUTER
   ========================================================================== */

  $app = new Slim();
    require $config['APP_PATH_ROUTE'] . 'public.php';
    // require $config['APP_PATH_ROUTE'] . 'member.php';
    // require $config['APP_PATH_ROUTE'] . 'admin.php';
  $app->run();

ob_end_flush(); // do not close php tags in .php files
