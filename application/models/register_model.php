<?php 
class register_model extends CI_Model
{
	
	public function addreg($data)
	{
		$data = $this->db->insert("register",$data);
		$insid = $this->db->insert_id();
		return $insid;
	}
	public function addcatimg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("register",$data);
	}
	public function addteachreg($data)
	{
		$data = $this->db->insert("teacher_register",$data);
		
	}

	
	
}


?>