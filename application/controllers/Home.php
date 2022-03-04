<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index()
    {
        $this->template->load("templates/admin", "paginas/home");
    }

    public function formulario()
    {
        $this->template->load("templates/admin", "paginas/formulario");
    }

    public function tabela()
    {
        $this->template->load("templates/admin", "paginas/tabela");
    }
}