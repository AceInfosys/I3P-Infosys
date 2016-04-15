<?php
	class Bookings_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
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
			return $query->result;
		}

		public function insert_new_booking($user_id, $booking_datetime, $booking_service) {
			$insert_data = array(
					'user_id' => $user_id,
					'booking_datetime' => $booking_datetime,
					'booking_service' => $booking_service,
					'created_at' => date('Y-m-d H:i:s') // PLUS ID_ENC!
				);
			$this->db->insert('bookings', $insert_data);
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