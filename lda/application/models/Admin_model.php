<?php
class Admin_model extends CI_Model {
	public function __construct()

	{
		$this->load->database();
	}

	public function get_rgstrs($id = FALSE)
	{
		if ($id === FALSE) {
			$query = $this->db->get('lda_register');
			return $query->result_array();
		}

		$query = $this->db->get_where('lda_register', array('id' => $id));
		return $query->row_array();
	}

	public function get_msgs($id = FALSE)
	{
		if ($id === FALSE) {
			$query = $this->db->get('messages');
			return $query->result_array();
		}

		$query = $this->db->get_where('messages', array('id' => $id));
		return $query->row_array();
	}
}
