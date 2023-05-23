<?php
class Msg_model extends CI_Model
{

	function saverecords($data)
	{
		$this->db->insert('messages',$data);
		return true;
	}

}
