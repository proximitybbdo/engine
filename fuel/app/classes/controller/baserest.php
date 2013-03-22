<?php

class Controller_Baserest extends Controller_Rest {
  protected $format = 'json';

  protected $resp;
  protected $tkn;

  protected function return_response() {
    return $this->response($this->resp);
  }

  protected function create_response() {
    $this->resp = new StdClass();
    $this->resp->code = 200;
    $this->resp->desc = '';
    $this->resp->data = null;
  }

  protected function get_token() {
    $this->tkn = Input::json('tkn');

    return $this->tkn;
  }

  protected function require_tkn() {
    if($this->get_token() === null) {
      $this->resp->code = 500;
      $this->resp->desc = 'missing_token';

      throw new Exception('Stop');
    }
  }
}

