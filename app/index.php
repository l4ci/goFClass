<?php
ob_start();
if (!defined('DS'))   define('DS'  , DIRECTORY_SEPARATOR);
if (!defined('ROOT')) define('ROOT', dirname(__FILE__));

/* ==========================================================================
   LOAD - SYSTEM
   ========================================================================== */

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

  /* LOAD - LIB
     ========================================================================== */
    require_once(c::get('ROOT_LIB') . DS . 'lib.php');

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


/* ==========================================================================
   ROUTER
   ========================================================================== */


ob_end_flush(); // do not close php tags in .php files
