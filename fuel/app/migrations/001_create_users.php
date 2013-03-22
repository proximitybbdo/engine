<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'firstname' => array('constraint' => 120, 'type' => 'varchar'),
			'lastname' => array('constraint' => 120, 'type' => 'varchar'),
			'gender' => array('constraint' => 1, 'type' => 'varchar'),
			'date_of_birth' => array('type' => 'date', 'null' => true),
			'email' => array('constraint' => 120, 'type' => 'varchar'),
			'tel' => array('constraint' => 50, 'type' => 'varchar', 'null' => true),
			'street' => array('constraint' => 100, 'type' => 'varchar', 'null' => true),
			'nbr' => array('constraint' => 10, 'type' => 'varchar', 'null' => true),
			'box' => array('constraint' => 10, 'type' => 'varchar', 'null' => true),
			'postalcode' => array('constraint' => 12, 'type' => 'varchar', 'null' => true),
			'city' => array('constraint' => 100, 'type' => 'varchar', 'null' => true),
			'country' => array('constraint' => 100, 'type' => 'varchar', 'null' => true),
			'language' => array('constraint' => 5, 'type' => 'varchar'),
			'fb_id' => array('type' => 'double', 'constraint' => "16,0"),
			'is_optin' => array('type' => 'boolean'),
			'is_active' => array('type' => 'boolean'),
			'password' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'reset_token' => array('constraint' => 255, 'type' => 'varchar', 'null' => true),
			'ip' => array('constraint' => 30, 'type' => 'varchar'),
			'created_at' => array('type' => 'timestamp'),
			'updated_at' => array('type' => 'timestamp'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}

