<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
    'firstname' => array(
      'default' => '',
      'validation' => array('required', 'max_length' => array(100), 'min_length' => array(2))    
    ),
    'lastname' => array(
      'default' => '',
      'validation' => array('required', 'max_length' => array(100), 'min_length' => array(2))    
    ),
    'gender' => array(
      'default' => 'm',
      'validation' => array('required')
    ),
    'date_of_birth' => array(
      'default' => null,
      'validation' => array('required')
    ),
    'email' => array(
      'default' => '',
      'validation' => array('required', 'valid_email')
    ),
    'tel' => array(
      'default' => '',
    ),
    'street' => array(
      'default' => '',
    ),
    'nbr' => array(
      'default' => '',
    ),
    'box' => array(
      'default' => '',
    ),
    'postalcode' => array(
      'default' => '',
    ),
    'city' => array(
      'default' => '',
    ),
    'country' => array(
      'default' => '',
    ),
    'language' => array(
      'default' => 'nl-BE',
      'validation' => array('required')
    ),
    'fb_id' => array(
      'default' => 0,
    ),
    'is_optin' => array(
      'default' => false,
    ),
    'is_active' => array(
      'default' => true,
    ),
    'password' => array(
      'default' => '',
    ),
    'reset_token' => array(
      'default' => '',
    ),
    'ip' => array(
      'default' => '0.0.0.0',
    ),
    'created_at',
    'updated_at',
  );

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
    'Orm\Observer_Self' => array('before_insert'), 
    'Orm\Observer_Self' => array('before_save'), 
  );

  public function _event_before_insert() {
  }

  public function _event_before_save() {
  }

  public function name() {
    return $this->firstname . ' ' . $this->lastname;
  }

  public function is_facebook() {
    return strlen($this->fb_id) > 1;
  }
}

