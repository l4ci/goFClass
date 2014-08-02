<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   ROUTER - PUBLIC
   ========================================================================== */


// HOME
$app->get('/', function(){

  $pageVARS = array(
      'title' => 'Welcome',
      'css' => false, // string/array - without file extension ".css"
      'js' => false // string/array - without file extension ".js"
      );

  snippet('global_header',$pageVARS);

  require_once(c::get('APP_PATH_PAGES').'home'.DS.'tpl.php');

  snippet('global_footer',$pageVARS);

});


$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
