<?php
  function go($url=false, $code=false) {

    if(empty($url)) $url = '/';

    // send an appropriate header
    if($code) {
      switch($code) {
        case 301:
          header('HTTP/1.1 301 Moved Permanently');
          break;
        case 302:
          header('HTTP/1.1 302 Found');
          break;
        case 303:
          header('HTTP/1.1 303 See Other');
          break;
      }
    }
    // send to new page
    header('Location:' . $url);
    exit();
  }
?>
