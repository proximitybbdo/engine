<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Sentry;

class SentryException extends \FuelException {}

/**
 * Sentry
 *
 * @package     Fuel
 * @subpackage  Sentry
 */
class Sentry {

	/**
	 * @var  Sentry
	 */
	protected static $instance = null;

  /**
   * @var Raven_Client
   */
  protected static $client = null;

  /**
   * @var Raven_ErrorHandler
   */
  protected static $error_handler = null;

	/**
	 * Init, config loading.
	 */
	public static function _init() {
		\Config::load('sentry', true);
    self::$client = new \Raven_Client(\Config::get('sentry.dns'));

    if(\Fuel::$env !== \Fuel::DEVELOPMENT && \Config::get('sentry.overwrite_error_handlers', false) === true) {
      self::$error_handler = new \Raven_ErrorHandler(self::$client);
      set_error_handler(array(self::$error_handler, 'handleError'));
      set_exception_handler(array(self::$error_handler, 'handleException'));
    }
	}

	/**
	 * Prevent instantiation
	 */
	final private function __construct() {}

  /**
   * Send log to Sentry
   *
	 * @param	string	$message		message to log
   */
  public static function log($message) {
    self::$client->captureMessage($message);
  }

  /**
   * Send an exception to Sentry
   *
	 * @param	object	$e		exception to log
   */
  public static function exception($e) {
    self::$client->captureException($e);
  }
}

/* end of file sentry.php */
