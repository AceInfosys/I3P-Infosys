<?php
	class Customer_users_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_user_id($id) {
			$query = $this->db->get_where('customer_users', array('id' => $id));
			return $query->result();
		}

		public function insert_new_customer_user($user_id) {
			$insert_data = array(
					'user_id' => $user_id
				);
			$this->db->insert('customer_users', $insert_data);
		}
	}
?>