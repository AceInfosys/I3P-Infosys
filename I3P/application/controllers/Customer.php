<?php
	class Customer extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('customer_user_model');
			$this->load->model('bookings_model');
		}

		public function index() {
			echo 'Customer Index Test';
		}

		public function profile() {
			// echo 'Customer Profile Test';
			// echo $this->session->userdata('logged_in')['id'];
			$this->load->view('template/header_customer');
			$this->load->view('booking');
			$this->load->view('template/footer_customer');
		}

		public function booking() {
			// echo 'Customer Booking Test';
			$this->load->view('template/header_customer');
			$this->load->view('booking');
			$this->load->view('template/footer_customer');
		}

		public function new_booking() {
			$this->
			// $this->bookings_model->insert_new_booking($this->session->userdata('logged_in')['id'], )
		}

		public function complaint() {
			echo 'Customer Complaint Test';
		}

		public function ratereview() {
			echo 'Customer Rate and Review Test';
		}
	}
?>