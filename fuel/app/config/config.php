<?php

return array(
  /**
   * index_file - The name of the main bootstrap file.
   *
   * Set this to false or remove if you using mod_rewrite.
   */
  'index_file'  => '',

  /**
   * Callback to use with ob_start(), set this to 'ob_gzhandler' for gzip encoding of output
   */
  'ob_callback'  => null,

  /**
   * Localization & internationalization settings
   */
  'language'           => 'nl-BE', // Default language
  'language_fallback'  => 'nl-BE', // Fallback language when file isn't available for default language
  'locale'             => 'nl_BE', // PHP set_locale() setting, null to not set

  'encoding'  => 'UTF-8',

  /**
   * DateTime settings
   *
   * server_gmt_offset  in seconds the server offset from gmt timestamp when time() is used
   * default_timezone   optional, if you want to change the server's default timezone
   */
  'server_gmt_offset'  => 0,
  'default_timezone'   => 'CET',

  /**
   * Logging Threshold.  Can be set to any of the following:
   *
   * Fuel::L_NONE
   * Fuel::L_ERROR
   * Fuel::L_WARNING
   * Fuel::L_DEBUG
   * Fuel::L_INFO
   * Fuel::L_ALL
   */
  'log_threshold'    => Fuel::L_NONE,

  /**
   * Security settings
   */
  'security' => array(
    'csrf_autoload'    => true,

    /**
     * With output encoding switched on all objects passed will be converted to strings or
     * throw exceptions unless they are instances of the classes in this array.
     */
    'whitelisted_classes' => array(
    )
  ),

  /**************************************************************************/
  /* Always Load                                                            */
  /**************************************************************************/
  'always_load'  => array(

    /**
     * These packages are loaded on Fuel's startup.
     * You can specify them in the following manner:
     *
     * array('auth'); // This will assume the packages are in PKGPATH
     *
     * // Use this format to specify the path to the package explicitly
     * array(
     *     array('auth' => PKGPATH.'auth/')
     * );
     */
    'packages'  => array(
      'orm',
      'email',
      'sentry'
    ),

    /**
     * These modules are always loaded on Fuel's startup. You can specify them
     * in the following manner:
     *
     * array('module_name');
     *
     * A path must be set in module_paths for this to work.
     */
    'modules'  => array(),

    /**
     * Classes to autoload & initialize even when not used
     */
    'classes'  => array(),

    /**
     * Configs to autoload
     *
     * Examples: if you want to load 'session' config into a group 'session' you only have to
     * add 'session'. If you want to add it to another group (example: 'auth') you have to
     * add it like 'session' => 'auth'.
     * If you don't want the config in a group use null as groupname.
     */
    'config'  => array(),

    /**
     * Language files to autoload
     *
     * Examples: if you want to load 'validation' lang into a group 'validation' you only have to
     * add 'validation'. If you want to add it to another group (example: 'forms') you have to
     * add it like 'validation' => 'forms'.
     * If you don't want the lang in a group use null as groupname.
     */
    'language'  => array(),
  ),

);
