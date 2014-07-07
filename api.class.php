<?php
class api{

  private static $dbTable = "api";

  function __construct($appid,$apikey){
    if (getApp($appid)){

    }else{
      e::rror('App ID not valid');
    }
  }

  /**
   * getApp
   * check if an app is registered
   * @return bool
   */
  public function getApp($appid){}

  /**
   * generateApiKey
   * generates an API key for an app
   * @return string api key
   */
  private function generateApiKey(){}

  /**
   * checkApiKey
   * checks if an api key for an app is correct
   * @param  int $app    app id
   * @param  string $apikey api key
   * @return boole  api key correct
   */
  public function checkApiKey($app,$apikey){}

}
?>
