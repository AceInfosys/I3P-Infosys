<?php
	class Users_model extends CI_Model {
		function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_all_by_id($id) {
			$this->db->select('id, username, email, full_name, tel_no, type');
			$query = $this->db->get_where('users', array('id' => $id));
			return $query->result();
		}

		public function insert_new_user($username, $email, $password, $full_name, $tel_no, $type) {
			$insert_data = array(
					'username' => $username,
					'email' => $email,
					'password' => $password,
					'full_name' => $full_name,
					'tel_no' => $tel_no,
					'type' => $type
				);
			$this->db->insert('users', $insert_data);
		}

		public function update_tel_no($id, $new_tel_no) {
			$insert_data = array(
					'telno' => $new_tel_no
				);

			$this->db->where('id', $id);
			$this->db->update('users', $insert_data);
		}

		public function change_password($id, $new_password) {
			$insert_data = array(
					'password' => $new_password
				);

			$this->db->where('id', $id);
			$this->db->update('users', $insert_data);
		}
	}
?>