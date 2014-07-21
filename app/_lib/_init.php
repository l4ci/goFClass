<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   AUTOLOAD - LIB
   ========================================================================== */

spl_autoload_register(function($className)){
  $classFile = c::get('ROOT_LIB') . DS . $className . '.php';
  if (file_exists($classFile)) require_once($classFile);
}


/* AUTOLOAD - Vendors
   ========================================================================== */

  // Load Slim
  require_once (c::get('ROOT_VENDOR') . DS . 'slim' . DS . 'Slim.php');
  \Slim\Slim::registerAutoloader();

  // Load phpMailer
  require_once (c::get('ROOT_VENDOR') . DS . 'phpmailer' . DS . 'PHPMailerAutoload.php');

  // Load Mailchimp
  require_once (c::get('ROOT_VENDOR') . DS . 'mailchimp-api' . DS . 'mailchimp.php');

  // Load Parsedown
  require_once (c::get('ROOT_VENDOR') . DS . 'parsedown' . DS . 'Parsedown.php');

  // Load Validator
  require_once (c::get('ROOT_VENDOR') . DS . 'validation' . DS . 'Validator.php');
  use Respect\Validation\Validator as v;
