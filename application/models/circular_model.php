<?php 
class circular_model extends CI_Model
{	
	public function addcir($data)
	{
		$id= $this->db->insert("circular",$data);
		$upid = $this->db->insert_id();
		return $upid; 
	}
	public function addcatimg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("circular",$data);
	}
	public function fetch_circular()
	{
		$data = $this->db->query("select * from circular");
		$ress = $data->result_array();
		return $ress;
	}
	public function updatedata($id)
	{
		$data = $this->db->query("select * from circular where id='$id'");
		$sql = $data->row_array();
		return $sql;
	}
	public function update_reg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("circular",$data);
	}
	public function uppcatimg($data,$id)
	{
		$this->db->where("id",$id);
		$this->db->update("circular",$data);
	}
	public function deletedata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('circular');
	}
	
} ?>