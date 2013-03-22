<?php

class Controller_Admin_Default extends Controller_Admin_Base {
  public function before() {
    parent::before();

    if(Session::get('logged_in') != true && Request::main()->route->action !== 'login') { 
      Response::redirect('admin/login');
    }
  }

  public function action_index() {
    $data = array();

    $this->template->content = View::forge('admin/index', $data);
  }

	public function action_logout() {
    Session::delete('logged_in');

    Response::redirect('admin/login');
  }

	public function get_login($data = null) {
    if(!isset($data)) {
      $data = array('username' => '');
    }

    $data['errors'] = array();

		return Response::forge(View::forge('admin/login', $data));
	}

	public function post_login() {
		$data = array();

		$data['username'] = Input::post('username');
    $data['password'] = Input::post('password');

    Session::set('logged_in', false);

    if(Input::post('username') !== Config::get("admin.username") && Input::post('username') !== Config::get("admin.email")) {
      return $this->get_login($data);
    }

    if(Input::post('password') !== Config::get("admin.password")) {
      return $this->get_login($data);
    }

    Session::set('logged_in', true);

    Response::redirect('admin');
	}
}
