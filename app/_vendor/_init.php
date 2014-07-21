<?php
/* AUTOLOAD - Vendors
   ========================================================================== */

  // Load Slim
  require_once (c::get('APP_PATH_VENDOR') . 'Slim' . DS . 'Slim.php');
  \Slim\Slim::registerAutoloader();

  // Load phpMailer
  require_once (c::get('APP_PATH_VENDOR') . 'phpmailer' . DS . 'PHPMailerAutoload.php');

  // Load Mailchimp
  require_once (c::get('APP_PATH_VENDOR') . 'mailchimp-api' . DS . 'mailchimp.php');

  // Load Parsedown
  require_once (c::get('APP_PATH_VENDOR') . 'parsedown' . DS . 'Parsedown.php');

  // Load Validator
  // Volker: excluded for now
  //
  // require_once (c::get('APP_PATH_VENDOR') . 'validation' . DS . 'Validator.php');
  // use Respect\Validation\Validator as v;
