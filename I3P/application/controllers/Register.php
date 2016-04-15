<?php
	class Register extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('users_model');
			$this->load->model('customer_users_model');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		}

		public function index() {
			// echo 'Register Test';
			$this->load->view('template/header', array('title' => 'Register - I3P ZEN'));
			$this->load->view('register');
			$this->load->view('template/footer');
		}

		public function new_registration() {
			$this->form_validation->set_rules('full_name', 'Full Name', 'required|xss_clean');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
			$this->form_validation->set_rules('confirmation_password', 'Confirmation Password', 'required|matches[password]|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]|xss_clean');
			$this->form_validation->set_rules('tel_no', 'Nomor Telepon', 'trim|required|alpha_dash|xss_clean');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/header', array('title' => 'Register - I3P ZEN'));
				$this->load->view('register');
				$this->load->view('template/footer');
			}
			else {
				$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
				$this->users_model->insert_new_user($clean['username'], $clean['email'], $this->bcrypt->hash_password($clean['password']), $clean['full_name'], $clean['tel_no'], $clean['type']);
				echo '<script>alert("Registrasi berhasil."); window.location.href="'.base_url().'";</script>';
			}
		}
	}
?>