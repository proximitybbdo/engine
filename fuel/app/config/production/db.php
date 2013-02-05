<?php
/**
 * Production database settings.
 */

return array(
  'default' => array(
    'type'            => 'mysqli',
    'connection'      => array(
      'hostname'      => '127.0.0.1',
      'port'          => '3306',
      'database'      => 'production_DB',
      'username'      => 'USER',
      'password'      => 'PASS',
      'persistent'    => false,
      'compress'      => true
    ),
    'identifier'   => '`',
    'table_prefix' => '',
    'charset'     => 'utf8',
    'enable_cache' => true,//enable query caching on Production
    'profiling'   => false,
  ),
);

