<?php
	class User extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('users_model');
		}

		public function login() {
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
			$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
			$result = $this->users_model->login_check($clean['username'], $clean['password']);
			if ($result['status'] == 'OK') {
				$session_data = array(
						'id' => $result['id'],
						'type' => $result['type'],
						'username' => $clean['username']
					);

				if ($result['type'] == 3) {
					$this->session->set_userdata('logged_in_staff', $session_data);
					redirect('staff/profile');
				}
				else {
					$this->session->set_userdata('logged_in_customer', $session_data);
					redirect('customer/profile');
				}

				// TO DO: Make user differences
				
			}
			else {
				$this->load->view('template/header', array('title' => 'I3P ZEN'));
				$this->load->view('welcome');
				$this->load->view('template/footer');
			}
		}

		public function logout() {
			$session_data = array(
					'username' => ''
				);
			$this->session->unset_userdata('logged_in', $session_data);
			$this->load->view('template/header', array('title' => 'I3P ZEN'));
			$this->load->view('welcome');
			$this->load->view('template/footer');
		}
	}
?>