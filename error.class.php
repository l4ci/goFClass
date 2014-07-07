<?php

class response{
  public function __construct($response=array()){
    $default  = array('status' => NULL,'msg' => NULL);
    $response = array_merge($default,$response);
  }

  public function isSuccess($response){}
  public function isError($response){}
  public function isCritical($response){}
  public function isInfo($response){}

  public function getMessage($response){}
}
?>
