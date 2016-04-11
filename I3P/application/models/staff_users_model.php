<?php
	class Staff_users_model extends CI_Model {
		public function __construct {
			parent::__construct();
			$this->load->database();
		}

		public function get_details_by_id($id) {
			$query = $this->db->get_where('staff_users', array(
					'id' => $id
				));
			return $query->result();
		}

		public function insert_new_staff_user($user_id, $type) {
			$insert_data = array(
					'type' => $type
				);
			$this->db->insert('staff_users', $insert_data);
		}

		public function update_type($user_id, $new_type) {
			$insert_data = array(
					'type' => $new_type
				);
			$this->db->where('user_id', $user_id);
			$this->db->update('staff_users', $insert_data);
		}
	}
?>