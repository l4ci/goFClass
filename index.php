<?php
ob_start();
if (!defined('APP'))  define('APP' , 'goFClass');
if (!defined('DS'))   define('DS'  , DIRECTORY_SEPARATOR);

if (!defined('ROOT')) define('ROOT', dirname(__FILE__));
if (!defined('APP_PATH')) define('APP_PATH', ROOT . DS . 'app' . DS);


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
    // Set Template Defaults
    Tpl::set(c::get('TPL'));

    /* LOAD - VENDORS
   ========================================================================== */
   require_once(c::get('APP_PATH_VENDOR') . '_init.php');


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
  $app = new \Slim\Slim(); //array('debug' => true)

    require_once(c::get('APP_PATH_ROUTE') . 'public.php');
    require_once(c::get('APP_PATH_ROUTE') . 'api.php');

  $app->run();

ob_end_flush();
