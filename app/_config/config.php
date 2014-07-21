<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   CONFIG - LIVE
   ========================================================================== */
    $config['ERROR_REPORTING'] = false;
    $config['TIME_ZONE']       = 'Europe/Berlin';
    $config['CACHE']           = false;

    $config['URL']           = 'http://site.url/';


/* TEMPLATE - DEFAULTS
   ========================================================================== */
    $config['TPL']['title']       = 'goFClass';
    $config['TPL']['description'] = 'This is the home of goFClass';
    $config['TPL']['keywords']    = 'home,page,gof,class';


/* FOLDERS
   ========================================================================== */
    $config['ROOT']              = ROOT;

    $config['APP_PATH']          = APP_PATH;
    $config['APP_PATH_CONFIG']   = APP_PATH . '_config' . DS;
    $config['APP_PATH_LIB']      = APP_PATH . '_lib' . DS;
    $config['APP_PATH_ROUTE']    = APP_PATH . '_route' . DS;
    $config['APP_PATH_VENDOR']   = APP_PATH . '_vendor' . DS;
    $config['APP_PATH_PAGES']    = APP_PATH . '_pages' . DS;
    $config['APP_PATH_SNIPPETS'] = APP_PATH . '_pages' . DS . '_snippets' . DS;

/* DATABASE
   ========================================================================== */
