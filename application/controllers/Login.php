<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$this->load->view('paginas/login');
	}

	public function logar() {
		// Verificar Usuário
		redirect("home");
	}
}
