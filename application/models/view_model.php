<?php

class view_model extends CI_Model
{
	public function fetch_view_data($id)
	{
		$data = $this->db->query("select * from register where user_reg_id='$id' ");
		$sql = $data->row_array();
		return $sql;
	}
	/*public function fetch_class($class)
	{
		$class = $class['class'];
		$div = $div['div'];
		$sql = $this->db->query("select * from register where class='$class'");
		$result = $sql->row_array();
		return $result; 
	}*/
}

?>