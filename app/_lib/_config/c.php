<?php
class c{
  static public $data = array();

  static public function set($key, $value = null) {
    if(is_array($key)) {
      return static::$data = array_merge(static::$data, $key);
    } else {
      return static::$data[$key] = $value;
    }
  }

  static public function get($key = null, $default = null) {
    if(empty($key)) return static::$data;
    return isset(static::$data[$key]) ? static::$data[$key] : $default;
  }

  static public function remove($key = null) {
    // reset the entire array
    if(is_null($key)) return static::$data = array();
    // unset a single key
    unset(static::$data[$key]);
    // return the array without the removed key
    return static::$data;
  }
}
