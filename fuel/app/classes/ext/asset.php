<?php
class Asset extends \Fuel\Core\Asset {
	/**
	 * JS
	 *
	 * Either adds the javascript to the group, or returns the script tag.
	 * When in production mode and configurated with minify_js => true
	 * this will search for minified javascript files
	 *
	 * @access	public
	 * @param	mixed	The file name, or an array files.
	 * @param	array	An array of extra attributes
	 * @param	string	The asset group name
	 * @return	string
	 */
  public static function js($scripts = array(), $attr = array(), $group = NULL, $raw = false) {
    if(Config::get("minify_js")) {
      if(is_array($scripts)) {
        $files = [];

        foreach($scripts as $script) {
          $min = static::_create_minified($script);
          $files[] = static::_has_minified($min) ? $min : $script;
        }

        $scripts = $files;
      } else {
        $min = static::_create_minified($scripts);
        $scripts = static::_has_minified($min) ? $min : $scripts;
      }
    }

		return static::instance()->js($scripts, $attr, $group, $raw);
  }

  private static function _create_minified($file) {
    return str_replace(".js", ".min.js", $file);
  }

  private static function _has_minified($file) {
    return file_exists(DOCROOT . 'assets/js/' . $file);
  }
}
