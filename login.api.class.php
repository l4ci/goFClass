<?php
class login extends api {

  /**
   * doLogin
   * Most basic function, that any login method uses
   * when authentication was successfull.
   * @param int $uid User Id
   */
  private function doLogin($uid){
    // load session
    // set permission etc
  }

  /**
   * doLogout
   * Basic Logout function - destroys everything
   */
  function doLogout(){
    // set/unset cookie
    // remove session
    // redirect
  }

  /**
   * withBasic
   * checks for a basic user
   * @param  array $user nick,email,password
   */
  public static function withBasic($user=array()){
    $default = array('nick' => NULL,'email' => NULL,'password' => NULL );
    $user    = array_merge($default,$user);

    // check if nick / email + hashsalted(password) exist - get user id
    $uid = false;
    if($uid){
      self::doLogin($uid);
    }else{
      throw new Exception('E-Mail/Nick or password wrong');
    }
  }

  /**
   * withCookie
   * checks for a login cookie
   */
  function withCookie(){
    //validate cookie
    if($valid){
      self::doLogin($uid);
    }
    return false;
  }

  // check out: http://oauth.net/2/
  public static function withSocial($service,$input){
    switch ($service) {
      case 'facebook':
        self::withSocialFacebook($input);
      break;

      case 'twitter':
        self::withSocialTwitter($input);
      break;

      case 'google':
        self::withSocialGoogle($input);
      break;

      case 'steam':
        self::withSocialSteam($input);
      break;

      case 'twitch':
        self::withSocialTwitch($input);
      break;

      case 'openid':
        self::withSocialOpenId($input);
      break;

      default:
        return false;
      break;
    }
    return false;
  }

  private function withSocialFacebook($input){

  }
}
