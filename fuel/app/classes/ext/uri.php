<?php

class Uri extends \Fuel\Core\Uri 
{
	public static function last() {
		return array_pop(\Uri::segments());
	}
	
	public static function has_segment($needle) {
		return in_array($needle, \Uri::segments());
  }

	public static function segments_clean() {
    $segments = Uri::segments();

    if(count($segments) > 0 && is_dir(APPPATH . '/lang/' . $segments[0])) {
      $segments = array_splice($segments, 1);
    }

    $uri_keys = array_keys(array_flip($segments));

    foreach($uri_keys as $key => $value) {
      if((preg_match('/[A-Za-z]/', $value) && preg_match('/[0-9]/', $value)) || is_numeric($value)) {
        unset($uri_keys[$key]);
      }
    }

    return implode('/', $uri_keys);
  }

  public static function create_lang($parts = null) {
    $path = '';

    if(is_array($parts)) {
      foreach($parts as $part) {
        $path .= '/' . $part;
      }
    } else if(!is_null($parts)) {
      $path = '/' . $parts;
    }

    return Uri::create(Session::get('language') . $path);
  }
}
