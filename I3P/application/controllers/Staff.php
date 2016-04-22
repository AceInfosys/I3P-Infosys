<?php
	class Staff extends CI_Controller {
		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('logged_in_staff') == '') {
				redirect('welcome');
			}
		}

		public function index() {
			echo 'Staff Index Test';
		}

		public function profile() {
			echo 'Staff Profile Test';
		}

		public function complaints() {
			echo 'Staff Complaints Test';
		}

		public function ratereviewinfo() {
			echo 'Staff Rate and Review Info Test';
		}
	}
?>