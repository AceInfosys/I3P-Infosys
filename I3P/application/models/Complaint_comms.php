<?php
	class Complaint_comms extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_complaint_comms_by_complaint_id($complaint_id) {
			$query = $this->db->get_where('complaint_comms', array(
					'complaint_id' => $complaint_id
				))->order_by('created_at', 'asc');
			return $query->result();
		}

		public function insert_new_complaint_comm($complaint_id, $user_id, $message) {
			$insert_data = array(
					'complaint_id' => $complaint_id,
					'user_id' => $user_id,
					'message' => $message
				);
			$this->db->insert('complaint_comms', $insert_data);
		}
	}
?>