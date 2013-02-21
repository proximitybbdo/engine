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
			if(!is_array($scripts)) $scripts = array($scripts);
			foreach ($scripts as $key => $script) {
				$scrr = str_replace(".js", ".min.js", $script);
				if(static::instance()->get_file($scrr, 'js') != false) {
					$scripts[$key] = $scrr;
				}
			}
		}
		return static::instance()->js($scripts, $attr, $group, $raw);
	}
}
