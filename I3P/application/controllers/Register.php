<?php
	class Register extends CI_Controller {
		public function index() {
			// echo 'Register Test';
			$this->load->view('template/header');
			$this->load->view('register');
			$this->load->view('template/footer');
		}
	}
?>