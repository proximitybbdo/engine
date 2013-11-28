<?php

namespace Alarm;

class Alarm {

	/**
	 * Init, config loading.
	 */
	public static function init() {
		$config = \Config::load('alarm', true);

    \Log::instance()->pushHandler(
      new \Monolog\Handler\HipChatHandler(
        $config['hipchat']['api_key'],
        $config['hipchat']['room_id'],
        $config['project_name'],
        false,
        \Monolog\Logger::ERROR
      )
    );

    \Log::instance()->pushHandler(
      new \Monolog\Handler\NativeMailerHandler(
        $config['email']['to'],
        $config['email']['subject'],
        $config['email']['from'],
        \Monolog\Logger::ERROR
      )
    );
	}

	/**
	 * Prevent instantiation
	 */
	final private function __construct() {}
}

/* end of file alarm.php */
