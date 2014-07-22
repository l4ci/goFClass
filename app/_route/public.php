<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   ROUTER - PUBLIC
   ========================================================================== */
$app->get('/', function(){

  $pageVARS = array(
      'title' => 'Welcome',
      'css' => false, // string/array - without file extension ".css"
      'js' => false // string/array - without file extension ".js"
      );

  snippet('header',$pageVARS);

  echo "Home Page";

  snippet('footer',$pageVARS);

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
