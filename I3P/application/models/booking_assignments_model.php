<?php
	class Booking_assignments_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_booking_assignments() {
			$this->db->select('id, booking_id, customer_user_id, employee_user_id');
			$query = $this->db->get();
			return $query->result();
		}

		public function insert_new_booking_assignment($booking_id, $customer_user_id, $employee_user_id) {
			$insert_data = array(
					'booking_id' => $booking_id,
					'customer_user_id' => $customer_user_id,
					'employee_user_id' => $employee_user_id
				);
			$this->db->insert('booking_assignments', $insert_data);
		}

		public function update_booking_assignment($booking_id, $employee_user_id) {
			$insert_data = array(
					'employee_user_id' = $employee_user_id
				);
			$this->db->where('booking_id', $booking_id);
			$this->db->update('booking_assignments', $insert_data);
		}
	}
?>