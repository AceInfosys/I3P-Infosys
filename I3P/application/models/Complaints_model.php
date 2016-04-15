<?php
	class Complaints_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_complaint_by_id($id) {
			$query = $this->db->get_where('complaints', array(
					'id' => $id
				));
			return $query->result();
		}

		public function get_complaints_by_user_id($user_id) {
			$query = $this->db->get_where('complaints', array(
					'user_id' => $user_id
				));
			return $query->result();
		}

		public function insert_new_complaint($user_id, $message) {
			$insert_data = array(
					'user_id' => $user_id,
					'message' => $message,
					'status' => 'enquired',
					'created_at' => date('Y-m-d H:i:s')
				);
			$this->db->insert('complaints', $insert_data);
		}

		public function update_status($id, $status) {
			$insert_data = array(
					'status' => $status
				);
			$this->db->where('id', $id);
			$this->db->update('complaints', $insert_data);
		}
	}
?>