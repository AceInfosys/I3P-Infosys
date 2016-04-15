<?php
	class Customer extends CI_Controller {
		public function __construct() {
			parent::__construct();
			if ($this->session->userdata('logged_in')['id'] == '') {
				redirect('welcome');
			}
			$this->load->model('users_model');
			$this->load->model('customer_users_model');
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
			$this->load->view('template/header_customer_booking');
			$this->load->view('booking');
			$this->load->view('template/footer_customer_booking');
		}

		public function booking_receipt() {
			$user_info = $this->users_model->get_all_by_id($this->session->userdata('logged_in')['id']);
			// $this->session->set_flashdata('booking_details', $user_info['full_name']);
			// $this->session->keep_flashdata('booking_datetime');
			$data = array(
					'booking_datetime' => $this->session->flashdata('booking_datetime'),
					'booking_service' => $this->session->flashdata('booking_service'),
					'full_name' => $user_info[0]->full_name
				);
			$this->load->view('template/header_customer');
			$this->load->view('booking_receipt', $data);
			$this->load->view('template/footer_customer');
		}

		public function new_booking() {
			$this->form_validation->set_rules('booking_datetime', 'Tanggal dan Waktu Booking', 'required|xss_clean');
			$this->form_validation->set_rules('booking_service', 'Jenis Layanan', 'required|xss_clean');

			$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
			$this->bookings_model->insert_new_booking($this->session->userdata('logged_in')['id'], $clean['booking_datetime'], $clean['booking_service']);
			
			$this->session->set_flashdata('booking_datetime', $clean['booking_datetime']);
			$this->session->set_flashdata('booking_service', $clean['booking_service']);
			redirect('customer/booking_receipt');
		}

		public function complaint() {
			echo 'Customer Complaint Test';
		}

		public function ratereview() {
			echo 'Customer Rate and Review Test';
		}
	}
?>