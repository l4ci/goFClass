<?php
/**
 * CALL -> app/webroot/index.php
 */

if (!defined('DS')) define('DS'  , DIRECTORY_SEPARATOR);
if (!defined('ROOT')) define('ROOT', dirname(__FILE__));

require ROOT . DS . 'app' . DS. 'webroot' . DS . 'index.php';
