<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Vista extends AdminController
{

    public function index() {
      $this->load->model('Modelo_Vista');
		  $this->load->view("vista");
    }
}

?>