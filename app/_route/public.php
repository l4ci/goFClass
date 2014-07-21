<?php
//if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   ROUTER - PUBLIC
   ========================================================================== */

$app->get('/', function(){
  snippet('header');
  echo "Home Page";
  snippet('footer');
});

$app->get('/test', function(){
    echo "Test Page";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
