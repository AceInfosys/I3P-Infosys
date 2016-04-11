<?php
	class Employee_users_model extends CI_Model {
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function get_details_by_id($id) {
			$query = $this->db->get_where('employee_users', array(
					'id' => $id
				));
			return $query->result();
		}

		public function insert_new_employee_user($user_id, $fullname, $birth_date, $birth_place, $gender, $religion) {
			$insert_data = array(
					'user_id' => $user_id,
					'fullname' => $fullname,
					'birth_date' => $birth_date,
					'birth_place' => $birth_place,
					'gender' => $gender,
					'religion' => $religion
				);
			$this->db->insert('employee_users', $insert_data);
		}

		public function update_position($user_id, $new_position) {
			$insert_data = array(
					'position' => $new_position
				);
			$this->db->where('user_id', $user_id);
			$this->db->update('employee_users', $insert_data);
		}

		public function update_first_work_date($user_id, $new_first_work_date) {
			$insert_data = array(
					'first_work_date' => $new_first_work_date
				);
			$this->db->where('user_id', $user_id);
			$this->db->update('employee_users', $insert_data);
		}
	}
?>