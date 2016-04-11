<?php
	class Rate_and_reviews_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function insert_new_rate_and_review($booking_id) {} // RATE AND REVIEW MUST HAVE EMPLOYEE ID, MUST FIX
	}
?>