<?php
/* * *
 * CLASS: registration
 * *
 * register / verify new users
 * */
class registration extends api {


  // New User
  function registerNewUser($data){}


  // check out: http://oauth.net/2/
  function registerWithSocial(){}
  function registerWithFacebook(){}


  // Email Verification
  private function sendVerificationEmail($uid){}
  public static function verifyNewUser($uid,$code){}


  // Password Reset + Verification
  public static function requestPasswordReset($uid){}
  private function setPasswordResetDatabaseToken($uid){}
  private function sendPasswordResetMail($uid){}
  public static function verifyPasswordReset($uid,$code){}


  // Captcha
  public static function generateCaptcha(){}
  public static function checkCaptcha(){}

}
