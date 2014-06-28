<?php
/* * *
 * CLASS: users
 * *
 * get/set information for multiple user
 * */
class users {


  private static $dbTable = "users";


  /**
   * getAllUsers
   * @return array all users
   */
  public static function getAll(){
      // query with self::$dbTable
      return $all;
  }


  /**
   * getUsersBy
   * @param  string $field  where to search for
   * @param  string $needle what to search for
   * @return mixed            users array on success | false
   */
  public static function getAllBy($field,$needle){
      return false;
      return $users;
  }

  /**
   * HELPER: getAllBy
   */
  public static function getAllByRole($needle){
      return self::getAllBy('role',$needle);
  }

  /**
   * HELPER: getAllByRole
   */
  public static function getAllGuests(){
      return self::getAllByRole('guest');
  }
  public static function getAllMembers(){
      return self::getAllByRole('member');
  }
  public static function getAllMods(){
      return self::getAllByRole('mod');
  }
  public static function getAllAdmins(){
      return self::getAllByRole('admin');
  }
}
