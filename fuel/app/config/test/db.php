<?php
/**
 * Testing database settings.
 */

return array(
  'default' => array(
    'type'            => 'mysqli',
    'connection'      => array(
      'hostname'      => '127.0.0.1',
      'port'          => '3306',
      'database'      => 'DB',
      'username'      => 'USER',
      'password'      => 'PASS',
      'persistent'    => false,//For testing maybe this can be put on true?
      'compress'      => true
    ),
    'identifier'   => '`',
    'table_prefix' => '',
    'charset'     => 'utf8',
    'enable_cache' => false,
    'profiling'   => false,
  ),
);

