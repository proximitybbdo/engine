<?php

class Controller_Admin_Base extends Controller_Template {
  public $template = 'admin/template';

  public function admin_only() {
    if(Session::get('logged_in') != true){
      Response::redirect('admin/login');
    }
  }
}

