<?php
ob_start();
if (!defined('DS'))   define('DS'  , DIRECTORY_SEPARATOR);
if (!defined('ROOT')) define('ROOT', dirname(__FILE__));

/* ==========================================================================
   LOAD - SYSTEM
   ========================================================================== */

  /* LOAD - LIB
     ========================================================================== */
    require_once(ROOT . DS . '_lib' . DS . '_init.php');


  /* LOAD - CONFIGS
     ========================================================================== */
    $configFiles = array(
      'main' => 'config.php',
      'host' => 'config.' . $_SERVER['HTTP_HOST'] . '.php',
      'addr' => 'config.' . $_SERVER['SERVER_ADDR'] . '.php',
    );

    $config = array();
    foreach($configFiles as $configFile) {
      $configFile = ROOT . DS . '_config' . DS . $configFile;
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
     date_default_timezone_set( c::get('TIME_ZONE') );


  /* START - SESSION
     ========================================================================== */
     s::start();


/* ==========================================================================
   ROUTER
   ========================================================================== */

  $app = new Slim();
    require c::get('ROOT_LIB') . DS . 'public.php';
    // require c::get('ROOT_LIB') . DS . 'member.php';
    // require c::get('ROOT_LIB') . DS . 'admin.php';
  $app->run();

ob_end_flush(); // do not close php tags in .php files
