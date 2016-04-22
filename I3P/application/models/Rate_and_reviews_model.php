<?php
	class Rate_and_reviews_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_rate_and_reviews() {
			$this->db->select('id, rating, review');
			$query = $this->db->get('rate_and_reviews');
			return $query->result();
		}

		public function get_all_rate_and_reviews_by_user_id($user_id) {
			$query = $this->db->get_where('rate_and_reviews', array('user_id' => $user_id));
			return $query->result();
		}

		public function insert_new_rate_and_review($user_id, $rating, $review) {
			$insert_data = array(
					'user_id' => $user_id,
					'rating' => $rating,
					'review' => $review,
					'created_at' => date('Y-m-d H:i:s')
				);
			$this->db->insert('rate_and_reviews', $insert_data);
		}

		# Pending function: The users might modify the content abruptly.
		public function update_rate_and_review($user_id, $new_rating, $new_review) {
			$insert_data = array(
					'rating' => $rating,
					'review' => $review
				);
			$this->db->where('user_id', $user_id);
			$this->db->update('rate_and_reviews', $insert_data);
		}
	}
?>