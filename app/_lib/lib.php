<?php
/* ==========================================================================
   AUTOLOAD - LIB
   ========================================================================== */
spl_autoload_register(function($className)){
  $classFile = c::get('ROOT_LIB') . DS . $className . '.php';
  if (file_exists($configFile)) require_once($configFile);
}
