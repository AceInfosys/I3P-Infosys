<?php
	class Rate_and_reviews_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_rate_and_reviews() {
			$this->db->select('id, booking_id, rating, review');
			$query = $this->db->get('rate_and_reviews');
			return $query->result();
		}

		public function get_rate_and_review_by_booking_id($booking_id) {
			$query = $this->db->get_where('rate_and_reviews', array('booking_id' => $booking_id));
			return $query->result();
		}

		public function insert_new_rate_and_review($booking_id, $rating, $review) {
			$insert_data = array(
					'booking_id' => $booking_id,
					'rating' => $rating,
					'review' => $review
				);
			$this->db->insert('rate_and_reviews', $insert_data);
		}

		public function update_rate_and_review($booking_id, $new_rating, $new_review) {
			$insert_data = array(
					'rating' => $rating,
					'review' => $review
				);
			$this->db->where('booking_id', $booking_id);
			$this->db->update('rate_and_reviews', $insert_data);
		}
	}
?>