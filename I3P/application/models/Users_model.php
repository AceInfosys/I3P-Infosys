<?php
	class Users_model extends CI_Model {
		function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function login_check($username, $password) {
			$this->db->select('id, username, type, password');
			$query = $this->db->get_where('users', array('username' => $username));
			$query_result = $query->result();

			if (isset($query_result[0])) {
				if ($this->bcrypt->check_password($password, $query_result[0]->password)) {
					$data = array(
							'id' => $query_result[0]->id,
							'type' => $query_result[0]->type,
							'status' => 'OK'
						);
				}
				else {
					$data = array(
							'status' => 'ERROR'
						);
				}
			}
			else {
				$data = array(
						'status' => 'ERROR'
					);
			}
			return $data;
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
					'type' => $type,
					'created_at' => date('Y-m-d H:i:s')
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