<?php
  
class Controller_Base extends Controller_Template
{
  public $template = 'template';
  public $data = array();

  public function before() {
    parent::before();

    $this->set_lang($this->param('lang'));
  }

  protected function set_lang($param_lang) {
    if(!$param_lang) {
      return;
    }

    if(!$this->lang_exists($param_lang)) {
      Response::redirect('nl-BE');
    }

    switch($param_lang) {
      case 'fr-BE':
        setlocale(LC_ALL, 'french,fr_FR');

        break;
    }

    Session::set('language', $param_lang);

    Config::set('language', Session::get('language'));
  }

  protected function lang_exists($lang) {
    return is_dir(APPPATH . '/lang/' . $lang);
  }

  protected function redirect_to_lang($lang = 'nl-BE') {
    $this->redirect_to_session_lang();

    Response::redirect($lang);
  }

  protected function redirect_to_session_lang() {
    if(Session::get('language') && $this->lang_exists(Session::get('language'))) {
      Response::redirect(Session::get('language'));
    }
  }
}
