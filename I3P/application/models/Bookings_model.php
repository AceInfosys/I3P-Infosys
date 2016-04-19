<?php
	class Bookings_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_bookings() {
			$query = $this->db->get('bookings');
			return $query->result();
		}

		public function get_booking_by_id($id) {
			$query = $this->db->get_where('bookings', array(
					'id' => $id
				));
			return $query->result();
		}

		public function get_bookings_by_user_id($user_id) {
			$query = $this->db->get_where('bookings', array(
					'user_id' => $user_id
				));
			return $query->result();
		}

		public function insert_new_booking($user_id, $booking_datetime, $booking_service) {
			$insert_data = array(
					'user_id' => $user_id,
					'booking_datetime' => $booking_datetime,
					'booking_service' => $booking_service,
					'created_at' => date('Y-m-d H:i:s'),
					'status' => 'NOT CONFIRMED' // PLUS ID_ENC!
				);
			$this->db->insert('bookings', $insert_data);
		}

		public function confirm_booking($booking_id) {
			$insert_data = array(
					'status' => 'CONFIRMED'
				);
			$this->db->where('id', $booking_id);
			$this->db->update('bookings', $insert_data);
		}

		public function cancel_booking($booking_id) {
			$insert_data = array(
					'status' => 'CANCELLED'
				);
			$this->db->where('id', $booking_id);
			$this->db->update('bookings', $insert_data);
		}

		// UPDATE BOOKING CURRENTLY DISABLED. Caution: customer users may abruptly change the booking.
		public function update_booking($id, $new_booking_datetime, $new_booking_service) {
			$insert_data = array(
					'booking_datetime' => $new_booking_datetime,
					'booking_service' => $new_booking_service
				);
			$this->db->where('id', $id);
			$this->db->update('bookings', $insert_data);
		}
	}
?>