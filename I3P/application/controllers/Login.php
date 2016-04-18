<?php
	class Login extends CI_Controller {
		public function index() {
			// echo 'Login Test';
			$this->load->view('template/header', array('title' => 'I3P ZEN'));
			$this->load->view('welcome');
			$this->load->view('template/footer');
		}
	}
?>