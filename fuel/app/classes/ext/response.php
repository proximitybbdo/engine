<?php

class Response extends \Fuel\Core\Response 
{
  public static function redirect_lang($parts = null) {
    $path = '';

    if(is_array($parts)) {
      foreach($parts as $part) {
        $path .= '/' . $part;
      }
    } else if(!is_null($parts)) {
      $path = '/' . $parts;
    }

    return Response::redirect(Session::get('language') . $path);
  }
}
