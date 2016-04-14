<?php
	class User_complaint extends CI_Controller {
		public function usercomplaint() {
			// echo 'Register Test';
			$this->load->view('template/header');
			$this->load->view('user_complaint');
			$this->load->view('template/footer');
		}

		public function submitcomplaint() {
			$this->load->model('complaints_model');
			$this->complaints_model->insert_new_complaints($this->input->get(),$this->input->post('complaint'));
		}
	}
?>