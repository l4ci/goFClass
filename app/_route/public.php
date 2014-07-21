<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   ROUTER - PUBLIC
   ========================================================================== */
$app->get('/', function(){

  $page = array('title' => 'Welcome');
  snippet('header',$page);

  echo "Home Page";

  snippet('footer');
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
