<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   AUTOLOAD - LIB
   ========================================================================== */

spl_autoload_register(function($className){
  $classFile = APP_PATH . '_lib' . DS . $className . '.php';
  if (file_exists($classFile)){
    require_once($classFile);
  }
});

require_once(APP_PATH . '_lib' . DS . 'helpers.php');
