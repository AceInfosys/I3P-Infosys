<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}

	public function index()
	{
		$this->load->view('template/header', array('title' => 'I3P ZEN'));
		$this->load->view('welcome');
		$this->load->view('template/footer');
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
		$result = $this->users_model->login_check($clean['username'], $clean['password']);
		if ($result['status'] == 'OK') {
			echo 'Login successful';
		}
		else {
			$this->load->view('template/header', array('title' => 'I3P ZEN'));
			$this->load->view('welcome');
			$this->load->view('template/footer');
		}
	}
}
