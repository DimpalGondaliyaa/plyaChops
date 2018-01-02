<?php 

class user_model extends CI_Model
{
	public function fetchdata()
	{
		$data = $this->db->query("select * from register");
		$res = $data->result_array();
		return $res;
	}
	public function updatedata($id)
	{
		$data = $this->db->query("select * from register where id='$id'");
		$sql = $data->row_array();
		return $sql;
	}
	public function update_reg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("register",$data);
	}
	public function deletedata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("register");
	}
	public function addcatimg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("register",$data);
	}
}

?>