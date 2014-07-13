<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   CONFIG - LIVE
   ========================================================================== */
   $config['ERROR_REPORTING'] = false;
   $config['TIME_ZONE']       = "Europe/Berlin";
   $config['CACHE']           = false;


/* FOLDERS
   ========================================================================== */
   $config['ROOT']            = ROOT;
   $config['ROOT_CONFIG']     = ROOT . DS . '_config';
   $config['ROOT_LIB']        = ROOT . DS . '_lib';
   $config['ROOT_ROUTE']      = ROOT . DS . '_route';
   $config['ROOT_VENDOR']     = ROOT . DS . '_vendor';
   $config['ROOT_PAGES']      = ROOT . DS . '_pages';
   $config['ROOT_SNIPPETS']   = ROOT . DS . '_pages' . DS . '_snippets';

/* DATABASE
   ========================================================================== */
