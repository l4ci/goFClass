<?php
/* * *
 * CLASS: guard
 * *
 * check for required rights / permissions
 * */
class guard extends api {


  /**
   * isLoggedIn
   * checks if the user is logged in
   * @return boolean
   */
  function isLoggedIn(){
    if($_SESSION['loggedIn'] === true){
      return true;
    }
    return false;
  }


  /**
   * isOwnedBy
   * checks if the user is the owner
   * of the called content
   * @param  int $uid user id
   * @return boolean
   */
  function isOwnedBy($uid){
    if($_SESSION['uid'] === $uid){
      return true;
    }
    return false;
  }


  /**
   * hasMinRights
   * checks if a user has enough rights (at least)
   * @param  int $min
   * @return boolean
   */
  function hasMinRights($min){
    if($_SESSION['rights'] >= $min){
      return true;
    }
    return false;
  }

  // HELPER: hasMinRights
  function has($rights){
    return self::hasMinRights($rights);
  }


  /**
   * needExactRights
   * checks if a user has exact the required rights
   * @param  int $required required rights
   * @return boolean
   */
  function needExactRights($required){
    if($_SESSION['rights'] === $required){
      return true;
    }
    return false;
  }

  // HELPER: needExactRights
  function need($rights){
    return self::needExactRights($rights);
  }
}
