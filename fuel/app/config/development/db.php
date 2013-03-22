<?php
/**
 * Development database settings.
 */

return array(
  'default' => array(
    'type'            => 'mysqli',
    'connection'      => array(
      'hostname'      => '127.0.0.1',
      'port'          => '3306',
      'database'      => 'test',
      'username'      => 'test',
      'password'      => 'test',
      'persistent'    => false,
      'compress'      => true
    ),
    'identifier'   => '`',
    'table_prefix' => '',
    'charset'     => 'utf8',
    'enable_cache' => false, // no query caching in development
    'profiling'   => true,
  ),
);

