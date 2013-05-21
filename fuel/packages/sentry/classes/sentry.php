<?php

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
   * @var Raven_Client
   */
  protected static $client = null;

	/**
	 * Init, config loading.
	 */
	public static function init() {
		\Config::load('sentry', true);

    self::$client = new \Raven_Client(\Config::get('dns'));

    \Log::instance()->pushHandler(new \Monolog\Handler\RavenHandler(self::$client));
	}

	/**
	 * Prevent instantiation
	 */
	final private function __construct() {}
}

/* end of file sentry.php */
