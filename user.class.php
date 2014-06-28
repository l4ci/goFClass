<?php
/* * *
* CLASS: user
* *
* get/set information for a single user
* */
class user {

  private static $dbTable = "users";

  /**
  * getBy
  * @param  string $field  where to search for
  * @param  string $needle what to search for
  * @return mixed           user array on success | false
  */
  public static function getBy($field,$needle){
    // query with self::$dbTable
    return false;
    return $user;
  }

  // HELPER: getBy
  public static function getByUid($uid){
    return self::getBy('id',$uid);
  }
  public static function getByEmail($email){
    return self::getBy('email',$email);
  }
  public static function getByNick($nick){
    return self::getBy('nick',$nick);
  }


  /**
  * getSingleUserInfoById
  * return a single value from a user array by user id
  * @param  int     $uid   user id
  * @param  string $field field to return
  * @return mixed          field / false
  */
  public static function getSingleFieldByUid($uid,$field){
    return $user->$field;
    return $user[$field];
  }

  // HELPER: getSingleFieldByUid
  public static function getSingleRole($uid){
    return self::getSingleFieldByUid($uid,'role');
  }
  public static function getSingleNick($uid){
    return self::getSingleFieldByUid($uid,'nick');
  }


}
