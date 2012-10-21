<?php
class Helpers_Helper {
	public static function _init() {
	}
	
	//GENERATE A KEY IN THIS FORMAT => A69CA6AF-7DBA-D47A-21D8-87641708FECE
	public static function gen_key() {
	  mt_srand((double)microtime()*10000);
	  $charid = strtoupper(md5(uniqid(rand(), true)));
	  $hyphen = chr(45);
	  $guid = substr($charid, 0, 8) . $hyphen
			.substr($charid, 8, 4) . $hyphen
			.substr($charid,12, 4) . $hyphen
			.substr($charid,16, 4) . $hyphen
			.substr($charid,20,12);
	  return $guid;
	}
	
	//SENDING EMAIL IN ONE FUNCTION @RETURNS : EMAIL CLASS
	public static function send_mail($from, $to, $subject, $body) {
		$email = Email::forge();
		$email->from($from['email'], $from['name']);
		$email->to($to);
		$email->subject($subject);
		$email->html_body($body);
		return $email;
	}
	
	//GENERATES A SHA512 HASH SALTED LIKE THIS => HASH ( SALT . PASS . SALT )
	public static function get_hash($password) {
		return hash('sha512', Config::get('password_salt') . $password . Config::get('password_salt'));
	}
}
?>
